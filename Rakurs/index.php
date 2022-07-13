<!DOCTYPE html>
<html id="html">
<head>
	<title>Ракурс | рекламное агенство</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<link rel="stylesheet" type="text/css" href="styles/header.css" />
	<link rel="stylesheet" type="text/css" href="styles/main.css" />
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
	<!-- media -->
	<link rel="stylesheet" type="text/css" href="styles/media/mhead.css">
	<link rel="stylesheet" type="text/css" href="styles/media/mmain.css">
	<link rel="stylesheet" type="text/css" href="styles/media/mfoot.css">
	<!-- Fontawesome -->
	<script src="https://kit.fontawesome.com/8b77c9bfea.js"></script>
	<!-- JQuery -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<!-- Fancybox -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<!-- SweetAlert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<div class="message-container" id="myMessage">
		<div class="message">
			<div class="close">
				<i class="fas fa-times" onclick="closeAlert();"></i>
			</div>
			<form method="POST" id="myForm" name="Form">
				<p>Мы ответим на все ваши вопросы</p>
				<input type="text" name="name" placeholder="Имя..." required="" />
				<input type="text" name="email" placeholder="Email..." required="" />
				<textarea name="message" placeholder="Ваше сообщение..." required=""></textarea>
				<input type="submit" name="btnmes" value="Отправить" />
			</form>
		</div>
	</div>
	<header>
		<a href="index.php" class="logo">
			<img src="images/logo.png" />
		</a>
		<ul>
			<li><a href="#yakserv">Услуги</a></li>
			<li><a href="#yakexam">Примеры работ</a></li>
			<li><a href="#yakfoot">Контакты</a></li>
			<li onclick="alert();">Написать нам</li>
		</ul>
	</header>
	<div class="full-screen">
		<div class="content-screen">
			<div class="fir-row">Команда профессионалов "Ракурс"</div>
			<div class="sec-row">готова к сотрудничеству в любое время</div>
		</div>
		<video preload="auto" autoplay muted loop>
			<source src="vid/color.mp4" type="video/mp4">
		</video>
	</div>
	<main>
		<a name="yakserv"></a>
		<div class="services">
			<div class="head-cont">
				<p class="ser-head">Услуги</p>
				<hr />
			</div>
			<div class="service-container">
				<div class="myServ fade">
					<div class="serv-card">
						<img src="images/ser1.jpg" />
						<div class="ser-txt">
							<p class="head-txt-serv">
								Фотокружки
							</p>
							<p class="text">
								Подарок, которому найдётся место не только дома, но и на работе. Нежный, строгий, грубый, с юмором... - вместе подберём принт по характеру будущего владельца кружки
							</p>
							<a href="#yakfoot">
								Связаться с нами
							</a>
						</div>
					</div>
					<div class="serv-card">
						<img src="images/ser2.jpg" />
						<div class="ser-txt">
							<p class="head-txt-serv">
								Фото на текстиле
							</p>
							<p class="text">
								Практичный, но в то же время оригинальный подарок. Футболка с нанесением - замечательный отличительный атрибут какого-либо мероприятия
							</p>
							<a href="#yakfoot">
								Связаться с нами
							</a>
						</div>
					</div>
					<div class="serv-card">
						<img src="images/ser3.jpg" />
						<div class="ser-txt">
							<p class="head-txt-serv">
								Баннерная сетка
							</p>
							<p class="text">
								Отличное решение не только для размещения брандмауэров и баннеров в сильно продуваемых местах, но и для размещения рекламы на окнах
							</p>
							<a href="#yakfoot">
								Связаться с нами
							</a>
						</div>
					</div>
				</div>
				<div class="myServ fade">
					<div class="serv-card">
						<img src="images/ser4.jpg" />
						<div class="ser-txt">
							<p class="head-txt-serv">
								Фотохолсты
							</p>
							<p class="text">
								Услуга позволяет перенести любое цифровое изображение или фотографию на холст. Фото на холсте может стать прекрасным украшением интерьера или оригинальным подарком.
							</p>
							<a href="#yakfoot">
								Связаться с нами
							</a>
						</div>
					</div>
					<div class="serv-card">
						<img src="images/ser5.jpg" />
						<div class="ser-txt">
							<p class="head-txt-serv">
								Фотоподушки
							</p>
							<p class="text">
								Хотите придать оригинальность интерьеру или создать незабываемый подарок для друзей и родственников? Печать изображений на подушке доступна в нашем сервисе
							</p>
							<a href="#yakfoot">
								Связаться с нами
							</a>
						</div>
					</div>
					<div class="serv-card">
						<img src="images/ser6.jpg" />
						<div class="ser-txt">
							<p class="head-txt-serv">
								Блокноты
							</p>
							<p class="text">
								Напечатаем блокноты с вашим собственным дизайном! Используйте ваши любимые фотографии или картинки, чтобы создать уникальные сувениры себе и своим близким.
							</p>
							<a href="#yakfoot">
								Связаться с нами
							</a>
						</div>
					</div>
				</div>
				<a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
			</div>
		</div>
		<a name="yakexam"></a>
		<div class="examp-container">
			<div class="head-cont-examp">
				<p class="head-examp">Пример работ</p>
				<hr />	
			</div>
			<div class="examp-phot">
				<a data-fancybox="gallery" href="images/examp1.jpg">
					<div class="ph1"></div>
				</a>
				<a data-fancybox="gallery" href="images/examp2.jpg">
					<div class="ph2"></div>
				</a>
				<a data-fancybox="gallery" href="images/examp3.jpg">
					<div class="ph3"></div>
				</a>
				<a data-fancybox="gallery" href="images/examp4.jpg">
					<div class="ph4"></div>
				</a>
				<a data-fancybox="gallery" href="images/examp5.jpg">
					<div class="ph5"></div>
				</a>
				<a data-fancybox="gallery" href="images/examp6.jpg">
					<div class="ph6"></div>
				</a>
				<a data-fancybox="gallery" href="images/examp7.jpg">
					<div class="ph7"></div>
				</a>
				<a data-fancybox="gallery" href="images/examp8.jpg">
					<div class="ph8"></div>
				</a>
				<a data-fancybox="gallery" href="images/examp9.jpg">
					<div class="ph9"></div>
				</a>
				<a data-fancybox="gallery" href="images/examp10.jpg">
					<div class="ph10"></div>
				</a>
			</div>
		</div>
	</main>
	<footer>
		<div class="info">
			<p class="contact">Контакты</p>
			<p class="phone">+7 (923) 621-02-02</p>
			<p class="email">Email - rakurs42@bk.ru</p>
			<p class="addres">Новокузнецк, улица Александра Невского, 1</p>
			<div class="social">
				<a href="https://vk.com/rakurs_42" target="_blank"><i class="fab fa-vk"></i></a>
				<a href="https://www.instagram.com/rakurs_42/?utm_medium=copy_link" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="https://wa.me/79236210202" target="_blank"><i class="fab fa-whatsapp"></i></a>
			</div>
		</div>
		<div class="for-map">
			<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A112372d64a61c3f36f9c6f3bcbeb529dcaf185716468b2e0895f904fb1bcd764&amp;source=constructor" width="625" height="522" frameborder="0"></iframe>
		</div>
		<a name="yakfoot"></a>
	</footer>
</body>
<script type="text/javascript" src="js/slideserv.js"></script>
<script type="text/javascript" src="js/alert.js"></script>
<script type="text/javascript" src="js/sendform.js"></script>
<script type="text/javascript" src="js/lib/Jlibs.js"></script>
</html>