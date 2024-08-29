<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<title data-react-helmet="true">Shoping Nalavariyam</title>
<meta name="description" content="Shoping Nalavariyam">
<meta name="google-site-verification" content="l1WHPb1Jb9hv-164zHGRs-vPSWee-pCr2qvVR0K_wnM" />
<meta name="keywords" content="Shoping Nalavariyam">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="address" content="Shoping Nalavariyam, TamilNadu 629003, India, " />
<meta name="author" content="Galaxy Kannan" />
<meta name="contact" content="9344332244" />
  <link href="//fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700;800&display=swap"
    rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{!! asset('assets/css/style-starter.css') !!}">

    @yield('third_party_stylesheets')

    @stack('page_css')
	
</head>
  
        @include('layout.header')
        @yield('content')
        @include('layout.footer')

        @yield('third_party_scripts')

  <script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
  <script src="{!! asset('assets/js/jquery-3.3.1.min.js') !!}"></script>
  <script src="{!! asset('assets/js/theme-change.js') !!}"></script>
  <script src="{!! asset('assets/js/owl.carousel.js') !!}"></script>
        @stack('page_scripts')
  <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- /move top -->
    </div>
  </section>
  <!-- //footer17 -->

  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        nav: false,
        margin: 50,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 3,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->

  <!-- script for tesimonials agency carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-agency").owlCarousel({
        loop: true,
        nav: false,
        margin: 50,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 1,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials agency carousel slider -->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->


</body>

</html>
