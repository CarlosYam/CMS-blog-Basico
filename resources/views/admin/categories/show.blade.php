@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Ver Categoria
                    </h5>
                </div>
                <div class="card-body">
                    <p><strong>Nombre:</strong> {{ $category->name }}</p>
                    <p><strong>Slug (URL Amigable):</strong> {{ $category->slug }}</p>
                    <p><strong>Contenido:</strong> {{ $category->body }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection