<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif | {{ trans('admin.Dashboard') }}" />
		<meta name="keywords" content="Admin, 404, Error, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif | {{ trans('admin.Dashboard') }}" />
		<meta name="author" content="@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif | {{ trans('admin.Dashboard') }}" />
		<link rel="shortcut icon" href="@if(!empty(setting())){{ Storage::url(setting()['app_logo']) }} @endif" />
		<title>@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif | 404</title>
		
		<!-- Common CSS -->
		<link rel="stylesheet" href="{{url('/public/admin')}}/css/bootstrap.min.css" />
		<link rel="stylesheet" href="{{url('/public/admin')}}/fonts/icomoon/icomoon.css" />

		<!-- Mian and Login css -->
		<link rel="stylesheet" href="{{url('/public/admin')}}/css/main-rtl.css" />

	</head>  

	<body class="error-bg">
		<div class="error-screen">
			<h1>404</h1>
			<h4>Oops... looks like you got lost...</h4>
			<a href="{{adminUrl('/')}}" class="btn btn-info">Take me Away</a>
		</div>
	</body>
</html>