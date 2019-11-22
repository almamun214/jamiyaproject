<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
        <div class="top-left-part"><a class="logo" href="/"><b><img src="/adminAssets/plugins/images/eliteadmin-logo.png" alt="home" /></b><span class="hidden-xs"><strong>জামিয়া সাঈদিয়া </strong></span></a></div>
        <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>

        </ul>



        <ul class="nav navbar-top-links navbar-right pull-right">

            <!-- /.dropdown -->

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="/"> <b class="hidden-xs">{{ Auth::user()->name }}</b> </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li><a href="javascript:void(0)"><i class="ti-user"></i>  My Profile</a></li>


                    <li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
            <!-- /.dropdown -->
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>