@extends('layouts.master')
  @section('title')
  e-chart
  @endsection

  @section('css')
  <!-- Bootstrap Dropify CSS -->
  <link href="{{asset('assets/admin/vendors/bower_components/dropify/dist/css/dropify.min.css')}}" rel="stylesheet" type="text/css"/>
  @endsection
@section('content')

					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">file upload (Dropify)</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>forms</span></a></li>
							<li class="active"><span>file upload</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 ol-md-6 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">File Upload (Default)</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted">Just add <code>dropify</code> class in input tag.</p>
										<div class="mt-40">
											<input type="file" id="input-file-now" class="dropify" />
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 ol-md-6 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">File Upload (default value)</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted" >You can set a default value by adding <code>data-default-file</code> in input tag.</p>
										<div class="mt-40">
											<input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="../vendors/bower_components/dropify/src/images/test-image-1.jpg" />
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 ol-md-6 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">File Upload (Height)</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted">You can set the height by adding <code>data-height</code> in input tag.</p>
										<div class="mt-40">
											<input type="file" id="input-file-now-custom-2" class="dropify" data-height="500" />
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 ol-md-6 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">File Upload (custom)</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted">You can combine different option.</p>
										<div class="mt-40">
											<input type="file" id="input-file-now-custom-3" class="dropify" data-height="500" data-default-file="../vendors/bower_components/dropify/src/images/test-image-2.jpg" />
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 ol-md-6 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">File Upload (max file size)</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted">You can add a max file size by <code>data-max-file-size</code>.</p>
										<div class="mt-40">
											<input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 ol-md-6 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">File Upload (disabled remove option)</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted">You can disable remove button by <code>data-show-remove="false"</code>.</p>
										<div class="mt-40">
											<input type="file" id="input-file-disable-remove" class="dropify" data-show-remove="false" />
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
				
          @endsection
					@section('js') 
		<!-- Bootstrap Daterangepicker JavaScript -->
		<script src="{{asset('assets-admin/vendors/bower_components/dropify/dist/js/dropify.min.js')}}"></script>
		
		<!-- Form Flie Upload Data JavaScript -->
		<script src="{{asset('assets-admin/dist/js/form-file-upload-data.js')}}"></script>
		
    @endsection	