@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Editar Etiqueta
                    </h5>
                </div>
                <div class="card-body">
                    {!! Form::model($tag, [
                        'route' => ['tags.update',$tag->id],
                        'method' => 'PUT'
                    ]) !!}
                        
                        @include('admin.tags.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection