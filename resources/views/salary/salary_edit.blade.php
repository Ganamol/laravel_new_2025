@extends('Layout.Master')

@section('title','New User') 
@section('content')
<div class="container">
    <form class="form-control"    method="post">
      @csrf
      <div class="form-group">
          <label class="form-label">Name</label>
          <input type="hidden" value="{{encrypt($sal->s_id)}}" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
          {{-- <input type="text" value="{{$user->name}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  --}}
         <select name="id" class="form-control">
    <option value="">Select Name</option>
    @foreach ($users as $id => $name)
        <option value="{{ $id }}" {{ $id == $sal->id ? 'selected' : '' }}>
            {{ $name }}
        </option>
    @endforeach
</select>
       
       
        </div>
        <div class="form-group">
          <label class="form-label">Salary</label>
          <input type="text" value="{{$sal->salary}}" name="salary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
         <div class="form-group">
          <label class="form-label">Year</label>
          <input type="text" value="{{$sal->year}}" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label class="form-label">Month</label>
          <input type="text" value="{{$sal->month}}" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
        <label class="form-label">STATUS</label>
        <input type="text" value="{{$sal->status}}" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection
