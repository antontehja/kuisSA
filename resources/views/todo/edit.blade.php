@extends('todo/base')

@section('body')
<form method='post' action="/todo/update">
{{ csrf_field() }}
    <div>
        <label>ID: </label>
        <input type="text" name="id" value="{{ $todos -> id }}" readonly>
    </div>
    <div>
        <label>Description: </label>
        <input type="text" name="desc" value="{{ $todos -> description }}">
    </div>
    <div>
        <label>Status: </label>
        <input type="checkbox" name="status" value=0 hidden><label hidden>Pending</label>
        <input type="checkbox" name="status" value=1><label>Completed</label>
        <!-- <input type="text" name="status" value="{{ $todos -> status }}"> -->
    </div>
    <div>
        <input type="submit">
    </div>
</form>
@endsection                
