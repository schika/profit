<!doctype html>
<html lang=ru>
<head>
    <meta charset=utf-8>
 <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">



	<title>Предваритальный заказ на получение Бесплатного заказа текста</title>
    <meta name=description content="" >
    <meta name="keywords" content="" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/custom-theme/jquery-ui-1.9.2.custom.min.css"/>
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.js"></script>
    <script>
        $(window).ready(function() {
            if (Math.random() * 100 < 10) {
                $("#last").dialog({position: {my: "center", at: "right bottom", of: window, collision: "fit"}});
            } else {
                $("#last").innerHTML = '';
            }
        });
    </script>
    <script>
    (function($) {
        $.fn.autoClear = function () {
            // сохраняем во внутреннюю переменную текущее значение
            $(this).each(function() {
                $(this).data("autoclear", $(this).attr("value"));
            });
            $(this)
                .bind('focus', function() {   // обработка фокуса
                    if ($(this).attr("value") == $(this).data("autoclear")) {
                        $(this).attr("value", "").addClass('autoclear-normalcolor');
                    }
                })
                .bind('blur', function() {    // обработка потери фокуса
                    if ($(this).attr("value") == "") {
                        $(this).attr("value", $(this).data("autoclear")).removeClass('autoclear-normalcolor');
                    }
                });
            return $(this);
        }
    })(jQuery)
     
    $(function(){
         $('.autoclear').autoClear();
    });
    </script>
    <!--[if lt IE 9]> 
     	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
        <link href="css/ie6.css" rel="stylesheet" type="text/css" />
    <![endif]-->
</head>
<body class="bgBody2">
<div id="last" style="display: none;">Последний заказ забронирован 1 минуту назад.</div>


<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-42936553-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 

ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter21977746 = new Ya.Metrika({id:21977746,
					webvisor:true,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					trackHash:true});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/21977746" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php include_once("counter.php"); ?>

<form action="http://profitcontent.biz/subscribe.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate="">

    <div class="container">
	
	 <img src="images/headline3-11.png">
      
<!--
	  <h1>Тексты от доступных до профессиональных</h1>
        <h3>Скоро открытие новой Биржи по написанию текстов</h3>
		
		-->
        <div class="whiteBlog1">
            1-ый Бесплатный заказ Получишь Только Ты и еще 199 человек
            <h2>Запишись в список получения <span>бесплатного</span> заказа</h2>
          

		  <span class="red5">Бесплатных заказов осталось: <span><?= $num; ?></span></span>
            <div class="formPos1">
				<input type="text" value="Ваше имя" name="FNAME" class="formType1 autoclear" id="mce-FNAME">
            </div>
            <div class="formPos1">
				<input type="text" value="Телефон" name="MMERGE2" class="formType1 autoclear" id="mce-MMERGE2">
            </div>
			
			
            <div class="formPos1">
				<input type="email" value="E-mail" name="EMAIL" class="required email formType1 autoclear" id="mce-EMAIL" required>
            </div>
            <div class="end"></div>
			<input type="submit" value="Запишись!" name="subscribe" id="mc-embedded-subscribe" class="buttonType1">
            <h5 class="h5Style1">Вы получите $4 за 1000 знаков текста</h5>
            <h5 class="h5Style2">*если вам не понравится ваш 1-ый бесплатный текст для сайта</h5>
			 <h5 class="h5Style2">**бесплатный заказ получишь при открытии биржи по написанию текстов</h5>
			
        </div>
        <h4 class="color1">3 Причины почему Вам нужно записаться?</h4>
        <div class="whiteBlog2 border1">
            <div class="top">
                <img src="img/img.png" width="46" height="44" alt="">
            </div>
            <p>Количество Бесплатных заказов ограничено 200 счастливчиками</p>
        </div>
        <div class="whiteBlog2 border1">
            <div class="top">
                <img src="img/img1.png" width="46" height="44" alt="">
            </div>
            <p>Получить бесплатный заказ можно только до открытия биржи</p>
        </div>
        <div class="whiteBlog2 red2 border1">
            <div class="top">
                <img src="img/img2.png" width="53" height="44" alt="">
            </div>
            <p>Список скоро закроется раз и навсегда</p>
        </div>
        <div class="end"></div>
		<br><br>
		 <img src="images/headline4-1.png">
     <!--        <h4 class="color1">Зачем мы даем Бесплатный заказ на сервисе?</h4> -->
	 
        <div class="whiteBlog2 border1">
            <div class="top">
                <img src="img/img3.png" width="46" height="44" alt="">
            </div>
            <p>Мы получим обратную cвязь от вас</p>
        </div>
        <div class="whiteBlog2 border1">
            <div class="top">
                <img src="img/img4.png" width="46" height="44" alt="">
            </div>
            <p>Мы верим, что вы расскажете хотя бы 2 друзьям о нас. И на этом мы заработаем</p>
        </div>
        <div class="whiteBlog2 red2 border1">
            <div class="top">
                <img src="img/img5.png" width="46" height="44" alt="">
            </div>
            <p>Мы верим, что потом вы сделаете еще заказы, по доступным ценам для вас.</p>
        </div>
        <div class="end"></div>
        <h4 class="red3">Записавшись сейчас ВЫ:</h4>
        <p class="pStyle1">Получите Кейс 1.<br>Как мы получили 201 222 целевых клиента-пользователяна сайт потратив $150</p>
        <div class="end"></div>
        <a href="#" class="buttonType2" title="Я же умный, поэтому я запишусь на бесплатный тест сервиса">Я же умный, поэтому я запишусь на Бесплатный тест сервиса. Жми!</a>
        <footer>
				 <p class="pStyle2"> <b>P.s 96.7% </b> гарантия того, что Закрыв эту страницу = потеряешь бесплатный заказ НАВСЕГДА. </p>
      <p class="pStyle2"><b>P.s.s </b>НЕ думай о бесплатном заказе который уже твой. Закрой эту страницу ты его потеряешь</p>   
 <p class="pStyle2">Просто Напишите свою почту и получите бесплатный заказ.</p>	  

	
		   <ul><br> <br> 
             <li><a href="politic1.htm">Политика конфиденциальности</a></li>  <li><a href="politic2.htm">Отказ от ответственности</a></li>  <li><a href="politic3.htm">Согласие с рассылкой</a></li>
            </ul>
        </footer>
    </div>

	</form>

	
	  
	  <!--      <img src="images/headline3-1.png">
 <p class="pStyle2"><b>P.s.s.s </b>Закрой страницу и <b>откажись навсегда от бесплатного заказа</b></p>    	  
-->
	
	
	
	
	<!-- Код тега ремаркетинга Google -->
<!--------------------------------------------------
С помощью тега ремаркетинга запрещается собирать информацию, по которой можно идентифицировать личность пользователя. Также запрещается размещать тег на страницах с контентом деликатного характера. Подробнее об этих требованиях и о настройке тега читайте на странице http://google.com/ads/remarketingsetup.
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 983817261;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/983817261/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
	
	
	
	
	
	
</body>
</html>