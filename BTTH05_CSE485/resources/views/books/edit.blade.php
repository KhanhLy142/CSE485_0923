@extends('layouts.app')
@section('title', 'Welcome Book')

@section('content')

<div class="container">
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="author_id" class="form-label">Author ID:</label>
            <input type="text" name="author_id" class="form-control" value="{{ $book->author_id }}" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
