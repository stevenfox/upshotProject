<!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#CreateRecModal"> Add Record
</button>

<!-- Modal -->
<div class="modal fade" id="CreateRecModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active btn" id="motorbikes-tab" data-toggle="tab" href="#motorbikes_add" role="tab">Motorbikes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn" id="owners-tab" data-toggle="tab" href="#owners_add" role="tab">Owners</a>
      </li>
    </ul>
    <div class="tab-content">

           {{--  Tab Pane Motorbike--}}
      <div class="tab-pane active" id="motorbikes_add" role="tabpanel">
             <div class="modal-body">

          {{ Form::open(array('url' => '/')) }}

              <div class="form-group">
                  {{ Form::label('text', 'Brand') }}
                  {{ Form::text('Brand', null, array('class'=>'form-control', 'placeholder'=> 'Yamaha'))}}
              </div>

              <div class="form-group">
                  {{ Form::label('Colour', 'Colour') }}
                  {{ Form::text('Colour', null, array('class'=>'form-control','placeholder'=> 'Red'))}}
              </div>

              <div class="form-group">
                  {{ Form::label('Model_Year', 'Model Year') }}
                  {{ Form::number('Model_Year','2019'),array('class'=>'form-control') }}
              </div>

              {{ Form::submit('Add Motorbike', array('class' => 'btn btn-primary', 'name' =>'motorbike_table')) }}

       {{ Form::close() }}
      </div>
      </div>

     {{--  Tab Pane Owner--}}

      <div class="tab-pane" id="owners_add" role="tabpanel">
          <div class="tab-pane active" id="owners_add" role="tabpanel">
             <div class="modal-body">

          {{ Form::open(array('url' => '/')) }}
              <div class="form-group">
                  {{ Form::label('Name', 'Name') }}
                  {{ Form::text('Name', null, array('class'=>'form-control', 'placeholder' => 'Steven'))}}
              </div>

              <div class="form-group">
                  {{ Form::label('Motorbike_id', 'Motorbike id') }}
                  {{ Form::number('Motorbike_id',null,array('class'=>'form-control','placeholder'=>'4'))}}
              </div>

              <div class="form-group">
                  {{ Form::label('Location', 'Location') }}
                  {{ Form::text('Location', null, array('class'=>'form-control','placeholder' => '31.1044722,-0.0123523')) }}
              </div>

              {{ Form::submit('Add Owner',array('class' => 'btn btn-primary', 'name' =>'owner_table')) }}

       {{ Form::close() }}
      </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
   </div>
      
    
  </div>
</div>