@extends('backend.layouts.app')

@section('title') User @endsection

@section('content')
<h1 class="h3 mb-2 text-gray-800">Profile</h1>
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card bg-light shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
         <div class="text-lg font-weight-bold text-success text-uppercase mb-3">{{$user->name}}</div>
         <p>Tên: {{$user->name}}</p>
         <p>Email: {{$user->email}}</p>

         @if($user->phone == null)
         <p>Số điện thoại: Chưa có</p>
         @else 
         <p>Số điện thoại: {{$user->phone}}</p>
         @endif

         @if($user->address == null)
         <p>Địa chỉ: Chưa có</p>
         @else 
         <p>Địa chỉ: {{$user->address}}</p>
         @endif

         @if($user->gender == null)
         <p>Giới tính: Chưa có</p>
         @else 
         <p>Giới tính: {{$user->gender}}</p>
         @endif

         <p>Role: {{$roleUser[$user->role]}}</p>
        </div>
      </div>
    </div>
  </div>
</div>
	@endsection