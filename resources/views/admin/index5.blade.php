@extends('layouts.master')
  @section('title')
  e-chart
  @endsection

  @section('css')
 

	
	<!-- Data table CSS -->
	<link href="{{asset('assets/admin/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
	
	<!-- Toast CSS -->
	<link href="{{asset('assets/admin/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
	
	@endsection
	@section('content')
				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Total Employees</h6>
								</div>
								<div class="pull-right">
									<a href="#" class="pull-left inline-block refresh mr-15">
										<i class="zmdi zmdi-replay"></i>
									</a>
									<div class="pull-left inline-block dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
										<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Edit</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Delete</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>New</a></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div id="e_chart_1" class="" style="height:242px;"></div>
									<div class="label-chatrs mt-15">
										<div class="mb-5">
											<span class="clabels inline-block bg-green mr-5"></span>
											<span class="clabels-text font-12 inline-block txt-dark capitalize-font">Actions pending</span>
										</div>
										<div class="mb-5">
											<span class="clabels inline-block bg-light-green mr-5"></span>
											<span class="clabels-text font-12 inline-block txt-dark capitalize-font">decision pending</span>
										</div>
										<div class="">
											<span class="clabels inline-block bg-xtra-light-green mr-5"></span>
											<span class="clabels-text font-12 inline-block txt-dark capitalize-font">chage request pending</span>
										</div>										
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Open Positions by Division</h6>
								</div>
								<div class="pull-right">
									<a href="#" class="pull-left inline-block refresh">
										<i class="zmdi zmdi-replay"></i>
									</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div id="e_chart_4" class="" style="height:330px;"></div>	
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Attendance Metrics</h6>
								</div>
								<div class="pull-right">
									<a href="#" class="pull-left inline-block full-screen mr-15">
										<i class="zmdi zmdi-fullscreen"></i>
									</a>
									<div class="pull-left inline-block dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
										<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Devices</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>General</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Referral</a></li>
										</ul>
									</div>
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
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim">914,001</span></span>
													<span class="weight-500 uppercase-font block font-13">visits</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="icon-user-following data-right-rep-icon txt-light-grey"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim">46.41</span>%</span>
													<span class="weight-500 uppercase-font block">bounce rate</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="icon-control-rewind data-right-rep-icon txt-light-grey"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-green">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 txt-light data-wrap-left">
													<span class="block counter"><span class="counter-anim">4,054,876</span></span>
													<span class="weight-500 uppercase-font block">pageviews</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 txt-light data-wrap-right">
													<i class="icon-layers data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim">46.43</span>%</span>
													<span class="weight-500 uppercase-font block">growth rate</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
													<div id="sparkline_4" class="sp-small-chart" ></div>
												</div>
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
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Key Metrics</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div  class="panel-body">
									<span class="font-12 head-font txt-dark">Employee Turnover<span class="pull-right">85%</span></span>
									<div class="progress mt-10 mb-30">
										<div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
									</div>
									<span class="font-12 head-font txt-dark">Speed to Hire (Days)<span class="pull-right">80%</span></span>
									<div class="progress mt-10 mb-30">
										<div class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 80%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
									</div>
									<span class="font-12 head-font txt-dark">Promotion Rates<span class="pull-right">70%</span></span>
									<div class="progress mt-10 mb-30">
										<div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 70%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
									</div>
									<span class="font-12 head-font txt-dark">Success Rate<span class="pull-right">45%</span></span>
									<div class="progress mt-10 mb-30">
										<div class="progress-bar progress-bar-inverse" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
									</div>
									<span class="font-12 head-font txt-dark">Performance<span class="pull-right">80%</span></span>
									<div class="progress mt-10 mb-30">
										<div class="progress-bar progress-bar-success" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%" role="progressbar"> <span class="sr-only">80% Complete (success)</span> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Employee Churn </h6>
								</div>
								<div class="pull-right">
									<a href="#" class="pull-left inline-block refresh">
										<i class="zmdi zmdi-replay"></i>
									</a>
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
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Yellow Card Issued</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body row pa-0">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview border-none" id="employee_table">
												<thead>
													<tr>
														<th>Employee ID</th>
														<th>Name</th>
														<th>Reason</th>
														<th>Date</th>
														<th>Status</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#85457898</td>
														<td>Jens Brincker</td>
														<td>Droopy chart</td>
														<td>Oct 27</td>
														<td>
															<span class="label label-success">done</span>
														</td>
														<td><a href="javascript:void(0)" class="pr-10" data-toggle="tooltip" title="completed" ><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete"></i></a></td>
													</tr>
													<tr>
														<td>#85457897</td>
														<td>Mark Hay</td>
														<td>PSD resolution</td>
														<td>Oct 26</td>
														<td>
															<span class="label label-warning ">Pending</span>
														</td>
														<td><a href="javascript:void(0)" class="pr-10" data-toggle="tooltip" title="completed" ><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete"></i></a></td>
													</tr>
													<tr>
														<td>#85457896</td>
														<td>Anthony Davie</td>
														<td>Cinnabar</td>
														<td>Oct 25</td>
														<td>
															<span class="label label-success ">done</span>
														</td>
														<td><a href="javascript:void(0)" class="pr-10" data-toggle="tooltip" title="completed" ><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete"></i></a></td>
													</tr>
													<tr>
														<td>#85457895</td>
														<td>David Perry</td>
														<td>Felix PSD</td>
														<td>Oct 25</td>
														<td>
															<span class="label label-danger">pending</span>
														</td>
														<td><a href="javascript:void(0)" class="pr-10" data-toggle="tooltip" title="completed" ><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete"></i></a></td>
													</tr>
													<tr>
														<td>#85457896</td>
														<td>Anthony Davie</td>
														<td>Cinnabar</td>
														<td>Oct 25</td>
														<td>
															<span class="label label-success ">done</span>
														</td>
														<td><a href="javascript:void(0)" class="pr-10" data-toggle="tooltip" title="completed" ><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete"></i></a></td>
													</tr>
													<tr>
														<td>#85457894</td>
														<td>Anthony Davie</td>
														<td>Beryl iphone</td>
														<td>Oct 25</td>
														<td>
															<span class="label label-success ">done</span>
														</td>
														<td><a href="javascript:void(0)" class="pr-10" data-toggle="tooltip" title="completed" ><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete"></i></a></td>
													</tr>
												</tbody>
											</table>
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
	<!-- Data table JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/datatables/media/js/jquery.dataTables.mi'n.js)}}"></script>
	
	
	<!-- simpleWeather JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/moment/min/moment.mi'n.js)}}"></script>
	<script src="{{asset('assets/admin/vendors/bower_components/simpleWeather/jquery.simpleWeather.mi'n.js)}}"></script>
	<script src="dist/js/simpleweather-data.js"></script>
	
	<!-- Progressbar Animation JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/waypoints/lib/jquery.waypoints.mi'n.js)}}"></script>
	<script src="{{asset('assets/admin/vendors/bower_components/jquery.counterup/jquery.counterup.mi'n.js)}}"></script>
	
	
	
	<!-- Toast JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.mi'n.js)}}"></script>
	
	<!-- EChartJS JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/echarts/dist/echarts-en.mi'n.js)}}"></script>
	<script src="{{asset('assets/admin/vendors/echarts-liquidfill.mi'n.js)}}"></script>
	

	<script src="{{asset('assets/admin/dist/js/dashboard5-data.js')}}"></script>
	@endsection