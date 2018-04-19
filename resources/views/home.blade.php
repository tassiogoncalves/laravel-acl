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
            @can('update-post', $post)
                <a href="{{ url("/post/$post->id/update") }}">Editar</a>
            @endcan
            <hr>
        
    </article>
    @empty
        <h3>Nenhum post cadastrado</h3>
    @endforelse
</div>
@endsection
