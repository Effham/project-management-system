<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="{{asset('/img/ali.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">{{auth()->user()->name}}</h1>
        <p>Founder</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
      <li ><a href="/home"> <i class="icon-home"></i>Home </a></li>
      <li><a href="/clients/create"> <i class="icon-user"></i>Clients </a></li>
      <li><a href="/projects"> <i class="fa fa-tasks"></i>Projects </a></li>
      <li><a href="/services/create"> <i class="icon-settings"></i>Services</a></li>

    {{-- </ul><span class="heading">Extras</span>
    <ul class="list-unstyled">
      <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
      <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
      <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
    </ul> --}}
  </nav>
