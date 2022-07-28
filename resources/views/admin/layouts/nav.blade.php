<div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
        <img src="{{ asset('img/logo/logo.png') }}" class="avatar-sm rounded-circle mr-2" alt="{{ Auth::user()->firstName." ".Auth::user()->middleName." ".Auth::user()->lastName }}" />
        <img src="{{ asset('img/logo/logo.png') }}" class="avatar-xs rounded-circle mr-2" alt="{{ Auth::user()->firstName." ".Auth::user()->middleName." ".Auth::user()->lastName }}" />

        <div class="media-body">
            <h6 class="pro-user-name mt-0 mb-0">{{ Auth::user()->firstName." ".Auth::user()->middleName." ".Auth::user()->lastName }}</h6>
            <span class="pro-user-desc">Administrator</span>
        </div>
        <div class="dropdown align-self-center profile-dropdown-menu">
            <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
               aria-expanded="false">
                <span data-feather="chevron-down"></span>
            </a>
            <div class="dropdown-menu profile-dropdown">
                <a href="{{ route('admin.profile') }}" class="dropdown-item notify-item">
                    <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                    <span>My Account</span>
                </a>

{{--                <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                    <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>--}}
{{--                    <span>Settings</span>--}}
{{--                </a>--}}
                <div class="dropdown-divider"></div>

                <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i data-feather="home"></i>
{{--                        <span class="badge badge-success float-right">1</span>--}}
                        <span> Dashboard </span>
                    </a>
                </li>
                <li class="menu-title">Blog</li>
                <li>
                    <a target="_blank" href="{{ url('admin/blogs') }}">
                        <i data-feather="calendar"></i>
                        <span> Blog </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.contacts') }}">
                        <i data-feather="mail"></i>
                        <span> Enquiries(Contact Us) </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.newsletters') }}">
                        <i data-feather="at-sign"></i>
                        <span> Newsletter Emails </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.gallery.images') }}">
                        <i data-feather="image"></i>
                        <span> Gallery Images </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.gallery.videos') }}">
                        <i data-feather="youtube"></i>
                        <span> Gallery Videos </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.quotes') }}">
                        <i class="uil uil-comment-question"></i>
                        <span> Client Quotes </span>
                    </a>
                </li>


                <li class="menu-title">User Management</li>
                <li>
                    <a href="{{ route('admin.users') }}">
                        <i data-feather="users"></i>
                        <span> Users </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.users.create') }}">
                        <i data-feather="user-plus"></i>
                        <span> New User </span>
                    </a>
                </li>




                <li class="menu-title">Profile</li>
                <li>
                    <a href="{{ route('admin.profile') }}">
                        <i data-feather="user"></i>
                        <span> My Profile </span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>
