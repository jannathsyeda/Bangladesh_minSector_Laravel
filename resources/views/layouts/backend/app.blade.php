<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')-{{ config('app.name', 'Bangladesh_Ministry_Sectors') }}</title>
    <!-- Scripts -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet">


  @yield('css')

</head>
<body>




    <section>   
         @include('layouts.backend.partial.sidebar')
    </section>
    <section style="margin-top: 5%;padding-top: 0%;">
        <div class="content">
            @yield('content')
        </div>
    </section>
 




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<!-- //set time -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <script>

        setTimeout(function() {
      $('#alert').fadeOut('fast');
  },2000);

</script>


@yield('js')

</body>
</html>
