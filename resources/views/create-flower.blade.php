<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        @csrf
        <h1>Create Post</h1>


        <input type="text" name="name" placeholder="Name"><br>

        <input type="number" name="price" placeholder="Price"><br>

        <input type="submit" value="Create flower">
    </form>
</body>

</html>
