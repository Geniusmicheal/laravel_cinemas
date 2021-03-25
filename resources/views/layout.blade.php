<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

   <!-- index14:58-->
   <head>
      <!-- Basic need -->
      <title>Open Pediatrics</title>
      <meta charset="UTF-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="">
      <link rel="profile" href="geniusmicheal">

      <!--Google Font-->
      <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
      <!-- Mobile specific meta -->
      <meta name=viewport content="width=device-width, initial-scale=1">
      <meta name="format-detection" content="telephone-no">

      <!-- CSS files -->
      <link rel="stylesheet" href="{{ asset('/css/plugins.css') }}">
      <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
      <style>
         .img{
    vertical-align: middle;
    width: 80px;
    height: 54px;
}

          /* #navbardrop{ display: none;} */
    /* .dropdown-menu a{padding-left: 30px !important;}
    .dropdown-menu{
        display: block;
        padding:0;
        margin: 0px 0px 0px -10px;
        background-color:transparent;
        position: relative !important;
        border:none;
    } */


    .msg-detail img{
    float: left;
    width: 35px;
    position: relative;
    border-radius: 100%;
    height: 35px;
}
.msg-detail .usr-info{
    float: left;
    padding-left: 13px;
    margin-top: 4px;
}
.msg-detail .usr-info h3{
    font-size: 12px;
    color: #000000;
    font-weight: 600;
}
.msg-detail .usr-info h3 , .msg-detail .usr-info p{
    margin: 0;
    padding: 0;
}
.msg-detail .usr-info p{
    font-size: 12px;
    color: #686868;
}

      </style>

   </head>
   <body>
      <!--preloading-->
      <div id="preloader">
         <img class="logo" src="{{ asset('/images/logo1.png') }}" alt="" width="119" height="58">
         <div id="status">
            <span></span>
            <span></span>
         </div>
      </div>
      <!--end of preloading-->

      @if(!auth()->guard('web')->check())
      <!--login form popup-->
      <div class="login-wrapper" id="login-content">
         <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>Login</h3>
            <form method="post" action="{{ route('userlogin')}}" >
               {{ csrf_field() }}  
               <div class="row">
                  <label for="username">
                        Email:
                        <input type="email" name="email" id="username" placeholder="Hugh Jackman" required="required" />
                     </label>
               </div>
               
                  <div class="row">
                     <label for="password">
                        Password:
                        <input type="password" name="password" id="password" placeholder="******" required="required" />
                     </label>
                  </div>
                  <div class="row">
                     <div class="remember">
                     <div>
                        <input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
                     </div>
                        <a href="#">Forget password ?</a>
                     </div>
                  </div>
               <div class="row">
                  <button type="submit">Login</button>
               </div>
            </form>
         </div>
      </div>
      <!--end of login form popup-->

      
      <!--signup form popup-->
      <div class="login-wrapper"  id="signup-content">
         <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>sign up</h3>
            <form method="post" action="{{ route('usersignup')}}" >
               {{ csrf_field() }} 
               <div class="row">
                  <label for="username-2">
                     Username:
                     <input type="text" name="username" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                  </label>
               </div>
            
               <div class="row">
                  <label for="email-2">
                     your email:
                     <input type="email" name="email" id="email-2" placeholder="eaxmple@gmail.com" required="required" />
                  </label>
               </div>

               <div class="row">
                  <label for="password-2">
                     Password:
                     <input type="password" name="password"  required="required" />
                  </label>
               </div>
               <div class="row">
                  <label for="repassword-2">
                     re-type Password:
                     <input type="password" name="password_confirmation"  required="required" />
                  </label>
               </div>
               <div class="row">
                  <button type="submit">sign up</button>
               </div>
            </form>
         </div>
      </div>
      <!--end of signup form popup-->
      @endif
      

      <!-- BEGIN | Header -->
      <header class="ht-header">
         <div class="container">
            <nav class="navbar navbar-default navbar-custom">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header logo">
                     <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <div id="nav-icon1">
                           <span></span>
                           <span></span>
                           <span></span>
                        </div>
                     </div>
                     <a href="/"><img class="logo" src="/images/logo1.png" alt="" width="119" height="58"></a>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                     <ul class="nav navbar-nav flex-child-menu menu-left">
                        <li class="hidden">
                           <a href="#page-top"></a>
                        </li>
                        <li class="dropdown first">
                           <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                           movies<i class="fa fa-angle-down" aria-hidden="true"></i>
                           </a>
                           <ul class="dropdown-menu level1">	
                              @if(auth()->guard('web')->check())
                                 <li><a href="{{ route('addmovie') }}">Add Movie</a></li> 
                              @endif
                              <li><a href="{{ route('movies') }}">Movie list</a></li>
                           </ul>
                        </li>
                        @if(auth()->guard('web')->check())
                           <li class="dropdown first">
                              <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                              Location <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </a>
                              <ul class="dropdown-menu level1">
                                 <li><a href="{{ route('addlocation') }}">Add Location</a></li>
                                 <li><a href="{{ route('location') }}">Location </a></li>
                              </ul>
                           </li>

                           <li class=" first">
                              <a href="{{ route('addshowtime') }}">Add Showtime</a>
                           </li>
                        @endif
                        
                     </ul>
                     <ul class="nav navbar-nav flex-child-menu menu-right">

                        @if(!auth()->guard('web')->check())
                           <li class="loginLink"><a href="#">LOG In</a></li>
                           <li class="btn signupLink"><a href="#">sign up</a></li>
                        @endif
                        @if(auth()->guard('web')->check())
                           <li class="dropdown first">
                              <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown">
                                 {{ auth()->guard('web')->user()->name }} 
                                 <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </a>
                              <ul class="dropdown-menu level1">
                                 <li><a href="{{ route('logout') }}">Logout</a></li>
                              </ul>
                           </li>
                        @endif
                     </ul>
                  </div>
               <!-- /.navbar-collapse -->
            </nav>
            
            <!-- top search form -->
            <div class="top-search" style="border: none;">
               <?=(Session::get('error') != NULL )? '<div class="alert alert-danger" style="width: 100%;">'.Session::get('error').'</div>':'' ?>
               @if($errors->any())
                  <br>
                  <div class="alert alert-danger " style="width: 100%;">
                     <ul>
                           @foreach($errors->all() as $error)
                              <li style="padding: 0px; float: none;">{{ $error }}</li>
                           @endforeach
                     </ul>
                  </div>
               @endif

               @if ($message = Session::get('success'))
                  <div class="alert alert-success" style="width: 100%;">
                        
                        {{ $message }}
                  </div>
               @endif
            </div>
         </div>
      </header>
      <!-- END | Header -->

      @yield('content')

      <!-- footer section-->
      <footer class="ht-footer">
         <div class="container">
            <div class="flex-parent-ft">
               <div class="flex-child-ft item1">
                  <a href="index-2.html"><img class="logo" src="/images/logo1.png" alt=""></a>
                  <p>5th Avenue st, manhattan<br>
                  New York, NY 10001</p>
                  <p>Call us: <a href="#">(+234)9066338061</a></p>
               </div>
               <div class="flex-child-ft item2">
                  <h4>Resources</h4>
                  <ul>
                     <li><a href="#">About</a></li> 
                     <li><a href="#">Blockbuster</a></li>
                     <li><a href="#">Contact Us</a></li>
                     <li><a href="#">Forums</a></li>
                     <li><a href="#">Blog</a></li>
                     <li><a href="#">Help Center</a></li>
                  </ul>
               </div>
               <div class="flex-child-ft item3">
                  <h4>Legal</h4>
                  <ul>
                     <li><a href="#">Terms of Use</a></li> 
                     <li><a href="#">Privacy Policy</a></li>	
                     <li><a href="#">Security</a></li>
                  </ul>
               </div>
               <div class="flex-child-ft item4">
                  <h4>Account</h4>
                  <ul>
                     <li><a href="#">My Account</a></li> 
                     <li><a href="#">Watchlist</a></li>	
                     <li><a href="#">Collections</a></li>
                     <li><a href="#">User Guide</a></li>
                  </ul>
               </div>
               <div class="flex-child-ft item5">
                  <h4>Newsletter</h4>
                  <p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
                  <form action="#">
                     <input type="text" placeholder="Enter your email...">
                  </form>
                  <a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
               </div>
            </div>
         </div>
         <div class="ft-copyright">
            <div class="backtotop">
               <p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
            </div>
         </div>
      </footer>
      <!-- end of footer section-->

      <script src="{{ asset('js/jquery.js') }}"></script>
      <script src="{{ asset('js/plugins.js') }}"></script>
      <script src="{{ asset('js/plugins2.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
   </body>
   <!-- index14:58-->
</html>
