<div class="footer_container">
    <!-- info section -->

    <section class="info_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 ">
            <div class="info_detail">
              <a class="navbar-brand" href="{{ route('index') }}">
                <span class="brand-title">
                  <span class="brand-fox">FOX</span><span class="brand-gloves">GLOVES</span>
                  <h6 class="brand-subtitle">MANIFOLD SERVICES & SECURITIES PVT. LTD.</h6>
                </span>
              </a>
              <p style="color:white">
                FOXGLOVES MANIFOLD SERVICES AND SECURITIES PRIVATE LIMITED (CIN: U74993MP2018PTC045505) is a 
                Private company incorporated on 10 Dec 2018. It is classified as Non-government company and 
                is registered at Registrar of Companies, Gwalior.  </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-1 mx-auto">
            <div class="info_link_box">
              <h4>
                Links
              </h4>
              <div class="info_links">
                <a class="" href="index">
                  Home
                </a>
                <a class="" href="about">
                  About
                </a>
                <a class="" href="service">
                  Services
                </a>
                <a class="" href="contact">
                  Contact Us
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <h4>
              Subscribe
            </h4>
            <form action="{{ route('subscribe') }}" method="POST">
              @csrf
              <input type="text" name="email" placeholder="Enter email" required />
              <button type="submit">Subscribe</button>
            
              @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
              @endif
            
              @if($errors->has('email'))
                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
              @endif
            </form>
            
          </div>
          <div class="col-md-6 col-lg-3 mb-0 ml-auto">
            <div class="info_contact">
              <h4>
                Address
              </h4>
              <div class="contact_link_box">
                <a href="contact">
                  <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                  <span>
                    Location : 6303, Block-06, Soumya Parklands, Awadhpuri, Bhopal (M.P.) – 462022
                  </span>
                </a>
                <a href="contact">
                  <i class="fa fa-phone-alt" aria-hidden="true"></i>
                  <span>
                    Phone: +91 94240 23942                 
                  </span>
                </a>
                <a href="contact">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    Email: info@foxglovesindia.com
                  </span>
                </a>
              </div>
            </div>
            <div class="info_social">
              <a href="contact">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
              </a>
              <a href="contact">
                <i class="fab fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="contact">
                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
              </a>
              <a href="contact">
                <i class="fab fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://alinasoftwares.in/" target="_blank" title="Alina Softwares">Alina Softwares</a>        </p>
      </div>
      {{-- <div class="col-6 col-sm-6 col-md-6 col-lg-1 col-xl-1 return_top mx-auto">
        <div class="footer__copyright__inner text-center">
          <a href="#top">
            <img src="frontend/images/slider-img.png" alt="Up Arrow" class="img-fluid arrow">
          </a>
        </div>
      </div> --}}
      <div class="elementor-widget-container">
        <div class="elementor-icon-wrapper">
          <a href="#headertop" class="elementoricon">
            <i aria-hidden="true" class="far fa-arrow-alt-circle-up"></i>
          </a>
        </div>
      </div>
    </footer>
    <!-- footer section -->
  </div>
  