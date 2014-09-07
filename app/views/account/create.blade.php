@extends('layout.cp_main_empty')
@section('content')
<div class="row mt">
    <div class="col-lg-offset-3 col-lg-6">
        <form action="{{URL::route('account-create')}}" method="post">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Pessoal</h4>

            <div class="form-group">
                <label class="col-md-2 col-md-2  control-label">Nome</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
        <br>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2  control-label">Sobrenome</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="surname">
                </div>
            </div>
        <br>
            <div class="form-group">
                <label class="col-sm-2 control-label">CPF</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="cpf">
                </div>
            </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Data de nascimento</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="birthdate">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Telefone</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>
        <br>
                <div class="form-group">
                    <label class="col-sm2 control-label">Estado</label>
                    <select class="form-control" name="county">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-sm2 control-label">Cidade</label>
                    <select class="form-control" name="city">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

        <div class="form-group">
        <label class="col-sm-2 control-label">Possui certificado Google Photographer</label>
        <div class="col-sm-8">
            <div class="switch switch-square has-switch" data-on-label="<i class=' fa fa-check'></i>" data-off-label="<i class='fa fa-times'></i>">
                <div class="switch-off switch-animate"><input type="checkbox" name="certified"><span class="switch-left"><i class=" fa fa-check"></i></span><label>&nbsp;</label><span class="switch-right"><i class="fa fa-times"></i></span></div>
            </div>
            <span class="help-block">Caso já possua o certificado, será realizado um treinamento específico para gestão comercial e utilização do sistema.</span>
        </div>
        </div>
                </div>
                <br>
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i>Acesso</h4>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-8">
                        {{ Form::text('username', null, array('class'=>'form-control')) }}
                    </div>
                    @if($errors->has('username'))
                    <div class="col-sm-2">
                        <div class="alert alert-danger"><b>Woops!</b> {{ $errors->first('username') }}</div>
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                        {{ Form::text('email', null, array('class'=>'form-control')) }}
                        <span class="help-block">Este será o email para recuperação de senha.</span>
                    </div>
                    @if($errors->has('email'))
                    <div class="col-sm-2">
                        <div class="alert alert-danger"><b>Woops!</b> {{ $errors->first('email') }}</div>
                    </div>
                    @endif
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Confirmação Email</label>
                    <div class="col-sm-8">
                        {{ Form::text('email_again', null, array('class'=>'form-control')) }}
                    </div>
                    @if($errors->has('email_again'))
                    <div class="col-sm-2">
                        <div class="alert alert-danger"><b>Woops!</b> {{ $errors->first('email_again') }}</div>
                    </div>
                    @endif
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Senha</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="password"/>
                        <span class="help-block">A senha deve ter no mínimo 6 caracteres.</span>
                    </div>
                    @if($errors->has('password'))
                    <div class="col-sm-2">
                        <div class="alert alert-danger"><b>Woops!</b> {{ $errors->first('password') }}</div>
                    </div>
                    @endif
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Confirmação Senha</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="password_again"/>
                    </div>
                    @if ($errors->has('password_again'))
                    <div class="col-sm-2">
                    <div class="alert alert-danger"><b>Woops!</b> {{ $errors->first('password_again') }}</div>
                    </div>
                    @endif
                </div>
                <br>
                <br>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Li e concordo com os Termos e Condições de Uso
                </label>
            </div>
                <br>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Estou de acordo com a política da 360Bis
                </label>
            </div>
                <br>
        <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i>Registra</button>
            {{Form::token()}}
            </div>
        </form>

    </div>
</div><!-- /col-lg-3 -->
@stop