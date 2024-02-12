@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Aggiungi nuovo progetto</a>
    <h1>Lista progetti:</h1>
    @foreach ($projects as $project)
        <h3><a href="{{ route('admin.projects.show', $project) }}">{{ $project->title }}</a></h3>
        <img src="{{ asset('storage/' . $project->thumb) }}" alt="">
        <h3>{{ $types[$project->type_id]->name }}</h3>
        <p>{{ $project->description }}</p>
        <h6>{{ $project->year }}</h6>
    @endforeach

    {{-- Update Project Message --}}
    @if (session('updateMessage'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Boolfolio</strong>
                    <small>Adesso</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('updateMessage') }}
                </div>
            </div>
        </div>
    @endif
@endsection
