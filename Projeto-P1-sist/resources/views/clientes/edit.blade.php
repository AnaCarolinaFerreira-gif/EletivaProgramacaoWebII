@extends('layouts.app')

@section('content')
    <h2>Editar Cliente</h2>
    <form class="row" action="{{ route('clientes.update', $clientes->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{ $clientes->nome }}" required>
        <div class="col-md-">
            <label class="form-control" for="telefone">Telefone:</label>
            <input class="form-control" type="text" name="telefone" id="telefone" value="{{ $clientes->telefone }}" required>
        </div>
        <button type="submit">Atualizar</button>
    </form>
@endsection
