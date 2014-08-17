@extends ('common.common')
@section('titulo') Registro @stop
@section('content') 

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">@lang('users.register_title')</h3>
      </div>
      <div class="panel-body">
        <div class="form-group">
    		{{ Form::label('firstname', trans('users.firstname')) }}
    		{{ Form::text('firstname', null, array('class' => 'form-control')) }}
    	</div>
        <div class="form-group">
    		{{ Form::label('midlename', trans('users.midlename')) }}
    		{{ Form::text('midlename', null, array('class' => 'form-control')) }}
    	</div>
        <div class="form-group">
    		{{ Form::label('lastname', trans('users.lastname')) }}
    		{{ Form::text('lastname', null, array('class' => 'form-control')) }}
    	</div>
        <div class="btn-group">
          <button type="button" class="btn btn-primary">Left</button>
          <button type="button" class="btn btn-primary">Middle</button>
          <button type="button" class="btn btn-primary">Right</button>
        </div>        
                
      </div>
    </div>
    <script>
        $('.btn').button();
    </script>        

@stop