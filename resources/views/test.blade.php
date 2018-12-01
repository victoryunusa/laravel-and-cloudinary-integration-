<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
<body>

    <form method="POST" action="{{url('/test')}}" enctype="multipart/form-data">
    @csrf
        <input type="text" name="slug" placeholder="Slug">
        <input type="file" name="file">
        <button type="submit" name="submit">Submit</button> 
    </form>

    <div>
        <h4>{{$picId}}</h4>
        <img src="https://res.cloudinary.com/victoryunusa/image/upload/{{$picId}}.jpg">
    </div>
    
</body>
</html>