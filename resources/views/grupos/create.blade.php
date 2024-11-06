@extends('layouts.app')

@section('content')
<h1>Novo Grupo Econômico</h1>

<form action="{{ route('grupos.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection
