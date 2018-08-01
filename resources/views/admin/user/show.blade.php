@extends('layout.admin_layout')
@section('title', 'User')
@section('content')
<div class="y-scroller">
	<table class="table table-bordered table-hover table-responsive">
		<thead>
			<tr>
				<th class="text-center">
					{{trans('common.stt')}}
				</th>
				<th class="text-center">
					{{trans('common.username')}}
				</th>
				<th class="text-center">
					{{trans('common.email')}}
				</th>
				<th class="text-center">
					{{trans('common.action')}}
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td class="text-center">
					{{ $user['id'] }}
				</td>
				<td class="text-cetner">
					{{ $user['username'] }}
				</td>
				<td class="text-cetner">
					{{ $user['email'] }}
				</td>
				<td class="text-cetner">
					<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal{{$user['id']}}">{{trans('common.detail')}}</button>

					<!-- Modal -->
					<div id="myModal{{$user['id']}}" class="modal fade" role="dialog">
						<div class="modal-dialog">

						    <!-- Modal content-->
						    <div class="modal-content">
						        <div class="modal-header">
						        	<button type="button" class="close" data-dismiss="modal">&times;</button>
						        	<h4 class="modal-title"><b>{{trans('common.detail')}}<b></h4>
						     	</div>
						      	<div class="modal-body">
						      		<h3><b>{{trans('common.full_name')}} : </b>{{$user['name']}}</h3>
						        	<h3><b>{{trans('common.username')}} : </b>{{$user['username']}}</h3>
						        	<h3><b>{{trans('common.email')}} : </b>{{$user['email']}}</h3>
						        	<h3><b>{{trans('common.phone')}} : </b>{{$user['phone']}}</h3>
						        	<h3><b>{{trans('common.address')}} : </b>{{$user['address']}}</h3>
						      	</div>
						      	<div class="modal-footer">
						        	<button type="button" class="btn btn-default" data-dismiss="modal">{{trans('common.close')}}</button>
						      	</div>
						    </div>

						</div>
					</div>
					<a href="{{route('users.edit' , ['id' => $user['id']])}}" class="btn btn-success btn-sm">
						{{trans('common.edit')}}
					</a>
					{!! Form::open(['route' => ['users.destroy' , $user['id']] , 'method' => 'delete' , 'class' => 'delete_form']) !!}
						{!! Form::submit(trans('common.delete') , ['class' => 'btn btn-warning btn-sm']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$('.delete_form').submit(function(e){
		e.preventDefault();
		var form = $(this);
		var btn = form.find('.btn');
		$.ajax({
			url : form.attr('action'),
			type : 'DELETE',
			dataType : 'json',
			beforeSend : function(){
				btn.prop('disabled', true);
			},
			success : function(msg){
				if(msg.error == 0){
					$.toast({
				        heading: '{{trans('common.delete_success')}}',
				        text: '{{trans('common.delete_success')}}',
				        position: 'top-right',
				        loaderBg: '#ff6849',
				        icon: 'info',
				        hideAfter: 2000,
				        stack: 6
				    });
				    setTimeout(function(){
				    	form.closest('tr').hide();
				    },2000);
				}
			},
			error : function(){
				console.log('error');
			},
			complete : function(){
				btn.prop('disabled', false);
			}
		});
	});
</script>
@endsection
