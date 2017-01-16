@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
 <h1>id: {{ $task->id }} のタスクの編集ページ</h1>
<div class="col-xs-12","col-sm-offset-2 col-sm-8","col-lg-offset-3 col-lg-6" >
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
    <div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
    </div>
    <div class="form-group">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
    </div>
        {!! Form::submit('更新') !!}

    {!! Form::close() !!}
</div>
@endsection