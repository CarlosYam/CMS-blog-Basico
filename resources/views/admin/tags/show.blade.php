@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Ver Etiqueta
                    </h5>
                </div>
                <div class="card-body">
                    <p><strong>Nombre:</strong> {{ $tag->name }}</p>
                    <p><strong>Slug (URL Amigable):</strong> {{ $tag->slug }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection