<meta charset="utf-8">
<title>@yield('title')</title>
<meta name="description" content="@yield('metas')">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<link rel="shortcut icon" type="image/ico" href="{{ URL::asset('img/favicon.ico') }}">
<meta name="robots" content="index,follow,noodp">
<meta name="googlebot" content="index,follow">