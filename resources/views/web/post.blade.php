@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>{{ $post->name }}</h1>

        <div class="row card">
            <div class="card-header">
                Categoria:
                <a href="{{ route('category', $post->category->slug) }}">{{ $post->category->name}}</a>
            </div>
            <div class="card-body">
                @if($post->file)
                <img src="{{ $post->file }}" class="card-img-top">
                @endif
                <hr>
                {!! $post->body !!}
                <hr>
                Etiquetas:
                @foreach( $post->tags as $tag)
                <a href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection