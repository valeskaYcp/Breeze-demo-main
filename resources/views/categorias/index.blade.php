@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categorías</h1>
    <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Nueva Categoría</a>
    <ul class="list-group">
        @foreach ($categorias as $categoria)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{ route('categorias.edit', $categoria) }}">{{ $categoria->nombre }}</a>
            <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta categoría?')">Eliminar</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection


