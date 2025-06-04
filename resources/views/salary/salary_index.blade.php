
@extends('Layout.Master')

@section('title', 'New User')
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
           
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Salary</th>
            <th scope="col">Month</th>
            <th scope="col">Year</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($sal as $sa)
            <tr> 
                <td>{{$sa->id}}</td>
                <td>{{$sa->name}}</td>
                <td>{{$sa->salary}}</td>
                <td>{{$sa->month}}</td>
                <td>{{$sa->year}}</td>
                <td>{{$sa->status}}</td>
               <td><a href="{{route('salary.edit',encrypt($sa->id))}}" class="btn btn-primary">Edit</a></td> 
            </tr>  
            @endforeach
        </tbody>
      </table>


</body>
</html

   
@endsection