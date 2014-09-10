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


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    -->
    {{ HTML::script('/js/html4-shiv.js') }}
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!-->
    @if(!Auth::check())
    <style type="text/css">

        .box0
        {
            padding-bottom: 20px;
            margin-bottom: 10px;
        }


        @media (min-width: 1200px) {

            .wrapper {
                display: inline-block;
                padding-left: 0px;
                padding-right: 0px;
                padding-bottom: 0px;
                margin-top: 0px;
                bottom: 0;
                left: 0;
                right: 0;
                top: 0;
                width: 100%;
                min-width: 100%;
                height: 100%;
                min-height: 100%;
            }
            #content-row{
                width: 100%;
                min-width: 100%;
                height: 100%;
                min-height: 100%;
                display: block;
            }
            .col-lg-3, .col-lg-9
            {
                height: 100%;
                padding-top: 60px;
                padding-bottom: 40px;
                min-height: 100%;
            }


        }

        #main-content {
            margin-left: 0px;
            padding-bottom: 40px;
            padding-top: 60px;

        }

        @media (max-width: 1199px) {

            .col-lg-3
            {
                padding-bottom: 40px;
                min-height: 100%;
            }
            #content-row{
                margin-top: 0px;
                margin-bottom: 0px;
            }
        }
    </style>
    @else
    <style type="text/css">

        .box0
        {
            padding-bottom: 20px;
            margin-bottom: 10px;
        }


        @media (min-width: 1200px) {

            .wrapper {
                display: inline-block;
                margin-top: 60px;
                padding-left: 15px;
                padding-right: 15px;
                padding-bottom: 15px;
                padding-top: 0px;
                width: 100%;
                min-width: 100%;
                height: 100%;
                min-height: 100%;
            }
            #content-row{
                width: 100%;
                min-width: 100%;
                height: 100%;
                min-height: 100%;
                display: block;
            }
            .col-lg-3, .col-lg-9
            {
                height: 100%;
                padding-top: 60px;
                padding-bottom: 40px;
                min-height: 100%;
            }


        }

        #main-content {
            margin-left: 210px;
            padding-bottom: 40px;
            padding-top: 60px;

        }

        @media (max-width: 1199px) {

            .col-lg-3
            {
                padding-bottom: 40px;
                min-height: 100%;
            }
            #content-row{
                margin-top: 0px;
                margin-bottom: 0px;
            }
        }
    </style>
    @endif
</head>

<body>

<section id="container" >

@include('layout.cp_navigation')

<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
    @if (Auth::check())
    @include('layout.cp_menu');
    @endif
    <!--sidebar end-->

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content" >
<section class="wrapper">
<div id="content-row" class="row">

    @if(Auth::check())
        @include('layout.cp_index')
    @else
        @include('layout.cp_home')
    @endif

<!-- **********************************************************************************************************************************************************
RIGHT SIDEBAR CONTENT
*********************************************************************************************************************************************************** -->
    @if(Auth::check())
    @include('layout.cp_logged_rpanel')
    @else
    @include('account.signin-min')
    @endif

</div>
</section>

    @include('layout.cp_footer')
</section>

</section>

<!-- js placed at the end of the document so the pages load faster -->

{{ HTML::script('/js/jquery-2.1.1.min.js') }}
{{ HTML::script('/js/jquery.js') }}
<!--<script src="assets/js/jquery-1.8.3.min.js"></script>-->
{{ HTML::script('/js/bootstrap.min.js') }}

<script class="include" type="text/javascript" src="js/cp/jquery.dcjqaccordion.2.7.js"></script>
{{ HTML::script('/js/cp/jquery.scrollTo.min.js') }}

{{ HTML::script('/js/cp/jquery.nicescroll.js') }}
{{ HTML::script('/js/cp/jquery.sparkline.js') }}

<!--common script for all pages-->
{{ HTML::script('/js/common-scripts.js') }}

{{ HTML::script('/js/cp/gritter/js/jquery.gritter.js') }}
{{ HTML::script('/js/cp/gritter-conf.js') }}

<!--script for this page-->

{{ HTML::script('/js/cp/sparkline-chart.js') }}
{{ HTML::script('/js/cp/zabuto_calendar.js') }}


<script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [
                {type: "text", label: "Special event", badge: "00"},
                {type: "block", label: "Regular event", }
            ]
        });
    });


    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>


</body>
</html>
