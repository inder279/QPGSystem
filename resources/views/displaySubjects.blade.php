@extends ('layouts.master')
@section('title')
QPG - User interface
@endsection
@section('content')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('user')}}">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Subjects <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Generate a Paper</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('userLogOut')}}">Log out</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

  <div class="container-fluid">
      <div class="row ">
      <div col-md-6 col-md-offset-3>
      <h3>Subjects registered in the system</h3>

    <ul class="list-group">

        @foreach($subjects as $subject)
        <li class="list-group-item" style="margin-top: 20px">
          <span>
            <b>Id : </b>{{$subject->subject_id}}   <b>Subject : </b>{{$subject->subject_name}} 
          </span>
          <span class="pull-right clearfix">
          Added  ({{$subject->created_at->diffForHumans()}})
          <button class="btn btn-xs btn-primary" href="#">
            Options
          </button>
          </span>
        </li>
        @endforeach
        {{$subjects->links()}}
      </ul>
</nav>
@endsection