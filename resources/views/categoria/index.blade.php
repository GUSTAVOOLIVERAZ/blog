@extends('adminlte::page')

                    @section('content')
                    <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-md-8">
                    <div class="card">
                    <div class="card-header">Categoria</div>
                    <div class="card-body">
                    <a class="btn btn-success" href="{{ url('categoria/create') }}">CRIAR</a>
                    @if (session('message'))
                    <div class="alert alert-success">
                    {{ session('message') }}
                    </div>
                    @endif


                    <table class="table">
    <thead>
        <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->nome }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ url('categoria/' . $categoria->id) }}">Visualizar</a>
                                <a class="btn btn-warning" href="{{ url('categoria/' . $categoria->id . '/edit') }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

               
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
