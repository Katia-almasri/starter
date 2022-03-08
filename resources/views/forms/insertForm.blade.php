
<!--should separate it tommorrow------------->
@include('navbar.lang')


<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form method='post' action = "{{route('offers.sotre')}}"> 
@csrf 
  <!--name of url is name of route to post the data to it-
  {{url('DB\store')}} or route('name of route')
    ---->
  @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
   {{Session::get('success')}}
   </div>
  @endif

  <div class="mb-3">
    <label for="offer_name_en" class="form-label">offer_name_en</label>
    <input type="text" name = 'offer_name_en' class="form-control">
    @error('offer_name_en')
    <small class = "text-danger">{{$message}}</small> 
     @enderror
  </div>
  <div class="mb-3">
    <label for="offer_name_ar" class="form-label">offer_name_ar</label>
    <input type="text" name = 'offer_name_ar' class="form-control">
    @error('offer_name_ar')
    <small class = "text-danger">{{$message}}</small> 
     @enderror
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">price</label>
    <input type="text" name = 'price' class="form-control" >
     @error('price')
    <small class = "text-danger">{{$message}}</small> 
     @enderror
  </div>
  <div class="mb-3">
    <label for="details_en" class="form-label">details_en</label>
    <input type="text" name = 'details_en' class="form-control" >
   @error('details_en')
    <small class = "text-danger">{{$message}}</small> 
     @enderror
  </div>
  <div class="mb-3">
    <label for="details_ar" class="form-label">details_ar</label>
    <input type="text" name = 'details_ar' class="form-control" >
   @error('details_ar')
    <small class = "text-danger">{{$message}}</small> 
     @enderror
  </div>
  <button type="submit" class="btn btn-primary">save</button>
</form>

<p>{{__('messages.hello')}}</p>