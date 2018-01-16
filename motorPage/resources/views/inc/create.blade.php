<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Create new Record
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create a record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          {{ Form::open(array('url' => '/')) }}

            {{-- <div class="form-group">
                  {{ Form::label('selection', 'Choose table') }}
                  {{ Form::select('selection', array('M' => 'Motorbike', 'O' => 'Owner'))}}
              </div> --}}
              <div class="form-group">
                  {{ Form::label('text', 'Brand') }}
                  {{ Form::text('Brand', 'Brand', array('class'=>'form-control'))}}
              </div>

              <div class="form-group">
                  {{ Form::label('Colour', 'Colour') }}
                  {{ Form::text('Colour','Colour',array('class'=>'form-control'))}}
              </div>

              <div class="form-group">
                  {{ Form::label('Model_Year', 'Model_Year') }}
                  {{ Form::number('Model_Year','2019'),array('class'=>'form-control') }}
              </div>

              {{ Form::submit('Add Motorbike', array('class' => 'btn btn-primary')) }}

       {{ Form::close() }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>