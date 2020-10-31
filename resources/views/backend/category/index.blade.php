@extends('backend.layouts.app')

@section('title') Category @endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Danh mục sản phẩm</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<a class="btn btn-success" href="{{route('admin-category-create')}}"><i class="fas fa-plus"></i> Thêm</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width="100">ID</th>
						<th>Name</th>
						<th width="250">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<td>{{$category->id}}</td>
						<td>{{$category->name}}</td>
						<td>
							<a class="btn btn-secondary btn-sm" href="{{route('admin-category-edit', $category->id)}}"><i class="fas fa-edit"></i> Edit</a>
							<form action="{{route('admin-category-destroy', $category->id)}}" method="POST" style="display: inline-block;">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@if($categories->hasPages())
           <div class="">
             {{ $categories->links() }}
           </div>
         @endif
		</div>
	</div>
</div>
@endsection