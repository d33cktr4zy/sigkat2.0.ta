@section('mainNavigation')
{{--Navigation Start--}}
<div class="col-xs-12 col-md-12" id="mainNavi">
    {{--Home Link--}}
    <div class="btn-group">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
    </div>
    {{--Home Link End--}}

    {{--Forum Menu--}}
    <div class="btn-group">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Forum <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="#" data-toggle="dropdown">Action</a>
            </li>
            <li>
                <a href="#" data-toggle="dropdown">Another action</a>
            </li>
            <li>
                <a href="#" data-toggle="dropdown">Something else here</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#" data-toggle="dropdown">Separated link</a>
            </li>
        </ul>
    </div>
    {{--Forum Menu End--}}

    {{--Sakramen Menu--}}
    <div class="btn-group">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">    Sakramen <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="#" data-toggle="dropdown">Action</a>
            </li>
            <li>
                <a href="#" data-toggle="dropdown">Another action</a>
            </li>
            <li>
                <a href="#" data-toggle="dropdown">Something else here</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#" data-toggle="dropdown">Separated link</a>
            </li>
        </ul>
    </div>
    {{--Sakramen Menu End--}}

    {{--Kategorial Menu--}}
    <div class="btn-group">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">    Kategorial <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="#" data-toggle="dropdown">Action</a>
            </li>
            <li>
                <a href="#" data-toggle="dropdown">Another action</a>
            </li>
            <li>
                <a href="#" data-toggle="dropdown">Something else here</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#" data-toggle="dropdown">Separated link</a>
            </li>
        </ul>
    </div>
    {{--Kategorial Menu End--}}

    {{--About Menu--}}
    <div class="btn-group">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">    Stasi St. Joseph <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="#" data-toggle="dropdown">Action</a>
            </li>
            <li>
                <a href="#" data-toggle="dropdown">Another action</a>
            </li>
            <li>
                <a href="#" data-toggle="dropdown">Something else here</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#" data-toggle="dropdown">Separated link</a>
            </li>
        </ul>
    </div>
    {{--About Menu End--}}

</div>
{{--Navigation End--}}
@endsection

@section('includes')
    @parent
        @section('headStyles')
            @parent
            <!--main Navigation headStyles -->
            <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
            <!--end mainNavigation headStyles -->
        @append
@append

