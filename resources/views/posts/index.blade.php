@extends('pages.layout.app')

@section('content')
     <h1>Posts</h1>
     @if(count($posts)>1)
       @foreach($posts as $post)
          <div class="card bg-light p-3">
              <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
              <small>Written on {{$post->created_at}}</small>
          </div>
        @endforeach 
        {{$posts->links()}}
     @else 
       <p>Posts not found<p>
     @endif
@endsection