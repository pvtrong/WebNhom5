<nav class="dark-mode navbar navbar-expand navbar-light topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
                            

    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <h3 class="font-weight-bold ml-4">
        {{$category->name}}
        </h3>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                

        <!-- Nav Item - Alerts -->
        <li class="dark-mode nav-item dropdown no-arrow mx-1">
            <a class="dark-mode nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="dark-mode fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
                                    
        </li>

        <!-- Nav Item - Messages -->
        <li class="dark-mode nav-item dropdown no-arrow mx-1">
            <a class="dark-mode nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="dark-mode dark-mode fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
            </a>
            <!-- Dropdown - Messages -->
                                    
        </li>


        <!-- Nav Item - User Information -->
        <li class="dark-mode nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="dark-mode mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                <img class="img-profile rounded-circle" src='upload/<?php if($hinh == null) echo "avatar.jpg"; else {if (Auth::user()->category == 1) echo "company/".$hinh; elseif(Auth::user()->category == 2) echo "teacher/".$hinh; else echo "student/".$hinh;} ?>'>

            </a>
            
            <!-- Dropdown - User Information -->
            <div class="dark-mode dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dark-mode dropdown-item" href="./Pages/Setting">
                    <i class="dark-mode fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Thiết Lập
                </a>
            <a class="dark-mode dropdown-item" href="{{route('get-help')}}">
                    <i class="dark-mode fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Trợ Giúp
                </a>
                <div class="dark-mode custom-control custom-switch">
                    <i class="dark-mode fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    <input type="checkbox" class="custom-control-input" id="darkSwitch">
                
                    <label class="custom-control-label" for="darkSwitch">Nền tối</label>
                    
                </div>
                <a class="dark-mode dropdown-item" href="{{route('logout')}}">
                    <i class="dark-mode fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Đăng Xuất
                </a>
            </div>
        </li>

    </ul>

</nav>
