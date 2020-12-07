<?php
	require_once('assembling.php');
	require_once('vendor/autoload.php');
	$con = mysqli_connect('localhost', 'root', '2k91abin1420pirzy', 'autobuy');
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	mysqli_set_charset($con, 'utf8');
	$car_photos[0]['name']='1';
	$car_photos[0]['tmp_name']='1';
	$i = 0;
	foreach ($_FILES as $_FILES) {
		$car_photos[$i]['name'] = $_FILES['name'];
		$car_photos[$i]['tmp_name'] = $_FILES['tmp_name'];
		$i++;
	}
	
	$tmp_name_count = count($car_photos[0]['tmp_name']);

	for ($i = 0; $i<$tmp_name_count; $i++) {
		$car_photos[0]['imgtemp'][$i]=file_get_contents($car_photos[0]['tmp_name'][$i]);
	}
	if (!$con) {
		print('Error'.mysqli_connect_error());
		$_GET['check_data'] = 0;
	}
	elseif (!empty($_POST)){
		$sql_add_data = 'INSERT INTO application(car_name, year_of_make, gearbox, suggested_price, phone_number, description) VALUES(?,?,?,?,?,?)';
			$stmt_add_data = db_get_prepare_stmt($con, $sql_add_data, [
				'car_name' => $_POST['car_name'],
				'year_of_make' => $_POST['year_of_make'],
				'gearbox' => $_POST['gearbox'],
				'suggested_price' => $_POST['suggested_price'],
				'phone_number' => $_POST['phone_number'],
				'description' => $_POST['description']
			]);
		$res_add_data = mysqli_stmt_execute($stmt_add_data);

		$text = 'Поступила новая заявка:'.$_POST['car_name'].'.Год выпуска:'.$_POST['year_of_make'].'.КПП:'.$_POST['gearbox'].'.Предлагаемая цена:'.$_POST['suggested_price'].'.';
		$transport = new Swift_SmtpTransport('smtp.hostinger.ru', 587);
		$transport->setUsername('notify@carbuyonline.ru');
		$transport->setPassword('321135a9102');
		$mailer = new Swift_Mailer($transport);
        $message = new Swift_Message();
        $message->setSubject('Уведомление о новой заявке');
        $message->setFrom(["notify@carbuyonline.ru" => "Автовыкуп"]);
        $message->addTo('autobuy-notify-service@rambler.ru', 'recipient name');
        $message->setBody($text);
        $result = $mailer->send($message);

		if(!empty($_FILES)){
			for ($i = 0; $i<$tmp_name_count; $i++) {
				$imgtemp = $car_photos[0]['imgtemp'][$i];
				$imgname = mysqli_real_escape_string($con, $car_photos[0]['name'][$i]);
				$sql_car_photo_id = 'SELECT MAX(id) FROM application';
				$res_car_photo_id = mysqli_query($con, $sql_car_photo_id);
				$result_car_photo_id = mysqli_fetch_all($res_car_photo_id, MYSQLI_ASSOC);
				$car_id = $result_car_photo_id[0]['MAX(id)'];
				$sql_add_image = 'INSERT INTO car_photos (car_image, image_name, application_id) VALUES(?,?,?);';
				$stmt_add_image = db_get_prepare_stmt($con, $sql_add_image, [
					'car_image' => $imgtemp,
					'image_name' => $imgname,
					'application_id' => $car_id
				]);
				$res_add_image = mysqli_stmt_execute($stmt_add_image);
			}
		}
		$_GET['check_data'] = 1;
	}
	$_FILES = '';
	$_POST = '';
	$page_content = include_template('index.php');
	print($page_content);
