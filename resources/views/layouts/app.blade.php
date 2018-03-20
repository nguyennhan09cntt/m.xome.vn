
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Xome.vn - Cho thue phong tro, nha nguyen can, tim nguoi o ghep</title>
    <meta content="IE=edge" http-equiv="x-ua-compatible">
    <meta content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Icons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" media="all" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="/css/keyframes.css" rel="stylesheet" type="text/css">
    <link href="/css/materialize.min.css" rel="stylesheet" type="text/css">
    <link href="/css/swiper.css" rel="stylesheet" type="text/css">
    <link href="/css/swipebox.min.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="m-scene" id="main"> <!-- Main Container -->

      <!-- Sidebars -->
     
      <!-- Left Sidebar -->
      <ul id="slide-out-left" class="side-nav collapsible">
        <li>
          <div class="sidenav-header primary-color">
            <div class="nav-social">
              <i class="ion-social-facebook"></i>
              <i class="ion-social-twitter"></i>
              <i class="ion-social-tumblr"></i>
            </div>
            <div class="nav-avatar">
              <img class="circle avatar" src="/img/logo.png" alt="">
              <div class="avatar-body">
                <h3>Xome.vn</h3>
                <p>Kênh tìm kiếm phòng trọ</p>
              </div>
            </div>
          </div>
        </li>
        <li><a href="/" class="no-child"><i class="ion-android-home"></i> Trang chủ</a></li>        
        <li>
          <div class="collapsible-header">
            <i class="ion-android-person"></i> Tài khoản <span class="badge blue lighten-2">2</span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="material.html">Đăng nhập</a>
                <a href="left-sidebar.html">Đăng ký</a>
              </li>
            </ul>
          </div>  
        </li>
        <li><a href="news.html" class="no-child"><i class="ion-android-search"></i> Tìm kiếm</a></li>
        <li><a href="news.html" class="no-child"><i class="ion-android-list"></i> Bài viết</a></li>
        <li><a href="contact.html" class="no-child"><i class="ion-social-facebook"></i> Group Facebook</a></li>
        <li><a href="news.html" class="no-child"><i class="ion-social-rss"></i> Đăng tin</a></li>
        <li><a href="contact.html" class="no-child"><i class="ion-android-map"></i> Liên hệ</a></li>
      </ul>
      <!-- End of Sidebars -->

      <!-- Page Content -->
      @yield('content')     
      <!-- End Page Content -->

    </div> <!-- End of Page Container -->
    
    
    <script src="/js/jquery-2.1.0.min.js"></script>
    <script src="/js/jquery.swipebox.min.js"></script>   
    <script src="/js/jquery.smoothState.min.js"></script> 
    <script src="/js/materialize.min.js"></script> 
    <script src="/js/swiper.min.js"></script>  
    <script src="/js/jquery.mixitup.min.js"></script>
    <script src="/js/masonry.min.js"></script>
    <script src="/js/chart.min.js"></script>
    <script src="/js/functions.js"></script>
  </body>
</html>