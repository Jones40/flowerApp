@extends('layouts.mytemplate')

@section('title', 'Detail page')

@section('content')
    <p><strong>Name : </strong> {{$flower->name}}</p>
    <p><strong>Price : </strong> {{$flower->price}}</p>
    <p><strong>Price : </strong> {{$flower->comments}}</p>
    <p><strong>Price : </strong> {{$flower->type}}</p>
    <hr>
<h3>comments</h3>
    @foreach($comments as $comment)
    <p>Subject:{{$comment->subject}}</p>
    <p>Message:{{$comment->message}}</p>
    <hr style="width:50%">
 @endforeach
@endsection


