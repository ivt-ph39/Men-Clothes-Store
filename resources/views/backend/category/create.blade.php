@extends('backend.layouts.app')

@section('title') Add Category @endsection

@section('content')
<form class="col-md-4" action="{{route('categories.store')}}" method="POST">
	@csrf
	<div class="form-group">
		@if (!$errors->has('name'))
		<label for="">Nhập tên Danh mục sản phẩm muốn tạo</label>
		<input class="form-control " type="text" name="name">
		@else
			<label for="" class="">Nhập tên Danh mục sản phẩm muốn tạo</label>
	      <input type="text" class="form-control is-invalid" id="" name="name">
	      <p id="" class="invalid-feedback">{{ $errors->first('name') }}</p>
   	@endif
	</div>
	<button class="btn btn-success">Thêm</button>
</form>
@endsection