@extends('layouts.mytemplate')

@section('title', 'Detail page')

@section('content')
    <p><strong>Name : </strong> {{$flower->name}}</p>
    <p><strong>Price : </strong> {{$flower->price}}</p>
    <p><strong>Comments : </strong> {{$flower->comments}}</p>
@endsection

