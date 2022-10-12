@extends('layouts.admin.master')
@section('content')
<script>
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
$('#blah').attr('src', e.target.result).width(150).height(150);
};

reader.readAsDataURL(input.files[0]);
}
}
</script>
<div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
		<h1>Main Category</h1>
		<p class="breadcrumbs"><span><a href="/admindashboard">Home</a></span>
			<span><i class="mdi mdi-chevron-right"></i></span>Main Category</p>
</div>
<div class="row">
	<div class="col-xl-4 col-lg-12">
		<div class="ec-cat-list card card-default mb-24px">
			<div class="card-body">
				<div class="ec-cat-form">
					<h4>Add New Category</h4>

					<form method="post" action="{{URL::to('add_category')}}" enctype="multipart/form-data">
						@csrf
						<div class="form-group row">
							<label for="text" class="col-12 col-form-label">Name</label> 
							<div class="col-12">
								<input id="text" name="name" class="form-control here slug-title" type="text">
							</div>
						</div>

						<div class="form-group row">
							<label for="slug" class="col-12 col-form-label">Slug</label> 
							<div class="col-12">
								<input id="slug" name="slug" class="form-control here set-slug" type="text">
								<small>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-12 col-form-label">Category Image</label> 
							<div class="col-12">
							<div class="custom-file mb-1">
											<input type="file" class="custom-file-input"
												id="coverImage" name="image">
											<label class="custom-file-label" for="coverImage">Upload
												Category Image...</label>
												<img id="blah" src="/category_image/Cloud-upload.png" alt="your image" width="150px" height="150px" />
											<div class="invalid-feedback">Example invalid custom
												file feedback</div>
										</div>
							</div>
						</div> 

						<div class="form-group row">
							<label class="col-12 col-form-label">Feature Status</label> 
									<select name="feature" id="status" class="form-select">
											<option value="active">Active</option>
											<option value="nonactive">Non Active</option>
									</select>
						
						</div> 

						<div class="row">
							<div class="col-12">
								<button name="submit" type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-8 col-lg-12">
		<div class="ec-cat-list card card-default">
			<div class="card-body">
				<div class="table-responsive">
					<table id="responsive-data-table" class="table">
						<thead>
							<tr>
								<th>Thumb</th>
								<th>Name</th>
								<th>Slug</th>
								<th>Product</th>
								<th>Featured</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							@foreach($fetch as $dd)
							<tr>
								<td><img class="cat-thumb" src="category_image/{{$dd->image}}" alt="Product Image" /></td>
								<td>{{$dd->name}}</td>
								<td>
									<span class="ec-sub-cat-tag">{{$dd->slug}}</span>
									
									</span>
								</td>
								<td></td>
								<td>{{$dd->feature}}</td>
								<td>
									<div class="btn-group">
										<a href="/edit_category/{{$dd->id}}" class="btn btn-outline-success">Edit</a>
										<a href="/delete_category/{{$dd->id}}" class="btn btn-outline-danger">Delete</a>
									</div>
								</td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection