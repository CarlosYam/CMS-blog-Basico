@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Lista de Categorias
                    <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
                </h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="10px">ID</th>
                            <th>Nombre</th>
                            <th colspan="3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td width="10px">
                                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-success">Ver</a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            </td>
                            <td width="10px">
                                {!! Form::open([
                                    'route' => ['categories.destroy', $category->id],
                                    'method' => 'DELETE'
                                ])!!}
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $categories->render() }}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection