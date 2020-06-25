<header id="mainheader" class="kode-header-absolute">

        <!--// TopBaar //-->
          <div class="kode-topbar">
		  <div class="container">
              <div class="row">
                <div class="col-md-6 kode_bg_white">
					<ul class="top_slider_bxslider">
						<li><span class="kode-barinfo"><strong>Внимание : </strong> Добро пожаловать,Вы можете войти в систему или создать аккаунт</span></li>
						<li><span class="kode-barinfo"><strong>Внимание : </strong> Добро пожаловать,Вы можете войти в систему или создать аккаунт</span></li>
						<li><span class="kode-barinfo"><strong>Внимание : </strong> Добро пожаловать,Вы можете войти в систему или создать аккаунт</span></li>
					</ul>
				</div>
                <div class="col-md-6">
                  <ul class="kode-userinfo">
                    <li><a href="#"><i class="fa fa-shopping-cart"></i> Корзина</a></li>
                      @if (!Auth::check())
                    <li><a href="#"><i class="fa fa-user-circle-o"></i> Гость</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-in"></i> Логин</a></li>
                    <li style="border-right: 1px solid rgba(255, 255, 255, 0.4);"><a href="#" data-toggle="modal" data-target="#myModalTwo"><i class="fa fa-user-plus"></i> Регистрация</a></li>
                      @else
                          <li><a href="#"><i class="fa fa-user-circle-o"></i>blackbird</a></li>
                          <li><a href="#"><i class="fa fa-money"></i>Баланс: 15900 руб.</a></li>
                          <li style="border-right: 1px solid rgba(255, 255, 255, 0.4);"><a href="/logout"data-target="#myModalTwo"><i class="fa fa-sign-out"></i> Выход</a></li>
                      @endif
                  </ul>
                </div>
              </div>
            </div>
          </div>
        <!--// TopBaar //-->

		<div class="header-8">
			<div class="container">
				<!--NAVIGATION START-->
				<div class="kode-navigation pull-left">
					<ul>
						 <li><a href="/">Главная</a>
						 </li>
						 <li><a href="/team_info">О нас</a></li>
                          <li><a href="/">Новости</a>
                            <ul class="children">
                              <li><a href="/blog_large">CSGO</a></li>
                            </ul>
                          </li>
                          <li><a href="/">Матчи</a>
                            <ul class="children">
                              <li><a href="/fixer_list">Ставки</a></li>
                            </ul>
                          </li
					</ul>
				</div>
				<!--NAVIGATION END-->
				<!--LOGO START-->
				<div class="logo">
					<a href="/index" class="logo"><img src="images/logo.png" alt=""></a>
				</div>
				<!--LOGO END-->
				<!--NAVIGATION START-->
				<div class="kode-navigation">
					<ul>
						<li>
							<a href="/">Команды & Игроки</a>
							<ul class="children">
							  <li><a href="/player_list">ТОП</a></li>
							</ul>
						  </li>
						<li><a href="/">Магазин</a>
							<ul class="children">
							  <li><a href="/product_list">Скины</a></li>
							</ul>
						  </li>

                          <li class="last"><a href="/">Обратная связь</a>
                            <ul class="children">
                              <li><a href="/contact_ustwo">Почта</a></li>
                            </ul>
                          </li>
					</ul>
				</div>
				<!--NAVIGATION END-->

                      <!-- Brand and toggle get grouped for better mobile display -->
				 <nav class="navbar navbar-default">

                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                          <span class="sr-only">Переключатель</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                           <li><a href="/">Главная</a>
						   </li>
						 <li><a href="team_info.html">О нас</a></li>
                          <li><a href="/">Новости</a>
                            <ul class="children">
                              <li><a href="/bloggrid_v2">CSGO</a></li>
                            </ul>
                          </li>
                          <li><a href="/fixer_list">Матчи</a>
                            <ul class="children">
                              <li><a href="#">Ставки</a></li>
                            </ul>
                          </li>
						 <li>
							<a href="/">Команды & Игроки</a>
							<ul class="children">
							  <li><a href="/player_list">ТОП</a></li>
							</ul>
						  </li>
						<li><a href="/">Магазин</a>
							<ul class="children">
							  <li><a href="/product_list">Скины</a></li>
							  <li><a href="/product_detail">Описание</a></li>
							</ul>
						  </li>

                          <li class="last"><a href="/">Обратная связь</a>
                            <ul class="children">
                              <li><a href="/contact_ustwo">Почта</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div><!-- /.navbar-collapse -->

                  </nav>
			</div>
		</div>
      </header>

	  @yield('mainbanner')
