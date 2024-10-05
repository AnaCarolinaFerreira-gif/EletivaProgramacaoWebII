@extends('layouts.app')

@section('content')
    <h2>Novo Cliente</h2>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" required>
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
