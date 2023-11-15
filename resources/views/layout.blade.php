<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Video Post – Video Sharing HTML Template</title>
        <meta name="keywords" content="Blog website templates" />
        <meta name="description" content="Author - Personal Blog Wordpress Template">
        <meta name="author" content="Rabie Elkheir">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap Core CSS -->
        
        <!-- Owl Carousel Assets -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  type="text/css" />

        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700" rel="stylesheet">
        <!-- Main CSS -->
       
        <!-- Responsive CSS -->
        
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
      <!--======= header =======-->
      <header>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <a id="main-category-toggler" class="hidden-md hidden-lg hidden-md"  href="#">
                        <i class="fa fa-navicon"></i>
                    </a>
                    <a id="main-category-toggler-close" class="hidden-md hidden-lg hidden-md" href="#">
                        <i class="fa fa-close"></i>
                    </a>
                    <div id="logo">
                        <a href="01-home.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div><!-- // col-md-2 -->
                <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs hidden-sm">
                    <div class="search-form">
                        <form id="search" action="#" method="post">
                            <input type="text" placeholder="جستجو ..."/>
                            <input type="submit" value="Keywords" />
                        </form>
                    </div>
                </div><!-- // col-md-3 -->
                <div class="col-lg-3 col-md-3 col-sm-5 hidden-xs hidden-sm">
                    <ul class="top-menu">
                        <li><a href="01-home.html">خانه</a></li>
                        <li><a href="#">رندوم</a></li>
                        <li><a href="14-history.html">تاریخچه</a></li>
                    </ul>
                </div><!-- // col-md-4 -->
                <div class="col-lg-2 col-md-2 col-sm-4 hidden-xs hidden-sm">
                    <ul class="notifications">
                        <li class="dropdown">
                        <a href="#"  data-toggle="dropdown"><i class="fa fa-users"></i>
                            <span class="badge badge-color1 header-badge">3</span>
                        </a>
                              <ul class="dropdown-menu dropdown-menu-friend-requests ">
                                <li>
                                    <div class="friend-requests-info">
                                        <div class="thumb"><a href="#"><img src="demo_img/z1.jpg" alt=""></a></div>
                                        <a href="#" class="name">داود طاهری </a>
                                        <span>داود طاهری : اکنون شما را دنبال می کند</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="friend-requests-info">
                                        <div class="thumb"><a href="#"><img src="demo_img/z2.jpg" alt=""></a></div>
                                        <a href="#" class="name">داود طاهری </a>
                                        <span>داود طاهری : اکنون شما را دنبال می کند</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="friend-requests-info">
                                        <div class="thumb"><a href="#"><img src="demo_img/z3.jpg" alt=""></a></div>
                                        <a href="#" class="name">داود طاهری </a>
                                        <span>داود طاهری : اکنون شما را دنبال می کند</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="friend-requests-info">
                                        <div class="thumb"><a href="#"><img src="demo_img/z4.jpg" alt=""></a></div>
                                        <a href="#" class="name">داود طاهری </a>
                                        <span>داود طاهری : اکنون شما را دنبال می کند</span>
                                    </div>
                                </li>
                              </ul>
                        </li>
                        <li class="dropdown">
                        <a href="#" data-toggle="dropdown"><i class="fa fa-info-circle"></i>
                            <span class="badge badge-color2 header-badge">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-help-cnter">
                            <li>
                                <h2 class="title">مرکز پشتیبانی</h2>
                                <div class="search-form">
                                    <form id="search-2" action="#" method="post">
                                        <input type="text" placeholder="جستجو ..."/>
                                        <input type="submit" value="Keywords" />
                                    </form>
                                </div>
                            </li>
                            <li>
                                <h2 class="title">راهنما در</h2>
                                <ul class="help-cat-link">
                                    <li><a href="#">فیلم</a></li>
                                    <li><a href="#">کپی رایت</a></li>
                                    <li><a href="#">اعضا</a></li>
                                    <li><a href="#">ثبت نام</a></li>
                                    <li><a href="#">نظرات</a></li>
                                </ul>
                            </li>
                        </ul>
                        </li>
                        <li class="dropdown">
                        <a href="#" data-toggle="dropdown"><i class="fa fa-bell-o"></i>
                            <span class="badge badge-color3 header-badge">9</span>
                        </a>
                        <ul class="dropdown-menu dropdown-notifications-items ">
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-video-camera color-1"></i>
                                    <strong>داود طاهری</strong> یک <span>فیلم</span> جدید اضافه کرد
                                    <h5 class="time">4 ساعت پیش</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-thumbs-up color-2"></i>
                                    <strong>داود طاهری</strong> یک <span>فیلم</span> جدید اضافه کرد
                                    <h5 class="time">4 ساعت پیش</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-comment color-3"></i>
                                    <strong>داود طاهری</strong> یک <span>فیلم</span> جدید اضافه کرد
                                    <h5 class="time">4 ساعت پیش</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-video-camera color-1"></i>
                                    <strong>داود طاهری</strong> یک <span>فیلم</span> جدید اضافه کرد
                                    <h5 class="time">4 ساعت پیش</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="all_notifications">همه اعلان ها</a>
                            </li>
                        </ul>

                        </li>
                    </ul>
                </div>
                @auth
                <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs hidden-sm">
                      <div class="dropdown">
                        <a data-toggle="dropdown" href="#" class="user-area">
                            <div class="thumb"><img src="{{ auth()->user()->gravatar }}" alt=""></div>
                            <h2>{{ auth()->user()->name }}</h2>
                            <h3>25 اشتراک</h3>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu account-menu">
                           <li><a href="#"><i class="fa fa-edit color-1"></i>ویرایش پروفایل</a></li>
                           <li><a href="{{ route('videos.create') }}"><i class="fa fa-video-camera color-2"></i>اضافه کردن فیلم</a></li>
                           <li><a href="#"><i class="fa fa-star color-3"></i>برگزیده</a></li>
                           <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out color-4"></i>خروج</a></li>
                        </ul>
                    </div>
                </div>
                @endauth
                @guest
                <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs hidden-sm">
                    <a href='{{ route("login.create") }}' class='btn btn-danger'>log in</a>
                    <a href='{{ route("register.create") }}' class='btn btn-danger'>sing up</a>
                @endguest
            </div><!-- // row -->
        </div><!-- // container-full -->
      </header><!-- // header -->

            <x-header-menu></x-header-menu>

	  <div class="site-output">
        
      </div><!-- // col-md-2 -->

        <div id="all-output" class="col-md-10 upload">
            @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
            @endif
            @yield('content')
        
		</div>
      </div>
      <script src="{{ asset('js/main.js') }}"></script>
	</body>

</html>
