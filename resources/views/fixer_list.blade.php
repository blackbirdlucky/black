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
              <h1>Ставки</h1>
            </div>
            <div class="col-md-6">
            </div>
          </div>
        </div>
      </div>
      <!--// SubHeader //-->

      <!--// Main Content //-->
      <div class="kode-content">

        <!--// Page Content //-->
        <section class="kode-pagesection margin-bottom-40">
          <div class="container">
            <div class="row">
                <div class="kode-pagecontent col-md-8">

                  <div class="kode-inner-fixer margin-none padding-none">
                    <div class="kode-fixer-counter">
                      <h2 class="thbg-color">МАТЧ ДНЯ</h2>
                      <div id="kodeCountdown"></div>
                    </div>
                    <div class="kode-team-match">
                      <ul>
                        <li><a href="#"><img src="extra-images/fixer-logo1.png" alt=""></a></li>
                        <li class="home-kode-vs"><a href="#" class="kode-modren-btn thbg-colortwo">vs</a></li>
                        <li><a href="#"><img src="extra-images/fixer-logo2.png" alt=""></a></li>
                      </ul>
                      <div class="clearfix"></div>
                      <span class="kode-subtitle">MAJOR 2020, CSGO July 4, 2020 14:30 - 16:00 TEAM SPIRIT-HR</span>
                    </div>
                  </div>

                </div>
                <div class="col-md-4">
                  <table class="kode-table kode-table-v2">
                    <thead>
                      <tr>
                        <th>Команда</th>
                        <th>W</th>
                        <th>L</th>
                        <th>ОЧКИ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Na'Vi</td>
                        <td>3</td>
                        <td>0</td>
                        <td>9</td>
                      </tr>
                       <tr>
                        <td>Spirit</td>
                        <td>2</td>
                        <td>1</td>
                        <td>7</td>
                      </tr>
                      <tr>
                        <td>Complexity</td>
                        <td>2</td>
                        <td>1</td>
                        <td>7</td>
                      </tr>
                      <tr>
                        <td>Fnatic</td>
                        <td>2</td>
                        <td>0</td>
                        <td>6</td>
                      </tr>
                      <tr>
                        <td>Heroic</td>
                        <td>1</td>
                        <td>1</td>
                        <td>3</td>
                      </tr>
                       <tr>
                        <td>Vitality</td>
                        <td>1</td>
                        <td>0</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>G2</td>
                        <td>0</td>
                        <td>2</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>Secret</td>
                        <td>0</td>
                        <td>3</td>
                        <td>3</td>
                      </tr>
					   <tr>
                        <td>BIG</td>
                        <td>0</td>
                        <td>3</td>
                        <td>3</td>
                      </tr>
					   <tr>
                        <td>Na Masse</td>
                        <td>0</td>
                        <td>3</td>
                        <td>3</td>
                      </tr>
					   <tr>
                        <td>Streamers</td>
                        <td>0</td>
                        <td>3</td>
                        <td>3</td>
                      </tr>
					   <tr>
                        <td>Na'Vi 2010</td>
                        <td>0</td>
                        <td>3</td>
                        <td>3</td>
                      </tr>

                    </tbody>
                 </table>
                </div>

                <div class="col-md-12">
                  <div class="kode-section-title"> <h2>Предстоящие события</h2> </div>
                  <div class="kode-fixer-list">
                    <ul class="table-head thbg-color">
                      <li><h5>Следующие матчи</h5></li>
                      <li> <h5>Дата & Время</h5> </li>
                      <li> <h5>Карты</h5> </li>
                      <li class="fixer-pagination"> <a href="#" class="fa fa-angle-right"></a> <a href="#" class="fa fa-angle-left"></a> </li>
                    </ul>
                    <ul class="table-body">
                      <li>
                        <a href="#" class="list-thumb"><img src="extra-images/fixer-logo3.png" alt=""> Spirit</a>
                        <span>vs</span>
                        <a href="#" class="list-thumb"><img src="extra-images/fixer-logo4.png" alt=""> Fnatic</a>
                      </li>
                      <li><small>04/06/2020  14:30 - 16:00</small></li>
                      <li><small>BO3</small></li>
                      <li class="fixer-btn">
                        <a href="#">Доп.События</a>
                        <a href="#">Сделать ставку</a>
                      </li>
                    </ul>
                    <ul class="table-body">
                      <li>
                        <a href="#" class="list-thumb"><img src="extra-images/fixer-logo3.png" alt=""> G2</a>
                        <span>vs</span>
                        <a href="#" class="list-thumb"><img src="extra-images/fixer-logo4.png" alt=""> Secret</a>
                      </li>
                      <li><small>04/06/2020  16:00 - 18:30</small></li>
                      <li><small>BO3</small></li>
                      <li class="fixer-btn">
                        <a href="#">Доп.События</a>
                        <a href="#">Сделать ставку</a>
                      </li>
                    </ul>
                    <ul class="table-body">
                      <li>
                        <a href="#" class="list-thumb"><img src="extra-images/fixer-logo3.png" alt=""> Heroic</a>
                        <span>vs</span>
                        <a href="#" class="list-thumb"><img src="extra-images/fixer-logo4.png" alt=""> BIG</a>
                      </li>
                      <li><small>04/06/2020  18:30 - 20:30</small></li>
                      <li><small>BO3</small></li>
                      <li class="fixer-btn">
                        <a href="#">Доп.События</a>
                        <a href="#">Сделать ставку</a>
                      </li>
                    </ul>
                    <ul class="table-body">
                      <li>
                        <a href="#" class="list-thumb"><img src="extra-images/fixer-logo3.png" alt=""> Na'Vi 2010</a>
                        <span>vs</span>
                        <a href="#" class="list-thumb"><img src="extra-images/fixer-logo4.png" alt=""> Streamers</a>
                      </li>
                      <li><small>04/06/2020  20:30 - 23:00</small></li>
                      <li><small>BO3</small></li>
                      <li class="fixer-btn">
                        <a href="#">Доп.События</a>
                        <a href="#">Сделать ставку</a>
                      </li>
                    </ul>
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
    <!--// Wrapper //-->
     @section('auth')
    <!-- jQuery (necessary for JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script src="js/jquery.countdown.js"></script>
	<script src="js/jquery.bxslider.min.js" type="text/javascript"></script>
	<script src="js/bootstrap-progressbar.js"></script>
	<script src="js/jquery.prettyphoto.js"></script>
	<script src="js/kode_pp.js"></script>
    <script src="js/functions.js"></script>

  </body>
</html>
