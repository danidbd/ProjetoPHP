<!-- resources/views/colaboradores/create.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Novo Colaborador</h1>

<form action="{{ route('colaboradores.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" required>
    </div>
    <div class="mb-3">
        <label for="unidade_id" class="form-label">Unidade</label>
        <select class="form-control" id="unidade_id" name="unidade_id" required>
            @foreach($unidades as $unidade)
                <option value="{{ $unidade->id }}">{{ $unidade->nome_fantasia }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection
