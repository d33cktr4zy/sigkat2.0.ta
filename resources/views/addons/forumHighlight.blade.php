@if(isset($forumHighlight))
    <div class="container-fluid" id="forumHighlights">
        <div class="header">
        <h3>Kiriman Forum Gereja Terbaru</h3>
        </div>
        <div class="horizontal-ruler"></div>
        @foreach($forumHighlight as $topikID=>$forumPosts)
            <div class="row">
                <div class="container-fluid">
                    <h4 style="display: block;">
                        <small style="display: inline-block;">
                            [Topic]
                        </small>
                        {!! \App\Model\ForumTopik::where('id_topik', $topikID)->pluck('nm_topik') !!}
                    </h4>
                    <div class="horizontal-ruler topic-divider"></div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            @foreach($forumPosts as $posts)
                                <div class="col-md-12 col-xs-12">
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 col-xs-12">--}}
                                            <h5>
                                                @if(null !== $posts->id_forum_kategori)
                                                    <small>[kat]</small>{!! $posts->kategori->nm_kategori !!}
                                                @endif
                                            </h5>
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="row">
                                        <div class="col-md-8 col-xs-8 poster-name">
                                            <p class="">
                                                {!!
                                                $posts->poster->username
                                                !!}
                                            </p>
                                        </div>
                                        <div class="col-md-4 col-xs-4 post-time">
                                            <p class="">
                                                at: {!! \Carbon\Carbon::parse($posts->wkt_kirim)->format('d-m-Y \\[H:i:s\\]') !!}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="horizontal-ruler in-post-line " style="display: block;"></div>
                                        <p>
                                            {!! substr($posts->isi_post,0,400).'...' !!}
                                        </p>
                                        <div class="horizontal-ruler in-post-line " style="display: block;"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <h1 align="center" class="text-danger">Please provide the $forumHighlight Data ...</h1>
@endif