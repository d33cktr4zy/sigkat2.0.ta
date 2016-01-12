@section('adminMenu')
    <div style="margin-bottom: 5px; margin-top:5px">
        <div class="col-xs-12" style="text-align: center"  id="adminNav">
            <ul class="admin-menu">
                <li>{{--Manajemen Konten Menu--}}
                    <a href="#">Manajemen Konten <span class="caret"></span> </a>
                    <ul>
                        <li>
                            <a href="#">Manajemen Forum</a>
                            <ul>
                                <li><a href="#">abckslak</a></li>
                                <li><a href="#">aksdalkj</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Manajemen Fo</a>
                        </li>
                    </ul>
                </li>{{--End Manajemen Konten Menu--}}
                <li>{{--Manajemen Konten Menu--}}
                    <a href="#">Manajemen Gereja <span class="caret"></span> </a>
                    <ul>
                        <li>
                            <a href="#">Manajemen Forum</a>
                        </li>
                        <li>
                            <a href="#">Manajemen Fo</a>
                        </li>
                    </ul>
                </li>{{--End Manajemen Konten Menu--}}
                <li>{{--Manajemen Konten Menu--}}
                    <a href="#">Manajemen User <span class="caret"></span> </a>
                    <ul>
                        <li>
                            <a href="#">Manajemen Forum</a>
                        </li>
                        <li>
                            <a href="#">Manajemen Fo</a>
                        </li>
                    </ul>
                </li>{{--End Manajemen Konten Menu--}}
            </ul>
        </div>
    </div>
    @endsection

    @section('headStyles')
    @parent
            <!--admin headStyles -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <!--end admin headStyles -->
@append