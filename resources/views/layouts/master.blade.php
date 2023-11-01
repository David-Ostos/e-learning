<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    <meta name="author" content="Abrahan Pulido" />
    <meta name="description" content="Embárquese en un viaje de aprendizaje ilimitado con Nemosina, el sistema de gestión de aprendizaje. Acceda a diversos cursos, aprenda de expertos y cultive habilidades valiosas sin esfuerzo. Descubra oportunidades ilimitadas para crecer y prosperar. ¡Empieza ahora!" />
    <meta name="keywords" content="colocar cursos" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ $title }} | {{ config('app.name', 'Laravel') }} - {{ config('app.tagline') }}</title>
    <!-- Favicon -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Libraries Stylesheet -->
    @vite(['resources/js/app.js'])


  </head>
<body>


    @auth
      <x-front-topbar />
    @endauth

    <x-front-navbar />

    @isset($hero)
      {{ $hero }}
    @endisset

    {{ $slot }}


    <x-front-footer />

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <!-- Vendor JS Files
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <script src="assets/js/main.js"></script>-->



    @include('partials.admin.flash')
    <script>
      var stripe = Stripe('pk_test_51NjDwlSD9efIpDnkzJHyxyifgXgCFsfpPtjU4yGIIqbfaV4FELkeR5zuJOAA0v5moJChG6dLzx9jDEoEKHsgjrML009hG558hA');
    </script>
    <script>
      document.getElementById('payment-form').addEventListener('submit', function(event) {
        // event.preventDefault();

        var card = {
          number: '4242424242424242',
          exp_month: 12,
          exp_year: 25,
          cvc: '123'
        };

        stripe.createToken(card).then(function(result) {
          if (result.error) {
            // Handle error
          } else {
            // Handle successful payment simulation
            console.log(result.token);
          }
        });
      });
    </script>
    @isset($script)
      {{ $script }}
    @endisset


    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/aos/aos.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
