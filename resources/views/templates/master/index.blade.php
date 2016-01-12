{{--
    If the calling view has a specific files it needs to includes, we will include it here
    so that if that view has additional styles, scripts, title, or metas, its contents
    will be parsed first.
--}}
@section('includes')
{{-- Loading any previous includes section (usually from the loading views) --}}
@parent
{{-- Listing all the includes that needed to load standard Master Templates --}}
@include('templates.generic.header')
@include('templates.generic.footer')
@include('templates.metaFoot')
{{-- metaHead Templates need to load last so that any includes that contain head has been loaded --}}
@include('templates.metaHead')
@append

@yield('includes')

        <!DOCTYPE html>
<html lang="en">
<head>
    @yield('metaHead')
</head>
<body>
{{-- Start of Body --}}
@if($errors->has('generalError'))
    @foreach($errors->get('generalError') as $message)
        <div class="col-xs-12 alert alert-danger">
            <h4 align="center">{!! $message !!}</h4>
        </div>
    @endforeach
    <p>&nbsp;</p>
@endif

<div class="container" id="pageWrapper"> {{--Start Of Content--}}
    @if($__env->yieldContent('adminSidebar') != "" || $__env->yieldContent('generalSidebar') != "")
        <div class="pull-right visible-xs visible-sm tog-button">
            <button type="button" class="btn btn-xs" data-toggle="offcanvas">sidebar</button>
        </div>
    @endif
    @yield('bodyHeader')
    <div class="row" id="content">
        @if(Auth::check())
            @if(Auth::user()->user_level == 1)
                <div class="row">{{-- Admin Menu always include row class --}}
                    @yield('adminMenu')
                </div>{{-- and closing div --}}
            @endif
        @endif
        <div class="row row-offcanvas row-offcanvas-right">
            @if($__env->yieldContent('adminSidebar') != "" || $__env->yieldContent('generalSidebar') != "")
                <div class="container-fluid col-xs-12 col-md-9" id="dataCol">
                    {{--
                    <div class="pull-right visible-xs visible-sm" style="position: relative; z-index: 1000; float: right">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">sidebar</button>
                    </div>
                    --}}
                    @else
                        <div class="container-fluid col-xs-12" id="dataCol">
                            @endif
                            @yield('content', 'Ini tempat Content ya cuk! Ingat, Content section sudah diimbuhkan div row. Tambahin column nya/containernya')
                        </div>

                        @if($__env->yieldContent('adminSidebar') != "" || $__env->yieldContent('generalSidebar') != "")
                            <div class="container-fluid col-xs-12 col-md-3 sidebar-offcanvas"><!-- Start sidebar-offcanvas -->
                                <div id="sidebarCol"><!--Start sidebarCol -->
                                    {{--Sidebar should always have a col class with pull right--}}
                                    @if($__env->yieldContent('adminSidebar') != "")
                                    @yield('adminSidebar')
                                    @endif
                                    <!-- generalSidebar start -->@yield('generalSidebar')<!-- generalSidebar end -->
                                </div><!--end sidebarCol -->
                            </div><!-- end sidebar-offcanvas -->
                        @endif
                </div>
        </div><!-- closing Content -->
        @yield('footer')
    </div> <!--Closing for PageWrapper -->
@yield('metaFooter')
</body>
</html>
