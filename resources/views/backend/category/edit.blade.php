@extends('backend.layouts.app')

@section('title') Add Category @endsection

@section('content')
<form action="{{route('categories.update', $category->id)}}" method="POST">
	@csrf
	@method('PUT')
	<div class="form-group">
		<label for="">Sửa tên Danh mục sản phẩm</label>
		<input class="form-control col-md-4" type="text" name="name" value="{{$category->name}}">
	</div>
	<button class="btn btn-success">Sửa</button>
</form>
@endsection