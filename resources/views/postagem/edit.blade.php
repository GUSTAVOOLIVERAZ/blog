@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem - EDIT</div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ url('postagem/' . $postagem->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <select name="categoria_id" class="form-control">
                        @foreach ($categorias as $value)
                            <option value="{{ $value->id }}">{{ $value->nome }}</option>
                        @endforeach
                    </select>

                        
                        <div class="form-group">
                            <label for="titulo">Título:</label>
                            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}">

                            <label for="descricao" class="mt-3">Descrição:</label>
            <textarea name="descricao" id="descricao" rows="5" class="form-control" required>{{ old('descricao') }}

                            </textarea>
                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
