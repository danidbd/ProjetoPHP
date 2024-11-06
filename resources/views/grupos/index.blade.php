@extends('layouts.app')

@section('content')
<h1>Grupos Econômicos</h1>
<a href="{{ route('grupos.create') }}" class="btn btn-primary mb-3">Novo Grupo Econômico</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($grupos as $grupo)
        <tr>
            <td>{{ $grupo->id }}</td>
            <td>{{ $grupo->nome }}</td>
            <td>
                <a href="{{ route('grupos.edit', $grupo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('grupos.destroy', $grupo->id) }}" method="POST" style="display:inline;">
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
