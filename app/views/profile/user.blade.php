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
@else
<style type="text/css">

    #main-content {
        margin-left: 0px;
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
            <h1><i class="fa fa-lock"></i> Perfil </h1>
        </div>

        <div class="row mt mb">
            <div class="col-lg-offset-3 col-lg-6">

                <p>
                    {{$user->username}}
                    <br>

                    {{$user->password}}
                    <br>
                    {{$user->name}}
                    <br>
                    {{$user->email}}
                </p>
            </div>
        </div>
    </section>
    @include('layout.cp_footer')
</section>
@stop