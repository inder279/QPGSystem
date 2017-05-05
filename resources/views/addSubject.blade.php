@extends ('layouts.master')
@section('title')
Add Question
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
      <a class="navbar-brand" href="{{route('admin')}}">Admin Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="#">Subjects <span class="sr-only">(current)</span></a></li>
        <li><a href="{{route('addQuestion')}}">Add Question</a></li>
        <li><a href="{{route('addQuestion')}}">Add Subject</a></li>
        <li><a href="{{route('paperForm')}}">Generate a Paper</a></li>
        <li><a href="{{route('displayUsers')}}">Users</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a class="active" href="{{route('home')}}">Log out</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<section class="row new-post">
	<div class ="col-md-6 col-md-offset-3">
	<header><h3>New subject</h3></header>
		<form action="{{route('saveSubject')}}" method="post">
			<div class = "form-group">
				<label for="email">Add new subject </label>
            <input class = "form-control" type="text" name="subject_name" id="subject_name">
      </div>
			   <button type="submit" class="btn btn-primary">Add Subject</button>
      <input type="hidden" name="_token" value = "{{Session::token()}}">
		</form>

	</div>
	</section>

@endsection