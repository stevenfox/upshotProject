<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Brand</th>
      <th scope="col">Colour</th>
      <th scope="col">Model Year</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($motorbikes as $motorbike)
      <tr>
        <th scope="row">{{$motorbike->id}}</th>
        <td>{{$motorbike->Brand}}</td>
        <td>{{$motorbike->Colour}}</td>
        <td>{{$motorbike->Model_Year}}</td>
      </tr>
  </tbody>
  @endforeach
</table>