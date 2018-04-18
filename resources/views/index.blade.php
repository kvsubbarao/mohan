@extends('templates.master')

@section('body')

	@include('partial_templates.navbar')

	<div class="banner">
		<video id="coding-video" autoplay="true" loop="true" >
			<source src="{{ asset('img/coding.mp4') }}" type="video/mp4">
		</video>

		<div class="layer"></div>
	    <div class="content">
		    <p>We Build and Scale Softwares For </p>
		    <p>Startups <span class="normal">&amp;</span> Innovative Brands</p>
	   </div>
	</div>

@endsection