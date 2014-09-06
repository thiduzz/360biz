

<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            @if(Auth::check())
               <!-- Já esta logado, adicionar dropdown com Sign out e acessar o painel de controle-->
            @else
                <div class="navbar-brand dropdown pull-right" >
                <a id="dropdownMenu1" class="dropdown-toggle hidden-lg hidden-md hidden-sm" href="#" data-toggle="dropdown"><i style="color: #ffffff" class="fa fa-cog fa-fw"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sou cliente</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::route('account-create')}}">Sou fotógrafo</a></li>
                </ul>
                </div>
            @endif


<!--
            <a class="navbar-brand pull-right hidden-lg hidden-md hidden-sm" href="#"><i class="fa fa-home fa-fw"></i></a>
            -->
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="{{URL::route('home')}}">Início</a></li>
                <li><a href="#section2">Empresa</a></li>
                <li><a href="#section3">Portfolio</a></li>
                <li><a href="#section6">Serviços</a></li>
                <li><a href="#section7">Preços</a></li>
                <li><a href="#section4">Contato</a></li>
            </ul>
            @if(Auth::check())
            <!-- Já esta logado, adicionar dropdown com Sign out e acessar o painel de controle-->
            @else
            <ul class="nav navbar-nav navbar-right hidden-xs">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog fa-fw"></i>Acesso</a>
                    <ul class="dropdown-menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sou cliente</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::route('account-create')}}">Sou fotógrafo</a></li>
                    </ul>
                </li>
            </ul>
            @endif
        </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
