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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a href="#" class="navbar-brand">All Import</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main__navbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="main__navbar">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a href="#" class="nav-link">Index</a>
			</li>
		</ul>
	</div>
</nav>
<div class="container" id="app">
	<div class="row">
		<div class="col mt-5">
			<dropzone></dropzone>
		</div>
	</div>
	<div class="row">
		<div class="col mt-5">
			<table class="table">
				<thead>
				<tr>
					<th scope="col">Filename</th>
				</tr>
				</thead>
				<tbody>
				@foreach($files as $file)
					<tr>
						<td>{{ $file->extension() }}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript" src="{{ route('all-import.file', ['file' => 'manifest.js']) }}"></script>
<script type="text/javascript" src="{{ route('all-import.file', ['file' => 'vendor.js']) }}"></script>
<script type="text/javascript" src="{{ route('all-import.file', ['file' => 'package.js']) }}"></script>
</body>
</html>