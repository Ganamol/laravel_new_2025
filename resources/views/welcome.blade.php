@extends('Layout.Master')
 {{-- @include('partials.menu') --}}
@section('content') 


{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body> --}}
        
        {{-- <h1>Hai</h1> --}}
        {{-- <p>{{$name}}</p>
        <h3>{{$c}}</h3> --}}



     {{-- @foreach ($colors as $color)
        <h3>{{$color}}</h3>
        {{strtoupper($color)}}
        {{strtolower($color)}}
         {{$loop->index}}.{{$color}}
        @endforeach  --}}


        {{-- @if($age==30)
         <p>equal to 30</p>
         @elseif($age==40)
          <p>equal to 40</p>
            @elseif($age==50)
          <p>equal to 50</p>
          @else
          <p>default</p>
         @endif --}}

@switch($status)
    @case(1)
        <h1>status1</h1>
        @break
        @case(2)
        <h1>status2</h1>
        @break
        @default 
      <h1>default</h1>
    @break    
@endswitch 



       {{-- @isset($record)
       <h1>Color Getting</h1>  
       @endisset --}}

       {{-- @unless (if$age==30)
           <h2>you are not allowed</h2>
       @endunless --}}

       {{-- @isset($record)
           <h1>Color Getting</h1>
       @endisset

       @empty
       <h1>color empty</h1>
       @endempty --}}

{{-- @switch($status)
    @case(1)
        <h1>status1</h1>
        @break
        @case(2)
        <h1>status2</h1>
        @break

    @default
        
@endswitch --}}
 



@for($i=1;$i<5;$i++)
    <h1>the value is{{$i}}</h1>
@endfor 







{{-- @foreach ($colors as  $color)
    <h3>{{$color}}</h3>
@endforeach --}}

    {{-- </body>
</html> --}}


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