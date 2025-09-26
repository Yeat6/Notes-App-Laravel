@extends('layouts.main')

@section('title', 'Notes List')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Notes</h1>
        <a href="{{ route('notes.create') }}" class="btn btn-primary">+ Add Note</a>
    </div>

    @if($notes->isEmpty())
        <div class="alert alert-warning">No notes found.</div>
    @else
        <ul class="list-group">
            @foreach ($notes as $note)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{ route('notes.show', $note->id) }}">{{ $note->title }}</a>
                    <div>
                        <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
@endsection