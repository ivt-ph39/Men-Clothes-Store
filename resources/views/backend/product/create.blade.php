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
      </div>

      <div class="form-group">
         <label for="">Giá tiền</label>
         <input class="form-control" type="text" name="price">
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
      </div>
      <div class="form-group">
         <label for="">Mô tả</label>
         <textarea class="form-control" id="" rows="7" name="description"></textarea>
      </div>
   </div>
   
   <div class="col-md-6">
      
      <div class="form-group">
         <label for="">Số lượng</label>
         <input class="form-control" type="text" name="quantities">
      </div>
      <div class="form-group">
         <label for="">Chi tiết</label>
         <textarea class="form-control" id="" rows="21" name="detail"></textarea>
      </div>
   </div>
   
   <div class="">
      <button class="btn btn-success">Create</button>
   </div>
   
</form>
@endsection