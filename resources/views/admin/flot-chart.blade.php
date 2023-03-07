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
					  <h5 class="txt-dark">flot chart</h5>
					</div>
					
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#">charts</a></li>
						<li class="active"><span>flot chart</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
					
				</div>
				<!-- /Title -->
				
				<div class="row">
					<div class="col-lg-6">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">line Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="flot-container" style="height:200px">
										<div id="real_time_chart" class="demo-placeholder"></div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					
					<div class="col-lg-6">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">composite line Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="flot-container" style="height:200px">
										<div id="flot_line_chart" class="demo-placeholder"></div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>	
				<div class="row">
					<div class="col-lg-6">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">pie Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="flot-container" style="height:250px">
										<div id="flot_pie_chart" class="demo-placeholder"></div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="col-lg-6">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">filled line Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="flot-container" style="height:200px">
										<div id="flot_line_chart_moving" class="demo-placeholder"></div>
									</div>
								</div>
							</div>	
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">bar Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="flot-container" style="height:200px">
										<div id="flot_bar_chart" class="demo-placeholder"></div>
									</div>
								</div>
							</div>	
						</div>	
					</div>
					<div class="col-lg-6">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">stacked bar Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="flot-container" style="height:200px">
										<div id="sales_bars_chart" class="demo-placeholder"></div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
        @endsection
@section('js')  

		
	<!-- Flot Charts JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/Flot/excanvas.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/bower_components/Flot/jquery.flot.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/bower_components/Flot/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/bower_components/Flot/jquery.flot.resize.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/bower_components/Flot/jquery.flot.time.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/bower_components/Flot/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/bower_components/Flot/jquery.flot.crosshair.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
	<script src="dist/js/flot-data.js"></script>
	@endsection