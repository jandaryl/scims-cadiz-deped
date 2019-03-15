<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Administration</title>

    <!-- Logo -->
    <link rel="icon" type="image/ico" href="/images/AHIuanj.png">
    <link rel="stylesheet" href="/css/tailwind.min.css">

    <!-- Styles -->
    @if ($stylePath = Html::asset('backend', 'backend.css'))
    <link rel="stylesheet" href="{{ $stylePath }}">
    @endif

    <!-- CDN -->
    <script defer src="/js/backend-popper.min.js"></script>
    <script defer src="/js/ckeditor.js"></script>

    <!-- Scripts -->
    <script defer src="{{ Html::asset('backend', 'vendor-backend.js') }}"></script>
    <script defer src="{{ Html::asset('backend', 'backend.js') }}"></script>

    <!-- JS settings -->
    <script type="application/json" data-settings-selector="settings-json">
        {!! json_encode([
            'locale' => app()->getLocale(),
            'appName' => config('app.name'),
            'homePath' => route('home'),
            'adminHomePath' => route('admin.home', [], false),
            'adminPathName' => config('app.admin_path'),
            'editorName' => config('app.editor_name'),
            'editorSiteUrl' => config('app.editor_site_url'),
            'locales' => LaravelLocalization::getSupportedLocales(),
            'user' => $loggedInUser,
            'school' => $loggedInUser->school ?? 'no school relation',
            'permissions' => session()->get('permissions'),
            'isImpersonation' => session()->has('admin_user_id') && session()->has('temp_user_id'),
            'usurperName' => session()->get('admin_user_name'),
            'blogEnabled' => config('blog.enabled'),
            'multiLanguage' => config('features.multi-language'),
            'formSettings'      => config('features.form-settings'),
            'formSubmissions'   => config('features.form-submissions'),
            'metas'             => config('features.metas'),
            'redirection'       => config('features.redirection')
        ]) !!}
    </script>

    <!-- Named routes -->
    @routes()
</head>
<body class="@yield('body_class')">
    @yield('body')

    @stack('scripts')
</body>
</html>
