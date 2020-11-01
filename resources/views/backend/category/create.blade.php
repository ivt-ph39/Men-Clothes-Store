@extends('backend.layouts.app')

@section('title') Add Category @endsection

@section('content')
<form class="col-md-4" action="{{route('admin-category-store')}}" method="POST">
	@csrf
	<div class="form-group">
		<label for="">Nhập tên Danh mục sản phẩm muốn tạo</label>
		<input class="form-control " type="text" name="name">
		@if ($errors->has('name'))
      	<p class="alert-danger mt-2">{{ $errors->first('name') }}</p>
   	@endif
	</div>
	<button class="btn btn-success">Thêm</button>
</form>
@endsection