@if(isset($berita))
    @foreach($berita as $news)
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="col-md-12 col-sm-12 col-xs-12 news-highlight">
                <div class="row header">
                    <h3>
                        {!! substr($news->jdl_berita, 0,20) !!}
                    </h3>
                    <h4 class="news-timestamp">
                        {!! \Carbon\Carbon::parse($news->waktu_berita)->format('d-m-Y') !!}
                    </h4>
                </div>
                <div class="row excerpt">
                    <p>
                        {!! substr($news->isi_berita, 0,150).'...' !!}
                    </p>
                </div>
                <div class="row read-more">
                    <a href="http://">Read More...</a>
                </div>
            </div>
        </div>
    @endforeach
@else
    <h1 align="center" class="text-danger">Please add berita to the data source...</h1>
@endif