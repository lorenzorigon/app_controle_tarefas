@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Atualizar Tarefa</div>

                <div class="card-body">
                    <form action="{{route('tarefa.update', ['tarefa' => $tarefa->id])}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Tarefa</label>
                            <input type="text" class="form-control" value="{{$tarefa->tarefa}}" name="tarefa">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Data limite conclusão</label>
                            <input type="date" class="form-control" value="{{$tarefa->data_limite_conclusao}}" name="data_limite_conclusao">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
