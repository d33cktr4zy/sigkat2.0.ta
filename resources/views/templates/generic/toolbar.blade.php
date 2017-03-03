@section('toolbar')
<div class="col-xs-12 col-lg-4 col-md-4 col-sm-9">
    <p style="display: block;">
    @if(Auth::check())
        Welcome,
        @if(Auth::user()->user_level == 1)
            [admin]
        @endif
            <a href="#">{!! Auth::user()->nama_depan !!} {!! Auth::user()->nama_belakang !!}</a> | <a href="{!! route('logout') !!}"><b>Logout</b></a>
    @else
        <a href="{!! route('userLogin') !!}">Login</a> / <a name="name">Daftar</a>
    @endif
    </p>
</div>
<div class="col-lg-5 col-md-5 visible-lg visible-md"></div>
{{--Search Column--}}
<div class="col-xs-12 col-lg-3 col-md-3 col-sm-3">
    <input type="text" class="form-control visible-lg visible-sm-inline visible-md visible-xs-inline-block" placeholder="Search..." id="searchBox">
</div>
{{--Search Column End--}}
@endsection