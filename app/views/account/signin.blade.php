<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>360Bis - CP</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('/css/bootstrap.css') }}
    {{ HTML::style('/font-awesome/css/font-awesome.css') }}
    {{ HTML::style('/lineicons/style.css') }}
    {{ HTML::style('/css/cp/zabuto_calendar.css') }}
    {{ HTML::style('/js/cp/gritter/css/jquery.gritter.css') }}
    <!--[if lt IE 9]>
    {{ HTML::script('/js/html5-shiv.js') }}
    <![endif]-->

    <!-- Custom styles for this template -->
    {{ HTML::style('/css/cp/styles.css') }}
    {{ HTML::style('/css/cp/style-responsive.css') }}
    {{ HTML::script('/js/cp/chart-master/Chart.js') }}

    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->

<div id="login-page">
    <div class="container">

        {{ Form::open( array(
        'route' => 'account-signin-post',
        'method' => 'post',
        'id' => 'signin-form',
        'class' => 'form-login form-horizontal style-form'
        ) ) }}
            <h2 class="form-login-heading">acesse agora</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Nome do usuário" name="username" autofocus>
                <br>
                <input type="password" class="form-control" placeholder="Senha" name="password">

                <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Esqueceu sua senha?</a>
		
		                </span>
                </label><br>
                <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> LOGIN </button>
                <hr>

                <div class="registration">
                    Não tem uma conta ainda?<br/>
                    <a class="" href="{{URL::route('account-create')}}">
                        Criar uma conta
                    </a>
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
                        <div class="modal-body">
                            <p>Entre com o seu email para resetar sua senha.</p>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                            <button class="btn btn-theme" type="button">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->


        {{ Form::close() }}

    </div>

    @include('layout.cp_footer')
</div>

{{ HTML::script('/js/jquery-2.1.1.min.js') }}
{{ HTML::script('/js/jquery.js') }}
<!--<script src="assets/js/jquery-1.8.3.min.js"></script>-->
{{ HTML::script('/js/bootstrap.min.js') }}

<script class="include" type="text/javascript" src="../js/cp/jquery.dcjqaccordion.2.7.js"></script>
{{ HTML::script('/js/cp/jquery.scrollTo.min.js') }}
{{ HTML::script('/js/cp/jquery.nicescroll.js') }}
{{ HTML::script('/js/cp/jquery.sparkline.js') }}
<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
{{ HTML::script('/js/cp/jquery.backstretch.min.js') }}
<!--common script for all pages-->
{{ HTML::script('/js/common-scripts.js') }}

{{ HTML::script('/js/cp/gritter/js/jquery.gritter.js') }}
{{ HTML::script('/js/cp/gritter-conf.js') }}

<!--script for this page-->

{{ HTML::script('/js/cp/sparkline-chart.js') }}
{{ HTML::script('/js/cp/zabuto_calendar.js') }}

<script type="text/javascript">
    $.backstretch([
        "../img/cp/login_bg.jpg"
        , "../img/cp/login_bg2.jpg"
        , "../img/cp/login_bg3.jpg"
    ], {duration: 3000, fade: 750});
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

</body>
</html>
