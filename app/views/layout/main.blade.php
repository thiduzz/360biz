<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>360Biz - Agência de BusinessView</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">

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


<div class="modal" id="myModal" role="dialog">
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
<script src="js/bootstrap.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
<script src="js/scripts.js"></script>
</body>
</html>