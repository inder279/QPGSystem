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
        <li><a href="{{route('addQuestion')}}">Add a Question</a></li>
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
	<header><h3>Add new question</h3></header>
		<form action="{{route('saveQuestion')}}" method="post">

    <label for="Subject">Select the subject</label>
    <select class="form-control" name="subject_name">
        @foreach($subjects as $subject)
          <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option>
        @endforeach
      </select>


			<div class = "form-group">
      <label for="question">Input question here</label>
				<textarea class="form-control" name="question" id ="question" rows = "3" placeholder ="Type here a new question"></textarea>
			</div>

      <header><h4>Input answers if the question is a MCQ</h4></header> 

      <div class="form-group ">
            <label for="answer1">Answer 1</label>
            <input class = "form-control" type="text" name="answer1" id="answer1" value="">
      </div>

      <div class="form-group ">
            <label for="answer2">Answer 2</label>
            <input class = "form-control" type="text" name="answer2" id="answer2" value="">
      </div>

      <div class="form-group ">
            <label for="answer3">Answer 3</label>
            <input class = "form-control" type="text" name="answer3" id="answer3" value="">
      </div>

      <div class="form-group ">
            <label for="answer4">Answer 4</label>
            <input class = "form-control" type="text" name="answer4" id="answer1" value="">
      </div>
			<button type="submit" class="btn btn-primary">Save Question</button>
      <input type="hidden" name="_token" value = "{{Session::token()}}">
		</form>

	</div>
	</section>

@endsection