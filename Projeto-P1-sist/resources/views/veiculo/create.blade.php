@extends('layouts.app')

@section('content')
    <h2>Veiculos</h2>
    <form action="{{ route('veiculos.store') }}" method="POST">
        @csrf
        <div>
            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" id="modelo" required>
        </div>
        <div>
            <label for="cor">Cor:</label>
            <input type="text" name="cor" id="cor" required>
        </div>
        <div>
            <label for="placa">Placa:</label>
            <input type="text" name="placa" id="placa" required>
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
