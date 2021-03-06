@extends('pages.layout.app')

@section('content')
     <h1>Create Post</h1>
     {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
     <div class="form_group">
         {{Form::label('title','Title')}}
         {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Title'])}}
     </div>
     <div class="form_group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','', ['id' => 'summary-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

{!! Form::close() !!}  
@endsection