@if(isset($highlightPengumuman))
    <div class="container-fluid" id="pengumumanHighlights">
        <h2>Pengumuman Terakhir</h2>
        <div class="horizontal-ruler"></div>
        <div class="row">
            <div class="col-xs-12 col-md-12 pengumuman">
            @foreach($highlightPengumuman as $tanggal=>$pengumuman)
                {{--<hr/>--}}
                @foreach($pengumuman as $data)
                        <div class="row">
                            <div class="col-xs-9 col-md-9">
                                <h3>{!! $data->tema_pengumuman !!}</h3>
                            </div>
                            <div class="col-xs-3 col-md-3">
                                <h3 align="right">{!! \Carbon\Carbon::parse($tanggal)->format('d-m-Y') !!}</h3>
                            </div>
                        </div>
                            <div class="title-ruler"></div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <p>{!! substr($data->isi_pengumuman,0,300).'...' !!}</p>
                            </div>
                        </div>
                @endforeach
                    <div class="item-ruler"></div>
            @endforeach
            </div>
        </div>
    </div>
@else
    <h1 align="center" class="text-danger">Please provide the $highlightPengumuman Data ....</h1>
@endif