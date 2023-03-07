@extends('layouts.master')
  @section('title')
  dropzone
  @endsection
    <!-- Bootstrap Dropzone CSS -->
		<link href="{{asset('assets/admin/vendors/bower_components/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css"/>
  @section('css')
  @endsection
@section('content')
		
		

					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">drozone</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>forms</span></a></li>
							<li class="active"><span>drozone</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Basic</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> For multiple file upload add <code>dropzone</code> in form tag and add <code>multiple</code> in input tag.</p>
										<div class="mt-40">
											<form action="#" class="dropzone">
												<div class="fallback">
													<input name="file" type="file" multiple />
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">With remove link</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="">
											<form action="#" class="dropzone" id="my-awesome-dropzone">
												<div class="fallback">
													<input name="file" type="file" multiple />
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
          @endsection

@section('js')		
		<!-- Dropzone JavaScript -->
		<script src="{{asset('assets/admin/vendors/bower_components/dropzone/dist/dropzone.js')}}"></script>
		
		<!-- Dropzone Init JavaScript -->
		<script src="{{asset('assets/admin/dist/js/dropzone-data.js')}}"></script>
		
    @endsection		