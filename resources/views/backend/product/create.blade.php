@extends('backend.layouts.app')

@section('title') Add Product @endsection

@section('content')
<form class="row justify-content-center" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
   @csrf
   <div class="col-md-6">
      <div class="form-group">
         <label for="">Tên danh mục</label>
         <select class="form-control" name="category_id" id="">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
         </select>
      </div>
      <div class="form-group">
         @if (!$errors->has('name'))
            <label for="">Nhập tên Sản phẩm</label>
            <input class="form-control" type="text" name="name" value="">
         @else
            <label for="">Nhập tên Sản phẩm</label>
            <input class="form-control is-invalid" type="text" name="name" value="">
            <p class="invalid-feedback mt-2 ">{{ $errors->first('name') }}</p>
         @endif
      </div>

      <div class="form-group">
         @if (!$errors->has('price'))
            <label for="">Giá tiền</label>
            <input class="form-control" type="text" name="price">
         @else
            <label for="">Giá tiền</label>
            <input class="form-control is-invalid" type="text" name="price">
            <p class="invalid-feedback mt-2">{{ $errors->first('price') }}</p>
         @endif
      </div>
      <div class="form-group">
         <label for="">Size</label>
         <select class="form-control" name="size" id="">
            @foreach($listSize as $size)
            <option>{{$size}}</option>
            @endforeach
         </select>

      </div>
      <div class="custom-file mt-3 mb-3">
         @if (!$errors->has('image'))
            <input type="file" class="custom-file-input" id="" name="image">
            <label class="custom-file-label" for="">Chọn ảnh...</label>
         @else
            <input type="file" class="custom-file-input is-invalid" id="" name="image">
            <label class="custom-file-label" for="">Chọn ảnh...</label>
            <p class="invalid-feedback mt-3 mb-3">{{ $errors->first('image') }}</p>
         @endif
      </div>

      <div class="form-group">
         @if (!$errors->has('description'))
            <label for="">Mô tả</label>
            <textarea class="form-control" id="" rows="7" name="description"></textarea>
         @else
            <label for="">Mô tả</label>
            <textarea class="form-control is-invalid" id="" rows="7" name="description"></textarea>
            <p class="invalid-feedback mt-2">{{ $errors->first('description') }}</p>
         @endif
      </div>
   </div>
   
   <div class="col-md-6">
      
      <div class="form-group">
         @if (!$errors->has('quantities'))
            <label for="">Số lượng</label>
            <input class="form-control" type="text" name="quantities">
         @else
            <label for="">Số lượng</label>
            <input class="form-control is-invalid" type="text" name="quantities">
            <p class="invalid-feedback mt-2">{{ $errors->first('quantities') }}</p>
         @endif
      </div>
      <div class="form-group">
         @if (!$errors->has('detail'))
            <label for="">Chi tiết</label>
            <textarea class="form-control" id="" rows="21" name="detail"></textarea>
         @else
            <label for="">Chi tiết</label>
            <textarea class="form-control is-invalid" id="" rows="22" name="detail"></textarea>
            <p class="invalid-feedback mt-2">{{ $errors->first('detail') }}</p>
         @endif
      </div>
   </div>
   
   <div class="">
      <button class="btn btn-success">Create</button>
   </div>
   
</form>
@endsection