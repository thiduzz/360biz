
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="profile.html"><img src="../../img/cp/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered">Marcel Newman</h5>

            <li class="mt">
                <a  href="{{URL::route('cp')}}" {{ (Request::is('cp_main') ? ' class="active"' : '') }}>
                    <i class="fa fa-dashboard"></i>
                    <span>Principal</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span>Perfil</span>
                </a>
                <ul class="sub">
                    <li><a  href="general.html">General</a></li>
                    <li><a  href="buttons.html">Buttons</a></li>
                    <li><a  href="panels.html">Panels</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-cogs"></i>
                    <span>Components</span>
                </a>
                <ul class="sub">
                    <li><a  href="calendar.html">Calendar</a></li>
                    <li><a  href="gallery.html">Gallery</a></li>
                    <li><a  href="todo_list.html">Todo List</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-book"></i>
                    <span>Extra Pages</span>
                </a>
                <ul class="sub">
                    <li><a  href="blank.html">Blank Page</a></li>
                    <li><a  href="login.html">Login</a></li>
                    <li><a  href="lock_screen.html">Lock Screen</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-tasks"></i>
                    <span>Forms</span>
                </a>
                <ul class="sub">
                    <li><a  href="form_component.html">Form Components</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-users"></i>
                    <span>Time</span>
                </a>
                <ul class="sub">
                    <li><a  href="basic_table.html">Basic Table</a></li>
                    <li><a  href="responsive_table.html">Responsive Table</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a {{ (Request::is('account/password-change') ? ' class="active"' : '') }} href="javascript:;" >
                    <i class=" fa fa-cog"></i>
                    <span>Configurações</span>
                </a>
                <ul class="sub">
                    <li {{ (Request::is('account/password-change') ? ' class="active"' : '') }}><a href="{{URL::route('change-security')}}">Opções de segurança</a></li>
                    <li><a  href="chartjs.html">Outros</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>