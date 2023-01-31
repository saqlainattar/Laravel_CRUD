<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
   <div class="container">
    <form method="POST" action="/update/{{$posts->id}}">
        @csrf
        <h1 class="text-center">Update Data</h1>
        <div class="mb-3 mt-5">
            <label><b>Student Name:</b></label>
            <input type="text" name="name" class="form-control" value={{$posts->studname}}>
        </div>
        <div class="mb-3">
            <label><b>Course:</b></label>
            <input type="text" name="course" class="form-control" value={{$posts->course}}>
        </div> 
        <div class="mb-3">
            <label><b>fees:</b></label>
            <input type="text" name="fees" class="form-control" value={{$posts->fees}}>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
   </div>
</body>
</html>