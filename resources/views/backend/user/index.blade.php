@extends('backend.layouts.app')

@section('title') User @endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Danh sách người dùng</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<a class="btn btn-success" href="{{ route('admin-user-create') }}"><i class="fas fa-plus"></i> Thêm</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width="5%">ID User</th>
						<th width="30%">Tên</th>
						<th>Email</th>
						<th>Số điện thoại</th>
						<th>Địa chỉ</th>
						<th>Giới tính</th>
						<th>Role</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->phone}}</td>
						<td>{{$user->address}}</td>
						<td>{{$user->gender}}</td>
						<td>{{$roleUser[$user->role]}}</td>
						<td>
							<a class="btn btn-secondary btn-sm" href="{{route('admin-user-edit', $user->id)}}"><i class="fas fa-edit"></i> Edit role</a>
							<form action="{{route('admin-user-destroy', $user->id)}}" method="POST" style="display: inline-block;">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@if($users->hasPages())
           <div class="">
             {{ $users->links() }}
           </div>
         @endif
		</div>
	</div>
</div>
@endsection