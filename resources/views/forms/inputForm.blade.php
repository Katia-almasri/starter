<form method="POST" action="{{route('forms.process')}}">
  @csrf
  @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
   {{Session::get('success')}}
   </div>
  @endif
   <div class="mb-3 form-check">
    <label class="form-check-label" for="exampleCheck1" >name</label>
    <input type="text" class="form-check-input" name="name">
    @error('name')
      <small class = "text-danger">{{$message}}</small> 
     @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"name="email" aria-describedby="emailHelp">
     @error('email')
      <small class = "text-danger">{{$message}}</small> 
     @enderror

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
     @error('password')
      <small class = "text-danger">{{$message}}</small> 
     @enderror
  </div>
  <button type="submit" class="btn btn-primary">ADD</button>
</form>