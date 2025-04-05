@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria - CREATE</div>

                <div class="card-body">

                <form action="{{ url('categoria') }}" method="post">
                 @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control"> 
                </div>
                <button type="submit" class="btn btn-primary">ENVIAR</button>
            </form>

               
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
