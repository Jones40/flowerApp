@extends('layouts.mytemplate')

@section('title', 'Detail page')

@section('content')

    <h3>Add a new flower</h3>

    <form action="" method="post">
        <!-- Security token for Laravel : Mandatory in forms -->
        @csrf
        <input type="text" name="name" placeholder="Name"><br>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <input type="number" name="price" placeholder="Price"><br>
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        <input type="number" name="price" placeholder="type"><br>
        @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <input type="submit" value="Add flower">


    </form>
@endsection



