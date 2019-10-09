@extends('todo/base')

@section('body')
    <h1>To Do</h1>
    <button><a href="{{ route('todoNewForm') }}">Add New</a></button>
    <button><a href="{{ route('todoIndex') }}">All</a></button>
    <button><a href="{{ route('todoFinished') }}">Finished</a></button>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Description</th>
            <th>Status</th>
        </tr>
        @foreach ($todos as $todo)
        <tr>
            <td>{{ $todo -> id }}</td>
            <td>{{ $todo -> description}}</td>
            <td>{{ $todo -> status}}</td>
            <td><input type="button" value="Edit" 
                onclick="location.href='/todo/edit/ {{ $todo -> id }}'"></td>
            <td><input type="button" value="Delete" 
                onclick="if(confirm('Are you sure to delete it?'))
                            location.href='/todo/delete/ {{ $todo -> id }}'"></td>
        </tr>
        @endforeach    
    </table>
@endsection