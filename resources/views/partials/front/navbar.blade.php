  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="{{ route('site.home') }}">{{ config('app.name') }}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{ route('site.home') }}">{{ __('Inicio') }}</a></li>
          <li><a href="{{ route('site.about') }}">{{ __('Sobre nosotros') }}</a></li>
          <li><a href="{{ route('site.courses') }}">{{ __('Cursos') }}</a></li>
          <li><a href="{{ route('site.contact') }}">{{ __('Contactanos') }}</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="javascript:void(0)" class="get-started-btn">{{ __('Registrate') }}</a>

    </div>
  </header><!-- End Header -->
