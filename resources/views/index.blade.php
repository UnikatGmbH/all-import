<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="token" content="{{ csrf_token() }}">
    <base href="{{ url(config('all-import.route.prefix')) . '/' }}">
    <link type="text/css" rel="stylesheet" href="{{ route('all-import.file', ['file' => 'package.css']) }}">
</head>
<body>
<nav>
    <div class="nav-wrapper light-blue">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Home</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col"></div>
    </div>
</div>
<footer class="page-footer light-blue">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h5 class="white-text">Footer Content</h5>
            </div>
            <div class="col s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a href="#" class="grey-text text-lighten-3">Link 1</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    &copy; Copyright Text
                    <a href="#" class="grey-text text-lighten-4 right">More</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{ route('all-import.file', ['file' => 'manifest.js']) }}"></script>
<script type="text/javascript" src="{{ route('all-import.file', ['file' => 'vendor.js']) }}"></script>
<script type="text/javascript" src="{{ route('all-import.file', ['file' => 'package.js']) }}"></script>
</body>
</html>