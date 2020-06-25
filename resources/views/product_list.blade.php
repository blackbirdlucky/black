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
              <h1>Магазин</h1>
            </div>
          </div>
        </div>
      </div>
      <!--// Sub Header //-->

      <!--// Main Content //-->
        <!--// Page Content //-->
        <section class="kode-pagesection kode-parallax kode-dark-overlay kode-woo-products-style">
          <div class="container">
            <div class="row">

              <div class="col-md-12">
                <div class="kode-shop-list">

                  <ul class="row">
                    <li class="col-md-3 col-sm-6">
                      <div class="kode-pro-inner">
                        <figure><a href="#"><img src="extra-images/shop-product1.png" alt=""></a>
                          <figcaption>
                            <h4><a href="#">USP-S | Orion</a></h4>
                            <p class="kode-pro-cat"><a href="#" style="color: #ff00f7;">Засекреченное</a></p>
                          </figcaption>
                        </figure>
                        <div class="kode-pro-info">
                          <a href="#" class="add_to_cart"><i class="fa fa-shopping-cart"></i> Купить</a>
                          <span>35$</span>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-3 col-sm-6">
                      <div class="kode-pro-inner">
                        <figure><a href="#"><img src="extra-images/shop-product2.png" alt=""></a>
                          <figcaption>
                            <h4><a href="#">AWP | Asiimov</a></h4>
                            <p class="kode-pro-cat"><a href="#" style="color: red;">Тайное</a></p>
                          </figcaption>
                        </figure>
                        <div class="kode-pro-info">
                          <a href="#" class="add_to_cart"><i class="fa fa-shopping-cart"></i> Купить</a>
                          <span>80$</span>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-3 col-sm-6">
                      <div class="kode-pro-inner">
                        <figure><a href="#"><img src="extra-images/shop-product3.png" alt=""></a>
                          <figcaption>
                            <h4><a href="#">P250 | Cartel</a></h4>
                            <p class="kode-pro-cat"><a href="#" style="color: #ff00f7;">Засекреченное</a></p>
                          </figcaption>
                        </figure>
                        <div class="kode-pro-info">
                          <a href="#" class="add_to_cart"><i class="fa fa-shopping-cart"></i> Купить</a>
                          <span>15$</span>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-3 col-sm-6">
                      <div class="kode-pro-inner">
                        <figure><a href="#"><img src="extra-images/shop-product4.png" alt=""></a>
                          <figcaption>
                            <h4><a href="#">AK-47 | Redline</a></h4>
                            <p class="kode-pro-cat"><a href="#" style="color: #ff00f7;">Засекреченное</a></p>
                          </figcaption>
                        </figure>
                        <div class="kode-pro-info">
                          <a href="#" class="add_to_cart"><i class="fa fa-shopping-cart"></i> Купить</a>
                          <span>200$</span>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-3 col-sm-6">
                      <div class="kode-pro-inner">
                        <figure><a href="#"><img src="extra-images/shop-product1.png" alt=""></a>
                          <figcaption>
                            <h4><a href="#">USP-S | Orion</a></h4>
                            <p class="kode-pro-cat"><a href="#" style="color: #ff00f7;">Засекреченное</a></p>
                          </figcaption>
                        </figure>
                        <div class="kode-pro-info">
                          <a href="#" class="add_to_cart"><i class="fa fa-shopping-cart"></i> Купить</a>
                          <span>35$</span>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-3 col-sm-6">
                      <div class="kode-pro-inner">
                        <figure><a href="#"><img src="extra-images/shop-product2.png" alt=""></a>
                          <figcaption>
                            <h4><a href="#">AWP | Asiimov</a></h4>
                            <p class="kode-pro-cat"><a href="#" style="color: red;">Тайное</a></p>
                          </figcaption>
                        </figure>
                        <div class="kode-pro-info">
                          <a href="#" class="add_to_cart"><i class="fa fa-shopping-cart"></i> Купить</a>
                          <span>80$</span>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-3 col-sm-6">
                      <div class="kode-pro-inner">
                        <figure><a href="#"><img src="extra-images/shop-product3.png" alt=""></a>
                          <figcaption>
                            <h4><a href="#">P250 | Cartel</a></h4>
                            <p class="kode-pro-cat"><a href="#" style="color: #ff00f7;">Засекреченное</a></p>
                          </figcaption>
                        </figure>
                        <div class="kode-pro-info">
                          <a href="#" class="add_to_cart"><i class="fa fa-shopping-cart"></i> Купить</a>
                          <span>15$</span>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-3 col-sm-6">
                      <div class="kode-pro-inner">
                        <figure><a href="#"><img src="extra-images/shop-product4.png" alt=""></a>
                          <figcaption>
                            <h4><a href="#">AK-47 | Redline</a></h4>
                            <p class="kode-pro-cat"><a href="#" style="color: #ff00f7;">Засекреченное</a></p>
                          </figcaption>
                        </figure>
                        <div class="kode-pro-info">
                          <a href="#" class="add_to_cart"><i class="fa fa-shopping-cart"></i> Купить</a>
                          <span>200$</span>
                        </div>
                      </div>
                    </li>
					<li class="col-md-3 col-sm-6">
                      <div class="kode-pro-inner">
                        <figure><a href="#"><img src="extra-images/shop-product1.png" alt=""></a>
                          <figcaption>
                            <h4><a href="#">USP-S | Orion</a></h4>
                            <p class="kode-pro-cat"><a href="#" style="color: #ff00f7;">Засекреченное</a></p>
                          </figcaption>
                        </figure>
                        <div class="kode-pro-info">
                          <a href="#" class="add_to_cart"><i class="fa fa-shopping-cart"></i> Купить</a>
                          <span>35$</span>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-3 col-sm-6">
                      <div class="kode-pro-inner">
                        <figure><a href="#"><img src="extra-images/shop-product2.png" alt=""></a>
                          <figcaption>
                            <h4><a href="#">AWP | Asiimov</a></h4>
                            <p class="kode-pro-cat"><a href="#" style="color: red;">Тайное</a></p>
                          </figcaption>
                        </figure>
                        <div class="kode-pro-info">
                          <a href="#" class="add_to_cart"><i class="fa fa-shopping-cart"></i> Купить</a>
                          <span>80$</span>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-3 col-sm-6">
                      <div class="kode-pro-inner">
                        <figure><a href="#"><img src="extra-images/shop-product3.png" alt=""></a>
                          <figcaption>
                            <h4><a href="#">P250 | Cartel</a></h4>
                            <p class="kode-pro-cat"><a href="#" style="color: #ff00f7;">Засекреченное</a></p>
                          </figcaption>
                        </figure>
                        <div class="kode-pro-info">
                          <a href="#" class="add_to_cart"><i class="fa fa-shopping-cart"></i> Купить</a>
                          <span>15$</span>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-3 col-sm-6">
                      <div class="kode-pro-inner">
                        <figure><a href="#"><img src="extra-images/shop-product4.png" alt=""></a>
                          <figcaption>
                            <h4><a href="#">AK-47 | Redline</a></h4>
                            <p class="kode-pro-cat"><a href="#" style="color: #ff00f7;">Засекреченное</a></p>
                          </figcaption>
                        </figure>
                        <div class="kode-pro-info">
                          <a href="#" class="add_to_cart"><i class="fa fa-shopping-cart"></i> Купить</a>
                          <span>200$</span>
                        </div>
                      </div>
                    </li>
                  </ul>

                </div>
                <!--// Pagination //-->
                <div class="pagination">
                  <a href="#"><i class="fa fa-angle-double-left"></i></a>
                  <a href="#">1</a>
                  <a href="#">2</a>
                  <span>3</span>
                  <a href="#">4</a>
                  <a href="#"><i class="fa fa-angle-double-right"></i></a>
                </div>
                <!--// Pagination //-->
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
    <!--Footer Medium End-->
    <!--// Wrapper //-->
    @section('auth')
    <!-- jQuery (necessary for JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script src="js/jquery.countdown.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/bootstrap-progressbar.js"></script>
	<script src="js/jquery.accordion.js"></script>
	<script src="js/jquery.circlechart.js"></script>
	<script src="js/jquery.prettyphoto.js"></script>
	<script src="js/kode_pp.js"></script>
    <script src="js/functions.js"></script>

  </body>
</html>
