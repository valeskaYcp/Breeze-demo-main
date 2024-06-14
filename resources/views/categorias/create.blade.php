@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nueva Categoría</h1>
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
            <label for="nombre">Nombre de la Categoría:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
            <button type="submit">Guardar</button>
        </div>
    </form>
</div>
@endsection
