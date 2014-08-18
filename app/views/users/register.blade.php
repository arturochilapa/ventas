@extends ('common.common')
@section('titulo') Registro @stop
@section('content') 

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">@lang('users.register_title')</h3>
      </div>
      <div class="panel-body">
        {{ HTML::ul($errors->all()) }}

        {{ Form::open(array(
        'url' => '/register/save',
        'method' => 'POST'
        )) }}
        <div class="form-group">
    		{{ Form::label('email', trans('users.email')) }}
    		{{ Form::text('email', null, array('class' => 'form-control')) }}
    	</div>
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
        <div class="form-group">
    		{{ Form::label('password', trans('users.password')) }}
    		{{ Form::input('password', 'password', null, array('class' => 'form-control')) }}
    	</div>
        
        <div class="form-group">
    		{{ Form::label('birthdate', trans('users.birthdate')) }}
    		{{ Form::text('birthdate', null, array('class' => 'form-control')) }}
    	</div>
        
        <input type="hidden" name="sex" value="" id="sex" />
        <div id="selector" class="btn-group">
        
          <button type="button" class="btn btn-default" id="male">@lang('users.male')</button>
          <button type="button" class="btn btn-default" id="female">@lang('users.female')</button>
        </div> 
        <br /><br />
        {{ Form::submit(trans('users.register_user'), array('class' => 'btn btn-primary')) }}
        
        {{ Form::close() }}     
                
      </div>
    </div>
    <script>
    $('#selector button').click(function() {
        $('#selector button').addClass('active').not(this).removeClass('active');
        if($(this).attr('id') == 'male'){
            $("#sex").val('m');
        }else{
            $("#sex").val('f');
        }
        
    });
    $( "#birthdate" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>
            

@stop