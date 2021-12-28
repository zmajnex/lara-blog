<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    {{--SEO--}}
    <meta name="description" content="@yield('description')" />
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="@yield('canonical_url')" />
    <meta property="og:locale" content="@yield('language')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og_title')" />
    <meta property="og:description" content="@yield('og_description')" />
    <meta property="og:url" content="@yield('og_url')" />
    <meta property="og:site_name" content="@yield('og_sitename')" />
    <meta property="og:image" content="@yield('og_image')" />
    <meta property="og:image:secure_url" content="@yield('og_secure_image')" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="1200" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="@yield('tw_description')" />
    <meta name="twitter:title" content="@yield('tw_title')" />
    <meta name="twitter:image" content="@yield('tw_image')" />
    <script type='application/ld+json' >@yield('structured_data')</script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/admin.js')}}"></script>

    <title>@yield('title')</title>
</head>
