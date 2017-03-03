@section('mainNavigation')
    {{--Navigation Start--}}
    <div class="col-xs-12 mainNavi">
        <ul class="navi">
            <li class="noChild">
                <a href="{!! route('home') !!}}">Home</a>
            </li>
            <li>
                <a>Stasi St. Joseph <span class="caret"></span></a>
                <ul>
                    <li><a href="{!! route("aboutStasi") !!}">Tentang Stasi St. Joseph Dr.Mansyur</a></li>
                    <li><a href="{!! route('aboutDPS') !!}">Dewan Pengurus Stasi</a></li>
                </ul>
            </li>
            <li>
                <a>Sakramen <span class="caret"></span></a>
                <ul>
                    @foreach(\App\Model\Sakramen::all() as $sak)
                        <?php $saks = explode(" ",$sak->nm_sakramen) ?>
                    <li><a href="{!! route('sakramen' . $saks[1]) !!}">{!! $sak->nm_sakramen !!}</a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a>Kategorial <span class="caret"></span></a>
                <ul>
                    @foreach(\App\Model\Kategorial::all() as $kat)
                        @if($kat->nm_kategorial == "Misdinar")

                            <li><a href="{!! route("kategorialMisdinar") !!}">{!! $kat->nm_kategorial !!}</a></li>
                        @elseif(strpos($kat->nm_kategorial, "Narwastu"))
                            <li><a href="{!! route("kategorialNarwastu") !!}">{!! $kat->nm_kategorial !!}</a></li>
                        @else
                            <?php preg_match("/\((\w+)\)/", $kat->nm_kategorial,$kateg) ?>
                            <li><a href="{!! route("kategorial".$kateg[1]) !!}">{!! $kat->nm_kategorial !!}</a></li>
                        @endif

                    @endforeach
                </ul>
            </li>

            <li class="noChild">
                <a href="{!! route("forumMain") !!}">Forum</a>
            </li>
        </ul>
    </div>
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