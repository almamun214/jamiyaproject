<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"> <i
                                                    class="fa fa-search"></i> </button>
                                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li class="user-pro">
                <a href="#" class="waves-effect"><img src="/adminAssets/plugins/images/users/1.jpg" alt="user-img"
                                                      class="img-circle"> <span class="hide-menu">{{ Auth::user()->name }}
                        <span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>

                    <li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>


            <li>
                <a href="#" class="waves-effect"><i data-icon="F" class="fa fa-graduation-cap"></i> <span
                            class="hide-menu">Applicant</span><i class="fa arrow hide-menu pull-right"></i></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('applicantCreate') }}">Admission Form</a></li>
                    <li><a href="{{route('applicantList')}}">Applicant list</a></li>

                </ul>
            </li>

            <li>
                <a href="#" class="waves-effect"><i data-icon="F" class="fa fa-graduation-cap"></i> <span
                            class="hide-menu">Student</span><i class="fa arrow hide-menu pull-right"></i></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('currentStudent') }}">Current Student List</a></li>
                    <li><a href="{{route('oldStudent')}}">Student list</a></li>
                    <li><a href="s-studentlist.html">Student list</a></li>
                    <li><a href="s-failed-studentlist.html">Failed Student list</a></li>

                    <li><a href="s-ex-studentlist.html">Ex student list</a></li>
                    <li><a href="s-guardianlist.html">Guardian List</a></li>
                </ul>
            </li>


            <li>
                <a href="#" class="waves-effect"><i data-icon="F" class="fa fa-graduation-cap"></i> <span
                            class="hide-menu">Teacher</span><i class="fa arrow hide-menu pull-right"></i></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{route('addTeacher')}}">Teacher Add</a></li>


                </ul>
            </li>

            <li>
                <a href="#" class="waves-effect"><i data-icon="F" class="fa fa-graduation-cap"></i> <span
                            class="hide-menu">Staff</span><i class="fa arrow hide-menu pull-right"></i></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{route('addStaff')}}">Staff Add</a></li>


                </ul>
            </li>


            <li>
                <a href="#" class="waves-effect"><i data-icon="F" class="icon-people"></i> <span class="hide-menu">Role And User </span><i
                            class="fa arrow hide-menu pull-right"></i></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('users.index') }}" class="waves-effect">Manage Users</a>


                    </li>


                    <li><a href="{{ route('roles.index') }}">Manage Role</a></li>

                </ul>
            </li>


            <li>
                <a href="#" class="waves-effect"><i data-icon="F" class="fa fa-graduation-cap"></i> <span
                            class="hide-menu">Sessions</span><i class="fa arrow hide-menu pull-right"></i></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{route('sessionsCreate')}}">Sessions Add</a></li>
                    <li><a href="{{route('sessionsList')}}">Sessions List</a></li>

                </ul>
            </li>

            <li>
                <a href="#" class="waves-effect"><i data-icon="F" class="fa fa-graduation-cap"></i> <span
                            class="hide-menu"> Manage Account </span><i class="fa arrow hide-menu pull-right"></i></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{route('chartOfAccount')}}">chart Of Account</a></li>


                </ul>
            </li>

            <li>
                <a href="login.html" class="waves-effect"><i class="icon-logout"></i> <span
                            class="hide-menu">Log out</span></a></li>
        </ul>
    </div>
</div>