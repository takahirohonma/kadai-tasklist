@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>タスク管理にログイン！</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            {{-- ユーザ登録ページへのリンク --}}
            <p class="mt-2">初めての方、アカウントをお持ちでない方はこちら： {!! link_to_route('signup.get', '新規登録') !!}</p>
        </div>
    </div>
@endsection