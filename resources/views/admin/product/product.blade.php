@extends('layouts.admin.master')

@section('content')

<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
	<div>
		<h1>Add Product</h1>
		<p class="breadcrumbs"><span><a href="index-2.html">Home</a></span>
			<span><i class="mdi mdi-chevron-right"></i></span>Product
		</p>
	</div>
	<div>
		<a href="/showproducts" class="btn btn-primary"> View All
		</a>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<div class="card card-default">
			<div class="card-header card-header-border-bottom">
				<h2>Add Product</h2>
			</div>
			<form method="post" class="row g-3" action="{{URL::to('addproduct')}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="row ec-vendor-uploads">
						<div class="col-lg-12">
							<div class="ec-vendor-upload-detail">

								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Product name</label>
									<input name="p_name" type="text" class="form-control slug-title" id="inputEmail4">
								</div>
								<div class="col-md-6">
									<label class="form-label">Select Categories</label>
									<select name="categories" id="Categories" class="form-select" required>
										@foreach($category as $dd)
										<option value="{{$dd->id}}">{{$dd->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="col-md-12">
									<label for="slug" class="col-12 col-form-label">Slug</label>
									<div class="col-12">
										<input id="slug" name="slug" class="form-control here set-slug" type="text">
									</div>
								</div>
								<div class="col-md-12">
									<label class="form-label">Sort Description</label>
									<textarea name="description" class="form-control" rows="2"></textarea>
								</div>
								<br>
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>

@endsection