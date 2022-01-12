<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div><img src="{{auth()->user()->profile_photo_url}}" alt="user-img" class="img-circle"></div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">
                        {{auth()->user()->first_name . " ". auth()->user()->last_name}}
                         <span class="caret"></span></a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="{{route('users.show',auth()->user())}}" class="dropdown-item"><i class="ti-user"></i> My
                            Profile</a>
                        <!-- text-->
                        <a href="{{route('payments.index')}}" class="dropdown-item"><i class="ti-wallet"></i> My
                            Balance</a>
                        <!-- text-->
                        <a href="{{route('issues.index')}}" class="dropdown-item"><i class="ti-email"></i>
                            Inbox</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="{{route('users.show',auth()->user())}}" class="dropdown-item"><i class="ti-settings"></i>
                            Account Setting</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                       
                        <form action="{{route('logout')}}" method="post" class="dropdown-item">
                            @csrf
                            <button><i class="fa fa-power-off"></i>Logout</button>
                        </form>

                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">--- PERSONAL</li>
                <li> <a class="waves-effect waves-dark" href="index.html"><i class="icon-speedometer"></i><span
                            class="hide-menu">Dashboard</span></a>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-layout-grid2"></i><span class="hide-menu">Chama</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('chamas.index')}}">Chama</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"> <i
                            class="ti-bar-chart"></i> <span class="hide-menu">Payments</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('payments.index')}}">View Payment</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-palette"></i><span class="hide-menu">Meeting </a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="{{route('meetings.index')}}">View Mettings</a></li>
                        <li><a href="#">Create Meeting</a></li>
                    </ul>
                </li>
                <li class="nav-small-cap">--- Proffessional</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-star"></i><span class="hide-menu">Events</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{route('event.index')}}">All Events</a></li>
                        <li> <a href="{{route('event.create')}}">Add Event</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-email"></i><span class="hide-menu">Issues</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{route('issues.index')}}">Report Issue!</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-user"></i><span class="hide-menu">Members</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{route('users.index')}}">All Users</a></li>
                        <li> <a href="{{route('users.create')}}">Add User</a></li>
                    </ul>
                </li>
             

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
