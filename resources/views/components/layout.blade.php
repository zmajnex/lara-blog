<!doctype html>
<html lang="@yield('language')">
<x-head></x-head>
<body>
<x-custom-code></x-custom-code>
<x-nav></x-nav>
<div>
    {{$slot}}
</div>
<x-footer></x-footer>
</body>
</html>
