@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Lista de mis Entradas
                    <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
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
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}
                                @if($post->status == 'PUBLISHED')
                                    <span class="badge badge-primary">Publicado</span>
                                @else
                                    <span class="badge badge-secondary">Borrador</span>
                                @endif
                            </td>
                            
                            <td width="10px">
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-success">Ver</a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            </td>
                            <td width="10px">
                                {!! Form::open([
                                    'route' => ['posts.destroy', $post->id],
                                    'method' => 'DELETE'
                                ])!!}
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $posts->render() }}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection