@extends('layouts.app')

@section('content')
<h1>Bandeiras</h1>
<a href="{{ route('bandeiras.create') }}" class="btn btn-primary mb-3">Nova Bandeira</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Grupo Econômico</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bandeiras as $bandeira)
        <tr>
            <td>{{ $bandeira->id }}</td>
            <td>{{ $bandeira->nome }}</td>
            <td>{{ $bandeira->grupoEconomico->nome }}</td>
            <td>
                <a href="{{ route('bandeiras.edit', $bandeira->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('bandeiras.destroy', $bandeira->id) }}" method="POST" style="display:inline;">
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
