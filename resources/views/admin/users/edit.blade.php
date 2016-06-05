@extends('layouts.admin')

@section('content')

<h1>Хэрэглэгч өөрчлөх</h1>

<div class="col-sm-3">

	<img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

</div>

<div class="col-sm-9"> 

	{!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id],'files'=>true]) !!}

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
			{!! Form::select('role_id',$roles, null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('is_active','Идэвхитэй эсэх:') !!}
			{!! Form::select('is_active', array(1=>'Идэвхитэй',0=>'Идэвхигүй'), null, ['class'=>'form-control']) !!}
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

</div>

@include('includes.form_error')

@stop