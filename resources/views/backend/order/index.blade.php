@extends('backend.layouts.app')

@section('title') Order @endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Đặt hàng</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width="5%">ID</th>
						<th width="30%">Tên khách hàng</th>
						<th width="20%">Trạng thái đơn hàng</th>
						<th>Địa chỉ</th>
						<th>Số điện thoại</th>
						<th>email</th>
						<th>Tổng tiền</th>
						<th width="15%">Hành động</th>
					</tr>
				</thead>
				<tbody>
					@foreach($order as $ord)
					<tr>
						<td>{{$ord->id}}</td>
						<td>{{$ord->name}}</td>
						<td class="text-success">
							@if($ord->status == 0)
								{{'Đang đóng gói'}}
							@elseif ($ord->status == 1)
								{{'Đã đóng gói'}}
							@elseif ($ord->status == 2)
								{{'Đang giao'}}
							@elseif ($ord->status == 3)
							{{'Đã giao'}}
							@elseif ($ord->status == 4)
							{{'Đã hủy'}}
							@elseif ($ord->status == 5)
							{{'Khách không nhận'}}
							@endif
						</td>
						<td>{{$ord->address}}</td>
						<td>{{$ord->phone}}</td>
						<td>{{$ord->email}}</td>
						<td>{{$ord->total}}</td>
						<td>
							<a class="btn btn-secondary btn-sm" href="{{route('admin-order-show', $ord->id)}}"><i class="fas fa-edit"></i> Detail</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@if($order->hasPages())
           <div class="">
             {{ $order->links() }}
           </div>
         @endif
		</div>
	</div>
</div>
@endsection