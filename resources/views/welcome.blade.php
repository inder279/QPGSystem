@extends ('layouts.master')

@section('title')
QPG - Login or Signup
@endsection
@section('content')

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

            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="http://resultncutoff.in/wp-content/uploads/2015/03/maths-ftr.jpg" alt="">
                    <div class="caption-full">
                        
                        <h4><a href="#">Gnenerate a question paper</a>
                        </h4>
                        <p>Easily generate a question paper by registering as a user. </p>
                        </div>
                </div>
            </div>
            </div>
            </div>
@endsection