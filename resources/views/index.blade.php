<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta name="google-signin-client_id" content="1055839816416-t7c1qgi5t28nl53hl49lms891fkf43vp.apps.googleusercontent.com">
    <title>
          MTN Mobile Money API Test
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
    <style type="text/css">
      #loading-div-background{
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        background: skyblue;
        width: 100%;
        height: 100%;
    }

    #loading-div{
        /*
        background-color: gray;
        border: 1px solid #eee;*/
        width: 300px;
        height: 200px;
        background-color: #fff;
        padding-top: 10px;
        text-align: center;
        border: 1px solid #eee;
        left: 50%;
        top: 50%;
        position: absolute;
        margin-left: -150px;
        margin-top: -100px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        /*color: #000;
        behavior: url("/css/pie/PIE.htc"); /* HANDLES IE */*/
    }
    </style>

    <script type="text/javascript">
          $(document).ready(function (){
                $("#loading-div-background").css({ opacity: 1.0 });
            });

            function ShowProgressAnimation(){
                $("#loading-div-background").show();
            }
        </script>

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
            <a class="navbar-brand text-muted" href="{{url('/')}}">MM Test App</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <!--<ul class="nav navbar-nav navbar-right">
                <li><a href="{{URL::to('register')}}">sign up</a></li>
                <li><a href="{{URL::to('login')}}">log in</a></li>
            </ul> -->
        </div>
    </div>
</div>

    <!-- Site Content -->
<div class="container">

    <div class="row">
    <div class="col-md-6 col-md-offset-3">

      @if(Session::has('alertMessage'))
      <div class="alert alert-dismissable alert-success">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{Session::get('alertMessage')}}</strong>
      </div>
      @endif

      @if(Session::has('alertError'))
      <div class="alert alert-dismissable alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{Session::get('alertError')}}</strong>
      </div>
      @endif

      @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>{{ implode('', $errors->all(':message')) }}</strong>
                </div>
              @endif

      <div class="panel panel-default">
          <div class="panel-heading"><h3>Test Payment Form</h3></div>
              <div class="panel-body">
                  <form action="{{url('api/makepayment')}}" method="post" id="frm_send" name="frm_send">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                          <label for="inputPhone" class="control-label">Amount</label>
                          <div class="">
                              <input type="number" class="form-control" id="inputPhone" name="amount" placeholder="100" autofocus>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputPhone" class="control-label">Phone Number</label>
                          <div class="">
                              <input type="number" class="form-control" id="inputPhone" name="number" placeholder="6xxxxxxxxx">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="">
                              <!--<a href="{{URL::to('remind')}}" class="btn btn-danger">Forgot Password</a>-->
                              <button type="submit" class="btn btn-primary pull-right" onclick="ShowProgressAnimation();">Pay with MoMo</button>
                          </div>
                      </div>
                  </form>

                  <div id="loading-div-background">
                    <div id="loading-div" class="ui-corner-all">
                    <img src="{{url('assets')}}/img/gears.gif"><br><br>
                      <p>Processing ...<br>Check your phone to complete transaction</p>
                    </div>
                  </div>

              </div>
      </div>
  </div>
</div> <br /><br /><br />


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
