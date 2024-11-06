<!-- resources/views/colaboradores/edit.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Editar Colaborador</h1>

<form action="{{ route('colaboradores.update', $colaborador->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text
