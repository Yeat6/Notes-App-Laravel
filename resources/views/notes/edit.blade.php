@extends('layouts.main')

@section('title', 'Edit Note')

@section('content')
    <h1>Edit Note</h1>
    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" value="{{ $note->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" rows="4" class="form-control" required>{{ $note->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="{{ route('notes.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection