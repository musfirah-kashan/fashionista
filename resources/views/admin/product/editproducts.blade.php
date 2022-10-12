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
<form method="post" class="row g-3" action="/update_product/{{$current_product->id}}" enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="row ec-vendor-uploads">
<div class="col-lg-4">
<div class="ec-vendor-img-upload">
<div class="ec-vendor-main-img">
	<div class="avatar-upload">
		<div class="avatar-edit">
			<input type='file' name="image1" id="imageUpload" class="ec-image-upload"
				accept=".png, .jpg, .jpeg"/>
			<label for="imageUpload"><img src="/product_image/{{$current_product->images}}"
					class="svg_img header_svg" alt="edit" /></label>
		</div>
		<div class="avatar-preview ec-preview">
			<div class="imagePreview ec-div-preview">
				<img class="ec-image-preview"
					src="admin/assets/img/products/vender-upload-preview.jpg" alt="edit" />
			</div>
		</div>
	</div>
	<div class="thumb-upload-set colo-md-12">
		<div class="thumb-upload">
			<div class="thumb-edit">
				<input type='file' id="thumbUpload01" class="ec-image-upload"
					accept=".png, .jpg, .jpeg" />
					<img id="blah" src="/product_image" alt="your image" width="150px" height="150px" />
				<label for="imageUpload"><img src="admin/assets/img/icons/edit.svg"
						class="svg_img header_svg" alt="edit" /></label>
			</div>
			<div class="thumb-preview ec-preview">
				<div class="image-thumb-preview">
					<img class="image-thumb-preview ec-image-preview "
						src="admin/assets/img/products/vender-upload-thumb-preview.jpg"
						alt="edit" />
				</div>
			</div>
		</div>
		<div class="thumb-upload">
			<div class="thumb-edit">
				<input type='file' id="thumbUpload02" class="ec-image-upload"
					accept=".png, .jpg, .jpeg" />
				<label for="imageUpload"><img src="admin/assets/img/icons/edit.svg"
						class="svg_img header_svg" alt="edit" /></label>
			</div>
			<div class="thumb-preview ec-preview">
				<div class="image-thumb-preview">
					<img class="image-thumb-preview ec-image-preview"
						src="admin/assets/img/products/vender-upload-thumb-preview.jpg"
						alt="edit" />
				</div>
			</div>
		</div>
		<div class="thumb-upload">
			<div class="thumb-edit">
				<input type='file' id="thumbUpload03" class="ec-image-upload"
					accept=".png, .jpg, .jpeg" />
				<label for="imageUpload"><img src="admin/assets/img/icons/edit.svg"
						class="svg_img header_svg" alt="edit" /></label>
			</div>
			<div class="thumb-preview ec-preview">
				<div class="image-thumb-preview">
					<img class="image-thumb-preview ec-image-preview"
						src="admin/assets/img/products/vender-upload-thumb-preview.jpg"
						alt="edit" />
				</div>
			</div>
		</div>
		<div class="thumb-upload">
			<div class="thumb-edit">
				<input type='file' id="thumbUpload04" class="ec-image-upload"
					accept=".png, .jpg, .jpeg" />
				<label for="imageUpload"><img src="admin/assets/img/icons/edit.svg"
						class="svg_img header_svg" alt="edit" /></label>
			</div>
			<div class="thumb-preview ec-preview">
				<div class="image-thumb-preview">
					<img class="image-thumb-preview ec-image-preview"
						src="admin/assets/img/products/vender-upload-thumb-preview.jpg"
						alt="edit" />
				</div>
			</div>
		</div>
		<div class="thumb-upload">
			<div class="thumb-edit">
				<input type='file' id="thumbUpload05" class="ec-image-upload"
					accept=".png, .jpg, .jpeg" />
				<label for="imageUpload"><img src="admin/assets/img/icons/edit.svg"
						class="svg_img header_svg" alt="edit" /></label>
			</div>
			<div class="thumb-preview ec-preview">
				<div class="image-thumb-preview">
					<img class="image-thumb-preview ec-image-preview"
						src="admin/assets/img/products/vender-upload-thumb-preview.jpg"
						alt="edit" />
				</div>
			</div>
		</div>
		<div class="thumb-upload">
			<div class="thumb-edit">
				<input type='file' id="thumbUpload06" class="ec-image-upload"
					accept=".png, .jpg, .jpeg" />
				<label for="imageUpload"><img src="admin/assets/img/icons/edit.svg"
						class="svg_img header_svg" alt="edit" /></label>
			</div>
			<div class="thumb-preview ec-preview">
				<div class="image-thumb-preview">
					<img class="image-thumb-preview ec-image-preview"
						src="admin/assets/img/products/vender-upload-thumb-preview.jpg"
						alt="edit" />
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="ec-vendor-upload-detail">

	<div class="col-md-6">
		<label for="inputEmail4" class="form-label">Product name</label>
		<input name="p_name" type="text" value="{{$current_product->name}}" class="form-control slug-title" id="inputEmail4">
	</div>
	<div class="col-md-6">
		<label class="form-label">Select Categories</label>
		<select name="categories" id="Categories" class="form-select" value="" required	>
			@foreach($category as $dd)
			<option value="{{$dd->id}}">{{$dd->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-12">
		<label for="slug" class="col-12 col-form-label">Slug</label>
		<div class="col-12">
			<input id="slug" name="slug" value="{{$current_product->slug}}" class="form-control here set-slug" type="text">
		</div>
	</div>
	<div class="col-md-12">
		<label class="form-label">Sort Description</label>
		<textarea name="description" class="form-control" rows="2" value="{{$current_product->description}}" ></textarea>
	</div>
	<div class="col-md-4 mb-25">
		<label class="form-label">Colors</label>
		<select name="color" id="Color" class="form-select" required	>
			@foreach($color as $dd)
			<option value="{{$dd->id}}">{{$dd->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-8 mb-25">
		<label class="form-label">Size</label>
		<div class="form-checkbox-box">
			<div class="form-check form-check-inline">
				<input type="checkbox" name="size1" value="size">
				<label>S</label>
			</div>
			<div class="form-check form-check-inline">
				<input type="checkbox" name="size1" value="size">
				<label>M</label>
			</div>
			<div class="form-check form-check-inline">
				<input type="checkbox" name="size1" value="size">
				<label>L</label>
			</div>
			<div class="form-check form-check-inline">
				<input type="checkbox" name="size1" value="size">
				<label>XL</label>
			</div>
			<div class="form-check form-check-inline">
				<input type="checkbox" name="size1" value="size">
				<label>XXL</label>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<label class="form-label">Price <span>( In USD
				)</span></label>
		<input type="number" class="form-control" name="price" id="price1" value="{{$current_product->price}}">
	</div>
	<div class="col-md-6">
		<label class="form-label">Quantity</label>
		<input type="number" class="form-control" name="quantity" id="quantity1" value="{{$current_product->quantity}}">
	</div>
	<div class="col-md-12">
		<label class="form-label">Full Detail</label>
		<textarea class="form-control" rows="4" name="detail" value="{{$current_product->detail}}" ></textarea>
	</div>
	<div class="col-md-12">
		<label class="form-label">Product Tags <span>( Type and
				make comma to separate tags )</span></label>
		<input type="text" class="form-control" id="group_tag" name="group_tag" value="{{$current_product->producttags}}"
			placeholder="" data-role="tagsinput" />
	</div>
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