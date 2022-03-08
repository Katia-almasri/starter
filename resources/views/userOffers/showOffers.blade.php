@include('navbar.lang')
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css">
<script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
  <center>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">offer id</th>
      <th scope="col">offer type</th>
      <th scope="col">details</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>
    @foreach($offers as $_offers)
    <tr>
      <th scope="row">1</th>
      <td>{{$_offers->offer_id}}</td>
      <td>{{$_offers->offer_name}}</td>
      <td>{{$_offers->details}}</td>
      <td>{{$_offers->price}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</center>