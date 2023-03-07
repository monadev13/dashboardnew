@extends('layouts.master')
  @section('title')
  e-chart
  @endsection

  @section('css')
  @endsection
@section('content')


					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">gallery</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>special pages</span></a></li>
							<li class="active"><span>gallery</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">With Filter</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="filter-wrap mb-40">
											<!-- Portfolio Filters --> 
											<ul id="filters" class="col-md-5">
												<li><a id="all" href="#" data-filter="*" class="active">all</a></li>	
												<li><a href="#" data-filter=".branding">branding</a></li>
												<li><a href="#" data-filter=".design">design</a></li>
												<li><a href="#" data-filter=".photography">photo</a></li>
												<li><a href="#" data-filter=".web">web</a></li>
											</ul>
											<!--/Portfolio Filters -->
											<div class="clearfix"></div>
										</div>
										
										<div class="gallery-wrap">
											
											<div class="portfolio-wrap project-gallery">
												<ul id="portfolio" class="portf auto-construct  project-gallery" data-col="3">
													<li  class="item tall branding"   data-src="../img/gallery/mock1.jpg" data-sub-html="<h6>Bagwati</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" >
														<a href="">
														<img class="img-responsive" src="../img/gallery/mock1.jpg"  alt="Image description" />
														<span class="hover-cap">Bagwati</span>
														</a>
													</li>
													<li class="item small photography" data-src="http://www.youtube.com/watch?v=Pq9yPrLWMyU" data-poster="../img/gallery/mock2.jpg"  data-sub-html="<h6>Not a Keyboard</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
														<a href="">
														<img class="img-responsive" src="../img/gallery/mock2.jpg"  alt="Image description" />
														<span class="hover-cap">Not a Keyboard</span>
														</a>
													</li>
													<li class="item tall design" data-src="../img/gallery/mock4.jpg" data-sub-html="<h6>Into the Woods</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
														<a href="">
														<img class="img-responsive" src="../img/gallery/mock4.jpg"  alt="Image description" />
														<span class="hover-cap">Into the Woods</span>
														</a>
													</li>
													<li class="item small web" data-src="http://vimeo.com/1084537" data-poster="../img/gallery/mock3.jpg" data-sub-html="<h6>Ultra Saffire</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
														<a href="">
														<img class="img-responsive" src="../img/gallery/mock3.jpg"  alt="Image description" />
														<span class="hover-cap"> Ultra Saffire</span>
														</a>
													</li>
													
													<li class="item design" data-src="../img/gallery/mock5.jpg" data-sub-html="<h6>Happy Puppy</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
														<a href="">
														<img class="img-responsive" src="../img/gallery/mock5.jpg"  alt="Image description" />	
														<span class="hover-cap">Happy Puppy</span>
														</a>
													</li>
													<li class="item branding" data-html="#video1" data-poster="../img/gallery/mock6.jpg" data-sub-html="<h6>Wooden Closet</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
														<a href="">
														<img class="img-responsive" src="../img/gallery/mock6.jpg"  alt="Image description" />
														<span class="hover-cap">Wooden Closet</span>
														</a>
													</li>
													
												</ul>
												<!-- Hidden video div -->
												<div style="display:none;" id="video1">
													<video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
														<source src="../videos/video1.mp4" type="video/webm">
														<source src="../videos/video1.webm" type="video/webm">
														 Your browser does not support HTML5 video.
													</video>
												</div>
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
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Without Filter</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="gallery-wrap">
											<div class="portfolio-wrap project-gallery">
												<ul id="portfolio_1" class="portf auto-construct  project-gallery" data-col="4">
													<li  class="item tall"   data-src="../img/gallery/mock1.jpg" data-sub-html="<h6>Bagwati</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" >
														<a href="">
														<img class="img-responsive" src="../img/gallery/mock1.jpg"  alt="Image description" />
														<span class="hover-cap">Bagwati</span>
														</a>
													</li>
													<li class="item small" data-src="http://www.youtube.com/watch?v=Pq9yPrLWMyU" data-poster="../img/gallery/mock2.jpg"  data-sub-html="<h6>Not a Keyboard</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
														<a href="">
														<img class="img-responsive" src="../img/gallery/mock2.jpg"  alt="Image description" />
														<span class="hover-cap">Not a Keyboard</span>
														</a>
													</li>
													<li class="item tall" data-src="../img/gallery/mock4.jpg" data-sub-html="<h6>Into the Woods</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
														<a href="">
														<img class="img-responsive" src="../img/gallery/mock4.jpg"  alt="Image description" />
														<span class="hover-cap">Into the Woods</span>
														</a>
													</li>
													<li class="item small" data-src="http://vimeo.com/1084537" data-poster="../img/gallery/mock3.jpg" data-sub-html="<h6>Ultra Saffire</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
														<a href="">
														<img class="img-responsive" src="../img/gallery/mock3.jpg"  alt="Image description" />
														<span class="hover-cap"> Ultra Saffire</span>
														</a>
													</li>
													
													<li class="item" data-src="../img/gallery/mock5.jpg" data-sub-html="<h6>Happy Puppy</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
														<a href="">
														<img class="img-responsive" src="../img/gallery/mock5.jpg"  alt="Image description" />	
														<span class="hover-cap">Happy Puppy</span>
														</a>
													</li>
													<li class="item" data-html="#video2" data-poster="../img/gallery/mock6.jpg" data-sub-html="<h6>Wooden Closet</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
														<a href="">
														<img class="img-responsive" src="../img/gallery/mock6.jpg"  alt="Image description" />
														<span class="hover-cap">Wooden Closet</span>
														</a>
													</li>
													
												</ul>
												<!-- Hidden video div -->
												<div style="display:none;" id="video2">
													<video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
														<source src="../videos/video1.mp4" type="video/webm">
														<source src="../videos/video1.webm" type="video/webm">
														 Your browser does not support HTML5 video.
													</video>
												</div>
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
		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('assets/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
				
		<!-- Gallery JavaScript -->
		<script src="{{asset('assets/admin/dist/js/isotope.js')}}"></script>
		<script src="{{asset('assets/admin/dist/js/lightgallery-all.js')}}"></script>
		<script src="{{asset('assets/admin/dist/js/froogaloop2.min.js')}}"></script>
		<script src="{{asset('assets/admin/dist/js/gallery-data.js')}}"></script>
		
		@endsection		