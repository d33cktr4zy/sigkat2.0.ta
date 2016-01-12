@include('addons.generalSidebar.calendar')
@include('addons.generalSidebar.bacaanSidebar')
@include('addons.generalSidebar.dataGerejaSidebar')
@include('addons.generalSidebar.pengumuman')

@section('generalSidebar')
    <div id="generalSidebar"> <!--General Sidebar -->
        <div id="calendar"><!--Calendar Start -->
            <div class="header"><!--calendar header-->
                Kalender Kegiatan
            </div><!--end calendar header-->

            <div class="content"><!-- Calendar content -->
                @yield('calendar')
            </div><!-- callendar content end -->
        </div><!--Calendar End -->

        <div id="pengumumanSidebar"><!--pengumuman Sidebar Start -->
            <div class="header"><!--pengumuman header start -->
                Pengumuman Terbaru
            </div><!--pengumuman header end -->
            <div class="content"><!--pengumuman content start-->
                @yield('pengumumanSidebar')
            </div><!--pengumuman content end -->
        </div><!--pengumuman Sidebar end -->

        <div id="bacaanSidebar"><!--bacaan Sidebar Start -->
            <div class="header"><!-- bacaan header Start -->
                Bacaan Mingguan
            </div><!-- bacaan header End -->
            <div class="content"><!--bacaan Content Start -->
                @yield('bacaanSidebar')
            </div><!--bacaan Content end -->
        </div><!--bacaan Sidebar End -->
    </div><!--end General Sidebar -->
@endsection
