 <!-- partial:partials/_navbar.html -->
 <nav class="navbar p-0 fixed-top d-flex flex-row">
     <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
         <a class="navbar-brand brand-logo-mini" href="/dash"><img src={{asset("images/logo/aaaaa(3).png")}} style="width: 2rem"
                 alt="logo" /></a>
     </div>
     <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
         <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
             <span class="mdi mdi-menu"></span>
         </button>
         <ul class="navbar-nav w-100">
             <li class="nav-item w-100">
                 <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                     {{-- <input type="text" class="form-control" placeholder="Search products"> --}}
                 </form>
             </li>
         </ul>
         <ul class="navbar-nav navbar-nav-right">
            
             <li class="nav-item dropdown">
                 <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                     <div class="navbar-profile">
                         <img class="img-xs rounded-circle" src={{ asset('img\team\user.png') }}
                             alt="">
                         <p class="mb-0 d-none d-sm-block navbar-profile-name">
                            @if (Session::get('adminname'))
                            {{Session::get('adminname')}}
                            @endif

                            @if (Session::get('ownername'))
                            {{Session::get('ownername')}}
                            @endif

                            @if (Session::get('coachname'))
                                {{Session::get('coachname')}}
                            @endif
                         </p>
                         <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                     </div>
                 </a>
                 <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                     aria-labelledby="profileDropdown">
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item preview-item" style="display: flix">
                         <div class="preview-thumbnail"  style="display: flix !important">
                          <span>
                             <div class="preview-icon bg-dark rounded-circle">
                                 <i class="mdi mdi-logout text-danger"></i>

                             </div>
                            
                                 <form action="dash/logout" method="POST" style="display: inline-block">
                                    @csrf
                                     <div class="preview-item-content">
                                         <input class="preview-subject mb-1" type="submit" value="Log Out">

                                     </div>
                                 </form>
                             </span>

                         </div>

                     </a>
                     <div class="dropdown-divider"></div>

                 </div>
             </li>
         </ul>
         <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
             data-toggle="offcanvas">
             <span class="mdi mdi-format-line-spacing"></span>
         </button>
     </div>
 </nav>
