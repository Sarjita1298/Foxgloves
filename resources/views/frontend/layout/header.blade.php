<div class="hero_area">
  <!-- header section starts -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="{{ route('home') }}">
          <span class="brand-title">
            <span class="brand-fox">FOX</span><span class="brand-gloves">GLOVES</span>
            <h6 class="brand-subtitle">MANIFOLD SERVICES & SECURITIES PVT. LTD.</h6>
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item {{ Request::routeIs('home') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item {{ Request::routeIs('about') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item {{ Request::routeIs('service') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('service') }}">Services</a>
            </li>
            <li class="nav-item {{ Request::routeIs('contact') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </li>
          </ul>
          <div class="quote_btn-container" style="max-width: 200px; margin: 0 auto;">
            <a href="{{ route('home') }}" class="quote_btn">
              Get A Quote
            </a>
          </div>
        </div>
        
      </nav>

    </div>
  </header>

  
  <!-- header section ends -->
</div>
