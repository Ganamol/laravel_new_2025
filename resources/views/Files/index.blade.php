@extends('Layout.Master')
 {{-- @include('partials.menu') --}}
@section('content') 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  

    <table class="table table-striped" style="width: 75%">
        <thead>
          <tr>
           <th>No</th>
            <th scope="col">File Name</th>
            <th scope="col"></th>
           
           
          </tr>
        </thead>
        <tbody>
          


            @foreach ($users as $user)
    <tr>
        <td>
            <img src="{{ asset('storage/images/' . $user->file_name) }}" width="300">
         
        </td>
        <td>
                   <td><a href="{{route('file.edit',encrypt($user->f_id))}}" class="btn btn-primary">Edit</a></td> 
        </td>
    </tr>
@endforeach
        </tbody>
      </table>


</body>
</html><h1>section</h1>
@endsection