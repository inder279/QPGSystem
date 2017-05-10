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
                          <li class="active"><a class="active" href="{{route('addSubjectView')}}">Add a subject</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="glyphicon glyphicon-question-sign"></i>
                          <span>Questions</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="{{route('addQuestion')}}">Add a question</a></li>
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
</section>
</section>
@endsection