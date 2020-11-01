@extends('backend.layouts.app')

@section('title') Add User @endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tạo người dùng</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<form class="col-md-4" action="{{route('admin-user-store')}}" method="POST">
		@csrf
		<div class="form-group">
			
			<label for="">Họ Tên</label>
			<input class="form-control " type="text" name="name">
			@if ($errors->has('name'))
         	<p class="alert-danger mt-2">{{ $errors->first('name') }}</p>
      	@endif
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input class="form-control " type="email" name="email">
			@if ($errors->has('email'))
         	<p class="alert-danger mt-2">{{ $errors->first('email') }}</p>
      	@endif
		</div>
		<div class="form-group">
			<label for="">Mật khẩu</label>
			<input class="form-control " type="password" name="password">
			@if ($errors->has('password'))
         	<p class="alert-danger mt-2">{{ $errors->first('password') }}</p>
      	@endif
		</div>
			
		<div class="form-group">
	    <label for="">Vai trò</label>
	    <select class="form-control" id="" name="role">
	    	@foreach($roleUser as $role=>$key)
	      <option value="{{$role}}">{{$key}}</option>
	      @endforeach
	    </select>
	  </div>
		<button class="btn btn-success mb-3">Thêm</button>
	</form>
</div>
@endsection