@section('includes')
@parent
        <!--including the general sidebar from the dataUmat-->
@include('addons.generalSidebar')
<!-- Sidebar General has been included -->
@append

@extends('templates.master.index', ['pageTitle' => 'Input Data Umat'])

@section('content')

    <div class="col-xs-12">
        @if($errors->has())
{{--            {!! dd($errors) !!}--}}
            <div class="col-xs-12">
                <div class="well well-lg alert-danger">
                    <h4 class="text-danger text-center">Gagal Menambahkan Umat. Periksa ulang data yang Anda masukkan!</h4>
                </div>
            </div>
        @endif
        <div class="col-xs-12">
            <div class="row">
                <h1>Data Umat</h1>
                <hr>
            </div>
            <div class="row">
                {!! Form::open(['route'=>'prosesTambahUmat', 'method'=>'post','role'=>'form', 'files'=> true]) !!}
                    <div class="row">
                        <div class="col-xs-12 col-md-3 pull-right">
                            <div class="row">
                                @if(isset($umat))
                                    @if(null !== $umat->path_gambar)
                                    <img src="{!! '/images/umat/'. $umat->path_gambar !!}" width="200" />
                                        @else
                                    <img src="/images/imgph.jpg" width="200" />
                                    @endif
                                @else
                                    <img src="/images/imgph.jpg" width="200" />
                                @endif
                            </div>
                            <div class="row form-group">
                                {!! Form::file('imageUmat',['class' => 'well']) !!}
                                @if(null !== $errors->first('imageUmat'))
                                    <p class="errors">{!! Session::get('error') !!}</p>
                                @endif
                                {{--<input type="file" name="umatImage" class="btn btn-warning">--}}
                            </div>
{{--                            {!! Form::submit('Tambah Image', ['class' => 'send-btn']) !!}--}}
                        </div>
                        <div class="col-xs-12 col-md-9">
                            <div class="row form-group">
                                <div class="col-xs-12 col-md-3">
                                    <label class="control-label" for="namaDepan">Nama Lengkap</label>
                                </div>
                                <div class="col-xs-6 col-md-4 @if($errors->has('namaDepan')) has-error @endif">
                                    <input type="text" class="form-control" id="namaDepan" placeholder="Nama Depan" name="namaDepan" value="{{old('namaDepan')}}">
                                    @if($errors->has('namaDepan')) <p class="help-block">{{ $errors->first('namaDepan') }}</p>@endif
                                </div>
                                <div class="col-xs-6 col-md-4 @if($errors->has('namaBelakang')) has-error @endif">
                                    <input type="text" class="form-control" id="namaBelakang" placeholder="Nama Belakang" name="namaBelakang" value="{{old('namaBelakang')}}">
                                    @if($errors->has('namaBelakang')) <p class="help-block">{{ $errors->first('namaBelakang') }}</p>@endif
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-12 col-md-3 ">
                                    <label class="control-label">Tempat Lahir</label>
                                </div>
                                <div class="col-md-8 col-xs-12 @if($errors->has('tempatLahir')) has-error @endif">
                                    <input type="text" class="form-control" placeholder="Tempat Kelahiran" name="tempatLahir" value="{{old('tempatLahir')}}">
                                    @if($errors->has('tempatLahir')) <p class="help-block">{{ $errors->first('tempatLahir') }}</p>@endif
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-12 col-md-3">
                                    <label class="control-label">Tanggal Lahir</label>
                                </div>
                                <div class="col-xs-6 col-md-4 @if($errors->has('tanggalLahir')) has-error @endif">
                                    @if($errors->has('tanggalLahir'))
                                    <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" value="{{old('tanggalLahir')}}" />
                                    @else
                                    <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" value="<?php echo \Carbon\Carbon::now()->toDateString(); ?>" />
                                    @endif

                                    @if($errors->has('tanggalLahir')) <p class="help-block">{{ $errors->first('tanggalLahir') }}</p>@endif
                                </div>
                                <div class="col-xs-6 col-md-5 @if($errors->has('jk')) has-error @endif">
                                    <div class="col-xs-6">
                                        <label class="pull-left @if($errors->has('jk')) text-danger @endif">
                                            <input class="control-label" type="radio" value="1" name="jk" @if(old('jk')== 1 || old('jk') == "") checked @endif>Laki-laki
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class=" @if($errors->has('jk')) text-danger @endif">
                                            <input class="control-label" type="radio" value="2" name="jk" @if(old('jk')== 2) checked @endif>Perempuan
                                        </label>
                                    </div>
                                    @if($errors->has('jk')) <p class="help-block">{{ $errors->first('jk') }}</p>@endif

                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-12 col-md-3">
                                    <label class="control-label">Alamat</label>
                                </div>
                                <div class="col-md-8 col-xs-12 @if($errors->has('alamat')) has-error @endif">
                                    <input type="text" class="form-control" placeholder="Alamat Rumah" name="alamat" value="{{old('alamat')}}">
                                    @if($errors->has('alamat')) <p class="help-block">{{ $errors->first('alamat') }}</p>@endif
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-12 col-md-3">
                                    <label class="control-label">No. Telepon</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" placeholder="Nomer Telepon" name="noTelp" value="{{old('noTelp')}}">

                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-3 col-xs-push-8 col-md-push-3 col-md-4">
                                    <label class="">
                                        <input class="control-label" type="checkbox" value="1" name="kepalaKeluarga" id="checkKel" @if(old('kepalaKeluarga') == 1) checked @endif> Kepala Keluarga
                                    </label>
                                </div>
                            </div>
                            <div class="row form-group" id="sectKeluarga">
                                <div class="col-xs-12 col-md-3">
                                    <label class="control-label">Keluarga</label>
                                </div>
                                <div class="col-md-4 col-xs-12 @if($errors->has('keluarga')) has-error @endif">
                                    <select class="form-control" name="keluarga">
                                        <option></option>
                                        @foreach($kel as $keluarga)
                                        <option value="{!! $keluarga->id_keluarga !!}" @if(old('keluarga') == $keluarga->id_keluarga) selected @endif>
                                            {!! $keluarga->kepalaKeluarga->nama_depan !!} {!! $keluarga->kepalaKeluarga->nama_belakang !!}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('keluarga')) <p class="help-block">{{ $errors->first('keluarga')}}</p>@endif
                                </div>
                            </div>
                            <div class="row form-group" id="sectLingkungan">
                                <div class="col-xs-12 col-md-3">
                                    <label class="control-label">Lingkungan</label>
                                </div>
                                <div class="col-md-4 col-xs-12 @if($errors->has('lingkungan')) has-error @endif">
                                    <select class="form-control" name="lingkungan">
                                        <option></option>
                                        @foreach($ling as $lingkungan)
                                            <option value="{!! $lingkungan->id_lingkungan !!}" @if(old('lingkungan') == $lingkungan->id_lingkungan) selected @endif>{!! $lingkungan->nm_lingkungan !!}</option>
                                        @endforeach
                                    </select>
{{--                                    {!! dd(old('lingkungan')) !!}--}}
                                            @if($errors->has('lingkungan')) <p class="help-block">{{ $errors->first('lingkungan')}}</p>@endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4 col-xs-6 col-md-push-4">
                            <button type="button" class="btn btn-lg btn-block btn-danger">Batal</button>
                        </div>
                        <div class="col-md-4 col-xs-6 col-md-push-4">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Submit</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection


@section('footScript')
    @parent
    {!! HTML::script('/js/tambahUmat.js', ['type' => 'text/javascript']) !!}


  {{--  <script type="text/javascript">
        $(function(){
        $("#tanggalLahir").datepicker({
            format:{
                toDisplay: 'dd-MM-yyyy',
                toValue: 'dd/mm/yyy'
            }
        });
        });
    </script>--}}
@append
