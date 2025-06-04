<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
       <img src="{{ asset('storage/images/' . $user->file_name) }}" width="300">
       <form action="{{ route('file.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
     <input type="text" name="f_id" value="{{$user->f_id}}" required>
    <input type="file" name="image" required>
    <button type="submit">Upload</button>
</form>

</body>
</html>