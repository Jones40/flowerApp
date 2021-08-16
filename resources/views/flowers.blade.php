@extends('templates.mytemplate')

@section('title', 'flowers list')

@section('content')

<h2>Flowers list</h2>

@if(count($flowers)>0)

    @foreach($flowers as $flower)
    <li>
        Name: {{ $flower->name }}<br>
        Price: {{ $flower->price }}
    </li>
    @endforeach

@endif


@endsection