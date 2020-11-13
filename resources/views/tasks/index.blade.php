@extends('layouts.app')

@section('content')

<body>
    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ステータス </th>
                    <th>タスク</th>
                    <th>作成日</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->status, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->created_at }}</td>
                    <td>
                        <div>
                            {{-- 投稿削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                                {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{ $tasks->links() }}
    
    {!! link_to_route('tasks.create', 'タスク新規作成', [], ['class' => 'btn btn-primary']) !!}
</body>

@endsection