@extends('todo/base')

@section('body')
<form method="post" action="{{ route('todoCreate') }}">
{{ csrf_field() }}
    <div>
        <label>Description: </label>
        <input type="text" name="desc">
    </div>
    <div>
        <label>Status: </label>
        <input type="checkbox" name="status" value=0><label>Pending</label>
        <input type="checkbox" name="status" value=1><label>Completed</label>
    </div>
    <div>
        <input type="submit">
    </div>
</form>
@endsection   