<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="{{route('course_update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$edit->id}}">
        
        <label for="">Enter Course Name</label>
        <input type="text" name="course_name" value="{{$edit->Course_Name}}">
        <br>
        <br>

        <br>
        <input type="submit" value="Submit Now">
    </form>
</body>
</html>