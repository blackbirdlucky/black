@extends('layouts.header')
@extends('layouts.footer')
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
              <h1>Обратная связь</h1>
            </div>
          </div>
        </div>
      </div>
      <!--// SubHeader //-->

      <!--// Main Content //-->
      <div class="kode-content">

        <!--// Page Content //-->
        <section class="kode-pagesection">
          <div class="container">
            <div class="row">

                <div class="kode-pagecontent col-md-12">

                  <div class="contactus-page">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="kode-map">
                          <div class="map-canvas" id="map-canvas"></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="kode-section-title"> <h2>Связаться с нами</h2> </div>
                        <div class="kode-forminfo">
                          <p>Добро пожаловать в поддержку BLACKBETS. Если у вас какие-то проблемы, Вы можете связаться с нами по номеру/почте или оставить заявку ниже!</p>
                          <ul class="kode-form-list">
                            <li><i class="fa fa-home"></i> <p><strong>Адрес:</strong> г.Иркутск ул.Пушкина д.Колотушкина</p></li>
							<li><i class="fa fa-phone"></i> <p><strong>Телефон:</strong> 666 4444 33  777 8888 99</p></li>
							<li><i class="fa fa-envelope-o"></i> <p><strong>Майл:</strong> blackbets@cybersport.com</p></li>
                          </ul>
                          <h3>Мы есть так в</h3>
                          <ul class="kode-team-network">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
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
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header thbg-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Login To Your Account</h4>
          </div>
          <div class="modal-body">
            <form class="kode-loginform">
              <p><span>User Name</span> <input type="text" placeholder="User Name"></p>
              <p><span>Password</span> <input type="password" placeholder="Password"></p>
              <p><label><input type="checkbox"><span>Remember Me</span></label></p>
              <p class="kode-submit"><a href="#">Lost Your Password</a> <input class="thbg-colortwo" type="submit" value="Sign in"></p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModalTwo" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header thbg-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Register</h4>
          </div>
          <div class="modal-body">
            <form class="kode-loginform">
              <p><span>Email</span> <input type="text" placeholder="Email"></p>
              <p><span>Password</span> <input type="password" placeholder="Password"></p>
              <p><span>Retype Password</span> <input type="password" placeholder="Retype Password"></p>
              <p><label><input type="checkbox"><span>Remember Me</span></label></p>
              <p class="kode-submit"><a href="#">Lost Your Password</a> <input class="thbg-colortwo" type="submit" value="Sign Up"></p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--// Wrapper //-->

    <!-- jQuery (necessary for JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="js/jquery.countdown.js"></script>
	<script src="js/jquery.bxslider.min.js" type="text/javascript"></script>
	<script src="js/bootstrap-progressbar.js"></script>
	<script src="js/jquery.prettyphoto.js"></script>
	<script src="js/kode_pp.js"></script>
    <script src="js/functions.js"></script>

  </body>
</html>