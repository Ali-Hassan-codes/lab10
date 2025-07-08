<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            text-align:center;
            font-size: 20px;
            margin: 20px;
            backgrouncolor:rgb(255, 79, 79)
        }
        form{
            backgrouncolor:rgb(128, 8, 8);
        }
    </style>
</head>
<body>
    <a href="{{route('display_data')}}"> Show Students </a>
    <br><br>
    <a href="{{route('add_course')}}"> ADD Course </a>
    <br><br>
    <a href="{{route('display_courses')}}"> Show Courses </a>
    <br><br>
     <a href="{{route('login')}}"> Login </a>
    
    <br><br><br>

    <form action="{{route('home')}}" method="post">
        @csrf
        <label for="">Enter Name</label>
        <input type="text" name="name" id="" required>
        <br>
        
        <br>
        <label for="">Enter Password</label>
        <input type="password" name="password" id=" " required>
        <br>
        <br>
        
        <select name="Subject" id="" required>
             <option slected disbled value="">Select One option</option>
            @foreach($courses as $abc)
            <!-- <option value="{{$abc->id}}">{{$abc->Course_Name}}</option> -->
            
            <option value="{{$abc->id}}">{{$abc->Course_Name}}</option>
            @endforeach
        </select>
        <br><br><br>
        <input type="submit" value="Submit Now">
    </form>
</body>
</html>