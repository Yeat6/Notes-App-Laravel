@extends('layouts.main')

@section('title', 'Create Note')

@section('content')
    <h1>Create Note</h1>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" rows="4" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('notes.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection