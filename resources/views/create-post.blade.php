<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <form action="/posts/new" method="POST">

        @csrf
        <div class="col-md-12">
            <label for="title">Post Title</label>
        <input type="text" name="title" required>
        </div>
        <br><br>

        <div class="col-md-12">
            <label for="body">Post Body</label>
            <textarea name="body" required></textarea>
        </div>
        <br>

        <div class="col-md-12">
            <button type="submit">Create</button>
        </div>
    </form>

</body>
</html>