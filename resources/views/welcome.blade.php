<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projet Technique</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet"
          href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <!-- Styles -->
    <style>


        a {
            color: #000000;
            text-decoration: none;
        }

        .titre {
            font-size: x-large;
            font-weight: bold;
            margin: 20px 10px 20px 40px;
        }

        #imageLeft {

            float: left;
            height: 150px;
            width: 150px;

            border: 5px solid #ffffff;
            box-shadow: 0px 0px 2px 2px #8c8c8c;
            margin-right: 15px;
            margin-bottom: 10px;

        }

        .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
            color: #000000;
            font-weight: bold;
            font-size: large;
            background-color: #ffffff;
            border: none;
            width: 101%;
            z-index: 3;

        }

        .well-sm {
            padding: 20px;
            border-radius: 3px;
            background: #ffffff;
            border-left: 1px solid #8c8c8c;

            min-height: 700px;
        }

        #list {

            background: #d7d7d7;
            border-bottom: 1px solid #8c8c8c;
            border-left: 1px solid #8c8c8c;
            border-top: 1px solid #8c8c8c;
            margin-top: 10%;

            border-radius: 10px 0px 0px 10px;
            padding: 0px;

        }

        .nav-pills > li > a {
            border-radius: 0px;
        }

        .nav-pills > li:first-child > a {
            border-radius: 10px 0px 0px 0px;
        }

        .nav-pills > li:last-child > a {
            border-radius: 0px 0px 0px 10px;
        }

        #list li {
            margin: 0px;
            padding: 0px;
            border-bottom: 1px solid #969696;

        }

        #list li:last-child {
            border-bottom: none;
        }


        .panel-title a {
            display: block;
            padding: 10px 15px;
            margin: -10px -15px;
        }

        .panel-group .panel + .panel {
            margin: 0 !important;
            border-bottom: 1px solid #969696;
        }
        .panel-default > .panel-heading > .panel-title.collapsed > a {
            color: #333;
            background-color: #e7e7e7;
            border-color: #ddd;

        }

        .panel-default > .panel-heading > .panel-title:not(.collapsed) > a {
            color: black;
            background-color: #ffffff;
            border-color: red;
        }

        .panel-default > .panel-heading {
            color: #333;
            background-color: #f5f5f5;
            border-color: #ddd;
        }

        .panel-heading {
            padding: 10px 15px;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }
        .panel-group .panel {
            margin-bottom: 0px;
            border-radius: 0px;
        }
        .text-center {
            text-align: left;
        }


        /*

</style>


</head>

<body>
<div class="container">
    <div class="row hidden-xs">
        <ul class="col-sm-5 col-md-4 col-lg-3 nav nav-pills nav-stacked" role="tablist" id="list">
            @foreach($allStars as $oneStar)
                <li><a href="#tabs-{{$oneStar->id}}" role="tab"
                       data-toggle="pill">{{$oneStar->nom}}</a>
                </li>
            @endforeach
        </ul>

        <h3 class="titre"> Profile Browser</h3>

        <div class="col-sm-5 col-md-4 col-lg-5 well-sm tab-content" id="content">

            @foreach($allStars as $oneStar)
                <div class="tab-pane" id="tabs-{{$oneStar->id}}">
                    @if (file_exists (public_path ('photos/avatar/'.$oneStar->url_image)))
                        <img class="h-10 w-10 rounded-full" src="{{ url('photos/avatar/'.$oneStar->url_image) }}"
                             id="imageLeft">
                    @else
                        <img class="h-10 w-10 rounded-full" src="{{ url('photos/avatar/avatar.jpg') }}"
                             id="imageLeft">
                    @endif

                    <h3>{{$oneStar->nom }} {{$oneStar->prenom }}</h3>
                    <p>
                        {{$oneStar->description }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="panel-group visible-xs" id="accordion">
        <h3 class="titre"> Profile Browser</h3>

        @foreach($allStars as $oneStar)
            <div class="panel panel-default">

                <div class="panel-heading preview" >
                    <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion"
                        data-target="#collapse-{{ $oneStar->id }}">
                        <a>
                            <h4>{{$oneStar->nom }} </h4>
                        </a>
                    </h4>
                </div>
                <div id="collapse-{{ $oneStar->id }}" class="panel-collapse collapse">
                    <div class="panel-body">
                        @if (file_exists (public_path ('photos/avatar/'.$oneStar->url_image)))
                            <img class="h-10 w-10 rounded-full" src="{{ url('photos/avatar/'.$oneStar->url_image) }}"
                                 id="imageLeft">
                        @else
                            <img class="h-10 w-10 rounded-full" src="{{ url('photos/avatar/avatar.jpg') }}"
                                 id="imageLeft">
                        @endif
                        <p> {{$oneStar->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


</article>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


</html>
