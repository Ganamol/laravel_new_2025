@extends('Layout.Master')

@section('title', 'New User')
@section('content')
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <div class="container">

        {{-- <label for="">{{session()->get('user_name')}}</label> --}}
  <a href="{{ route('salary.index') }}" >Salary Details</a>

        <form class="form-control" action="{{route('salary.save')}}" method="post">
            @csrf
               <label class="form-label">Name</label>
           <select name="id" class="form-control">
                <option value="">Select Name</option>
                @foreach ($users as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
            <div class="form-group">
          <label class="form-label">Month</label>
          <input type="text" name="month" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
        </div>
         <div class="form-group">
          <label class="form-label">Year</label>
          <input type="text" name="year" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
         <div class="form-group">
          <label class="form-label">Salary</label>
          <input type="text" name="salary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          {{-- <label class="form-label">Salary</label> --}}
          <input type="hidden" value="paid" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
     
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
@endsection
