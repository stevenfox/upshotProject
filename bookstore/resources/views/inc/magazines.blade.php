<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Cover</th>
      <th scope="col">Colour</th>
      <th scope="col">Size</th>
      <th scope="col">Theme</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($magazines as $key => $value)
      <tr>
        <th scope="row">{{$value->id}}</th>
        <td>{{$value->Name}}</td>
        <td>{{$value->Price}}</td>
        <td>{{$value->Cover}}</td>
        <td>{{$value->Colour}}</td>
        <td>{{$value->Size}}</td>
        <td>{{$value->Theme}}</td>
       <td> {{ Form::open(array('url' => 'inc/' . $value->id, 'class' => 'pull-right')) }}
          {{ Form::hidden('_method', 'DELETE') }}
          {{ Form::submit('Delete Book', array('class' => 'btn btn-danger')) }}
        {{ Form::close() }}

       </td>
      </tr>
      <!-- delete the magazine (uses the destroy method DESTROY /magazines/{id} -->
        @endforeach        

  </tbody>

</table>

                
          
    