@section('includes')
    @parent
    @include('test')
    @include('addons.generalSidebar')
    {{--Include the Sidebar --}}

@append

@extends('templates.master.index',['pageTitle' => 'Home'])


@section('content')
    {{--{!! dd($berita) !!}--}}
        <div class="row" id="carousel">
            @include('addons.carousel')
        </div>

        <div class="row" id="news-highlight"><!--row for news highlight-->
            @include('addons.newsHighlight')
        </div><!--end row for news highlight-->

        <div class="row" id="pengumuman-highlight"><!--row for pengumuman highlight-->
            @include('addons.pengumumanHighlight')
        </div><!--end row for pengumuman highlight-->

        <div class="row" id="forum-highlight"><!--row for forum highlight-->
            @include('addons.forumHighlight')
        </div><!--row for forum highlight-->


@endsection


