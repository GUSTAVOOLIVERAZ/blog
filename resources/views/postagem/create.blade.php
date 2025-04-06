@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem - CREATE</div>

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

               
               
                <form action="{{ url('postagem') }}" method="post">
                 @csrf
                <div class="form-group">
                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" id="nome" class="form-control"> 
                </div>
                <button type="submit" class="btn btn-primary">ENVIAR</button>
            </form>

               
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
