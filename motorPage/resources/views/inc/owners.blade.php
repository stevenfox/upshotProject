<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Name</th>
      <th scope="col">Motorbike Id</th>
      <th scope="col">Location</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($owners as $owner)
      <tr>
        <th scope="row">{{$owner->id}}</th>
        <td>{{$owner->Name}}</td>
        <td>{{$owner->Motorbike_id}}</td>
        <td>{{$owner->Location}}</td>
      </tr>
  </tbody>
  @endforeach
</table>



<div id="fof"></div>