<!-- LOGO -->
<div class="topbar-left">
    <a href="/" class="logo"><span style="text-transform: capitalize;">{{auth()->user()->firstname}}</span></a>

    <!-- Image logo -->
    <!--<a href="index.html" class="logo">-->
        <!--<span>-->
            <!--<img src="assets/images/logo.png" alt="" height="30">-->
        <!--</span>-->
        <!--<i>-->
            <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
        <!--</i>-->
    <!--</a>-->
</div>

<!-- Button mobile view to collapse sidebar menu -->
<div class="navbar navbar-default" role="navigation">
    <div class="container">

        <!-- Navbar-left -->
        <ul class="nav navbar-nav navbar-left">
            <li>
                <button class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
        </ul>

        <!-- Right(Notification) -->
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown user-box">
                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                    <img src="{{asset('assets/images/user-image.ico')}}" alt="user-img" class="img-circle user-img">
                </a>

                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                    <li>
                        <h5>Hi, {{auth()->user()->firstname}} {{auth()->user()->lastname}}</h5>
                    </li>
                    <!-- <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li> -->
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="ti-power-off m-r-5"></i>Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>

        </ul> <!-- end navbar-right -->

    </div><!-- end container -->
</div><!-- end navbar -->
