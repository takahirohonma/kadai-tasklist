@extends('layouts.app')
@section('content')
    <body>
        <h1>id = {{ $task->id }} のメッセージ詳細ページ</h1>
    
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <td>{{ $task->id }}</td>
            </tr>
            <tr>
                <th>ステータス</th>
                <td>{{ $task->status }}</td>
            </tr>
            <tr>
                <th>メッセージ</th>
                <td>{{ $task->content }}</td>
            </tr>
        </table>
        {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
        
        {{-- メッセージ削除フォーム --}}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('このタスクを削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    </body>
@endsection