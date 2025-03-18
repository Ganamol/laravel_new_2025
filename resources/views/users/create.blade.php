@extends('Layout.Master')

@section('title','New User') 
@section('content')
<div class="container">
    <form class="form-control" action="{{route('users.save')}}" method="post">
      @csrf
      <div class="form-group">
          <label class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
        </div>
        <div class="form-group">
          <label class="form-label">DATE</label>
          <input type="text" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
        <label class="form-label">STATUS</label>
       <select name="status" class="form-control" id="">
                <option value="1">Active</option>
                <option value="0">InActive</option>
       </select>
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection
