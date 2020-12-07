<?php 
	require_once('assembling.php');

	session_start();
	if(empty($_SESSION)){
		header('Location: login.php');
	}

	$con = mysqli_connect('localhost', 'root', '2k91abin1420pirzy', 'autobuy');
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	mysqli_set_charset($con, 'utf8');

	if (!$con) {
		print('Error'.mysqli_connect_error());
	} else {
		$sql_get_all_photos_id = 'SELECT application_id FROM car_photos';
		$result_all_photos_id = mysqli_fetch_all(mysqli_query($con, $sql_get_all_photos_id));
		$sql_get_all_data = 'SELECT * from application';
		$result_all_data = mysqli_fetch_all(mysqli_query($con, $sql_get_all_data));
		$sql_get_all_photos = 'SELECT * from car_photos';
		$result_all_photos = mysqli_fetch_all(mysqli_query($con, $sql_get_all_photos));
		foreach ($result_all_data as $key => $data) {
			$result_all_data[$key]['image_count'] = 0;
			foreach ($result_all_photos_id as $photos_id_list) {
				if ($result_all_data[$key][0] === $photos_id_list[0]) {
					$result_all_data[$key]['image_count']++;
				}
			}
		}

		if(!empty($_GET)){

			$sql_delete_selected_photos = 'DELETE FROM car_photos WHERE application_id = "'.(int)$_GET['id'].'"';
			$result_delete_selected_photos = mysqli_query($con, $sql_delete_selected_photos);

			$sql_delete_selected_note = 'DELETE FROM application WHERE id = "'.(int)$_GET['id'].'"';
			$result_delete_selected_note = mysqli_query($con, $sql_delete_selected_note);
		}
	}

	$page_content = include_template('applications.php', [
		'data' => $result_all_data,
		'images' => $result_all_photos
	]);
	print($page_content);
