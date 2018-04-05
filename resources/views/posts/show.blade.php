@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <small>written on {{$post->created_at}}</small>
    <div>
        {!!$post->body!!}
    </div>
@endsection