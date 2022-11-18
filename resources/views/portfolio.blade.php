@extends('dashboard.prueba3')

@section('content')

<div id="banner-area">
		<img src="{{asset('assets/img/banner/banner2.jpg')}}" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Portfolio Details</h2>
	          	</div>
          	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

	
	<!-- Portfolio item start -->
	<section id="portfolio-item">
		<div class="container">
			<!-- Portfolio item row start -->
			<div class="row">
				<!-- Portfolio item slider start -->
				@foreach($details as $detail)
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="portfolio-slider">
						<div class="flexportfolio flexslider">
							<ul class="slides">
							<?php $cont=0; ?>
							  @foreach($detail->image as $detail2)
								<li><img src="/storage/{{$detail2}}" alt=""></li>
							  @endforeach
							</ul>
						</div>
					</div>
				</div>
				@endforeach
				<!-- Portfolio item slider end -->

				<!-- sidebar start -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar">
						<div class="portfolio-desc">
							<h3 class="widget-title">About Project</h3>
							<p>{{$detail->description}}</p>
							<br/>
							<h3 class="widget-title">Used Skills</h3>
							@foreach($technologies as $technology)
							<p>{{$technology->name}}</p>
							@endforeach
							<h3 class="widget-title">Clients</h3>
							<p>{{$detail->client}}</p>
							<p><a href="{{$detail->url}}" target="_blank" class="project-btn btn btn-primary">Project Link</a></p>
						</div>
					</div>
				</div>
				<!-- sidebar end -->
			</div><!-- Portfolio item row end -->
		</div><!-- Container end -->
	</section><!-- Portfolio item end -->

	<div class="gap-40"></div>

@endsection