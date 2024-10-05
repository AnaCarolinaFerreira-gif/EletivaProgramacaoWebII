@extends('layouts.app')

@section('content')
<h2>Lista de Clientes Cadastrados</h2>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->telefone }}</td>
            <td>
                <a href="{{ route('clientes.show', $clientes->id) }}">Ver</a>
                <a href="{{ route('clientes.edit', $clientes->id) }}">Editar</a>
                <a href="{{ route('clientes.delete', $clientes->id) }}">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection