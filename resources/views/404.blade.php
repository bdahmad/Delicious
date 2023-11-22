<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>404 | Not found</title>
   <link href="{{asset('frontend')}}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
   <link href="{{asset('frontend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="{{asset('frontend')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="{{asset('frontend')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="{{asset('frontend')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
   <link href="{{asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
   <link href="{{asset('user')}}/css/style.css" rel="stylesheet">
</head>
<body>
   <section class="error-404-section section-padding">
      <div class="container">
            <div class="row">
               <div class="col col-xs-12">
                  <div class="content clearfix text-center">
                        <div class="error">
                           <img src="{{asset('user')}}/error-404.png" alt>
                        </div>
                        <div class="error-message text-center">
                           <h3>Oops! Page Not Found!</h3>
                           <p>Your Account Is Inactive, Please Contact With Support Or Admin  For Review</p>
                           <form action="{{route('logout')}}" method="post">
                              @csrf
                              <button type = "submit" class="btn btn-primary mt-3">Back to home</button>
                           </form>
                        </div>
                  </div>
               </div>
            </div> <!-- end row -->
      </div> <!-- end container -->
   </section>

   <script src="{{asset('frontend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="{{asset('frontend')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
   <script src="{{asset('frontend')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
   <script src="{{asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
</body>
</html>