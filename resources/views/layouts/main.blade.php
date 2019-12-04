<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Portofolio</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- navbar -->

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="#home" class="navbar-brand page-scroll">Laurensiusaint</a>


            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="nav-item nav-link" href="#about" class="page-scroll">About</a></li>
                    <li><a class="nav-item nav-link" href="#portofolio" class="page-scroll">Portofolio</a></li>
                    <li><a class="nav-item nav-link" href="#skill" class="page-scroll">Skills</a></li>
                    <div class="underbar"></div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    @yield('content')


    <!-- footer -->
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p> Copyright 2019 | built with <i class="glyphicon glyphicon-heart"></i> by <a
                            href="http://instagram.com/Laurensiusaint">Laurensius Nusatrio</a>.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="https://www.instagram.com/Laurensiusaint/?hl=id" class="btn btn-success"> <i
                            class="glyphicon glyphicon-user"></i>Follow My Instagram</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- akhir footer -->





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>
