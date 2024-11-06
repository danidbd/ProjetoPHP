<!-- resources/views/unidades/index.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Unidades</h1>
<a href="{{ route('unidades.create') }}" class="btn btn-primary mb-3">Nova Unidade</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome Fantasia</th>
            <th>Razão Social</th>
            <th>CNPJ</th>
            <th>Bandeira</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($unidades as $unidade)
        <tr>
            <td>{{ $unidade->id }}</td>
            <td>{{ $unidade->nome_fantasia }}</td>
            <td>{{ $unidade->razao_social }}</td>
            <td>{{ $unidade->cnpj }}</td>
            <td>{{ $unidade->bandeira->nome }}</td>
            <td>
                <a href="{{ route('unidades.edit', $unidade->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('unidades.destroy', $unidade->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
