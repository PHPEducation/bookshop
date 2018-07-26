@extends('layout.admin_layout')
@section('title' , 'User')
@section('content')
	<div class="container">
		<table class="table table-bordered table-hover table-responsive">
			<thead>
				<tr>
					<th class="text-center">STT</th>
					<th class="text-center">Username</th>
					<th class="text-center">Email</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<td class="text-center">{{ $user['id'] }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection