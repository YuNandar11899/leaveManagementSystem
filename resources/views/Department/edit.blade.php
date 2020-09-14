<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Department</title>
</head>
<body>
<form action="/department/{{$departments->id}}/edit" method="post" enctype="multipart/form-data">
        @csrf
        {{-- {{ method_field('PATCH') }} --}}
        @method('PATCH')
        {{-- <input type="hidden" value="{{$departments->id}}" name="id"> --}}
        <label for="name">Department Name::</label><br>
        <input type="text" name="name" value="{{$departments->name}}"><p><p>
        <label for="sname">Department Short Name::</label><br>
        <input type="text" name="sname" value="{{$departments->sname}}"><p><p>
        <input type="submit" value="Update Department">
    </form>

</body>
</html>
