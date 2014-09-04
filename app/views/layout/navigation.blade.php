

<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav nav-justified">
                <li class="active"><a href="{{URL::route('home')}}">Início</a></li>
                <li><a href="#section2">Empresa</a></li>
                <li class="dropdown">
                    <a href="#section3" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Academic</a></li>
                        <li><a href="#">Commercial</a></li>
                        <li><a href="#">Financial</a></li>
                        <li><a href="#">Interior Design</a></li>
                        <li><a href="#">Medical</a></li>
                        <li><a href="#">Religious</a></li>
                    </ul>
                </li>
                <li><a href="#section4">Localização</a></li>
                <li><a href="#section5">Contato</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
