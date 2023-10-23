@extends('layouts.app')
@section('title','Welcome Book')

@section('content')

<div class="container">
    <h3 class="text-center text-uppercase text-primary my-3">library management</h3>
    <a href="{{ route('books.create') }}"> <button type="submit" class="btn btn-success mt-5">Add new</button></a>
    @if(session('success'))
    <div class="Book created successfully." role="alert" id="success-alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <script>
        setTimeout(function(){
            document.getElementById('success-alert').style.display = 'none';
        }, 2000); // 5 seconds (adjust as needed)
    </script>
    @endif
    <table class="table mt-5">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Author_id</th>
            <th scope="col">Title</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <th><p>{{$book->id}}</p></th>
                <th><p>{{$book->author_id}}</p></th>
                <td><p>{{$book->title}}</p></td>
                <td><a href= "{{ route('books.edit', ['book' => $book->id]) }}"><i class="bi bi-pencil"></i></a></td>
                <td>   
                <form id="delete-form-{{ $book->id }}" action="{{ route('books.destroy', ['book' => $book->id]) }}" method="POST" style="display: none;">
                        @method('DELETE')
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); if (confirm('Do you want to delete?')) { document.getElementById('delete-form-{{ $book->id }}').submit(); }">
                        <i class="bi bi-trash3"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    @endsection
    

