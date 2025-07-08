<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('display_home')}}"> ADD STUDENT</a>
    <br><br>
    <a href="{{route('add_course')}}"> ADD Course </a>
    <br><br>
     <a href="{{route('display_courses')}}"> Show Courses </a>

    <br><br><br>
    <table border="2px solid black ">
        <tr>
            <!-- <th>ID</th> -->
            <th>Name</th>
            <th>Password</th>
            <th>Subject</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        @foreach($show as $var)

        <tr>
            <!-- <td>{{$var->id}}</td> -->
            <td>{{$var->Name}}</td>
            <td>{{$var->Password}}</td>
            <td>{{$var->courses->Course_Name}}</td>
            <td>{{$var->created_at}}</td>
            <td>{{$var->updated_at}}</td>
            <td>
                
                <form action="{{route('user_edit')}}">
                @csrf
                <input type="hidden" name="id" value = "{{$var->id}}">
                <input type="submit" value="Edit">
                </form>
            </td>
            
            <td>
                <form action="{{route('user.delete')}}">
                @csrf
                <input type="hidden" name="id" value = "{{$var->id}}">
                <input type="submit" value="Delete">
                </form>
            </td>

        </tr>
        @endforeach
        
    </table>
</body>
</html>