@extends('layouts.app')

@section('content')
<div class="container">
    @forelse ($posts as $post)
    <article> 
        <h1> {{ $post->title}} </h1>
        <p>
            {{ $post->description}}
        </p>
        <b>{{ $post->user->name }}</b>
        <br>
        <a href="{{ url("/post/$post->id/update") }}">Editar</a>
        <hr>
    </article>
    @empty
        <h3>Nenhum post cadastrado</h3>
    @endforelse
</div>
@endsection
