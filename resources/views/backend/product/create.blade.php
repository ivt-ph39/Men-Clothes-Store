@extends('backend.layouts.app')

@section('title') Add Product @endsection

@section('content')
<form class="col-md-4" action="{{route('admin-category-store')}}" method="POST" enctype="">
	@csrf
	<div class="form-group">
    <label for="">Example select</label>
    <select class="form-control" id="">
    	@foreach($categories as $category)
      <option>{{$category->name}}</option>
      @endforeach
    </select>
  </div>
	<div class="form-group">
		<label for="">Nhập tên Sản phẩm</label>
		<input class="form-control" type="text" name="name">
	</div>

	<div class="form-group">
		<label for="">Giá tiền</label>
		<input class="form-control" type="text" name="price">
	</div>
	<div class="form-group">
    <label for="exampleFormControlFile1">Ảnh</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
	<button class="btn btn-success">Create</button>
</form>
@endsection