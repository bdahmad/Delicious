<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{asset('admin')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/css/style.css">
</head>

<body>
    <header>
        <div class="container-fluid header_part">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-7"></div>
                <div class="col-md-3 top_right_menu text-end">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle top_right_btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('admin')}}/images/avatar.png" class="img-fluid">
                            {{Auth::user()->name}}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i> My Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Manage Account</a></li>
                            <li><a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </header>
    <section>
        <div class="container-fluid content_part">
            <div class="row">
                <div class="col-md-2 sidebar_part">
                    <div class="user_part">
                        <img class="" src="{{asset('admin')}}/images/avatar.png" alt="avatar" />
                        <h5>{{Auth::user()->name}}</h5>
                        <p><i class="fas fa-circle"></i> Online</p>
                    </div>
                    <div class="menu">
                        <ul>
                            <li><a href="{{route('admin.dashboard')}}"><i class="fas fa-home"></i> Dashboard</a></li>
                            <li><a href="{{route('admin.user')}}"><i class="fas fa-user-circle"></i> Users</a></li>
                            <li>
                                <a href="#"><i class="fas fa-user-circle"></i> Manage</a>
                                <ul>
                                    <li><a href="{{route('basic')}}">Basic</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                    <li><a href="{{route('social')}}">Social Media</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-user-circle"></i> Menu</a>
                                <ul>
                                    <li><a href="{{route('menu')}}">Menu</a></li>
                                    <li><a href="{{route('menu.category')}}">Category</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-user-circle"></i> Special</a>
                                <ul>
                                    <li><a href="{{route('special')}}">Special</a></li>
                                    <li><a href="{{route('special.category')}}">Category</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('book')}}"><i class="fas fa-images"></i> Book Table</a></li>
                            <li><a href="{{route('event')}}"><i class="fas fa-images"></i> Event</a></li>
                            <li><a href="{{route('gallery')}}"><i class="fas fa-images"></i> Gallery</a></li>
                            <li><a href="{{route('slider')}}"><i class="fas fa-images"></i> Banner</a></li>
                            <li><a href="{{route('why')}}"><i class="fas fa-images"></i> Why Us</a></li>
                            <li><a href="#"><i class="fas fa-comments"></i> Contact Message</a></li>
                            <li><a href="{{route('front')}}"><i class="fas fa-globe"></i> Live Site</a></li>
                            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10 content">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid footer_part">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10 copyright">
                    <p>Copyright &copy; 2022 | All rights reserved by Dashboard | Development By <a href="#">Creative System Limited.</a></p>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </footer>
    <script src="{{asset('admin')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('admin')}}/js/custom.js"></script>
    <script src="{{asset('admin')}}/js/jquery-3.6.0.min.js"></script>
    
</body>

</html>