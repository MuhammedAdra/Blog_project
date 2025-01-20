 <!--================Header Menu Area =================-->
 <header class="header_area shadow-sm py-3">
     <div class="main_menu">
         <nav class="navbar navbar-expand-lg navbar-light bg-white">
             <div class="container">
                 <!-- Logo -->
                 <a class="navbar-brand logo_h" href="{{ route('them.index') }}">
                     <img src="{{ asset('assets') }}/img/logo.png" alt="Logo" class="img-fluid"
                         style="max-height: 50px;">
                 </a>
                 <!-- Mobile Menu Toggle -->
                 <button class="navbar-toggler" type="button" data-toggle="collapse"
                     data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                     aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>

                 <!-- Navigation Links -->
                 <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                     <ul class="navbar-nav mx-auto">
                         <li class="nav-item @yield('home-active')">
                             <a class="nav-link text-dark hover-yellow font-weight-bold"
                                 href="{{ route('them.index') }}">
                                 Home
                             </a>
                         </li>
                         <li class="nav-item @yield('categories-active') dropdown">
                             <a href="#" class="nav-link dropdown-toggle text-dark hover-yellow font-weight-bold"
                                 data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                 Categories
                             </a>
                             <ul class="dropdown-menu shadow">
                                 <li class="nav-item">
                                     <a class="dropdown-item text-muted" href="{{ route('them.category') }}">Food</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="dropdown-item text-muted"
                                         href="{{ route('them.category') }}">Business</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="dropdown-item text-muted" href="{{ route('them.category') }}">Travel</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item @yield('contact-active')">
                             <a class="nav-link text-dark hover-yellow font-weight-bold"
                                 href="{{ route('them.contact') }}">
                                 Contact
                             </a>
                         </li>
                     </ul>

                     <!-- Add New Blog Button -->
                     <a href="#" class="btn btn-primary btn-sm rounded-pill px-4 shadow">
                         <i class="fas fa-plus"></i> Add New
                     </a>

                     <!-- User Actions -->
                     <ul class="navbar-nav">
                         @if (!Auth::check())
                             <a href="{{ route('register') }}" class="btn btn-warning btn-sm rounded-pill px-4 shadow">
                                 <i class="fas fa-user"></i> Register / Login
                             </a>
                         @else
                             <li class="nav-item dropdown">
                                 <a href="#"
                                     class="nav-link dropdown-toggle text-dark hover-yellow font-weight-bold"
                                     data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                     <i class="fas fa-user-circle"></i> {{ Auth::user()->name }}
                                 </a>
                                 <ul class="dropdown-menu dropdown-menu-right shadow">
                                     <li class="nav-item">
                                         <a class="dropdown-item text-muted" href="blog-details.html">
                                             <i class="fas fa-blog"></i> My Blogs
                                         </a>
                                     </li>
                                     <li class="nav-item">
                                         <form action="{{ route('logout') }}" method="post" id="logout_form">
                                             @csrf
                                             <a class="dropdown-item text-muted"
                                                 href="javascript:$('form#logout_form').submit();">
                                                 <i class="fas fa-sign-out-alt"></i> Logout
                                             </a>
                                         </form>
                                     </li>
                                 </ul>
                             </li>
                         @endif
                     </ul>
                 </div>
             </div>
         </nav>
     </div>
 </header>

 <!-- Custom CSS -->
 <style>
     body {
         font-family: 'Roboto', 'Open Sans', sans-serif;
     }

     .hover-yellow:hover {
         color: #f0ad4e !important;
     }

     .dropdown-menu {
         border-radius: 8px;
         overflow: hidden;
     }

     .btn {
         transition: all 0.3s ease;
     }

     .btn:hover {
         transform: scale(1.05);
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
     }

     .navbar-nav .nav-link {
         transition: color 0.3s ease;
     }

     .navbar-toggler-icon {
         background-image: url('data:image/svg+xml;charset=UTF8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="black"><path stroke="rgba(0, 0, 0, 0.5)" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/></svg>');
     }
 </style>




 <!--================Header Menu Area =================-->
