@extends('layout.cp_main_empty')
@section('content')

@if (Auth::check())
@include('layout.cp_menu')
<style type="text/css">

    #main-content {
        margin-left: 210px;
        padding-bottom: 40px;
        padding-top: 60px;

    }

    @media (max-width: 767px) {
        .col-sm-4 {
            margin-top: 20px;
        }
    }
</style>
@endif
<!--main content start-->
<section id="main-content" >
    <section class="wrapper">

        <div class="page-header text-center">
            <h1><i class="fa fa-lock"></i> Segurança da conta </h1>
        </div>
        @if(Session::has('global'))
        <div class="row mt mb">
            <div class="col-lg-offset-3 col-lg-6">
                    <div class="alert alert-danger" style="margin: 10px"><b>Wops!</b> Não conseguimos alterar sua senha. <br> Possivelmente você esteja entrando com a senha atual incorreta!<br></div>
            </div>
        </div>
        @endif
        <div class="row mt mb">
            <div class="col-lg-offset-3 col-lg-6">

                {{ Form::open( array(
                'route' => 'account-change-password-post',
                'method' => 'post',
                'id' => 'pass-change-form',
                'class' => 'form-horizontal style-form'
                ) ) }}
                <div class="form-panel">
                    <h3 class="panel-title"><i class="fa fa-angle-right"></i>  Alteração de Senha</h3>
                    <br>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Senha atual</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" name="password_old"/>
                        </div>
                        @if($errors->has('password_old'))
                        <div class="col-sm-4">
                            <div class="alert alert-danger"><b>Woops!</b> {{ $errors->first('password_old') }}</div>
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Senha</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" name="password"/>
                        </div>
                        @if($errors->has('password'))
                        <div class="col-sm-4">
                            <div class="alert alert-danger"><b>Woops!</b> {{ $errors->first('password') }}</div>
                        </div>
                        @else
                        <div class="col-sm-4">
                            <div class="alert alert-warning"><strong>Atenção!</strong> A senha deve conter no mínimo 6 caractéres.</div>

                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Confirmação Senha</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" name="password_again"/>
                        </div>
                        @if ($errors->has('password_again'))
                        <div class="col-sm-4">
                            <div class="alert alert-danger"><b>Woops!</b> {{ $errors->first('password_again') }}</div>
                        </div>
                        @endif
                    </div>
                    <div class="form-group" style="border-bottom: 0px;" >
                        <div class="col-sm-offset-4 col-sm-4">
                            <button class="btn btn-theme btn-block center-block" type="submit">Alterar senha   <i class="fa fa-arrow-right"></i> </button>
                        </div>
                    </div>
                </div>

                {{ Form::close() }}

            </div>
        </div>
    </section>
        @include('layout.cp_footer')
    </section>
    @stop