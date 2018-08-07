@extends('layout.admin_layout')
@section('title' , 'User add')
@section('content')
	{!! Form::open(['route' => 'users.store' , 'method' => 'post' , 'id' => 'add_form']) !!}
	    <div class="form-group">
	    	{!! Form::label('full_name', trans('common.full_name')) !!}
	    	{!! Form::text('name' , '' , ['class' => 'form-control']) !!} 
	    </div>
	    <div class="form-group">
	    	{!! Form::label('email', trans('common.email')) !!}
	    	{!! Form::text('email' , '' , ['class' => 'form-control']) !!} 
	    </div>
	    <div class="form-group">
	    	{!! Form::label('username', trans('common.username')) !!}
	    	{!! Form::text('username' , '' , ['class' => 'form-control']) !!} 
	    </div>
	    <div class="form-group">
	    	{!! Form::label('password', trans('common.password')) !!}
	    	{!! Form::password('password' , ['class' => 'form-control']) !!} 
	    </div>
	    <div class="form-group">
	    	{!! Form::label('birthday', trans('common.birthday')) !!}
	    	{!! Form::date('birthday' , '' , ['class' => 'form-control']) !!} 
	    </div>
	    <div class="form-group">
	    	{!! Form::label('address', trans('common.address')) !!}
	    	{!! Form::text('address' , '' , ['class' => 'form-control']) !!} 
	    </div>
	    <div class="form-group">
	    	{!! Form::label('phone', trans('common.phone')) !!}
	    	{!! Form::text('phone' , '' , ['class' => 'form-control']) !!} 
	    </div>
        <div class="form-group">
            {!! Form::label('role', trans('common.role')) !!}
            {!! Form::select('role', ['Customer', 'Staff', 'Admin'], null, ['class' => 'form-control , select2']) !!}
        </div>
	    <div class="form-group">
	    	{!! Form::submit(trans('common.add').'!' , ['class' => 'btn btn-primary ']); !!} 
	    </div>
	{!! Form::close() !!}
	<script type="text/javascript">
		$('#add_form').submit(function(e){
			e.preventDefault();
			var form = $(this);
			var btn = form.find('.btn');
			$.ajax({
				url : form.attr('action'),
				type : 'POST',
				dataType : 'json',
				data : form.serialize(),
				beforeSend : function(){
					btn.prop('disabled' , true);
				},
				success : function(msg){
					if(msg.error == 0){
						$.toast({
					        heading: '{{trans('common.success')}}',
					        text: '{{trans('common.success')}}',
					        position: 'top-right',
					        loaderBg: '#ff6849',
					        icon: 'info',
					        hideAfter: 2000,
					        stack: 6
					    });
					    setTimeout(function(){
					    	window.location.href='{{route('users.index')}}';
					    } , 2000);
					}
				},
				error : function(){
					console.log('{{trans('common.error')}}');
				},
				complete : function(){
					btn.prop('disabled' , false);
				},
			})
		});

	</script>
@endsection
