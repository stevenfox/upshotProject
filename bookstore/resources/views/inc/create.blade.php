<!-- Button trigger modal -->
<button type="button" class="btn btn-primary pull-right btn-lg " data-toggle="modal" data-target="#CreateRecModal"> Add Record
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
        <a class="nav-link active btn" id="magazines-tab" data-toggle="tab" href="#magazines-tab" role="tab">Books</a>
      </li>
    </ul>

           {{--  Tab Pane Book--}}
             <div class="modal-body">

          {{ Form::open(array('url' => 'inc')) }}

              <div class="form-group">
                  {{ Form::label('text', 'Name') }}
                  {{ Form::text('Name', null, array('class'=>'form-control', 'placeholder'=> 'Name'))}}
              </div>

              <div class="form-group">
                  {{ Form::label('Price', 'Price') }}
                  {{ Form::number('Price', null, array('class'=>'form-control','step' => 'any','placeholder'=> '0.00'))}}
              </div>

              <div class="form-group">
                  {{ Form::label('Cover', 'Cover') }}
                  {{ Form::text('Cover', null, array('class'=>'form-control','placeholder'=> 'Soft'))}}
              </div>

            <div class="form-group">
                  {{ Form::label('Colour', 'Colour') }}
                  {{ Form::text('Colour', null, array('class'=>'form-control','placeholder'=> 'Red'))}}
              </div>

              <div class="form-group">
                  {{ Form::label('Size', 'Size') }}
                  {{ Form::text('Size', null, array('class'=>'form-control','placeholder'=> 'Small'))}}
              </div>

              <div class="form-group">
                  {{ Form::label('Theme', 'Theme') }}
                  {{ Form::text('Theme', null, array('class'=>'form-control','placeholder'=> 'Cars'))}}
              </div>

              {{ Form::submit('Add Book', array('class' => 'btn btn-primary')) }}

       {{ Form::close() }}
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
   </div>
      
    
  </div>
</div>