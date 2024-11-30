@extends('layouts.app')

@section('content')
    <h2>Detalhes do Veiculo</h2>
    <p><strong>Modelo:</strong> {{ $veiculos->modelo }}</p>
    <p><strong>Cor:</strong> {{ $veiculos->cor }}</p>
    <p><strong>Placa:</strong> {{ $veiculos->placa }}</p>
    <a href="{{ route('clientes.index') }}">Voltar</a>
@endsection