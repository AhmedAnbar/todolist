@extends('layouts.app')

@section('title')
{{$todo->id}}
@endsection


@section('content')
<a class="btn btn-secondary" href="/" role="button">Go Back</a>
<h1  style="margin-top: 1.5rem;">{{ $todo->text }} <span class="badge badge-danger">{{ $todo->due }}</span></h1>
<hr>
<p>{{ $todo->body }}</p>
<br><br>
<a class="btn btn-primary" href="/todo/{{$todo->id}}/edit" role="button">Edit</a>
{!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'class' => 'pull-right']) !!}
  {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
  {{ Form::hidden('_method', 'DELETE') }}
{!! Form::close() !!}

@endsection
