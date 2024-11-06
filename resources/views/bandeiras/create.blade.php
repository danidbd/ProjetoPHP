@extends('layouts.app')

@section('content')
<h1>Nova Bandeira</h1>

<form action="{{ route('bandeiras.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="mb-3">
        <label for="grupo_economico_id" class="form-label">Grupo Econômico</label>
        <select class="form-control" id="grupo_economico_id" name="grupo_economico_id" required>
            @foreach($grupos as $grupo)
                <option value="{{ $grupo->id }}">{{ $grupo->nome }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection
