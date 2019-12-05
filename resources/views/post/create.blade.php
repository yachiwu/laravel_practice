@extends('layouts.app')
@section('content')
    
    <form style="padding: 30px" method="POST" action="{{ route('posts.store') }}">
        {{ csrf_field() }}
        <p>
            <label>Title</label>
            <input type="text" name="title">
            <label>Content</label>
            <input type="text" name="content">

            <button type="submit">提交</button>
        </p>
        {{-- 顯示表單中錯誤訊息 --}}
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
    </form>
@endsection