@extends('layouts.mytemplate')

@section('title', 'Contact page')

@section('content')

@if($username=Session::get('username'))
<p style="color:green">{{$username}}</p>
@endif

    @if($message = Session::get('success'))
        <p style="color:green">{{$message}}</p>
    @endif

    @foreach ($flowers as $flower)
        <p><strong>Name : </strong> {{$flower->name}}</p>
        <p><strong>Price : </strong> {{$flower->priceFormatted}}</p>
        <p><strong>Type : </strong> {{$flower->type}}</p>
        <!-- creating link using the name of the route (check web.php file)  -->
        <a href="{{ route('update.flower', [$flower->id])}}">Edit</a>
        <a href="{{ route('delete.flower', [$flower->id])}}">Delete</a>
        <a href="{{ route('show.flower', [$flower->id])}}">details</a>

        <hr>
    @endforeach
@endsection
