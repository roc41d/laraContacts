<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta name="google-signin-client_id" content="1055839816416-t7c1qgi5t28nl53hl49lms891fkf43vp.apps.googleusercontent.com">
    <title>
          Phone Book
          &middot; 
          @section('title') 
          @show 
    </title>
    <link rel="icon" type="image/png" href="#">
    <!-- CSS  -->
    <link rel="stylesheet" href="{{url('assets')}}/css/bootstrap.css" media="screen">
    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link rel="stylesheet" href="{{url('assets')}}/css/roboto.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets')}}/css/material.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets')}}/css/ripples.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets')}}/css/mystyle.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets')}}/pagedown/demo.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--
    <script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });
    </script>
    -->
</head>
<body>

<div class="navbar navbar-default ">
    <div class="container">
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-muted" href="{{url('/')}}">Phone Book</a>
        </div>
        @if(Auth::check() == NULL)
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{URL::to('register')}}">create account</a></li>
                <li><a href="{{URL::to('login')}}">log in</a></li>
            </ul>
        </div>
        @else
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a >{{Auth::user()->username}}</a></li>
                <li><a href="{{URL::to('login')}}">logout</a></li>
            </ul>
        </div>
        @endif
    </div>
</div>

    <!-- Site Content -->
<div class="container">

  @yield('content')

</div> <hr>



    <!--  Scripts-->
    <script src="{{url('assets')}}/js/jquery.js"></script>
    <script src="{{url('assets')}}/js/bootstrap.js"></script>

    <script src="{{url('assets')}}/js/ripples.min.js"></script>
    <script src="{{url('assets')}}/js/material.min.js"></script>
        <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });
        </script>

</body>
</html>
