@extends('layouts.app')

@section('content')
    <h2>Novo Cliente</h2>
    <form class="row" action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="col-md-">
            <label class="form-control"   for="nome">Nome:</label>
            <input class="form-control"  type="text" name="nome" id="nome" required>
        </div>
        <div class="col-md-">
            <label class="form-control" for="telefone">Telefone:</label>
            <input class="form-control" type="text" name="telefone" id="telefone" required>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection
