  <!--header-->
  <div class="header-w3l">
    <!-- header -->
    <header id="site-header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
          <a class="navbar-brand pr-lg-5" href="index.html">
            <img src="assets/images/logo.png" alt="" class="img-fluid">Estates
          </a>
          <!-- if logo is image enable this   
            <a class="navbar-brand" href="#index.html">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-lg-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('services') }}">Services</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}">Contact</a>
              </li>
              <li class="search-bar ml-lg-4 mt-lg-0 mt-4">
                <!--/search-right-->
                <form class="search position-relative">
                  <input type="search" class="search__input" name="search" placeholder="Search here.."
                    onload="equalWidth()" required="">
                  <span class="fa fa-search search__icon"></span>
                </form>

                <!--//search-right-->
              </li>

            </ul>
            <ul class="navbar-nav search-right mt-lg-0 mt-2">
              <li class="mx-3">
                <a href="#btn" class="btn btn-style btn-primary">Enquire Here</a>
              </li>

            </ul>
          </div>
          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
            <nav class="navigation">
              <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                  <input type="checkbox" id="checkbox">
                  <div class="mode-container">
                    <i class="gg-sun"></i>
                    <i class="gg-moon"></i>
                  </div>
                </label>
              </div>
            </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
        </nav>
      </div>
    </header>
    <!-- //header -->
  </div>