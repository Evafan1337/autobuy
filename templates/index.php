<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap&subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/mobile-style.css">
	<title>Автовыкуп</title>
</head>
<body>
	<header>
		<div class="header-static-wrapper">
			<div class="nav-static-inner">
				<div class="nav-static-preview">
					<a class="main-logo-link" href="">
						<img src="images/car-logo.svg" alt="" width="85" height="85">
					</a>
					<a class="nav-static-other-info__phone-number" href="">8-960-241-16-25</a>
				</div>
				
				<div class="nav-static-other-info">
					<a class="nav-static-other-info__elem" href="">
						<img class="nav-static-other-info__img" src="images/svgWhatsApp.svg" alt="" width="60" height="60">
					</a>
					
					<a class="nav-static-other-info__elem" href="">
						<img class="nav-static-other-info__img" src="images/svgViber.svg" alt=""width="60" height="60">
					</a>
				</div>
			</div>
		</div>
	</header>

	<main>

		<article class="main-preview-wrapper main-preview-wrapper--carbuy">
			<div class="container main-preview-inner">
				<h2 class="main-preview-wrapper__header main-preview-inner__header--carbuy" >Выкуп авто в Санкт-Петербурге</h2>
				<article class="slider-wrapper">
					<div class="slider-container">
						<div class="controls-arrow">
							<span id="leftClick" class="left-click"></span>
							<span id="rightClick" class="right-click"></span>
						</div>
						
						<div class="slider-elem slider-elem--phone-call fade-animation active-slide">
							<span class="slider-elem__search-img slider-elem__phone-call-img"></span>
							<p class="slider-text">1.Предварительная оценка по звонку или заявке</p>
						</div>

						<div class="slider-elem hidden fade-animation">
							<span class="slider-elem__search-img slider-elem__search-img"></span>
							<p class="slider-text">2.Обьективная оценка вашего автомобиля нашим специалистом</p>
						</div>

						<div class="slider-elem slider-elem--documents hidden fade-animation">
							<span class="slider-elem__search-img slider-elem__documents-img"></span>
							<p class="slider-text">3.Быстрое снятие с учета в ГИБДД купленного у Вас автомобиля</p>
						</div>
												
						<div class="slider-elem slider-elem--contract hidden fade-animation">
							<span class="slider-elem__search-img slider-elem__contract-img"></span>
							<p class="slider-text">4.Обязательное оформление договора купли продажи</p>
						</div>

						<div class="controls">
							<span class="controls__elem controls__elem--active"></span>
							<span class="controls__elem"></span>
							<span class="controls__elem"></span>
							<span class="controls__elem"></span>
						</div>
					</div>
				</article>
				<!-- <div class="slider-wrapper container">
					<input class="slider__input" checked type="radio" name="respond" id="desktop"> -->
					<!-- <article id="slider">
						<input class="slider__input" checked type="radio" name="slider" id="switch1">
						<input class="slider__input" type="radio" name="slider" id="switch2">
						<input class="slider__input" type="radio" name="slider" id="switch3">
						<input class="slider__input" type="radio" name="slider" id="switch4">
						<div id="slides">
							<div id="overflow">
								<div class="image manual-animation">
									<article class="image-content">
										<div class="slider-elem slider-elem--phone-call">
											<p class="slider-text">1.Предварительная оценка по звонку или заявке</p>
										</div>
									</article>

									<article class="image-content">
										<div class="slider-elem">
											<p class="slider-text">2.Обьективная оценка вашего автомобиля нашим специалистом</p>
										</div>
									</article>

									<article class="image-content">
										<div class="slider-elem slider-elem--documents">
											<p class="slider-text">3.Быстрое снятие с учета в ГИБДД купленного у Вас автомобиля</p>
										</div>
									</article>
									
									<article class="image-content">
										<div class="slider-elem slider-elem--contract">
											<p class="slider-text">4.Обязательное оформление договора купли продажи</p>
										</div>
									</article>
								</div>
							</div>
						</div>
						<div id="controls" class="animation-controller">
							<label class="controls__elem-1" for="switch1"></label>
							<label class="controls__elem-1" for="switch2"></label>
							<label class="controls__elem-1" for="switch3"></label>
							<label class="controls__elem-1" for="switch4"></label>
						</div>
						<div id="active" class="labels-inner animation-controller">
							<label class="labels-inner__elem" for="switch1"></label>
							<label class="labels-inner__elem" for="switch2"></label>
							<label class="labels-inner__elem" for="switch3"></label>
							<label class="labels-inner__elem" for="switch4"></label>
						</div>
					</article> -->
				<!-- </div> -->
			</div>
		</article>

		<section class="main-offers-wrapper">
			<div class="applicant-form container">
					<p class="applicant-form__text">
						Безопасно выкупаем автомобили в Санкт-Петербурге с пробегом за 1 час, по максимальным ценам! Работаем по новой системе регистрации, оформление договора купли-продажи на месте. Снятие с учета в течение 10 дней.
					</p>
					<form class="applicant-form__form" action="form.php" method="post" enctype="multipart/form-data">
						<span class="modal__text <?= ($_GET['check_data'] === 1) ? 'inline-succes' : ''?>"> Данные успешно добавлены!</span>
						<span class="modal__text <?= ($_GET['check_data'] === 0) ? 'inline-succes' : ''?>"> Произошла ошибка при обработке. Проверьте данные.</span>
						<label class="applicant-form-inner">
							<span class="applicant-form__label">Марка / Модель</span>
							<input class="applicant-form__input-field" type="text" name="car_name">
						</label>

						<label class="applicant-form-inner">
							<span class="applicant-form__label">Год выпуска</span>
							<input class="applicant-form__input-field"  type="text" name="year_of_make">
						</label>

						<label class="applicant-form-inner">
							<span class="applicant-form__label">Вид коробки передач</span>
							<select class="applicant-form__input-field applicant-form__input-field--select"  name="gearbox">
								<option value="automatic">АКПП</option>
								<option value="manual">МКПП</option>
							</select>
						</label>

						<label class="applicant-form-inner">
							<span class="applicant-form__label">Желаемая цена</span>
							<input class="applicant-form__input-field"  type="text" name="suggested_price">
						</label>

						<label class="applicant-form-inner">
							<span class="applicant-form__label">Телефон</span>
							<input class="applicant-form__input-field"  type="text" name="phone_number">
						</label>

						<label class="applicant-form-inner">
							<span class="applicant-form__label">Описание</span>
							<textarea class="applicant-form__input-field"  name="description" cols="30" rows="5"></textarea>
						</label>

						<input type="file" name="car_photos[]" id="file" class="inputfile hidden" data-multiple-caption="{count} файла выбрано" multiple />
						<label for="file" class="applicant-form-inner applicant-form-inner--upload-files">
							<span id="inputFilePointer" class="applicant-form__label applicant-form__label--upload-files">Подгрузить фото автомобиля</span>
						</label>

						<label class="applicant-form-inner applicant-form-inner--submit">
							<span class="applicant-form__submit">Оценить авто</span>
							<input class="hidden" type="submit">
						</label>
					</form>
				</div>
		</section>

		<!-- <section class="faq">
			<ul id=listContainer class="faq-list container">
				<li class="faq-list__question">
					<h3 class="faq-list__header">Question1</h3>
					<input id="inputPointer_1" class="faq-list__input hidden" type="checkbox">
					<label for = "inputPointer_1">
						<span class="faq-list__activation"></span>
					</label>
					<p class="faq-list__text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur nihil mollitia ex praesentium soluta omnis iusto illum dicta repellat culpa non quo, animi, molestias nostrum consequuntur enim dolor velit autem?
					</p>
				</li>
				
				<li class="faq-list__question">
					<h3 class="faq-list__header">Question2</h3>
					<input id="inputPointer_2" class="faq-list__input hidden" type="checkbox">
					<label for = "inputPointer_2">
						<span class="faq-list__activation"></span>
					</label>
					<p class="faq-list__text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur nihil mollitia ex praesentium soluta omnis iusto illum dicta repellat culpa non quo, animi, molestias nostrum consequuntur enim dolor velit autem?
					</p>
				</li>
				
				<li class="faq-list__question">
					<h3 class="faq-list__header">Question3</h3>
					<input id="inputPointer_3" class="faq-list__input hidden" type="checkbox">
					<label for = "inputPointer_3">
						<span class="faq-list__activation"></span>
					</label>
					<p class="faq-list__text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur nihil mollitia ex praesentium soluta omnis iusto illum dicta repellat culpa non quo, animi, molestias nostrum consequuntur enim dolor velit autem?
					</p>
				</li>

				<li class="faq-list__question">
					<h3 class="faq-list__header">Question4</h3>
					<input id="inputPointer_4" class="faq-list__input hidden" type="checkbox">
					<label for = "inputPointer_4">
						<span class="faq-list__activation"></span>
					</label>
					<p class="faq-list__text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur nihil mollitia ex praesentium soluta omnis iusto illum dicta repellat culpa non quo, animi, molestias nostrum consequuntur enim dolor velit autem?
					</p>
				</li>

				<li class="faq-list__question">
					<h3 class="faq-list__header">Question5</h3>
					<input id="inputPointer_5" class="faq-list__input hidden" type="checkbox">
					<label for = "inputPointer_5">
						<span class="faq-list__activation"></span>
					</label>
					<p class="faq-list__text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur nihil mollitia ex praesentium soluta omnis iusto illum dicta repellat culpa non quo, animi, molestias nostrum consequuntur enim dolor velit autem?
					</p>
				</li>

				<li class="faq-list__question">
					<h3 class="faq-list__header">Question6</h3>
					<input id="inputPointer_6" class="faq-list__input hidden" type="checkbox">
					<label for = "inputPointer_6">
						<span class="faq-list__activation"></span>
					</label>
					<p class="faq-list__text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur nihil mollitia ex praesentium soluta omnis iusto illum dicta repellat culpa non quo, animi, molestias nostrum consequuntur enim dolor velit autem?
					</p>
				</li>
			</ul>
		</section> -->
	</main>

	<footer class="footer-wrapper">
		<section class="footer-inner">
			<div class="nav-static-inner">
				<!-- <a class="main-logo-link" href="">
					<img src="images/car-logo.svg" alt="" width="85" height="85">
				</a> -->
				<div class="nav-static-other-info nav-static-other-info--footer-modify">
					<span class="nav-static-other-info__location nav-static-other-info__location--footer-modify">Исаакиевская пл., 4, Санкт-Петербург, 190000</span>
					<a class="nav-static-other-info__phone-number" href="">8-960-241-16-25</a>
					<a class="nav-static-other-info__elem" href="">
						<img class="nav-static-other-info__img" src="images/svgWhatsApp.svg" alt="" width="60" height="60">
					</a>
					
					<a class="nav-static-other-info__elem" href="">
						<img class="nav-static-other-info__img" src="images/svgViber.svg" alt=""width="60" height="60">
					</a>
				</div>
			</div>
			
		</section>
	</footer>
	<script src="js/slider.js"></script>
</body>
</html>