@extends('backend.layouts.app')

@section('title') Add Product @endsection

@section('content')
@foreach($product as $product)
<form class="row justify-content-center" action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
   @csrf
   @method('PUT')
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
         <input class="form-control" type="text" name="name" value="{{$product->name}}">
      </div>

      <div class="form-group">
         <label for="">Giá tiền</label>
         <input class="form-control" type="text" name="price" value="{{$product->price}}">
      </div>
      <div class="form-group">
         <label for="">Size</label>
         <select class="form-control" name="size" id="" value="{{$product->size}}">
            @foreach($listSize as $size)
            <option>{{$size}}</option>
            @endforeach
         </select>
      </div>
      <div class="form-group">
         <label for="">Ảnh</label>
         <input type="file" class="form-control-file" id="" name="image">
      </div>
      <div class="form-group">
         <label for="">Mô tả</label>
         <textarea class="form-control" id="" rows="7" name="description">{{$product->description}}</textarea>
      </div>
   </div>

   <div class="col-md-6">

      <div class="form-group">
         <label for="">Số lượng</label>
         <input class="form-control" type="text" name="quantities" value="{{$product->quantities}}">
      </div>
      <div class="form-group">
         <label for="">Chi tiết</label>
         <textarea class="form-control" id="" rows="22" name="detail">{{$product->detail}}</textarea>
      </div>
   </div>
   
   <div>
      <button class="btn btn-success">Edit</button>
   </div>
</form>
@endforeach
@endsection