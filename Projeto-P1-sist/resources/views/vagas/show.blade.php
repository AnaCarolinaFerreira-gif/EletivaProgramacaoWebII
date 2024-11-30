@extends('layouts.app')

@section('content')
    <h2>Detalhes sobre as Vagas</h2>
    <p><strong>Ocupados:</strong> {{ $vagas->ocupado }}</p>
    <p><strong>Ocupados:</strong> {{ $vagas->veiculos->placa }}</p>
    <p><strong>Entradas:</strong> {{ $vagas->hora_entrada }}</p>
    <p><strong>Saidas:</strong> {{ $vagas->hora_saida }}</p>
    <a href="{{ route('vagas.index') }}">Voltar</a>
@endsection