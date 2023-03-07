@extends('layouts.master')
  @section('title')
  carousel
  @endsection

  @section('css')
    <!-- Owl CSS -->
		<link href="{{asset('assets/admin/vendors/bower_components/owl.carousel/dist/assets/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('assets/admin/vendors/bower_components/owl.carousel/dist/assets/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css">
  @endsection
@section('content')

					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">carousel</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>UI element</span></a></li>
							<li class="active"><span>carousel</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Bootstrap carousel with caption</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div  class="panel-body">
										<p class="muted">Add class <code class="">.carousel-caption</code>.</p>
										<!-- START carousel-->
										<div id="carousel-example-captions" data-ride="carousel" class="carousel slide mt-40">
											<ol class="carousel-indicators">
											   <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
											   <li data-target="#carousel-example-captions" data-slide-to="1"></li>
											   <li data-target="#carousel-example-captions" data-slide-to="2"></li>
											</ol>
											<div role="listbox" class="carousel-inner">
											   <div class="item active">
												  <img src="../img/big/img1.jpg" alt="First slide image">
												  <div class="carousel-caption">
													<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
												  </div>
											   </div>
											   <div class="item">
												  <img src="../img/big/img2.jpg" alt="Second slide image">
												  <div class="carousel-caption">
													 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
												  </div>
											   </div>
											   <div class="item">
												  <img src="../img/big/img3.jpg" alt="Third slide image">
												  <div class="carousel-caption">
													<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
												  </div>
											   </div>
											</div>
											<a href="#carousel-example-captions" role="button" data-slide="prev" class="left carousel-control"> <span aria-hidden="true" class="fa fa-angle-left"></span> <span class="sr-only">Previous</span> </a> <a href="#carousel-example-captions" role="button" data-slide="next" class="right carousel-control"> <span aria-hidden="true" class="fa fa-angle-right"></span> <span class="sr-only">Next</span> </a> 
										</div>
										<!-- END carousel-->
									</div>
								</div>
							</div>
					   </div>
						<div class="col-md-6">
								<div class="panel panel-default card-view">
									<div class="panel-heading">
										<div class="pull-left">
											<h6 class="panel-title txt-dark">Bootstrap carousel without caption</h6>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="panel-wrapper collapse in">
										<div  class="panel-body">
										<!-- START carousel-->
										<div id="carousel-example-captions-1" data-ride="carousel" class="carousel slide">
											<ol class="carousel-indicators">
											   <li data-target="#carousel-example-captions-1" data-slide-to="0" class="active"></li>
											   <li data-target="#carousel-example-captions-1" data-slide-to="1"></li>
											   <li data-target="#carousel-example-captions-1" data-slide-to="2"></li>
											</ol>
											<div role="listbox" class="carousel-inner">
											   <div class="item active"> <img src="../img/big/img4.jpg" alt="First slide image"> </div>
											   <div class="item"> <img src="../img/big/img5.jpg" alt="Second slide image"> </div>
											   <div class="item"> <img src="../img/big/img6.jpg" alt="Third slide image"> </div>
											</div>
										</div>
										<!-- END carousel-->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
					
					<!-- Row -->
					<div class="row">
					   <div class="col-lg-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">owl-carousel full width</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div  class="panel-body">
										<div class="">
											<div id="owl_demo_1" class="owl-carousel owl-theme">
											   <div class="item"><img src="../img/heading-bg/slide2.jpg" alt="Owl Image"></div>
											   <div class="item"><img src="../img/heading-bg/slide3.jpg" alt="Owl Image"></div>
											   <div class="item"><img src="../img/heading-bg/slide4.jpg" alt="Owl Image"></div>
											   <div class="item"><img src="../img/heading-bg/slide6.jpg" alt="Owl Image"></div>
											   <div class="item"><img src="../img/heading-bg/slide1.jpg" alt="Owl Image"></div>
											   <div class="item"><img src="../img/heading-bg/slide3.jpg" alt="Owl Image"></div>
											</div>
										 </div>
									</div>
								</div>
							</div>	
						</div>
					</div>
					<!-- /Row -->
					
					<!-- Row -->
					<div class="row">
					   <div class="col-lg-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">owl-carousel four image</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div  class="panel-body">
										<div class="">
											<div id="owl_demo_2" class="owl-carousel owl-theme">
											   <div class="item"><img src="../img/big/img1.jpg" alt="Owl Image"></div>
											   <div class="item"><img src="../img/big/img2.jpg" alt="Owl Image"></div>
											   <div class="item"><img src="../img/big/img3.jpg" alt="Owl Image"></div>
											   <div class="item"><img src="../img/big/img4.jpg" alt="Owl Image"></div>
											   <div class="item"><img src="../img/big/img5.jpg" alt="Owl Image"></div>
											   <div class="item"><img src="../img/big/img6.jpg" alt="Owl Image"></div>
											</div>
										 </div>
									</div>
								</div>
							</div>	
						</div>
					</div>
					<!-- /Row -->
					
					<!-- Row -->
					<div class="row">
					   <div class="col-lg-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">owl-carousel three image</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div  class="panel-body">
										<div class="">
											<div id="owl_demo_3" class="owl-carousel owl-theme">
											   <div class="item"><img src="../img/big/img1.jpg" alt="Owl Image"></div>
											   <div class="item"><img src="../img/big/img2.jpg" alt="Owl Image"></div>
											   <div class="item"><img src="../img/big/img3.jpg" alt="Owl Image"></div>
											   <div class="item"><img src="../img/big/img4.jpg" alt="Owl Image"></div>
											   <div class="item"><img src="../img/big/img5.jpg" alt="Owl Image"></div>
											   <div class="item"><img src="../img/big/img6.jpg" alt="Owl Image"></div>
											</div>
										 </div>
									</div>
								</div>
							</div>	
						</div>
					</div>
					<!-- /Row -->
					
          @endsection

@section('js')
		
		<!-- Owl Init JavaScript -->
		<script src="{{asset('assets/admin/dist/js/owl-data.js')}}"></script>	
@endsection