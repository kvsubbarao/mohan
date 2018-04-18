@extends('templates.master')

@section('body')

	@include('partial_templates.navbar')

	<div class="container contactpage">
		<div class="row">
			<div class="col-md-12">
				<h2 class="main-heading">Contact Us</h2>
				@if(Session::has('message'))	
					<div class="alert alert-success alert-dismissible">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  {{ Session::get('message') }}
					</div>
				@endif
			</div>
		</div>
		<div class="row flex">
			<div class="col-md-6 valign">
				<div class="address">
					<p><i class="icon-location-pin"></i>Tarakaram nagar , S.V.N Colony , Guntur</p>
					<p><i class="icon-envelope"></i> info@smactech.com </p>
					<p><i class="icon-phone"></i> 123456789</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="contactform">
					<h2 class="heading">Drop A Message</h2>
					<form action="/contactsubmit" method="post" >
						{{ csrf_field() }}
					  <div class="form-group">
					    <label for="name">name:</label>
					    <input name="name" type="text" class="form-control" required id="name">
					  </div>
					  <div class="form-group">
					    <label for="email">Email:</label>
					    <input name="email" type="email" class="form-control" required id="email">
					  </div>
					  <div class="form-group">
					    <label for="mobile">Mobile:</label>
					    <input name="mobile" type="tel" class="form-control" required id="mobile">
					  </div>
					  <div class="form-group">
					  	<label for="message" >Message:</label>
					  	<textarea name="message" required class="form-control" ></textarea>		
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>		
			</div>
		</div>
	</div>

@endsection