<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Delicious | Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('frontend')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend')}}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend')}}/assets/css/style.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/css/font.awesome.all.min.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v4.10.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  @php 
    $contact = App\Models\Contact::where('contact_id',1)->firstOrFail();
    $basic =  App\Models\Basic::where('basic_id',1)->firstOrFail();
    $social =  App\Models\Social::where('social_id',1)->firstOrFail();
  @endphp 
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+88 {{$contact->contact_phone1}}</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>{{$basic->basic_open_hour}}</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="{{route('front')}}">Delicious</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{asset('frontend')}}/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#book-a-table" class="book-a-table-btn scrollto">Book a table</a>
      @auth
      @if(Auth::user()->role ==='admin')
      <a href="{{route('admin.dashboard')}}" class="book-a-table-btn scrollto">{{Auth::user()->name}}</a>
      @elseif(Auth::user()->role ==='user')
      <a href="{{route('dashboard')}}" class="book-a-table-btn scrollto">Dashboard</a>
      @endif
      @else
      <a href="{{route('login')}}" class="book-a-table-btn scrollto">Login</a>
      @endauth

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      @php
        $banner = App\Models\Slider::where('slider_status',1)->get();
      @endphp
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          @foreach($banner as $data)
          <div class="carousel-item active" style="background-image: url({{asset('uploads/banner/'.$data->slider_image)}});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">{{$data->slider_title}}</h2>
                <p class="animate__animated animate__fadeInUp">{{$data->slider_description}}</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">
        @php
          $about = App\Models\About::where('about_status',1)->firstOrFail();
        @endphp
        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("{{asset('frontend')}}/assets/img/about.jpg");'>
            <a href="{{$about->about_video}}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>{{$about->about_title}}</h3>
              <p>
                {{$about->about_descrip1}}
              </p>
              <p class="fst-italic">
                {{$about->about_descrip2}}
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> {{$about->about_offer1}}</li>
                <li><i class="bx bx-check-double"></i> {{$about->about_offer2}}</li>
                <li><i class="bx bx-check-double"></i> {{$about->about_offer3}}</li>
              </ul>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        @php 
          $why = App\Models\WhyUs::where('why_status',1)->get();
        @endphp
        <div class="section-title">
          <h2>Why choose <span>Our Restaurant</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          @foreach($why as $key => $data)
          <div class="col-lg-4">
            <div class="box">
              <span>{{$key+1}}</span>
              <h4>{{$data->why_title}}</h4>
              <p>{{$data->why_description}}</p>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        @php
          $menu = App\Models\Menu::where('menu_status',1)->get();
          $menuCategory = App\Models\MenuCategory::where('menu_category_status',1)->get();
        @endphp

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Show All</li>
              @foreach($menuCategory as $cate)
              <li data-filter=".filter-{{$cate->menu_category_slug}}">{{$cate->menu_category_name}}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row menu-container">
          @foreach($menu as $data)
          <div class="col-lg-6 menu-item filter-{{$data->categoryInfo->menu_category_slug}}">
            <div class="menu-content">
              <a href="#">{{$data->menu_name}}</a><span>{{$data->menu_price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$data->menu_ingredients}}
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Check our <span>Specials</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
        @php
          $special = App\Models\Special::where('special_status',1)->get();
          $specialCategory = App\Models\SpecialCategory::where('special_category_status',1)->get();
        @endphp
        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              @foreach($specialCategory as $key => $data)
              <li class="nav-item">
                <a class="nav-link {{($key==1)? 'active' : ''}} show" data-bs-toggle="tab" href="#tab-{{$key}}">{{$data->special_category_name}}</a>
              </li>
              @endforeach
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              @foreach($special as $key=>$data)
              <div class="tab-pane {{($key==1)? 'active' : ''}} show" id="tab-{{$key}}">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>{{$data->special_name}}</h3>
                    <p class="fst-italic">{{$data->special_details}}</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('uploads/special/'.$data->special_image)}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">
        @php 
          $event = App\Models\Event::where('event_status',1)->get();
        @endphp

        <div class="section-title">
          <h2>Organize Your <span>Events</span> in our Restaurant</h2>
        </div>

        <div class="events-slider swiper">
          <div class="swiper-wrapper">

            @foreach($event as $data)
            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="{{asset('uploads/event/'.$data->event_image)}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>{{$data->event_title}}</h3>
                  <div class="price">
                    <p><span>${{$data->event_price}}</span></p>
                  </div>
                  <p class="fst-italic">
                    {{$data->event_description1}}
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i>{{$data->event_offer1}}</li>
                    <li><i class="bi bi-check-circle"></i> {{$data->event_offer2}}</li>
                    <li><i class="bi bi-check-circle"></i> {{$data->event_offer3}}</li>
                  </ul>
                  <p>
                    {{$data->event_description2}}
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Book a <span>Table</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <form action="{{route('book.insert')}}" method="post" role="form">
          @csrf
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="book_name" class="form-control"  value="{{old('book_name')}}" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="book_email"  value="{{old('book_email')}}" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
            
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="book_phone" value="{{old('book_phone')}}" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
             
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="book_date" class="form-control" value="{{old('book_date')}}"  placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
             
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="book_time" value="{{old('book_time')}}"  placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
             
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="book_people" value="{{old('book_people')}}"  placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
        
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="book_message" rows="5" placeholder="Message" value="{{old('book_message')}}"></textarea>
            
          </div>
          <!-- <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div> -->
          <div class="text-center bton">
            <button type="submit" >Send Message</button>
          </div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">
        <div class="section-title">
          <h2>Some photos from <span>Our Restaurant</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
        @php
          $gallery = App\Models\Gallery::where('gallery_status',1)->get();
        @endphp
        <div class="row g-0">
          @foreach($gallery as $data)
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('uploads/gallery/'.$data->gallery_image)}}" class="gallery-lightbox">
                <img src="{{asset('uploads/gallery/'.$data->gallery_image)}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          @php 
            $chef = App\Models\Chef::where('chef_status',1)->get();
          @endphp
          @foreach($chef as $data)
          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{asset('uploads/chef/'.$data->chef_image)}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{$data->chef_name}}</h4>
                <span>{{$data->chef_designation}}</span>
                <div class="social">
                  <a href="{{$data->chef_twitter}}"><i class="bi bi-twitter"></i></a>
                  <a href="{{$data->chef_facebook}}"><i class="bi bi-facebook"></i></a>
                  <a href="{{$data->chef_instagram}}"><i class="bi bi-instagram"></i></a>
                  <a href="{{$data->chef_linkedin}}"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Chefs Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>{{$contact->contact_address1}}</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>{{$basic->basic_open_hour}}</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>{{$contact->contact_email1}}<br>{{$contact->contact_email2}}</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+88 {{$contact->contact_phone2}}<br>+88 {{$contact->contact_phone3}}</p>
            </div>
          </div>
        </div>

        <form action="{{route('message.insert')}}" method="post" role="form" >
          @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="con_msg_name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="con_msg_email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="con_msg_subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="con_msg_message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="text-center bton"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Delicious</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="{{$social->social_twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="{{$social->social_facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{$social->social_instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="{{$social->social_wechat}}" class="google-plus"><i class="fab fa-weixin"></i></a>
        <a href="{{$social->social_linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend')}}/assets/js/main.js"></script>
  <script src="{{asset('frontend')}}/assets/js/font.awesome.all.min.js"></script>

</body>

</html>