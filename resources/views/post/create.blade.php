@extends('layouts.app')
@section('content')
    
    <form style="padding: 30px" method="POST" action="{{ route('posts.store') }}">
        {{ csrf_field() }}
        @include('post._form')
        <button type="submit">新增</button>
    
    </form>
@endsection