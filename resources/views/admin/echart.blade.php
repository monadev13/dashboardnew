@extends('layouts.master')
  @section('title')
  e-chart
  @endsection
  <!-- Data table CSS -->
	<link href="{{asset('assets/admin/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('assets/admin/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

  @section('css')
  @endsection
@section('content')

				<!-- Title -->					
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Echart chart</h5>
					</div>
					
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#">charts</a></li>
						<li class="active"><span>Echart chart</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
					
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Line Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							
							<div class="panel-wrapper collapse in">
								<div id="e_chart_1" class="" style="height:370px;"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Area Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div id="e_chart_3" class="" style="height:330px;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Polar Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div id="e_chart_4" class="" style="height:342px;"></div>	
								</div>	
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Bar Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div id="e_chart_2" class="" style="height:330px;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
        @endsection
@section('js')	
			
	<!-- Data table JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	
	
	
	<!-- simpleWeather JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/moment/min/moment.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
	<script src="{{asset('assets/admin/dist/js/simpleweather-data.js')}}"></script>
	
	<!-- Progressbar Animation JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>
	
	
	<!-- Sparkline JavaScript -->
	<script src="{{asset('assets/admin/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>
	
	
	
	<!-- Toast JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
	
	<!-- EChartJS JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/echarts/dist/echarts-en.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/echarts-liquidfill.min.js')}}"></script>
	
	<!-- Switchery JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
	

	<script src="{{asset('assets/admin/dist/js/echart-data.js')}}"></script>
  @endsection
