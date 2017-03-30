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

<div class="dropdown" align="right">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">User Login
  <span class="caret"></span></button>
  <ul class="dropdown-menu dropdown-menu-right">
    <li><a href="{{route('login')}}">User</a></li>
    <li><a href="{{route('adminLogin')}}">Admin</a></li>
    <li><a href="{{route('coordinatorLogin')}}">Coordinator</a></li>
  </ul>
</div>
@endsection