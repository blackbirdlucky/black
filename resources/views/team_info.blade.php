@extends('layouts.header')
@extends('layouts.footer')
@extends('layouts.auth')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BLACKBETS - Ставки на киберспорт</title>

    <!-- Css Files -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/themetypo.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/widget.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/jquery.bxslider.css" rel="stylesheet">
	<link href="css/prettyphoto.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

     <!--// Wrapper //-->
    <div class="kode-wrapper">

	   @section('mainbanner')

	   <!--// Sub Header //-->
      <div class="kode-subheader subheader-height">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1>О НАС</h1>
            </div>
          </div>
        </div>
      </div>
      <!--// SubHeader //-->

      <!--// Main Content //-->

        <!--// Page Content //-->
        <section class="kode-pagesection kode-team-info-bg padding-top-40 padding-bottom-30">
          <div class="container">
            <div class="row">

                <div class="col-md-12">

				  <div class="heading heading-12 kode-white margin-top30-bottom-80">
					<p>О нас</p>
					<h2><span class="left"></span>История создания<span class="right"></span></h2>
				</div>
                  <div class="kode-team-timeline">
                    <span class="timeline-circle"></span>
                    <ul>
                      <li>
                        <span class="kode-timezoon">2018</span>
                        <div class="timeline-inner">
                          <h2>Идея</h2>
                          <p>Киберспорт есть, а сайтов по нему нету, хм...</p>
                        </div>
                      </li>
                      <li>
                        <div class="timeline-inner">
                          <h2>Альтернатива</h2>
                          <p>На крайняк в шаурмичную без образования берут. </p>
                        </div>
                      </li>
                      <li>
                        <span class="kode-timezoon">2019</span>
                        <div class="timeline-inner">
                          <h2>Разработка</h2>
                          <p>Без всяких знаний об веб-разработке, начал заниматься самообучением.</p>
                        </div>
                      </li>
                      <li>
                        <div class="timeline-inner">
                          <h2>Обучение</h2>
                          <p>После неудачи я решил, что меня должны обучать специалисты, подал заявку в ИАТ</p>
                        </div>
                      </li>
                      <li>
                        <span class="kode-timezoon">2020</span>
                        <div class="timeline-inner">
                          <h2>Публикация</h2>
                          <p>После первого года обучение мои знания стали переполнять мой маленький мозг и дела пошли в гору.</p>
                        </div>
                      </li>
                      <li>
                        <div class="timeline-inner">
                          <h2>Пиар</h2>
                          <p>Сайт есть, но нет клиентской базы...попрошу у друзей взаимопиар!</p>
                        </div>
                      </li>
                    </ul>
                    <span class="timeline-circle bottom-circle"></span>
                  </div>
                </div>

              </div>
            </div>
        </section>
				<!--TESTIMONIAL STYLE 1 END-->
                </div>
			   </div>
            </div>
        </section>


		<!--// Page Content //-->
        <div class="kode-pagesection padding-top-bottom">
          <div class="container">
            <div class="row">

                <div class="col-md-12">
				  	<div class="heading heading-12 margin-bottom-50">
						<h2>Наши спонсоры</h2>
						<p>Ты тоже можешь стать нашим партнером!</p>
			   </div>
            </div>
        </div>
		</div>
		</div>

		<!--// Page Content //-->
        <div class="kode-pagesection padding-top-bottom">
          <div class="container">
            <div class="row">

                <div class="col-md-12">
                  <div class="kode-partner">
                    <ul class="row">
                      <li class="col-md-3"><a href="#"><img src="extra-images/partner-logo2.png" alt=""></a></li>
                      <li class="col-md-3"><a href="#"><img src="extra-images/partner-logo3.jpg" alt=""></a></li>
                      <li class="col-md-3"><a href="#"><img src="extra-images/partner-logo4.jpg" alt=""></a></li>
                      <li class="col-md-3"><a href="#"><img src="extra-images/partner-logo5.jpg" alt=""></a></li>
                    </ul>
                  </div>
                </div>

              </div>
            </div>
        </div>
        <!--// Page Content //-->




      </div>
      <!--// Main Content //-->

      <!--// NewsLatter //-->
      <div class="kode-newslatter kode-bg-color" >
        <span class="kode-halfbg thbg-color"></span>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3>Подпишитесь на нашу ежедневную рассылку</h3>
            </div>
            <div class="col-md-6">
              <form>
                <input type="text" placeholder="Your E-mail Adress" name="s" required>
                <label><input type="submit" value=""></label>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--// NewsLatter //-->

	 @section('footer')

</div>
    <!--// Wrapper //-->
     @section('auth')
    <!-- jQuery (necessary for JavaScript plugins) -->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.flexslider.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/jquery.countdown.js" type="text/javascript"></script>
	<script src="js/jquery.bxslider.min.js" type="text/javascript"></script>
	<script src="js/bootstrap-progressbar.js" type="text/javascript"></script>
	<script src="js/jquery.accordion.js" type="text/javascript"></script>
	<script src="js/jquery.prettyphoto.js" type="text/javascript"></script>
	<script src="js/kode_pp.js" type="text/javascript"></script>
    <script src="js/functions.js" type="text/javascript"></script>

  </body>
</html>
