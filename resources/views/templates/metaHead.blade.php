@section('metas')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
@parent
@append {{--Appending metas section --}}

@section('title')
    @parent
    <title>{!! $pageTitle . ' - ' . config('sigkat.appName') !!}</title>
@append {{-- Appending title section --}}

@if(Auth::check())
    @if(Auth::user()->user_level == 1)
        {{--
        If the loggedin user is admin, we include the admin navigation codes when the meta load,
        So that the content is already stored, and we don't need to include it in the pages.
        The adminMenu Blade Section is then stored, and the admin menu HeadStyles is appended.
        --}}
        @include('templates.navigation.adminNavigation')
        @include('templates.admin.adminSidebar')
    @endif
@endif

@section('headStyles')
@parent
        <!-- common headStyles Start-->

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/plugins.css" rel="stylesheet">
    <link href="/css/blocks.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/sigkat.css" rel="stylesheet">
    <link href="/css/offcanvas.css" rel="stylesheet">

    <!-- Google Fonts Embedded -->
    <link href='https://fonts.googleapis.com/css?family=Alice|Karma:400,700|Hind+Vadodara' rel='stylesheet' type='text/css'>

    <!-- end common headStyles -->
@append


@section('headScripts')
    @parent
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

@append {{-- Appending headScripts --}}

@section('metaHead')
<!-- This file will contain the meta block -->
    @yield('metas')

    @yield('title')

    @yield('headStyles')

    @yield('headScripts')

@stop



