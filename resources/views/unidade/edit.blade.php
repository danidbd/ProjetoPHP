<!-- resources/views/unidades/edit.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Editar Unidade</h1>

<form action="{{ route('unidades.update', $unidade->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nome_fantasia" class="form-label">Nome Fantasia</label>
        <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" value="{{ $unidade->nome_fantasia }}" required>
    </div>
    <div class="mb-3">
        <label for="razao_social" class="form-label">Razão Social</label>
        <input type="text" class="form-control" id="razao_social" name="razao_social" value="{{ $unidade->razao_social }}" required>
    </div>
    <div class="mb-3">
        <label for="cnpj" class="form-label">CNPJ</label>
        <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{ $unidade->cnpj }}" required>
    </div>
    <div class="mb-3">
        <label for="bandeira_id" class="form-label">Bandeira</label>
        <select class="form-control" id="bandeira_id" name="bandeira_id" required>
            @foreach($bandeiras as $bandeira)
                <option value="{{ $bandeira->id }}" {{ $bandeira->id == $unidade->bandeira_id ? 'selected' : '' }}>{{ $bandeira->nome }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@endsection
