@extends('layouts.app')

@section('content')
<div class="container">
    @forelse ($posts as $post)
    <article> 
            @can('visualizar_post')
                <h1> {{ $post->title}} </h1>
                <p>
                    {{ $post->description}}
                </p>
                <b>{{ $post->user->name }}</b>
                <br>
                <a href="{{ url("/post/$post->id/update") }}">Editar</a>
                <hr>
            @endcan
           
        
    </article>
    @empty
        <h3>Nenhum post cadastrado</h3>
    @endforelse
</div>
@endsection
