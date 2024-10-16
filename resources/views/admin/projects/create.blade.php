@extends('layouts.app')

@section('content')
    <h1>Crea un nuovo progetto</h1>

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="file" name="image" id="image" class="form-control"> <!-- Campo per l'upload dell'immagine -->
        </div>
        <div class="form-group">
            <label for="type_id">Tipologia</label>
            <select name="type_id" id="type_id" class="form-control">
                <option value="">Seleziona una tipologia</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Salva progetto</button>
    </form>
@endsection
