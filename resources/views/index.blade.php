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
  @if (session()->has('message'))    
 <p>{{session()->get('message')}}</p>
   @endif 
   <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form> 
  <a href="{{ route('users.create') }}" class="btn btn-success">NEW</a>
    <table class="table table-striped" style="width: 75%">
        <thead>
          <tr>
           <th>No</th>
            <th scope="col">Name</th>
            <th scope="col">dob</th>
            <th scope="col">Date</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                {{-- <td>{{$loop->iteration}}</td> --}}
                <td>{{$users->firstItem()+$loop->index}}</td>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->dob}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->status}}</td>
                <td><a href="{{route('edit.users',encrypt($user->id))}}" class="btn btn-primary">Edit</a></td> 
                <td><a href="{{route('delete.users',encrypt($user->id))}}"  class="btn btn-success">Delete</a></td>  
            </tr>  
            @endforeach
        </tbody>
      </table>
<div>
    {{$users->links()}}
</div>

</body>
</html><h1>section</h1>
@endsection