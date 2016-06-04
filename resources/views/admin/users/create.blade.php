@extends('layouts.admin')

@section('content')

<h1>Хэрэглэгч нэмэх</h1>

{!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store','files'=>true]) !!}

	<div class="form-group">
		{!! Form::label('name','Нэр:') !!}
		{!! Form::text('name', null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('email','Имэйл:') !!}
		{!! Form::email('email', null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('role_id','Хэрэглэгчийн эрх:') !!}
		{!! Form::select('role_id',[''=>'Хэрэглэгчийн эрх'] + $roles, null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('is_active','Идэвхитэй эсэх:') !!}
		{!! Form::select('is_active', array(1=>'Идэвхитэй',0=>'Идэвхигүй'), 0, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('password','Нууц үг:') !!}
		{!! Form::password('password', ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('photo_id','Файл оруулах:') !!}
		{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Хэрэглэгч нэмэх',['class'=>'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}
@include('includes.form_error')

@stop