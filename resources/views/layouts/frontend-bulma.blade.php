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

    <link rel="stylesheet" href="/css/tailwind.min.css">
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="/css/bulma-carousel.min.css">
    <link rel="stylesheet" href="/css/bulma-divider.min.css">
    <link rel="stylesheet" href="/css/fontawesome.min.css">

    <!-- CDN -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.6/cookieconsent.min.css">
    <script defer src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.6/cookieconsent.min.js"></script>

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
<body>
    @include('frontend.scripts.gtmiframe')
    @include('frontend.partials.header')

    @if(request()->routeIs('home'))
        @include('frontend.partials.carousel')
    @endif

    @if(Breadcrumbs::exists() && !request()->routeIs('home'))
        <section class="nav-breadcrumb">
            <div class="container pl-4 pt-12">
                {!! Breadcrumbs::render() !!}
            </div>
        </section>
    @endif

    <div class="container is-fluid">
        @yield('content')
    </div>

    @include('frontend.partials.footer')
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
