@extends('layout.admin_layout')
@section('title' , 'User edit')
@section('content')
    {!! Form::open(['route' => ['users.update' , $user->id], 'method' => 'put', 'id' => 'edit_form']) !!}
        <div class="form-group">
            {!! Form::label('full_name', trans('common.full_name')) !!}
            {!! Form::text('name', $user['name'], ['class' => 'form-control']) !!} 
        </div>
        <div class="form-group">
            {!! Form::label('email', trans('common.email')) !!}
            {!! Form::text('email', $user['email'], ['class' => 'form-control']) !!} 
        </div>
        <div class="form-group">
            {!! Form::label('username', trans('common.username')) !!}
            {!! Form::text('username', $user['username'], ['class' => 'form-control']) !!} 
        </div>
        <div class="form-group">
            {!! Form::label('birthday', trans('common.birthday')) !!}
            {!! Form::date('birthday', $user['birthday'], ['class' => 'form-control']) !!} 
        </div>
        <div class="form-group">
            {!! Form::label('address', trans('common.address')) !!}
            {!! Form::text('address', $user['address'], ['class' => 'form-control']) !!} 
        </div>
        <div class="form-group">
            {!! Form::label('phone', trans('common.phone')) !!}
            {!! Form::text('phone', $user['phone'], ['class' => 'form-control']) !!} 
        </div>
        <div class="form-group">
            {!! Form::label('role', trans('common.role')) !!}
            {!! Form::select('role', [1 => 'Staff', 2 => 'Admin'], $user->role, ['class' => 'form-control , select2']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit(trans('common.update') . '!', ['class' => 'btn btn-primary ']) !!}
        </div>
    {!! Form::close() !!}
    <script type="text/javascript">
        $('#edit_form').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var btn = form.find('.btn');
            $.ajax({
                url : form.attr('action'),
                type : 'PUT',
                dataType : 'json',
                data : form.serialize(),
                beforeSend : function() {
                    btn.prop('disabled', true);
                },
                success : function(msg) {
                    if (msg.error == 0) {
                        $.toast({
                            heading: '{{ trans('common.success') }}',
                            text: '{{ trans('common.success') }}',
                            position: 'top-right',
                            loaderBg: '#ff6849',
                            icon: 'info',
                            hideAfter: 2000,
                            stack: 6,
                        });
                        setTimeout(function() {
                            window.location.href = '{{ route('users.index') }}';
                        }, 2000);
                    }
                },
                error : function() {
                    console.log('{{ trans('common.error') }}');
                },
                complete : function() {
                    btn.prop('disabled', false);
                },
            })
        });
        $('.select2').select2();
    </script>
@endsection
