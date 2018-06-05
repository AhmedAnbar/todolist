@extends('layouts.app')


@section('title')
List Todos
@endsection

@section('content')
  @if(count($todos) > 0)
    @foreach($todos as $todo)
      <div class="list-group" style="margin-top: .6rem;">
        <a href="todo/{{ $todo->id }}" class="list-group-item list-group-item-action">
          <h4>{{ $todo->text }}</h4>
          {{ $todo->body }}
          <span class="badge badge-danger">{{ $todo->due }}</span>
        </a>
      </div>
    @endforeach
  @endif
@endsection

@section('sidebar')
  @parent
  <hr>
  @if(count($todos) > 0)
  <h4>Latest Todos</h4>
    @foreach($todos as $todo)
    <div class="list-group text-center" style="margin-top: .6rem;">
      <a href="todo/{{ $todo->id }}" class="list-group-item list-group-item-action">
        {{ $todo->text }}
      </a>
    </div>
    @endforeach
  @endif
@endsection
