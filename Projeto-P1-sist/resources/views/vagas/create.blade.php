@extends('layouts.app')

@section('content')
    <h2>Vagas</h2>
    <form action="{{ route('vagas.store') }}" method="POST">
        @csrf
        <div class="col-md-6">
            <label for="ocupado" class="form-control">Vagas Ocupadas</label>
            <input type="text" class="form-control" name="ocupado" id="ocupado" required>
        </div>
        <div class="col">
            <label for="veiculo_id" class="form-label">Veiculos:</label>
            <select name="veiculo_id" class="form-select">
                @foreach ($veiculos as $veiculo)
                    <option value="{{$veiculo->id}}">{{$veiculo->placa}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="cliente_id" class="form-label">Clientes:</label>
            <select name="cliente_id" class="form-select">
                @foreach ($clientes as $cliente)
                    <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="hora_entrada" class="form-control">Hora de Entrada</label>
            <input type="text" name="hora_entrada" id="hora_entrada" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="hora_saida" class="form-control">Hora de Saida</label>
            <input type="text" class="form-control" name="hora_saida" id="hora_saida" required>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection
