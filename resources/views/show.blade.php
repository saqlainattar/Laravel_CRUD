<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Display</title>
</head>
<body>
   <div class="container mt-5">
        <table class="table table-bordered shadow text-center table-striped">
            <tr>
                <th>Id</th>
                <th>Student Name</th>
                <th>Course</th>
                <th>Fees</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            @php
                $i=1;
            @endphp

            @foreach($posts as $post)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$post->studname}}</td>
                <td>{{$post->course}}</td>
                <td>{{$post->fees}}</td>
                <td><a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a></td>
                <td><a href="/edit/{{$post->id}}" class="btn btn-info">Update</a></td>
            </tr>
            @endforeach
        </table> 
        <a href="/" class="btn btn-primary">Add User</a>
   </div>
</body>
</html>