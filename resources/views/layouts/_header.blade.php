
    <header class="nav-type-1 dark-nav">

      <!-- Fullscreen search -->
      <div class="search-wrap">
        <div class="search-inner">
          <div class="search-cell">
            <form method="get">
              <div class="search-field-holder">
                <input type="search" class="form-control main-search-input" placeholder="Search for">
                <div class="search-submit-icon"><i class="icon icon_search"></i></div>
                <input type="submit" class="search-submit" value="search">
              </div>
            </form>
          </div>
        </div>
        <i class="icon icon_close search-close" id="search-close"></i>
      </div> <!-- end fullscreen search -->

      <nav class="navbar navbar-fixed-top">
        <div class="navigation">
          <div class="container relative">

            <div class="row">

              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div> <!-- end navbar-header -->


              <!-- side menu -->
              <div class="side-menu nav-left hidden-sm hidden-xs">
                <div class="nav-inner">
                  <div class="nav-search-wrap hidden-sm hidden-xs">
                    <a href="#" class="nav-search search-trigger">
                      <i class="icon icon_search"></i>
                    </a>
                  </div>
                </div>
              </div> <!-- end side menu -->

              <div class="col-md-12 nav-wrap">
                <div class="collapse navbar-collapse text-center" id="navbar-collapse" style="max-height: 949px;">

                  <ul class="nav navbar-nav">

                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="{{ route('help') }}">帮助</a></li>
          <li><a href="#">登录</a></li>
                    <nav>




                    <li id="mobile-search" class="hidden-lg hidden-md">
                      <form method="get" class="mobile-search">
                        <input type="search" class="form-control" placeholder="Search...">
                        <button type="submit" class="search-button">
                          <i class="icon icon_search"></i>
                        </button>
                      </form>
                    </li>

                  </ul> <!-- end menu -->
                </div> <!-- end collapse -->
              </div> <!-- end col -->

              <!-- side menu -->
              <div class="side-menu right mobile-left-align">
                <div class="nav-inner menu-socials social-icons">
                  <div class="right">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
              </div> <!-- end side menu -->

            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
    </header>