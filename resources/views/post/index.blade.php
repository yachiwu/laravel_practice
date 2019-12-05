@extends('layouts.app')
@section('content')
    @forelse ($posts as $post)
        <p>
            <h3>
                <a href = "{{route('posts.show',['post' => $post->id])}}">{{$post->title}}</a>
            </h3> 
        </p>
    @empty
        <p>空!</p>
    @endforelse 

@endsection