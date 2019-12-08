@extends('layouts.app')
@section('content')
    @forelse ($posts as $post)
        <p>
            <h3>
                <a href = "{{route('posts.show',['post' => $post->id])}}">{{$post->title}}</a>
            </h3> 
            <a href="{{route('posts.edit',['post' => $post->id])}}">Edit</a>
            <form style="padding:30px" method="POST" action="{{ route('posts.destroy',['post' =>$post->id])}}">
                {{ csrf_field() }}
                {{method_field('DELETE')}}
                <input type="submit" value="刪除">
            </form>
        </p>
    @empty
        <p>空!</p>
    @endforelse 

@endsection