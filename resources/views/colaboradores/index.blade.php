<!-- resources/views/colaboradores/index.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Colaboradores</h1>
<a href="{{ route('colaboradores.create') }}" class="btn btn-primary mb-3">Novo Colaborador</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Unidade</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($colaboradores as $colaborador)
        <tr>
            <td>{{ $colaborador->id }}</td>
            <td>{{ $colaborador->nome }}</td>
            <td>{{ $colaborador->email }}</td>
            <td>{{ $colaborador->cpf }}</td>
            <td>{{ $colaborador->unidade->nome_fantasia }}</td>
            <td>
                <a href="{{ route('colaboradores.edit', $colaborador->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('colaboradores.destroy', $colaborador->id) }}" method="POST" style="display:inline;">
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
