@extends('layouts.app')
@section('title', 'Welcome Author')

@section('content')
<form action="{{ route('authors.store') }}" method="POST">
    @csrf
    <div class="container">
        <h1>Create Author</h1>
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('authors.index') }}" class="btn btn-warning">Back</a>
    </div>
</form>
@endsection
