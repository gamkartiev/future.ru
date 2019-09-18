<!DOCTYPE html>
<html>
<head>
	<title>Future</title>
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap" rel="stylesheet">
</head>
<body>



<header>
	<div class="head">
		<p class="info_text"> Телефон: (499) 340-94-71 </p>
		<p class="info_text"> Email: <span class="underscore">info@future-group.ru </span></p>
		<h1>Комментарии</h1>
	</div>
	<div class="logo"> <img src="/images/logo.jpg"></div>
</header>

<main>
	<div class="view_comment">
		<?php foreach ($all_comment as $a): ?>

		<div class="title"> <!-- comment_title -->
		  <p class="name"> <?=$a['name']?> </p>
		  <p class="time"> <?=date("H:i", $a['comment_time'])?> </p>
		  <p class="data"> <?=date("d.m.Y", $a['comment_time'])?> </p>
		</div>
		<div class="comment"> <?=$a['comment']?> </div>
		<?php endforeach ?>

	</div>
	<hr>
	<h2>Оставить комментарий</h2>
	<form method="post" action="index.php?action">
		<p> Ваше имя </p>
		<input type="text" name="name" class="form_name" required>

		<p> Ваш комментарий </p>
		<textarea name="comment" class="form_comment"></textarea>
		<div class="text-center">
			<button name="enter" class="submit-button">Отправить</button>	
		</div>
	</form>

</main>

<footer>
	<div class="logo_bottom"> <img src="/images/logo.jpg"></div>
	<div class="footer_info">
		<p class="info_text"> Телефон: (499) 340-94-71 </p>
		<p class="info_text"> Email: <span class="underscore">info@future-group.ru </span></p>
		<p class="info_text"> Адрес: <span class="underscore">115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1 </span></p>
		<p class="info_law"> © 2010 - 2014 Future. Все права защищены</p>
	</div>
</footer> 


    <script> document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>  <!--код для расширения livereload - автоматического обновления страницы сайта после сохранения кода --> 
</body>
</html>