@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステイタス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @if (count($tasks) > 0)
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    
    
     {!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class' => 'btn btn-primary']) !!}
    
@endsection