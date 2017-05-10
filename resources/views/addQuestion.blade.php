@extends ('layouts.master')
@section('title')
Add Question
@endsection
@section('content')
<!-- container section start -->
  <section id="container" class="">
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="{{route('admin')}}" class="logo">QPG <span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/admin_icon.png">
                            </span>
                            <span class="username">Sankaja</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                           <li>
                                <a href="{{route('adminLogOut')}}"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
          <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="glyphicon glyphicon-user"></i>
                          <span>Users</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{{route('displayUsers')}}">Normal users</a></li>                          
                          <li><a class="" href="#">Coordinators</a></li>
                      </ul>
                  </li>
                         
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="glyphicon glyphicon-book"></i>
                          <span>Subjects</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{{route('displaySubjects')}}">View Subjects</a></li>
                          <li><a class="" href="{{route('addSubjectView')}}">Add a subject</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="glyphicon glyphicon-question-sign"></i>
                          <span>Questions</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="active" href="{{route('addQuestion')}}">Add a question</a></li>
                      </ul>
                  </li> 
                  <li>
                      <a class="" href="{{route('paperForm')}}">
                          <i class="icon_documents_alt"></i>
                          <span>Generate a paper</span>
                      </a>
                  </li>
                 
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <section id="main-content">
          <section class="wrapper">
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
  </section>
  </section>
  

@endsection