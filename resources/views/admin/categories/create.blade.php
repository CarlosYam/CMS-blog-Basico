@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Crear Categoria
                    </h5>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'categories.store']) !!}
                        
                        @include('admin.categories.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection