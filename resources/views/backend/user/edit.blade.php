@extends('backend.layouts.app')

@section('title') Add Category @endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Chỉnh sửa role</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<form class="col-md-4" action="{{route('users.update', $user->id)}}" method="POST">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label for="">Họ Tên</label>
			<input class="form-control " type="text" name="name" value="{{$user->name}}">
			@if ($errors->has('name'))
         	<p class="alert-danger mt-2">{{ $errors->first('name') }}</p>
      	@endif
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input class="form-control " type="email" name="email" value="{{$user->email}}">
			@if ($errors->has('email'))
         	<p class="alert-danger mt-2">{{ $errors->first('email') }}</p>
      	@endif
		</div>
		<div class="form-group">
			<label for="">Phone</label>
			<input class="form-control " type="text" name="phone" value="{{$user->phone}}">
			@if ($errors->has('phone'))
         	<p class="alert-danger mt-2">{{ $errors->first('phone') }}</p>
      	@endif
		</div>
		<div class="form-group">
			<label for="">Địa chỉ</label>
			<input class="form-control " type="text" name="address" value="{{$user->address}}">
			@if ($errors->has('address'))
         	<p class="alert-danger mt-2">{{ $errors->first('address') }}</p>
      	@endif
		</div>	
		<div class="form-group">
			<label for="">Giới tính</label>
			<select class="form-control" id="" name="gender">
	      	<option value="">---</option>
	      	<option value="Nam">Nam</option>
	      	<option value="Nữ">Nữ</option>
	    	</select>
			@if ($errors->has('gender'))
         	<p class="alert-danger mt-2">{{ $errors->first('gender') }}</p>
      	@endif
		</div>
		<div class="form-group">
	    <label for="">Vai trò</label>
	    <select class="form-control" id="" name="role" value="{{$user->role}}">
	    	@foreach($roleUser as $role=>$key)
	      <option value="{{$role}}">{{$key}}</option>
	      @endforeach
	    </select>
	  </div>
		<button class="btn btn-success mb-3">Thêm</button>
	</form>
</div>
@endsection