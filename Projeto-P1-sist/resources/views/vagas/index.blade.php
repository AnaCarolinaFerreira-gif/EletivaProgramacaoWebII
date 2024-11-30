
@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
    <h2>Lista de Vagas </h2>
         <a class="btn btn-success" href="{{route('vagas.create')}}">
        Inserir nova vaga
    </a>
    <table class="table table-striped table-hover">
    <thead class="thead-dark">
    <tr>
            <th>$</th>
            <th>Ocupados</th>
            <th>Veiculos </th>
            <th>Entradas</th>
            <th>Saidas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vagas as $vagas)
        <tr>
            <td>{{ $vagas->Ocupado }}</td>
            <td>{{ $vagas->veiculos->placa }}</td>
            <td>{{ $vagas->Entradas }}</td>
            <td>{{ $vagas->Saidas }}</td>
            <td>
                <a href="{{ route('vagas.show', $vagas->id) }}"  class="btn btn-sm btn-info">Ver</a>
                <a href="{{ route('vagas.edit', $vagas->id) }}" class="btn btn-sm btn-warning">Editar</a>
                <a href="{{ route('vagas.delete', $vagas->id) }}" class="btn btn-sm btn-danger">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
</div>

@endsection
