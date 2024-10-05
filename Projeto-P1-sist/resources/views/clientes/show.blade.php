@extends('layouts.app')

@section('content')
    <h2>Detalhes do Cliente</h2>
    <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
    <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
    <a href="{{ route('clientes.index') }}">Voltar</a>
@endsection