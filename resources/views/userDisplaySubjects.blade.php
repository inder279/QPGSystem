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
                            <span class="username">Sankaja</span>
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
                  <li >
                      <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                         
                  <li class="sub-menu active">
                      <a href="javascript:;" class="">
                          <i class="glyphicon glyphicon-book"></i>
                          <span>Subjects</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a class="" href="#">View Subjects</a></li>
                          
                      </ul>
                  </li>
                   
                  <li>
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
  <div class="container">
      <div class="row align-middle">
      <div col-md-6 col-md-offset-3>
      <h3>Subjects registered in the system</h3>
      
    <ul class="list-group">

        @foreach($subjects as $subject)
        <div class="col-sm-12">
        <li class="list-group-item col-sm-10" style="margin-top: 20px; color:black; text-align: left;">
          <span>
            <b>Id : </b>{{$subject->subject_id}}   <b>Subject : </b>{{$subject->subject_name}} 
          </span>
          <span class="pull-right clearfix">
          Added  ({{$subject->created_at->diffForHumans()}})
          <a href="{{route('home')}}"><button class="btn btn-xs btn-primary">
            Options
          </button>
          </a>
          </span>
        </li>
        </div>
        @endforeach
        {{$subjects->links()}}
      </ul>
      
</div>
</div>
</div>
</section>
</section>
</section>
      @endsection