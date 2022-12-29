@extends('voyager::master')

@section('content')
    <div class="container">
        <div class="card bg-light mt3">
            <div class="card-header">
                Importar Tarefas
            </div>
            <div class="card-body">
                 <form action="{{route('importador.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button type="submit" class="btn btn-success">Importar Dados</button>
                </form>
            </div>
        </div>
    </div>
@endsection
