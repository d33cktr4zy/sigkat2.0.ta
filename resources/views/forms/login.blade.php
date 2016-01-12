@extends('templates.master.index', ['pageTitle' => 'Login'])

@section('content')
    <div class="container" id="loginForm">
        <h1 style="text-align: center; display: block;">Login</h1>
        @if($errors->has('loginError'))
            <div class="alert alert-danger">
                @foreach($errors->get('loginError') as $message)
                    <b>{!! $message !!}</b>
                @endforeach
            </div>
        @endif
        <form action="{!! route('cekLogin') !!}" method="post" role="form" style="display: block;" class="form-horizontal">
            <div class="form-group">
                <input type="text" name="username" class="form-control input-lg" id="inputUsername" placeholder="Username / Alamat Email">
                @if($errors->has('username'))
                    <div>
                        <ul class="text-danger">
                            @foreach($errors->get('username') as $message)
                                <li>{!! $message !!}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control input-lg" id="inputPassword" placeholder="Password">
                @if($errors->has('password'))
                    <div>
                        <ul class="text-danger">
                            @foreach($errors->get('password') as $message)
                                <li>{!! $message !!}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="checkbox text-right">
                <label class="control-label">
                    <input type="checkbox" id="chkIngat" name="ingat" class="bg-transparent">Ingat saya
                </label>
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-success btn-lg" id="buttonSubmit" type="submit">Login</button>
                {!! Form::token() !!}
            </div>
        </form>
    </div>
@endsection

@section('footScript')
    <script type="text/javascript">
        $('document').ready(function(){
            var h = $('#content').height();
            var bh = $('#loginForm').height();
            var bb = (h/2)-(bh/2);
            $('#loginForm').css({
               "margin-top" : bb,
            });

        });
    </script>
@endsection