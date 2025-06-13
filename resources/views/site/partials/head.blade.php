<title>@yield('title')</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<meta name="msapplication-TileColor" content="#0E0E0E" />
<meta name="template-color" content="#0E0E0E" />
<meta name="description" content="Index page" />
<meta name="keywords" content="index, page" />
<meta name="author" content="" />
<link rel="shortcut icon" type="image/x-icon" href="{{@$config->favicon->path ?? ''}}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{@$config->favicon->path ?? ''}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{@$config->favicon->path ?? ''}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{@$config->favicon->path ?? ''}}">

<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow">
<meta name="revisit-after" content="1 days" />
<meta name="generator" content="@yield('title')" />
<meta name="rating" content="General">
<meta name="application-name" content="{{ $config->web_title }}" />
<meta name="theme-color" content="#ed3235" />
<meta name="msapplication-TileColor" content="#ed3235" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-title" content="index.html" />
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="@yield('title')">
<meta property="og:description" content="@yield('description')">
<meta property="og:image" content="@yield('image')">
<meta property="og:site_name" content="{{ url()->current() }}">
<meta property="og:image:alt" content="{{ $config->web_title }}">
<meta itemprop="description" content="@yield('description')">
<meta itemprop="image" content="@yield('image')">
<meta itemprop="url" content="{{ url()->current() }}">

<meta property="og:type" content="website" />
<meta property="og:locale" content="vi_VN" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="{{ url()->current() }}" />

<!-- <link rel="amphtml" href="amp/" /> -->
<link rel="image_src" href="{{@$config->image->path ?? ''}}" />
<link rel="image_src" href="{{@$config->image->path ?? ''}}" />

<link href="/site/css/maine209.css?v=1.0.0" rel="stylesheet" />
