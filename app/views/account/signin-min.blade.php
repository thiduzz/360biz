<style type="text/css">

    @media (max-width: 1024px)
    {
        #gritter-notice-wrapper
        {
            display: none;
            visibility: hidden;
        }
    }
</style>

<div class="col-lg-3 ds">
    <div class="login-wrap">
        {{ Form::open( array(
        'route' => 'account-signin-min-post',
        'method' => 'post',
        'id' => 'signin-form',
        'class' => 'form-horizontal style-form'
        ) ) }}
        <input type="text" class="form-control" name="username" placeholder="Usuário" autofocus="">
        <br>
        <input type="password" class="form-control" name="password" placeholder="Senha">
        <br>
        @if ($errors->count() > 0)
        <div class="alert alert-danger">

            @foreach ($errors->all() as $error)
            {{ $error }}<br>
            @endforeach
        </div>
        <br>
        @elseif (Session::has('global'))
        <div class="alert alert-danger">
            {{ Session::get('global') }}
        </div>
        <br>
        @endif

        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember" checked="true">
                Lembrar de mim
            </label>
        </div>
        <br>
        <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> LOGIN </button>
        <br>
        <label class="checkbox centered">
		                <span>
		                    <a data-toggle="modal" href="login.html#myModal"> Esqueceu sua senha?</a>

		                </span>
        </label>

        <hr>

        <div class="registration">
            Não tem uma conta ainda?<br/>
            <a class="" href="{{URL::route('account-create')}}">
                Criar uma conta
            </a>
        </div>





    {{ Form::close() }}
    </div>
    </div>

<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Esqueceu sua senha ?</h4>
            </div>
            {{ Form::open( array(
            'route' => 'account-recovery-post',
            'method' => 'post',
            'id' => 'forgot-form'
            ) ) }}
            <div class="modal-body">
                <p>Entre com o seu email para resetar sua senha.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                <button class="btn btn-theme" type="button">Enviar</button>
            </div>
            {{Form:close()}}
        </div>
    </div>
</div>
<!-- modal -->

<script type="text/javascript">
    $(document).ready(function () {

        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Bem vindo ao Painel de Controle da 360Bis!',
            // (string | mandatory) the text inside the notification
            text: 'Caso esteja com dúvida para acessar ordem de compra ou sua conta de fotógrafo, entre em contato conosco',
            // (string | optional) the image to display on the left
            image: '../img/cp/contact.png',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
</script>
