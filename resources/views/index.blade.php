<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="token" content="{{ csrf_token() }}">
    <base href="{{ url(config_path('all-import.route.prefx')) . '/' }}">
    <link type="text/css" rel="stylesheet" href="{{ route('all-import.file', ['file' => 'materialize.min.css']) }}">
</head>
<body>
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Home</a></li>
        </ul>
    </div>
</nav>
<script type="text/javascript" src="{{ route('all-import.file', ['file' => 'materialize.min.js']) }}"></script>
</body>
</html>