@extends('layouts.app')

@section('content')
<h1>Editar Grupo Econômico</h1>

<form action="{{ route('grupos.update', $grupo->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $grupo->nome }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@endsection
