@extends('layouts.mytemplate')

@section('title', 'Contact Flower')

@section('content')


    <h3>Add a new Contact</h3>

    <form action="" method="post">
        <!-- Security token for Laravel : Mandatory in forms -->
        @csrf
        <input type="email" name="email" placeholder="email"><br>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      <textarea name="message" id="mess" cols="30" rows="10">Message</textarea>
      @error('message')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

        <input type="submit" value="send" >
</body>
</html>
@endsection
