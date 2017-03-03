@section('includes')
@parent
        <!--including the general sidebar from the dataUmat-->
@include('addons.generalSidebar')
        <!-- Sidebar General has been included -->
@append

@extends('templates.master.index', ['pageTitle' => 'Data Umat'])

@section('content')
    {{--@if(old('filters'))
        {!! dd(old(), 'Old') !!}
    @endif--}}
    <div class="col-xs-12" id="data-umat">
        <div class="row" id="pg-header" data-pg-collapsed>
            <h1>Data Umat Stasi St. Yoseph Dr. Mansyur</h1>
            <div class="horizontal-ruler" style="display: block;"></div>
        </div>
        {{--{!! dd(Input::all(), 'chkUmur', old('chkUmur')) !!}--}}
        <div class="row" id="data-filter-form" data-pg-collapsed>
            {!! Form::open(['route' => 'filterDataUmat', 'method' => 'post', 'role'=>'form', 'id'=>'form-data-filter']) !!}
            {!! Form::token() !!}
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <h4>Pilih Cakupan Data yang diinginkan</h4>
                </div>
                <div class="radio col-xs-12">
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <label class="control-label pull-left">
                            @if(old('filters') === 'all')
                                {{--{!! dd(old('filters')) !!}--}}
                            <input type="radio" name="filters" value="all" checked id="allData">Seluruh Data
                            @else
                            <input type="radio" name="filters" value="all" id="allData">Seluruh Data
                            @endif
                        </label>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <label class="control-label pull-left">
                            @if(old('filters') === 'filterData')
                            <input type="radio" name="filters" value="filterData" checked>Filter Data
                            @else
                            <input type="radio" name="filters" value="filterData">Filter Data
                                @endif
                        </label>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <label class="control-label pull-left">
                            @if(old('filters') === 'cariNama')
                            <input type="radio" name="filters" value="cariNama" checked id="radCariNama">Cari Nama
                                @else
                            <input type="radio" name="filters" value="cariNama" id="radCariNama">Cari Nama
                            @endif
                        </label>
                    </div>
                    <div class="col-md-3 hidden-xs hidden-sm">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="well col-md-12 col-sm-12 col-xs-12 well-lg" id="filters-well">
                        <div class="row">
                            <h4 style="display: block;">Pilih Filter Data</h4>
                        </div>
                        <div class="row" style="display: block;">
                            <div class="col-md-3 col-sm-12 col-xs-12" style="display: block;">
                                <label class="control-label" style="display: inline-block;">
                                    @if(old('chkLingkungan'))
                                    <input class="control-label" type="checkbox" value="1" name="chkLingkungan" checked>
                                    @else
                                    <input class="control-label" type="checkbox" value="1" name="chkLingkungan">
                                    @endif
                                    <span>Lingkungan</span>
                                </label>

                                <select class="form-control" name="namaLingkungan">
                                    @foreach($lingkungan as $key => $ling)
                                        @if($ling->id_lingkungan == old('namaLingkungan'))
                                        <option value="{!! $ling->id_lingkungan !!}" selected>{!! $ling->nm_lingkungan !!}</option>
                                        @else
                                        <option value="{!! $ling->id_lingkungan !!}">{!! $ling->nm_lingkungan !!}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12" style="display: block;">
                                <label class="control-label" style="display: inline-block;">
                                    @if(old('chkJenisKelamin'))
                                    <input class="control-label" type="checkbox" value="1" name="chkJenisKelamin" checked>
                                    @else
                                    <input class="control-label" type="checkbox" value="1" name="chkJenisKelamin">
                                    @endif
                                    <span>Jenis Kelamin</span>
                                </label>
                                <select class="form-control" name="jenisKelamin">
                                    @if(old('jenisKelamin') == 1)
                                    <option value="1" selected>Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                    @else
                                    <option value="1">Laki-Laki</option>
                                    <option value="2" selected>Perempuan</option>
                                        @endif
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12" style="display: block;">
                                <label class="control-label" style="display: block;width:100%;">
                                    @if(old('chkUmur'))
                                    <input class="control-label" type="checkbox" value="1" name="chkUmur" checked>
                                    @else
                                    <input class="control-label" type="checkbox" value="1" name="chkUmur">
                                    @endif
                                    <span>Umur</span>
                                </label>
                                <select class="form-control" style="width:45%; float:left;" name="umurAwal">
                                    @for($c = 0; $c <=99; $c++)
                                        @if($c == old('umurAwal'))
                                        <option value="{{$c}}" selected>{{$c}}</option>
                                        @else
                                        <option value="{{$c}}">{{$c}}</option>
                                        @endif
                                    @endfor
                                </select>
                                <span style="width:10%; text-align:center; float:left; padding-top:3%;"> - </span>
                                <select class="form-control" style="width:45%; float:left;" name="umurAkhir">
                                    @for($c = 0; $c <=99; $c++)
                                        @if($c == old('umurAkhir'))
                                        <option value="{{$c}}" selected>{{$c}}</option>
                                        @else
                                        <option value="{{$c}}">{{$c}}</option>
                                        @endif
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12" style="display: block;">
                                <label class="control-label">Nama Umat</label>
                                @if(old('namaUmat') === '')
                                    <input type="text" class="form-control" placeholder="Nama Umat" name="namaUmat" id="txtNamaUmat">
                                @else
                                    <input type="text" class="form-control" value="{!! old('namaUmat') !!}" name="namaUmat" id="txtNamaUmat">
                                @endif
                            </div>
                            {{--{!! dd(old('namaUmat')) !!}--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                {{-- Pengelompokan berdasarkan keluarga masih belum bisa di implementasikan.
                Permasalahannya adalah Pagination masih belum suppport Group By --}}
                {{--
                    <label class="pull-right" style="margin-top:3%;">
                        <input class="control-label" type="checkbox" value="1" name="chkKeluarga">Kelompokkan berdasarkan Keluarga
                    </label>
                --}}
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success btn-block" name="filter">Filter Data</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="row row-spacer">
            <div class="horizontal-ruler" style="display: block;"></div>
        </div>
        <div class="row" style="margin-bottom:10px;">
            <div class="col-xs-12 text-right">
                <a href="{!! route('tambahUmat') !!}"><button class="btn btn-success">Tambah Umat</button></a>
            </div>
        </div>

        <div class="row" id="table-row">
            <div class="col-md-12">
                <table class="table" id="data-table">
                    <thead>
                    <tr style="text-align: center">
                        <th width="30px">No.</th>
                        <th width="180px">Nama</th>
                        <th width="40px">JK</th>
                        <th width="100px">Tempat Lahir</th>
                        <th width="70px">Umur</th>
                        <th width="90px">Lingkungan</th>
                        <th width="180px">Keluarga</th>
                        <th width="60px" colspan="2">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $k=>$umat)
                        <tr>
                            <td align="center">
                                {!! ($data->perPage() * $data->currentPage()) - (($data->perPage()) - ($k + 1)) !!}
                            </td>
                            <td>
                                {!! $umat->nama_depan . ' ' . $umat->nama_belakang !!}
                            </td>
                            <td>
                                {{--{!! dd($umat->jk) !!}--}}
                                @if($umat->jk === 1)
                                    Lk
                                @else
                                    Pr
                                @endif
                            </td>
                            <td>
                                {!! $umat->tempat_lahir !!}
                            </td>
                            <td>
                                {!!
                                  (int)floor(\Carbon\Carbon::parse($umat->tanggal_lahir)->diffInDays(\Carbon\Carbon::now())/365)
                                 !!} thn
                            </td>
                            <td>
                                {!! $umat->lingkungan->nm_lingkungan!!}
                            </td>
                            <td>
                                @if(null !== $umat->keluarga)
                                    {!! $umat->keluarga->kepalaKeluarga->nama_depan . ' ' . $umat->keluarga->kepalaKeluarga->nama_belakang !!}
                                @else
                                    Belum ada Data
                                @endif
                            </td>
                            <td width="30px" align="center">
                                <a href="#">
                                    <span class="glyphicon glyphicon-pencil " ></span>
                                </a>
                            </td>
                            <td width="30px" align="center">
                                <a href="#">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="col-xs-3" style="padding-top: 10px;">
                    <strong>{!! ($data->perPage() * $data->currentPage()) - $data->perPage() +1 !!}</strong> sampai <strong>{!!  ($data->perPage() * $data->currentPage()) !!}</strong> dari <strong>{!! $data->total() !!}</strong> Umat
                    <br />
                    hal. <strong>{!! $data->currentPage() !!}</strong> dari <strong >{!! ceil($data->total() / $data->perPage()) !!}</strong> halaman
                </div>
                <div class="col-xs-9 text-center">
                    {!! $data->appends(old())->render() !!}
                </div>
            </div>
        </div>
    </div>


@endsection


@section('footScript')
    @parent
    {!! HTML::script('/js/dataUmat.js', ['type' => 'text/javascript']) !!}
@append
