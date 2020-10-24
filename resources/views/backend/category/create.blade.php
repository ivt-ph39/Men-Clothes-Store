@extends('backend.layouts.app')

@section('title') Add Category @endsection

@section('content')
<form action="{{route('admin-category-store')}}" method="POST">
	@csrf
	<div class="form-group">
		<label for="">Nhập tên Danh mục sản phẩm muốn tạo</label>
		<input class="form-control col-md-4" type="text" name="name">
	</div>
	<button class="btn btn-success">Create</button>
</form>
@endsection