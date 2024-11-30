@extends('layouts.app')

@section('content')
    <h2>Editar Vagas</h2>
    <form class="form-control row" action="{{ route('vagas.update', $vagas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="ocupado">Vagas ocupadas:</label>
            <input type="text" name="ocupado" id="ocupado" value="{{ $vagas->ocupado }}" required>
        </div>
        <div class="col-md-4">
            <label for="veiculos_id" class="form-label">Veiculos:</label>
                <select name="veiculos_id" class="form-select">
                    @foreach ($veiculos as $veiculo)
                        <option value="{{$veiculo->id}}">{{$veiculo->placa}}</option>
                    @endforeach
                </select>
        </div>
        <div class="col-md-6">
            <label for="hora_entrada">Hora de Entrada:</label>
            <input type="text" name="hora_entrada" id="hora_entrada" value="{{ $vagas->hora_entrada }}" required>
        </div>
        <div class="col-md-6">
            <label for="hora_saida">Hora de Saida:</label>
            <input type="text" name="hora_saida" id="hora_saida" value="{{ $vagas->hora_saida }}" required>
        </div>
        <button type="submit">Atualizar</button>
    </form>
@endsection
