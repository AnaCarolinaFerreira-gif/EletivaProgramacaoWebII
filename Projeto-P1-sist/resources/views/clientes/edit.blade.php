@extends('layouts.app')

@section('content')
    <h2>Editar Cliente</h2>
    <form action="{{ route('clientes.update', $clientes->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{ $clientes->nome }}" required>
        </div>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" value="{{ $clientes->telefone }}" required>
        </div>
        <button type="submit">Atualizar</button>
    </form>
@endsection
