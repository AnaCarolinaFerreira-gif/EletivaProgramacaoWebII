@extends('layouts.app')

@section('content')
    <h2>Editar Veiculos</h2>
    <form action="{{ route('veiculos.update', $veiculos->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" id="modelo" value="{{ $veiculos->modelo }}" required>
        </div>
            <label for="cor">Cor:</label>
            <input type="text" name="cor" id="cor" value="{{ $veiculos->cor }}" required>
        </div>
            <label for="placa">Placa:</label>
            <input type="text" name="placa" id="placa" value="{{ $veiculos->placa }}" required>
        </div>
        <button type="submit">Atualizar</button>
    </form>
@endsection
