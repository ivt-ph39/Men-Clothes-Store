@extends('backend.layouts.app')

@section('title') Add Product @endsection

@section('content')
<form class="row justify-content-center" action="{{route('admin-product-store')}}" method="POST" enctype="multipart/form-data">
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
         <label for="">Nhập tên Sản phẩm</label>
         <input class="form-control" type="text" name="name" value="">
         @if ($errors->has('name'))
            <p class="alert-danger mt-2">{{ $errors->first('name') }}</p>
         @endif
      </div>

      <div class="form-group">
         <label for="">Giá tiền</label>
         <input class="form-control" type="text" name="price">
         @if ($errors->has('price'))
            <p class="alert-danger mt-2">{{ $errors->first('price') }}</p>
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
      <div class="form-group">
         <label for="">Ảnh</label>
         <input type="file" class="form-control-file" id="" name="image">
         @if ($errors->has('image'))
            <p class="alert-danger mt-2">{{ $errors->first('image') }}</p>
         @endif
      </div>

      <div class="form-group">
         <label for="">Mô tả</label>
         <textarea class="form-control" id="" rows="7" name="description"></textarea>
         @if ($errors->has('description'))
            <p class="alert-danger mt-2">{{ $errors->first('description') }}</p>
         @endif
      </div>
   </div>
   
   <div class="col-md-6">
      
      <div class="form-group">
         <label for="">Số lượng</label>
         <input class="form-control" type="text" name="quantities">
         @if ($errors->has('quantities'))
            <p class="alert-danger mt-2">{{ $errors->first('quantities') }}</p>
         @endif
      </div>
      <div class="form-group">
         <label for="">Chi tiết</label>
         <textarea class="form-control" id="" rows="21" name="detail"></textarea>
         @if ($errors->has('detail'))
            <p class="alert-danger mt-2">{{ $errors->first('detail') }}</p>
         @endif
      </div>
   </div>
   
   <div class="">
      <button class="btn btn-success">Create</button>
   </div>
   
</form>
@endsection