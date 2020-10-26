@extends('backend.layouts.app')

@section('title') Product @endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Sản phẩm</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Sản phẩm</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width="150">ID</th>
						<th>Tên</th>
						<th>Giá tiền</th>
						<th>Số lượng</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
					<tr>
						<td>{{$product->id}}</td>
						<td>{{$product->name}}</td>
						<td>{{$product->price}}</td>
						<td>{{$product->quantities}}</td>
						<td>
							<a class="btn btn-secondary btn-sm" href="">Edit</a>
							<form action="" method="POST" style="display: inline-block;">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger btn-sm">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection