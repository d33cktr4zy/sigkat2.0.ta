@section('adminMenu')
    <div style="margin-bottom: 5px; margin-top:5px">
        <div class="col-xs-12 adminNav">
            <ul class="admin-menu">
                <li>{{--Manajemen Konten Menu--}}
                    <a>Manajemen Umat<span class="caret"></span> </a>
                    <ul>
                        <li>
                            <a>Data Umat <spam class="caret"></spam></a>
                            <ul>
                                <li><a href="{!! route('dataUmatAdmin') !!}">Lihat Data Umat</a></li>
                                <li><a href="{!! route('tambahUmat') !!}">Tambah Umat</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Data Keluarga <span class="caret"></span></a>
                            <ul>
                                <li><a href="#">Data Keluarga</a></li>
                                <li><a href="#">Tambah Keluarga</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Data Lingkungan <span class="caret"></span></a>
                            <ul>
                                <li><a href="#">Data Lingkungan</a></li>
                                <li><a href="#">Tambah Lingkungan</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>{{--End Manajemen Umat Menu--}}
                <li>{{--Manajemen Konten Menu--}}
                    <a>Manajemen Konten <span class="caret"></span> </a>
                    <ul>
                        <li>
                            <a href="#">Bacaan <span class="caret"></span></a>
                            <ul>
                                <li><a href="#">Daftar Bacaan</a></li>
                                <li><a href="#">Tambah Bacaan</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Doa <span class="caret"></span></a>
                            <ul>
                                <li><a href="#">Daftar Doa Mingguan</a></li>
                                <li><a href="#">Tambah Doa</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pengumuman <span class="caret"></span></a>
                            <ul>
                                <li><a href="#">Daftar Doa Mingguan</a></li>
                                <li><a href="#">Tambah Doa</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Sakramen <span class="caret"></span></a>
                            <ul>
                                <li><a href="#">Daftar Doa Mingguan</a></li>
                                <li><a href="#">Tambah Doa</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Berita <span class="caret"></span></a>
                            <ul>
                                <li><a href="#">Daftar Doa Mingguan</a></li>
                                <li><a href="#">Tambah Doa</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>{{--End Manajemen Konten Menu--}}
                <li>{{--Manajemen Forum Menu--}}
                    <a>Manajemen Forum<span class="caret"></span> </a>
                    <ul>
                        <li>
                            <a href="#">User <span class="caret"></span></a>
                            <ul>
                                <li><a href="#">Daftar User Forum</a></li>
                                <li><a href="#">Ubah Data User</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Forum Topik <span class="caret"></span></a>
                            <ul>
                                <li><a href="#">Daftar Topik Forum</a></li>
                                <li><a href="#">Tambah Topik Forum</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Forum Kategori <span class="caret"></span></a>
                            <ul>
                                <li><a href="#">Daftar Kategori Forum</a></li>
                                <li><a href="#">Tambah Kategori Forum</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Forum Posts <span class="caret"></span></a>
                            <ul>
                                <li><a href="#">Daftar Posting Forum</a></li>
                                <li><a href="#">manajemen Posting Forum</a></li>
                            </ul>
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

@section('footScript')
@parent
{{--
<script type="text/javascript">
    // Javascript originally by Patrick Griffiths and Dan Webb.
    // http://htmldog.com/articles/suckerfish/dropdowns/
    $(document).ready(function(){
        var w =0;
        $('.admin-menu > li > ul > li > a').each(function(){
            w += $(this).width();
        });
        $('.admin-menu > li > ul > li > a').hover(alert('hover' + $('.admin-menu > li > ul > li > a').width()));
        $('.admin-menu > li > ul').width(w);
        alert(w);
    });
</script>
    --}}
@append