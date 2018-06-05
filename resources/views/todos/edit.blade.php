@extends('layouts.app')

@section('title')
Edit {{ $todo->text }}
@endsection

@section('content')
<a class="btn btn-secondary" href="/todo/{{$todo->id}}" role="button">Go Back</a>
<h1>Edit Todo</h1>
{!! Form::open(['action' => ['TodosController@update', $todo->id]]) !!}
  {{ Form::bsText('text', $todo->text) }}
  {{ Form::bsTextArea('body', $todo->body) }}
  {{ Form::bsText('due', $todo->due) }}
  {{ Form::hidden('_method', 'PUT') }}
  {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}
@endsection
