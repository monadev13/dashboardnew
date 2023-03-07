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
						  <h5 class="txt-dark">google map</h5>
						</div>
						
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#">maps</a></li>
							<li class="active"><span>google map</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
						
					</div>
					<!-- /Title -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">map style 1</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div id="map_canvas" style="height:500px;"></div>
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
										<h6 class="panel-title txt-dark">map style 2</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div id="map_canvas_1" style="height:500px;"></div>
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
										<h6 class="panel-title txt-dark">map style 3</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div id="map_canvas_2" style="height:500px;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
	
		
		
		
		@endsection
					@section('js') 
					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxXt2P7-U38bK0xEFIT-ebZJ1ngK8wjww"></script>
		<script src="{{asset('assets/admin/dist/js/gmap-data.js')}}"></script>
					@endsection