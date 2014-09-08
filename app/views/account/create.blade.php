@extends('layout.cp_main_empty')
@section('content')
<style type="text/css">

    .process-row {
        display: table-row;
    }

    .process {
        display: table;
        width: 100%;
        position: relative;
    }

    .process-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .process-row:before {
        top: 50px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;

    }

    .process-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }

    .process-step p {
        margin-top:10px;

    }

    .btn-circle {
        width: 100px;
        height: 100px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 50px;
        box-shadow: 5px 5px 5px #aab2bd;
        -webkit-box-shadow: 5px 5px 5px #aab2bd;
        -moz-box-shadow: 5px 5px 5px #aab2bd;
    }
    .panel-title{
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {

        .alert
        {
            margin-top: 20px;
        }
    }
</style>

<div class="page-header text-center">
    <h1><i class="fa fa-angle-right"></i> Se aplique agora! <i class="fa fa-angle-left"></i></h1>
</div>
@if (!Session::has('global'))

<div class="process">
    <div class="process-row">
        <div class="process-step">
            <button type="button" class="btn btn-success btn-circle" disabled="disabled"><i class="fa fa-user fa-3x"></i></button>
            <p>Dados Pessoais</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-instagram fa-3x"></i></button>
            <p>Portfólio</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-thumbs-up fa-3x"></i></button>
            <p>Confirmação</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-users fa-3x"></i></button>
            <p>Conclusão</p>
        </div>
    </div>
</div>
<div class="row mt mb">
    <div class="col-lg-offset-3 col-lg-6">

        {{ Form::open( array(
        'route' => 'account-create',
        'method' => 'post',
        'id' => 'personal-form',
        'class' => 'form-horizontal style-form'
        ) ) }}
            <div class="form-panel">
                <h4 class="panel-title"><i class="fa fa-angle-right"></i>  Pessoal</h4>

            <div class="form-group">
                <label class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-6">
                    {{ Form::text('name', null, array('class'=>'form-control')) }}
                </div>
                @if($errors->has('name'))
                <div class="col-sm-4">
                    <div class="alert alert-danger"><b>Woops!</b> {{ $errors->first('name') }}</div>
                </div>
                @endif

            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2  control-label">Sobrenome</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="surname">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">CPF</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="cpf">
                </div>
            </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Data de nascimento</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="birthdate">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Telefone</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Estado</label>
                    <div class="col-sm-6">
                    <select class="form-control" name="county">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Cidade</label>
                    <div class="col-sm-6">
                    <select class="form-control" name="city">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                        </div>
                </div>
                <div class="form-group" style="border-bottom: 0px;" >
                    <div class="col-sm-offset-2 col-sm-6" style="height: 100%">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Já sou certificado como Google Photographer
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="alert alert-success"> Caso já possua o certificado, será realizado um treinamento específico para gestão comercial e utilização do sistema.</div>

                    </div>
                    </div>


                </div>
                <br>
            <div class="form-panel">
                <h4 class="panel-title"><i class="fa fa-angle-right"></i>  Acesso</h4>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Usuário</label>
                    <div class="col-sm-6">
                        {{ Form::text('username', null, array('class'=>'form-control')) }}
                    </div>
                    @if($errors->has('username'))
                    <div class="col-sm-4">
                        <div class="alert alert-danger"><b>Woops!</b> {{ $errors->first('username') }}</div>
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-6">
                        {{ Form::text('email', null, array('class'=>'form-control')) }}
                        <span class="help-block">Este será o email para recuperação de senha.</span>
                    </div>
                    @if($errors->has('email'))
                    <div class="col-sm-4">
                        <div class="alert alert-danger"><b>Woops!</b> {{ $errors->first('email') }}</div>
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Confirmação Email</label>
                    <div class="col-sm-6">
                        {{ Form::text('email_again', null, array('class'=>'form-control')) }}
                    </div>
                    @if($errors->has('email_again'))
                    <div class="col-sm-4">
                        <div class="alert alert-danger"><b>Woops!</b> {{ $errors->first('email_again') }}</div>
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
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="terms" value="">
                    Li e concordo com os  <a href="#"> Termos e Condições de Uso do Sistema </a>
                </label>
            </div>
                <br>
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="policy" value="">
                    Estou de acordo com a <a href="#"> política da 360Bis</a>
                </label>
            </div>
                </div>
                    </div>
                <div class="form-group" style="border-bottom: 0px;" >
                    <div class="col-sm-offset-4 col-sm-4">
        <button class="btn btn-theme btn-block center-block" type="submit">Avançar   <i class="fa fa-arrow-right"></i> </button>
                        </div>
                    </div>
            </div>
        {{ Form::close() }}

    </div>
</div><!-- /col-lg-3 -->
@elseif (Session::has('global') && Session::get('global') == 'mail')
<div class="process">
    <div class="process-row">
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-user fa-3x"></i></button>
            <p>Dados Pessoais</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-instagram fa-3x"></i></button>
            <p>Portfólio</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-success btn-circle" disabled="disabled"><i class="fa fa-thumbs-up fa-3x"></i></button>
            <p>Confirmação</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-users fa-3x"></i></button>
            <p>Conclusão</p>
        </div>
    </div>
</div>
<div class="row mt mb">
    <div class="col-lg-offset-3 col-lg-6">

        <div class="form-panel">
            <h4 class="panel-title"><i class="fa fa-angle-right"></i>  Confirmação</h4>


            <div class="alert alert-success">Um email foi enviado para o endereço <b> {{ Session::get('email') }}</b> para continuar a confirmação da conta.<br></div>
        </div>
    </div>
</div>

@elseif (Session::has('global') && Session::get('global') == 'activation-success')
<div class="process">
    <div class="process-row">
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-user fa-3x"></i></button>
            <p>Dados Pessoais</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-instagram fa-3x"></i></button>
            <p>Portfólio</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-thumbs-up fa-3x"></i></button>
            <p>Confirmação</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-success btn-circle" disabled="disabled"><i class="fa fa-users fa-3x"></i></button>
            <p>Conclusão</p>
        </div>
    </div>
</div>
<div class="row mt mb">
    <div class="col-lg-offset-3 col-lg-6">

        <div class="form-panel">
            <h4 class="panel-title"><i class="fa fa-angle-right"></i>  Ativação da conta</h4>


            <div class="alert alert-success"><b>Uhul!</b> Você acabou de ativar sua conta com sucesso.<br></div>
            </div>
        </div>
    </div>


@elseif (Session::has('global') && Session::get('global') == 'activation-fail')
<div class="process">
    <div class="process-row">
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-user fa-3x"></i></button>
            <p>Dados Pessoais</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-instagram fa-3x"></i></button>
            <p>Portfólio</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-success btn-circle" disabled="disabled"><i class="fa fa-thumbs-up fa-3x"></i></button>
            <p>Confirmação</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-users fa-3x"></i></button>
            <p>Conclusão</p>
        </div>
    </div>
</div>
<div class="row mt mb">
    <div class="col-lg-offset-3 col-lg-6">

        <div class="form-panel">
            <h4 class="panel-title"><i class="fa fa-angle-right"></i>  Ativação da conta</h4>
            <div class="alert alert-danger"><b>Wops!</b> Não pudemos ativar sua conta. Tente novamente mais tarde!<br></div>
        </div>
    </div>
</div>
@endif
@stop