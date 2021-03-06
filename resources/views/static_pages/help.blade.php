@extends('layouts.default')
@section('title', '帮助')

@section('content')
  <section class="header-wrap bg-light">
      <div class="container">
        <div class="logo-container text-center">
          <div class="logo-wrap">
            <a href="index.html">
              <img class="logo-dark" src="img/logo_dark_big.png" alt="logo">
            </a>
          </div>
        </div>
      </div>
    </section>

    <div class="content-wrapper oh">

      <!-- Content -->
      <section class="section-wrap contact pt-mdm-60">
        <div class="container relative">
          <div class="text-center">
            <h1 class="heading underline-title uppercase">Contact</h1>
          </div>
          <div class="row">

            <div class="col-sm-10 col-sm-offset-1">
              <img src="img/contact.jpg" class="img-fw mb-30" alt="">
              <p>
                Sed at libero mauris. Nullam eget vehicula nulla. Aenean maximus risus ex, at efficitur massa molestie id. Integer sagittis neque ut mauris imperd biet imperdiet. Integer nisi diam, auctor at mi nec, feugiat tempus metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce commodo, velit non faucibus elementum, dolor risus convallis massa, venenatis luctus ante turpis id nisl.
              </p>

              <!-- contact form -->
              <div class="contact-form mt-30">
                <form id="contact-form" action="#">
                  <div class="row row-16">
                    <div class="col-md-4">
                      <input name="name" id="name" type="text" placeholder="Name*">
                    </div>
                    <div class="col-md-4">
                      <input name="mail" id="mail" type="email" placeholder="E-mail*">
                    </div>
                    <div class="col-md-4">
                      <input name="subject" id="subject" type="text" placeholder="Subject">
                    </div>
                    <div class="col-md-12">
                      <textarea name="comment" id="comment" placeholder="Message" rows="8"></textarea>
                    </div>
                  </div>

                  <input type="submit" class="btn btn-lg btn-color mt-20" value="Send" id="submit-message">
                  <div id="msg" class="message"></div>
                </form>
              </div>

            </div>
          </div> <!-- end row -->

        </div> <!-- end container -->
      </section> <!-- end content -->


      <!-- Instagram Feed -->
      <div class="instagram-feed text-center">
        <h3 class="heading uppercase">Instagram</h3>
        <h5 class="heading uppercase mb-30">follow @soho</h5>
        <ul id="instafeed-row"></ul>
      </div>


      <div class="widget-social">
        <div class="social-icons text-center">
          <a href="#">
            <i class="fa fa-instagram"></i>
            <span>instagram</span>
          </a>
          <a href="#">
            <i class="fa fa-facebook"></i>
            <span>facebook</span>
          </a>
          <a href="#">
            <i class="fa fa-twitter"></i>
            <span>twitter</span>
          </a>
          <a href="#">
            <i class="fa fa-pinterest-p"></i>
            <span>pinterest</span>
          </a>
          <a href="#">
            <i class="fa fa-rss"></i>
            <span>rss</span>
          </a>
        </div>
      </div>





      <div id="back-to-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
      </div>

    </div> <!-- end content wrapper -->
@stop