@extends('Layout.Master')

@section('title','New User') 
@section('content')
<div class="container">
    <form class="form-control" action="{{route('update.users')}}"  method="post">
      @csrf
      <div class="form-group">
          <label class="form-label">Name</label>
          <input type="hidden" value="{{encrypt($user->id)}}" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
          <input type="text" value="{{$user->name}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
        </div>
        <div class="form-group">
          <label class="form-label">DATE</label>
          <input type="text" value="{{$user->dob}}" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
        <label class="form-label">STATUS</label>
       <select name="status" class="form-control" id="">
                <option value="1"  @if($user->status==1) selected="selected" @endif>Active</option>
                <option value="0"  @if($user->status==0) selected="selected" @endif>InActive</option>
       </select>
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection
