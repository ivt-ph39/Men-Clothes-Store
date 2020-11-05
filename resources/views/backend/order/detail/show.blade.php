@extends('backend.layouts.app')

@section('title') Order Detail @endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Chi tiết đơn hàng</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width="5%">ID</th>
						<th width="30%">Sản phẩm</th>
						<th width="20%">Size</th>
						<th width="20%">Số lượng</th>
						<th>Giá tiền</th>
					</tr>
				</thead>
				<tbody>
					@foreach($orderDetails as $orderDetail)
					<tr>
						<td>{{$orderDetail->id}}</td>
						<td>{{$orderDetail->product_name}}</td>
						<td>{{$orderDetail->size}}</td>
						<td>{{$orderDetail->quantities}}</td>
						<td>{{$orderDetail->price}}</td>
					</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<td colspan="4" width="75%"><b>Tổng cộng</b></td>
						<td>{{$orderDetail->total}}</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
@endsection