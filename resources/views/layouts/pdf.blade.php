<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Logo -->
    <link rel="icon" type="image/ico" href="/images/AHIuanj.png">

    <!-- Styles -->
    @if ($stylePath = Html::asset('frontend', 'frontend.css'))
        <link rel="stylesheet" href="{{ $stylePath }}">
    @endif

    <link rel="stylesheet" href="/css/tailwind.min.css">
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="/css/bulma-carousel.min.css">
    <link rel="stylesheet" href="/css/bulma-divider.min.css">
    <link rel="stylesheet" href="/css/fontawesome.min.css">

    <!-- CDN -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.6/cookieconsent.min.css">
    <script defer src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.6/cookieconsent.min.js"></script>

    <script defer src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script defer src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script defer src="//stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>

    <!-- Scripts -->
    <script defer src="{{ Html::asset('frontend', 'vendor-frontend.js') }}"></script>
    <script defer src="{{ Html::asset('frontend', 'frontend.js') }}"></script>

    <!-- JS settings -->
    <script type="application/json" data-settings-selector="settings-json">
        {!! json_encode([
            'cookieconsent' => [
                'message' => __('labels.cookieconsent.message'),
                'dismiss' => __('labels.cookieconsent.dismiss'),
            ],
        ]) !!}
    </script>
</head>
<body class="@yield('body_class')">
    <nav class="navbar navbar-expand-md navbar-light p-0 -mt-12 shadow-sm">
        <a class="navbar-brand" href="{{ route('admin.home') }}">
        <img
        class="ml-4"
        src="/images/AHIuanj.png"
        width="40"
        height="40"
        alt="DepEd Admin"
        />
        <span class="pl-2">{{ config('app.name', 'Division of Cadiz City') }}</span>
        </a>
    </nav>
    <div class="container">
        @yield('content')
    </div>

    <!-- Start Scripts -->
    <script type="text/javascript" src="/js/bulma-carousel.min.js"></script>
    <script type="text/javascript" src="/js/fontawesome.min.js"></script>
    <script>
      var carousels = bulmaCarousel.attach();
    </script>
    <!-- End Scripts -->
    @stack('scripts')
</body>
</html>
