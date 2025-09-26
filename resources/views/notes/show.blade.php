@extends('layouts.main')

@section('title', 'Note Detail')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{ $note->title }}</h2>
            <p class="card-text">{{ $note->content }}</p>
            <a href="{{ route('notes.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection