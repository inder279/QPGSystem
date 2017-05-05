@extends ('layouts.master')

@section('title')
QPG - Login or Signup
@endsection
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        QPG System
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="#">About <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Contact</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('signin')}}">Create an Account</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Login</p>
                <div class="list-group">
                    <a href="{{route('login')}}" class="list-group-item active">User</a>
                    <a href="{{route('coordinatorLogin')}}" class="list-group-item">Coordinator</a>
                    <a href="{{route('adminLogin')}}" class="list-group-item">Admin</a>
                </div>

            </div>
            
           
          
                <!--carousel-->
  <div class="col-md-9">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/carousel1.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption d-none d-md-block">
        <h3>Responsive</h3>
        <p>A responsive solution with even better smaller display support</p>
        </div>
      </div>

      <div class="item">
        <img src="img/carousel2.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption d-none d-md-block">
        <h3>Easy</h3>
        <p>Easy to understand user interface</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/carousel3.jpg" alt="New york" style="width:100%;">
        <div class="carousel-caption d-none d-md-block">
        <h3>Questions</h3>
        <p>Huge question bank </p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<!--end of carousel-->
            </div>
            </div>
            
            
@endsection