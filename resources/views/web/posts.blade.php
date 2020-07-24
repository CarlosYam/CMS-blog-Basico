@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>Lista de artículos</h1> 
        @foreach($posts as $post)
        <div class="row card">
            <div class="card-header">
                <h5 class="card-title">{{ $post->name }}</h5>
            </div>
            <div class="card-body">
                @if($post->file)
                <img src="{{ $post->file }}" class="card-img-top">
                @endif
                <p class="card-text">
                    {{ $post->excerpt }}
                    <a href="{{ route('post', $post->slug) }}" class="card-link">Leer más...</a>
                </p>
            </div>
        </div>
        <br>
        @endforeach

        {{ $posts->render() }}
    </div>
</div>
@endsection