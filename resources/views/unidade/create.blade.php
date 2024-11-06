<!-- resources/views/unidades/create.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Nova Unidade</h1>

<form action="{{ route('unidades.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome_fantasia" class="form-label">Nome Fantasia</label>
        <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" required>
    </div>
    <div class="mb-3">
        <label for="razao_social" class="form-label">Razão Social</label>
        <input type="text" class="form-control" id="razao_social" name="razao_social" required>
    </div>
    <div class="mb-3">
        <label for="cnpj" class="form-label">CNPJ</label>
        <input type="text" class="form-control" id="cnpj" name="cnpj" required>
    </div>
    <div class="mb-3">
        <label for="bandeira_id" class="form-label">Bandeira</label>
        <select class="form-control" id="bandeira_id" name="bandeira_id" required>
            @foreach($bandeiras as $bandeira)
                <option value="{{ $bandeira->id }}">{{ $bandeira->nome }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection
