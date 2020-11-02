@extends('backend.layouts.app')

@section('title') Product @endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Sản phẩm</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<a class="btn btn-success" href="{{route('admin-product-create')}}"><i class="fas fa-plus"></i> Thêm</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width="5%">ID</th>
						<th width="30%">Tên</th>
						<th width="20%">Ảnh</th>
						<th>Size</th>
						<th>Giá tiền</th>
						<th>Số lượng</th>
						<th width="15%">Hành động</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
					<tr>
						<td>{{$product->id}}</td>
						<td>{{$product->name}}</td>
						<td><img src="{{asset($product->image)}}" alt="" width="100"></td>
						<td>{{$product->size}}</td>
						<td>{{$product->price}}</td>
						<td>{{$product->quantities}}</td>
						<td>
							<a class="btn btn-secondary btn-sm" href="{{route('admin-product-edit', $product->id)}}"><i class="fas fa-edit"></i> Edit</a>
							<form action="{{route('admin-product-destroy', $product->id)}}" method="POST" style="display: inline-block;">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@if($products->hasPages())
           <div class="">
             {{ $products->links() }}
           </div>
         @endif
		</div>
	</div>
</div>
@endsection