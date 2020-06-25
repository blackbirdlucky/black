<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header thbg-color">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Войти в аккаунт</h4>
            </div>
            <div class="modal-body">
                <form method="get" action='/auth' id ='login' class="kode-loginform">
                    <p><span>Логин</span> <input type="text" name="login" required minlength=6 maxlength=16 placeholder="User Name"></p>
                    <p><span>Пароль</span> <input type="password" name="password"  required minlength=6 maxlength=25 placeholder="Password"></p>
                    <p><label><input type="checkbox"><span>Запомнить</span></label></p>
                    <p class="kode-submit"><a href="#">Забыли логин или пароль?</a> <input class="thbg-colortwo" type="submit" value="Войти"></p>
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
                <h4 class="modal-title">Регистрация</h4>
            </div>
            <div class="modal-body">
                <form method="get" action='/registration' id ='registration' class="kode-loginform">
                    <p><span>Эл. почта</span> <input type="text" name="email_address" placeholder="Email"></p>
                    <p><span>Логин</span> <input type="text" name="login" required minlength=6 maxlength=16 placeholder="User Name"></p>
                    <p><span>Пароль</span> <input type="password" name="password" required minlength=6 maxlength=25  placeholder="Password"></p>
                    <p><label><input type="checkbox"><span>Запомнить</span></label></p>
                    <p class="kode-submit"><a href="#">Уже зарегистрированы?</a> <input class="thbg-colortwo" type="submit" value="Войти"></p>
                </form>
            </div>
        </div>
    </div>
</div>

@yield('auth')
