@extends('layouts.app')
@section('content')
    
    <form style="padding:30px" method="POST" action="{{ route('posts.update',['post' =>$post->id])}}">
        {{ csrf_field() }}
        {{method_field('PUT')}}
        @include('post._form')
    
    </form>
@endsection