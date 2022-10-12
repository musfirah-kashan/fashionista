@extends('layouts.userpanel.master')

@section('content')
<script>
window.onload = () => {
const myInput = document.getElementById('newPassword');
myInput.onpaste = e => e.preventDefault();
}
window.onload = () => {
const myInput = document.getElementById('conPassword');
myInput.onpaste = e => e.preventDefault();
}
window.onload = () => {
const myInput = document.getElementById('contact');
myInput.onpaste = e => e.preventDefault();
}

</script>

<div class="breadcrumb-wrapper breadcrumb-contacts">
<div>
<h1>User Profile</h1>
<p class="breadcrumbs"><span><a href="/admindashboard">Home</a></span>
<span><i class="mdi mdi-chevron-right"></i></span>Profile
</p>
</div>
<div>
<a href="user-list.html" class="btn btn-primary">Edit</a>
</div>
</div>
<div class="card bg-white profile-content">
<div class="row">
<div class="col-lg-4 col-xl-3">
<div class="profile-content-left profile-left-spacing">
<div class="text-center widget-profile px-0 border-0">
<div class="card-img mx-auto rounded-circle">
<img src="profile_image/{{Auth::user()->image}}" alt="user image">
</div>
<div class="card-body">
<h4 class="py-2 text-dark">{{Auth::user()->name}}</h4>
<p>{{Auth::user()->email}}</p>
</div>
</div>

<!-- <div class="d-flex justify-content-between ">
<div class="text-center pb-4">
<h6 class="text-dark pb-2">546</h6>
<p>Bought</p>
</div>

<div class="text-center pb-4">
<h6 class="text-dark pb-2">32</h6>
<p>Wish List</p>
</div>

<div class="text-center pb-4">
<h6 class="text-dark pb-2">1150</h6>
<p>Following</p>
</div>
</div> -->

<hr class="w-100">
<div class="contact-info pt-4">
<h5 class="text-dark">Contact Information</h5>
<p class="text-dark font-weight-medium pt-24px mb-2">Email address</p>
<p>{{Auth::user()->email}}</p>
<p class="text-dark font-weight-medium pt-24px mb-2">Phone Number</p>
<p>{{Auth::user()->contact}}</p>

</div>
</div>
</div>

<div class="col-lg-8 col-xl-9">
<div class="profile-content-right profile-right-spacing py-5">
<ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
data-bs-target="#profile" type="button" role="tab"
aria-controls="profile" aria-selected="true">Profile</button>
</li>
</ul>
<div class="tab-content px-3 px-xl-5" id="myTabContent">

<div class="tab-pane fade show active" id="profile" role="tabpanel"
aria-labelledby="profile-tab">
<div class="tab-widget mt-5">
<form method="post" action="update_profile/{{Auth::user()->id}}" enctype="multipart/form-data">
@csrf
<div class="form-group row mb-6">
<label for="coverImage"
class="col-sm-4 col-lg-2 col-form-label">User Image</label>
<div class="col-sm-8 col-lg-10">
<div class="custom-file mb-1">
    <input type="file" class="custom-file-input"
        id="coverImage" name="image">
    <label class="custom-file-label" for="coverImage">Upload
        Profile Picture...</label>
    <div class="invalid-feedback">Example invalid custom
        file feedback</div>
</div>
</div>
</div>

<div class="row mb-2">
<div class="col-lg-6">
<div class="form-group">
    <label for="firstName">Full Name</label>
    <input type="text" class="form-control" id="firstName" name="name" required
        value="{{Auth::user()->name}}">
</div>
</div>

<div class="col-lg-6">
<div class="form-group">
    <label for="contact">Contact Number</label>
    <input type="text" class="form-control" id="contact" name="contact"
        value="{{Auth::user()->contact}}">
</div>
</div>
</div>

<!-- <div class="form-group mb-4">
<label for="userName">User name</label>
<input type="text" class="form-control" id="userName"
value="User name">
<span class="d-block mt-1">Accusamus nobis at omnis consequuntur
culpa tempore saepe animi.</span>
</div> -->

<div class="form-group mb-4">
<label for="email">Email</label>
<input type="email" class="form-control" id="email" required name="email"
value="{{Auth::user()->email}}">
</div>

<div class="form-group mb-4">
<label for="newPassword">New password</label>
<input type="password" class="form-control" name="password" id="newPassword" autocomplete="off">
</div>

<div class="form-group mb-4">
<label for="conPassword">Confirm password</label>
<input type="password" class="form-control" id="conPassword" name="confirm_password">
</div>

<div class="d-flex justify-content-end mt-5">
<button type="submit"
class="btn btn-primary mb-2 btn-pill">Update
Profile</button>
</div>
</form>


</div>
</div>

<div class="tab-pane fade" id="settings" role="tabpanel"
aria-labelledby="settings-tab">
<div class="tab-pane-content mt-5">

</div>
</div>

</div>
</div>
</div>

</div>
</div>

@endsection