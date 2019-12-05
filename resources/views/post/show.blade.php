@extends('layouts.app')
@section('content')
  <h3>{{$post->id}}</h3>
  <h3>{{$post->title}}</h3>
  <h3>{{$post->content}}</h3>
  <p>ADD {{  $post->created_at->diffForHumans() }}</p>
  <p>測試id:
  @if ($post->id ===1)
      one
  @elseif($post->id===2)
      two
  @else
      other   
  @endif
  </p>
  <p>測試產生的時間: 
    @if ((new CarBon\CarBon())->diffInMinutes($post->created_at) <10)
    <strong>new!!!</strong>
    @endif
  </p>

  <h4>{{ (new CarBon\CarBon())->diffInMinutes($post->created_at) }}</h4>
 
  
 
  
@endsection