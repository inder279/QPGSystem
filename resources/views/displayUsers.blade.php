@extends ('layouts.master')
@section('title')
QPG - Admin interface
@endsection
@section('content')
<nav class="navbar navbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand active" href="{{route('adminHome')}}">Admin Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="#">Subjects <span class="sr-only">(current)</span></a></li>
        <li><a href="{{route('addQuestion')}}">Add a Question</a></li>
        <li><a href="#">Generate a Paper</a></li>
        <li><a href="{{route('displayUsers')}}">Users</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('home')}}">Log out</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
    </div>
</nav>


    <div class="container-fluid">
	    <div class="row ">
		<div col-md-6 col-md-offset-3>
		<h3>{{$users->total() }} total users</h3>
			<ul class="list-group">

				@foreach($users as $user)
				<li class="list-group-item" style="margin-top: 20px">
					<span>
						{{$user->first_name}} {{$user->last_name}}
					</span>
					<span class="pull-right clearfix">
					Joined({{$user->created_at->diffForHumans()}})
					<button class="btn btn-xs btn-primary" href="#">
						Set as a Coordinator
					</button>
					</span>
				</li>
				@endforeach
				{{$users->links()}}
			</ul>
		</div>
	</div>
</div>
  </div><!-- /.container-fluid -->
@endsection


