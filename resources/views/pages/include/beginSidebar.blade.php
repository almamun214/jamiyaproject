<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-light " data-keep-expanded="false"
            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->


            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Applicant</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">


                    <li class="nav-item  ">
                        <a href="{{ route('applicantCreate') }}" class="nav-link ">
                            <span class="title">Admission Form</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('applicantList')}}" class="nav-link ">
                            <span class="title">Applicant list</span>
                        </a>
                    </li>


                </ul>
            </li>

            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Student</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">


                    <li class="nav-item  ">
                        <a href="{{ route('currentStudent') }}" class="nav-link ">
                            <span class="title">Current Student List</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('oldStudent')}}" class="nav-link ">
                            <span class="title">Student list</span>
                        </a>
                    </li>


                </ul>
            </li>

            <li class="nav-item  ">
                <a href="{{route('addTeacher')}}" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Teacher Add</span>

                </a>

            </li>

            <li class="nav-item  ">
                <a href="{{route('addStaff')}}" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Staff Add</span>

                </a>

            </li>

            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Role And User</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">


                    <li class="nav-item  ">
                        <a href="{{ route('users.index') }}" class="nav-link ">
                            <span class="title">Manage Users</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('roles.index') }}" class="nav-link ">
                            <span class="title">Manage Role</span>
                        </a>
                    </li>


                </ul>
            </li>


            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Manage Account</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">

                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <span class="title">Accounts Transaction</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="{{route('paymentVoucer')}}" class="nav-link ">payment Voucher</a>
                            </li>
                            <li class="nav-item ">
                                <!--<a href="" class="nav-link ">Receive Voucher</a>-->
                            </li>
                            <li class="nav-item ">
                                <!--<a href="" class="nav-link ">Journal Voucher</a>-->
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <span class="title">Account Setup</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="{{route('chartOfAccount')}}" class="nav-link "> Chart Of Account </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{route('chartOfAccountList')}}" class="nav-link "> View Chart of Account </a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </li>


        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
