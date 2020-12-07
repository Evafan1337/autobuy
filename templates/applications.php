<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/applications_style.css">
	<title>Текущие заявки на автовыкуп</title>
</head>
<body>
	<?php 
	// var_dump($data);
	var_dump($_GET);
	?>
	<?php
		foreach ($data as $key => $data):
	?>
	<section class="application-wrapper">
		<div class="application-text">
			<div class="application-text__elem application-text__elem--left-border">
				<h2>Номер заявки</h2>
				<span><?= $data[0] ?></span>
			</div>

			<div class="application-text__elem">
				<h2>Марка/Модель</h2>
				<span><?= $data[1] ?></span>
			</div>

			<div class="application-text__elem">
				<h2>Год выпуска</h2>
				<span><?= $data[2] ?></span>
			</div>

			<div class="application-text__elem">
				<h2>Вид коробки передач</h2>
				<span><?= $data[3] ?></span>
			</div>

			<div class="application-text__elem">
				<h2>Желаемая цена</h2>
				<span><?= $data[4] ?></span>
			</div>

			<div class="application-text__elem">
				<h2>Телефон</h2>
				<span><?= $data[5] ?></span>
			</div>

			<div class="application-text__elem application-text__elem--description-modifier application-text__elem--right-border">
				<h2>Описание</h2>
				<span><?= $data[6] ?></span>
			</div>
			<button class="application-text__showing-photo">Показать/Скрыть фотографии</button>
			<a class="application-delete-link" href="applications.php?id=<?=$data[0]; ?>">Удалить текущую заявку</a>
		</div>
		<div class="application-photo hidden">
			<?php 
				foreach ($images as $image) :
					if($data[0] === $image[0]):
						echo '<img src="data:image/jpeg;base64,'.base64_encode($image[1]).'">';
						echo '</br>';
			?>
			<?php 
				endif;
				endforeach;
			 ?>
		</div>
	</section>

	<?php 
		endforeach;
	 ?>

	
	<script src="js/application-click.js"></script>
</body>
</html>