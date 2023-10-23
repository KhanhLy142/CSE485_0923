@extends('layouts.app')
@section('title', 'Welcome Book')

@section('content')

<div class="container">
    <h1>Create Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="author_id" class="form-label">Author ID:</label>
            <input type="text" name="author_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('books.index') }}" class="btn btn-warning">Back</a>
        </div>
    </form>
</div>
@endsection
