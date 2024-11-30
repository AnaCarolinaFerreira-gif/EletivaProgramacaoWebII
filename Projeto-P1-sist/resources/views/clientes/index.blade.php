@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
    <h2>Lista de Clientes Cadastrados</h2>
         <a class="btn btn-success" href="{{route('clientes.create')}}">
        Inserir novo Cliente
    </a>
    <table class="table table-striped table-hover">
    <thead class="thead-dark">
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
                <a href="{{ route('clientes.show', $clientes->id) }}"  class="btn btn-sm btn-info">Ver</a>
                <a href="{{ route('clientes.edit', $clientes->id) }}" class="btn btn-sm btn-warning">Editar</a>
                <a href="{{ route('clientes.delete', $clientes->id) }}" class="btn btn-sm btn-danger">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
</div>

@endsection
