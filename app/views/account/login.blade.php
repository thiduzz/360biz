<div class="col-lg-3 ds">
    <div class="login-wrap">
        <input type="text" class="form-control" placeholder="User ID" autofocus="">
        <br>
        <input type="password" class="form-control" placeholder="Password">
        <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Esqueceu a senha?</a>

		                </span>
        </label>
        <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> Entrar</button>
        <hr>
        <!--
        <div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
            <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
        </div>
        -->
        <div class="registration">
            Não tem uma conta ainda?<br>
            <a class="" href="{{URL::route('account-create')}}">
                Criar conta
            </a>
        </div>

    </div>
</div><!-- /col-lg-3 -->
