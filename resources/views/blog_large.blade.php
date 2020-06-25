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
              <h1>Новости киберспорта</h1>
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

                <div class="kode-pagecontent col-md-9">

                  <div class="kode-blog-list kode-fullwidth-blog">
                    <ul class="row">

                      @foreach($blog_large as $blog_large)
                          <li class="col-md-12">
                            <div class="kode-time-zoon">
                              <time datetime="2008-02-14 20:00">04 <span>July</span></time>
                              <h5><a href="#">{{$blog_large->title}}</a></h5>
                            </div>
                            <figure><a href="#"><img src="{{$blog_large->img_url}}" alt=""></a></figure>
                            <div class="kode-blog-info">
                                <ul class="kode-blog-options">
                                <li><a href="#"><i class="fa fa-user"></i>{{$blog_large->login}}</a></li>
                                <li><a href="#"><i class="fa fa-comment"></i> 15 Комментариев</a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i> 128 Публикаций</a></li>
                              </ul>
                                <ul class="kode-team-network">
                                    <li><a class="fa fa-facebook" href="#"></a></li>
                                    <li><a class="fa fa-twitter" href="#"></a></li>
                                    <li><a class="fa fa-linkedin" href="#"></a></li>
                                </ul>
                                <p>{{$blog_large->description}}</p>
                              <a href="#" class="kode-modrenbtn thbg-colorhover">Подробнее</a>
                            </div>
                          </li>
                      @endforeach
                    </ul>

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

                <aside class="kode-pagesidebar col-md-3">

                  <div class="widget tab-widget">

                    <!-- Nav tabs -->
                    <ul class="widget-tabnav" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Live</a></li>
                      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Result</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="home">
                        <ul class="match-widget">
                          <li>
                            <div class="kode-cell">
                              <span>Na'Vi <small>3</small></span>
                            </div>
                            <div class="kode-cell">
                              <span class="kode-vs">vs</span>
                              <small>(BO1)</small>
                            </div>
                            <div class="kode-cell">
                              <span>Astralis <small>1</small></span>
                            </div>
                          </li>
                          <li>
                            <div class="kode-cell">
                              <span>G2 <small>10</small></span>
                            </div>
                            <div class="kode-cell">
                              <span class="kode-vs">vs</span>
                              <small>(BO1)</small>
                            </div>
                            <div class="kode-cell">
                              <span>Na Masse <small>10</small></span>
                            </div>
                          </li>
                          <li>
                            <div class="kode-cell">
                              <span>Vitality <small>8</small></span>
                            </div>
                            <div class="kode-cell">
                              <span class="kode-vs">vs</span>
                              <small>(BO1)</small>
                            </div>
                            <div class="kode-cell">
                              <span>Spirit<small>7</small></span>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="profile">
                        <ul class="match-widget">
                          <li>
                            <div class="kode-cell">
                              <span>Liquid <small>2</small></span>
                            </div>
                            <div class="kode-cell">
                              <span class="kode-vs">vs</span>
                              <small>(BO3)</small>
                            </div>
                            <div class="kode-cell">
                              <span>Secret <small>1</small></span>
                            </div>
                          </li>
                          <li>
                            <div class="kode-cell">
                              <span>HR <small>1</small></span>
                            </div>
                            <div class="kode-cell">
                              <span class="kode-vs">vs</span>
                              <small>(BO3)</small>
                            </div>
                            <div class="kode-cell">
                              <span>BIG <small>2</small></span>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="widget kode-recent-blog">
                    <div class="kode-widget-title"> <h2>Новости инсайдеров</h2> </div>
                    <ul>
                      <li>
                        <figure><a class="kode-recent-thumb" href="#"><img src="extra-images/recentblog-widget1.png" alt=""></a>
                          <figcaption>
                            <h6><a href="#">Valve добавят щит в ММ</a></h6>
                            <ul>
                              <li>05 July 2020</li>
                              <li>by <a href="#">Anon</a></li>
                            </ul>
                          </figcaption>
                        </figure>
                      </li>
                      <li>
                        <figure><a class="kode-recent-thumb" href="#"><img src="extra-images/recentblog-widget2.png" alt=""></a>
                          <figcaption>
                            <h6><a href="#">Гейб хочет продать компанию Valve</a></h6>
                            <ul>
                              <li>04 July 2020</li>
                              <li>by <a href="#">Hugo</a></li>
                            </ul>
                          </figcaption>
                        </figure>
                      </li>
                      <li>
                        <figure><a class="kode-recent-thumb" href="#"><img src="extra-images/recentblog-widget3.png" alt=""></a>
                          <figcaption>
                            <h6><a href="#">Na'Vi хотят подписать 6-го игрока</a></h6>
                            <ul>
                              <li>04 July 2020</li>
                              <li>by <a href="#">Jerry</a></li>
                            </ul>
                          </figcaption>
                        </figure>
                      </li>
                    </ul>
                  </div>

                  <div class="widget widget-recent-news">
                    <div class="kode-widget-title"> <h2>А вы знали?</h2> </div>
                    <ul>
                      <li>
                        <div class="medium-info">
                          <time datetime="2008-02-14 20:00">50%</time>
                          <div class="medium-title">
                            <h6><a href="#">Шансы что s1pmle в этом году станет топ-1</a></h6>
                            <ul class="kode-blog-options">
                              <li><a href="#"><i class="fa fa-heart"></i> 305</a></li>
                              <li><a href="#"><i class="fa fa-comment"></i> 8</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="medium-info">
                          <time datetime="2008-02-14 20:00">70%</time>
                          <div class="medium-title">
                            <h6><a href="#">Бумыч съесть своего тренера</a></h6>
                            <ul class="kode-blog-options">
                              <li><a href="#"><i class="fa fa-heart"></i> 305</a></li>
                              <li><a href="#"><i class="fa fa-comment"></i> 8</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="medium-info">
                          <time datetime="2008-02-14 20:00">15%</time>
                          <div class="medium-title">
                            <h6><a href="#">Guardian научится стрелять с AWP</a></h6>
                            <ul class="kode-blog-options">
                              <li><a href="#"><i class="fa fa-heart"></i> 305</a></li>
                              <li><a href="#"><i class="fa fa-comment"></i> 8</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="widget kode-twitter-widget">

                    <div class="twitter-info">
                      <h6>О новостях CSGO</h6>
                      <span>Подслушано в Twitter'e</span>
                      <i class="fa fa-twitter"></i>
                    </div>
                    <ul>
                      <li>
                        <a href="#" class="tweet-thumb"><img src="extra-images/twitter-1.png" alt=""></a>
                        <div class="tweet-list">
                          <a href="#"><strong class="thcolor">clown</strong> Я видел, как симлл целовал бумыча <3 </a>
                          <span>10 минут назад</span>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="tweet-thumb"><img src="extra-images/twitter-1.png" alt=""></a>
                        <div class="tweet-list">
                          <a href="#"><strong class="thcolor">blackbird</strong> Поставить на это событие можно на BLACKBETS </a>
                          <span>15 минут назад</span>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="tweet-thumb"><img src="extra-images/twitter-1.png" alt=""></a>
                        <div class="tweet-list">
                          <a href="#"><strong class="thcolor">Артеминоид</strong> С ростом 150 см в киберспорт можно? </a>
                          <span>20 минут назад</span>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="tweet-thumb"><img src="extra-images/twitter-1.png" alt=""></a>
                        <div class="tweet-list">
                          <a href="#"><strong class="thcolor">Большая пальма</strong> Карантин.День 99.Начали выпадать волосы </a>
                          <span>30 минут назад</span>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="tweet-thumb"><img src="extra-images/twitter-1.png" alt=""></a>
                        <div class="tweet-list">
                          <a href="#"><strong class="thcolor">Большой нос</strong> А правда что большой нос - большое будущее? </a>
                          <span>1 час назад</span>
                        </div>
                      </li>
                    </ul>

                  </div>
                </aside>

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

    <script src="js/jquery.countdown.js"></script>
	<script src="js/jquery.bxslider.min.js" type="text/javascript"></script>
	<script src="js/bootstrap-progressbar.js"></script>
	<script src="js/jquery.prettyphoto.js"></script>
	<script src="js/kode_pp.js"></script>
    <script src="js/functions.js"></script>

  </body>
</html>
