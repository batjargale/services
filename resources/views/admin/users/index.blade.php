@extends('layouts.admin')


@section('content')

<h1>Хэрэглэгч</h1>
<table class="table">
    <thead>
      <tr>
        <th>№</th>
        <th>Нэр</th>
        <th>Имэйл</th>
        <th>Хэрэглэгчийн эрх</th>
        <th>Идэвхитэй эсэх</th>
        <th>Үүсгэсэн</th>
        <th>Өөрчилсөн</th>
      </tr>
    </thead>
    @if($users)
    	@foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->is_active == 1 ? 'Идэвхитэй' : 'Идэвхигүй'}}</td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
      </tr>
      @endforeach

    @endif

  </table>

@stop