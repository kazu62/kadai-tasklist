@extends('layouts.app')

@section('content')

<h1>タスクの新規登録</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}
        <br>
        {!! Form::submit('登録') !!}

    {!! Form::close() !!}

@endsection