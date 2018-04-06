@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br><br>
    <hr>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())<!-- display the edit/delete buttons if a user is logged in -->
        @if(Auth::user()->id == $post->user_id)<!-- the user can only delete the posts they created -->
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
        @endif
    @endif
@endsection

