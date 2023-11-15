
<div id="main-category">
        <div class="container-full">
            <div class="row">
                <div class="col-md-12">
                    <ul class="main-category-menu">
                        @foreach($categories as $category)
                        <li class="color-{{ $category->id }}"><a href="{{ route('categories.videos.index',$category->slug) }}"><i class="{{ $category->icon }}"></i>{{ $category->name }}</a></li>
                        @endforeach
                        <li class="color-1"><a href="02-category.html"><i class="fa fa-play-circle-o"></i>زنده</a></li>
                        <li class="color-2"><a href="02-category.html"><i class="fa fa-repeat"></i>360° فیلم</a></li>
                        <li class="color-3"><a href="02-category.html"><i class="fa fa-th-large"></i>صفحات</a>
                            <ul>
                                <li><a href="01-home.html">خانه </a></li>
                                <li><a href="02-category.html">دسته بندی ها </a></li>
                                <li><a href="03-category_videos.html">فیلم ها </a></li>
                                <li><a href="04-category_chanels.html">کانال ها </a></li>
                                <li><a href="05-category_playlists.html">لیست پخش</a></li>
                                <li><a href="06-category_about.html">در باره ما</a></li>
                                <li><a href="07-log_in_page.html">ورود </a></li>
                                <li><a href="08-sign_up_page.html">ثبت نام </a></li>
                                <li><a href="09-watch.html">تماشا </a></li>
                                <li><a href="10-upload.html">آپلود </a></li>
                                <li><a href="11-blog.html">وبلاگ </a></li>
                                <li><a href="12-single.html">تکی </a></li>
                                <li><a href="13-404_page.html">404 </a></li>
                                <li><a href="14-history.html">تاریخچه </a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- // col-md-14 -->
              </div><!-- // row -->
          </div><!-- // container-full -->
      </div><!-- // main-category -->