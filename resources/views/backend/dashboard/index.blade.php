@extends('backend.layouts.app')

@section('title')
Dashboard
@endsection

@section('content')
<h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
<div class="row">
	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-primary shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Category</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countCate}}</div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-calendar fa-2x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-success shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Product</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countProduct}}</div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-bell fa-2x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-warning shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tổng đơn đặt hàng</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countOrder}}</div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-shopping-basket fa-2x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-info shadow h-100 py-2">
	    <div class="card-body">
	      <div class="row no-gutters align-items-center">
	        <div class="col mr-2">
	          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">User</div>
	          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countUser}}</div>
	        </div>
	        <div class="col-auto">
	          <i class="fas fa-user fa-2x text-gray-300"></i>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</div>
	
@endsection
