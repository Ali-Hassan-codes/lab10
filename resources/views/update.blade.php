<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="{{route('update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$edit->id}}">
        
        <label for="">Enter Name</label>
        <input type="text" name="name" value="{{$edit->Name}}">
        <br>
        <br>
        <label for="">Enter Password</label>
        <input type="password" name="password" id="">
        <br>
        <br>

        <select name="Subject" id="" required>
            <option slected disbled value="">Select One option</option>
            @foreach($courses as $abc)
            <!-- <option value="{{$abc->id}}">{{$abc->Course_Name}}</option> -->
            <option value="{{$abc->id}}">{{$abc->Course_Name}}</option>
            @endforeach
        </select> 

        <input type="submit" value="Submit Now">
    </form>
</body>
</html>