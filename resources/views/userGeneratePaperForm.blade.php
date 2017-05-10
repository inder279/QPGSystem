@extends ('layouts.master')
@section('title')
QPG - User interface
@endsection
@section('content')
<!-- container section start -->
  <section id="container" class="">
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="{{route('admin')}}" class="logo">QPG <span class="lite">User</span></a>
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
                            <span class="username">User</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                           <li>
                                <a href="{{route('userLogOut')}}"><i class="icon_key_alt"></i> Log Out</a>
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
                  <li>
                      <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                         
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="glyphicon glyphicon-book"></i>
                          <span>Subjects</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{{route('userDisplaySubjects')}}">View Subjects</a></li>
                          
                      </ul>
                  </li>
                   
                  <li class="active">
                      <a class="" href="">
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
          <header><h3>Enter below details to generate a paper</h3></header>
            <form action="{{route('generatePaper')}}" method="post">
            
            
              <select class="form-control" name="subject_name">
                @foreach($subjects as $subject)
                  <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option>
                @endforeach
              </select>



      <div class="form-group ">
            <label for="num_questions">Number of questions needed</label>
            <input class = "form-control" type="text" name="num_questions" id="num_questions" value="">
      </div>

      <button type="submit" class="btn btn-primary">Generate</button>
      <input type="hidden" name="_token" value = "{{Session::token()}}">
    </form>

  </div>

 
      

    
  </section>
      </section>
      <!--sidebar end-->

   
@endsection