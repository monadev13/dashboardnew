@extends('layouts.master')
  @section('title')
  e-chart
  @endsection

  @section('css')
  <!-- Bootstrap Colorpicker CSS -->
  <link href="{{asset('assets/admin/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css"/>
		
  <!-- Bootstrap Datetimepicker CSS -->
  <link href="{{asset('assets/admin/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css"/>
  
  <!-- Bootstrap Daterangepicker CSS -->
  <link href="{{asset('assets/admin/vendors/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet')}}" type="text/css"/>
  @endsection
@section('content')


					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">form picker</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.html">Dashboard</a></li>
								<li><a href="#"><span>forms</span></a></li>
								<li class="active"><span>form-picker</span></li>
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
										<h6 class="panel-title txt-dark">Color picker</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10 text-left">simple input</label>
															<input  type="text" class="colorpicker form-control" value="#5367ce" />
														</div>	
													</div>	
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10 text-left">As a component</label>
															
															<div  class="colorpicker input-group colorpicker-component">
																<input type="text" value="#00AABB" class="form-control" />
																<span class="input-group-addon"><i></i></span>
															</div>
														</div>	
													</div>	
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group mb-0">
															<label class="control-label mb-10 text-left">With custom options</label>
															<div id="cp3" class="colorpicker-rgb input-group colorpicker-component">
																<input type="text" value="#00AABB" class="form-control" />
																<span class="input-group-addon"><i></i></span>
															</div>
														</div>	
													</div>	
													<div class="col-sm-6">
														<div class="form-group mb-0">
															<label class="control-label mb-10 text-left">Inline mode</label>
															<div  class="colorpicker-inline inl-bl"></div>
														</div>	
													</div>	
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
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Date Range Picker</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form>
												<div class="row">
													<div class="col-lg-4">
														<div class="form-group mb-0">
															<label class="control-label mb-10 text-left">Date Range Pick</label>
															<input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2016 - 01/31/2016"/>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="form-group mb-0">
															<label class="control-label mb-10 text-left">Date Range With Time</label>
															<input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2016 1:30 PM - 01/01/2016 2:00 PM"/>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="form-group mb-0">
															<label class="control-label mb-10 text-left">Limit Selectable Dates</label>
															<input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2016 - 06/07/2016"/>
														</div>
													</div>
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
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Date time picker</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10 text-left">date time pick</label>
															<div class='input-group date' id='datetimepicker1'>
																<input type='text' class="form-control" />
																<span class="input-group-addon">
																	<span class="fa fa-calendar"></span>
																</span>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10 text-left">time pick</label>
															<div class='input-group date' id='datetimepicker2'>
																<input type='text' class="form-control" />
																<span class="input-group-addon">
																	<span class="fa fa-clock-o"></span>
																</span>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<label class="control-label mb-10 text-left">inline date pick</label>
														<div class="form-group">
															<div class='input-group date' id='datetimepicker3'></div>
														</div>
													</div>
													<div class="col-sm-6">
														<label class="control-label mb-10 text-left">inline date time pick</label>
														<div class="form-group">
															<div class='input-group date' id='datetimepicker4'></div>
														</div>
													</div>
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
		<!-- Moment JavaScript -->
		<script type="text/javascript" src="{{asset('assets/admin/vendors/bower_components/moment/min/moment-with-locales.min.js')}}"></script>
		
		<!-- Bootstrap Colorpicker JavaScript -->
		<script src="{{asset('assets/admin/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
				
		<!-- Bootstrap Datetimepicker JavaScript -->
		<script type="text/javascript" src="{{asset('assets/admin/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
		
		<!-- Bootstrap Daterangepicker JavaScript -->
		<script src="{{asset('assets/admin/vendors/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
		
		<!-- Form Picker Init JavaScript -->
		<script src="dist/js/form-picker-data.js"></script>
		@endsection
	