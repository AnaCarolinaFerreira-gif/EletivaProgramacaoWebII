
@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <a class="btn btn-success" href="{{route('veiculos.create')}}">
        Inserir novo veiculo
    </a>
    <h2>Lista de Veiculos</h2>
    <table class="table table-striped table-hover">
    <thead class="thead-dark">
    <tr>
            <th>Modelo</th>
            <th>Cor</th>
            <th>Placa</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($veiculos as $veiculos)
        <tr>
            <td>{{ $veiculos->Modelo }}</td>
            <td>{{ $veiculos->Cor }}</td>
            <td>{{ $veiculos->Placa }}</td>
            <td>
                <a href="{{ route('veiculos.show', $veiculos->id) }}"  class="btn btn-sm btn-info">Ver</a>
                <a href="{{ route('veiculos.edit', $veiculos->id) }}" class="btn btn-sm btn-warning">Editar</a>
                <a href="{{ route('veiculos.delete', $veiculos->id) }}" class="btn btn-sm btn-danger">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
</div>

@endsection
