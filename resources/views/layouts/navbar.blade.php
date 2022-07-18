<!-- Header Section Start -->
<div class="header-section">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <!-- Header Logo (Header Left) Start -->
            <div class="header-logo col-auto">
                <a href="{{url('/')}}">
                    <img src="{{URL::asset('assets/images/logo/logo.png')}}" alt="">
                    <img src="{{URL::asset('assets/images/logo/logo-light.png')}}" class="logo-light" alt="">
                </a>
            </div><!-- Header Logo (Header Left) End -->
            <!-- Header Right Start -->
            <div class="header-right flex-grow-1 col-auto">
                <div class="row justify-content-between align-items-center">
                    <!-- Side Header Toggle & Search Start -->
                    <div class="col-auto">
                        <div class="row align-items-center">
                        </div>
                    </div><!-- Side Header Toggle & Search End -->
                    <!-- Header Notifications Area Start -->
                    <div class="col-auto">
                        <ul class="header-notification-area">
                            <!--User-->
                            <li class="adomx-dropdown col-auto">
                                <a class="toggle" href="#">
                                    <span class="user">
                                        <span class="avatar">
                                            <img src="{{URL::asset('assets/images/avatar/user.png')}}" alt="">
                                            <span class="status"></span>
                                        </span>
                                        <span class="name">{{ Auth::user()->name }}</span>
                                    </span>
                                </a>
                                <!-- Dropdown -->
                                <div class="adomx-dropdown-menu dropdown-menu-user">
                                    <div class="head">
                                        <h5 class="name"><a href="#">{{ Auth::user()->name }}</a></h5>
                                        <a class="mail" href="#">{{ Auth::user()->email }}</a>
                                    </div>
                                    <div class="body">
                                        <ul>
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-lock-open"></i>
                                                    logout
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- Header Notifications Area End -->
                </div>
            </div><!-- Header Right End -->
        </div>
    </div>
</div><!-- Header Section End -->
