@extends('layouts.app')
@section('title','Welcome Author')

@section('content')

<div class="container">
    <h3 class="text-center text-uppercase text-primary my-3">Author management</h3>
    <a href="{{ route('authors.create') }}"> <button type="submit" class="btn btn-success mt-5">Add new</button></a>
    @if(session('success'))
    <div class="Author created successfully." role="alert" id="success-alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <script>
        setTimeout(function(){
            document.getElementById('success-alert').style.display = 'none';
        }, 2000); // 5 seconds (adjust as needed)
    </script>
    @endif
    <table class="table mt-4">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach($authors as $author)
            <tr>
                <th><p>{{$author->id}}</p></th>
                <td><p>{{$author->name}}</p></td>
                <td><a href= "{{ route('authors.edit', ['author' => $author->id]) }}"><i class="bi bi-pencil"></i></a></td>
                <td>   
                <form id="delete-form-{{ $author->id }}" action="{{ route('authors.destroy', ['author' => $author->id]) }}" method="POST" style="display: none;">
                        @method('DELETE')
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); if (confirm('Do you want to delete?')) { document.getElementById('delete-form-{{ $author->id }}').submit(); }">
                        <i class="bi bi-trash3"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    @endsection
   
