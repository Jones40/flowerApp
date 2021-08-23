@extends('layouts.mytemplate')

@section('name', 'Detail page')

@section('content')

    <h3>Add a new flower</h3>

    <form action="" method="post" id="myForm" enctype="multipart/form-data">
        <!-- Security token for Laravel : Mandatory in forms -->
        @csrf
        <input type="text" name="name" placeholder="Name"><br>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <input type="number" name="price" placeholder="Price"><br>
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
 @enderror
     <select name="type" id="type">

         <option value="">--Please choose an option--</option>
         <option value="magnolia">Magnolia</option>
         <option value="flori">flori</option>
     </select>


        <label for="myFile">Upload a file : </label>
        <input type="file" name="file" id="myFile"><br>
        <input type="submit" value="Submit" >




    </form>

@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        /* Wait for the page to be loaded/ready */
        $(function() {
            $('#myForm').submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                // Ajax call
                $.ajax({
                        url: "{{ route('submit.ajax.form') }}",
                        //url: 'ajax-answer',
                        method: 'post',
                        data: formData,
                        processData: false,
                        contentType: false
                    })
                    .done(function(result) {
                        // If AJAX call worked
                        console.log(result);
                    })
                    .fail(function(result) {
                        console.log('AJAX FAILED');
                    })
            });
        });
    </script>
</body>

</html>



