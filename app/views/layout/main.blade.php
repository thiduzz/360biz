<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <title>360Biz - Agência de BusinessView</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    {{ HTML::style('/css/bootstrap.css') }}
    {{ HTML::style('/font-awesome/css/font-awesome.css') }}
    <!--[if lt IE 9]>
    {{ HTML::script('/js/html5-shiv.js') }}
    <![endif]-->
    {{ HTML::style('/css/public/styles.css') }}

</head>
<body>
<!-- Wrap all page content here -->
<div id="wrap">

@include('layout.mapheader')

@include('layout.navigation')

@yield('content')

@include('layout.footer')

<ul class="nav pull-right scroll-top">
    <li><a href="#" title="Subir ao topo"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body">
                <div id="modalCarousel" class="carousel">

                    <div class="carousel-inner">

                    </div>

                    <a class="carousel-control left" href="#modaCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    {{ HTML::script('/js/bootstrap.min.js') }}
    {{ HTML::script('/js/public/scripts.js') }}
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
</body>
</html>