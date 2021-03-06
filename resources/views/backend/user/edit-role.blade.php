@extends('backend.layouts.app')

@section('title') Add Category @endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Chỉnh sửa role</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<form class="col-md-4" action="{{route('admin-user-update-role', $user->id)}}" method="POST">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label for="">Họ Tên</label>
			<input class="form-control " type="text" name="name" value="{{$user->name}}" disabled>
			@if ($errors->has('name'))
         	<p class="alert-danger mt-2">{{ $errors->first('name') }}</p>
      	@endif
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input class="form-control " type="email" name="email" value="{{$user->email}}" disabled>
			@if ($errors->has('email'))
         	<p class="alert-danger mt-2">{{ $errors->first('email') }}</p>
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