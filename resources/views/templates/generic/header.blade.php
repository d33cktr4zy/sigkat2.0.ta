{{--We devide the header to each own section, so when we need to change specific section, it will be easy--}}
{{--Including the toolbar template--}}
@include('templates.generic.toolbar')

{{--Including the banner template--}}
@include('templates.generic.banner')

{{--Including the Navigation template--}}
@include('templates.generic.navigation')

@section('bodyHeader')
{{--
 Generic header of the site. Header that reside inside the body block
 Includes : Toolbar, Banner, Navigation
 --------------------------------------------------------------------
--}}

{{--Toolbar on top--}}
<div class="row" id="toolbar">
    @yield('toolbar')
</div>

{{--Banner--}}
<div class="row" id="banner">
    @yield('banner')
</div>

{{--Navbar--}}
<div class="row" id="navbar">
    @yield('mainNav')
</div>
@endsection