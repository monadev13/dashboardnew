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
					  <h5 class="txt-dark">easy pie chart</h5>
					</div>
					
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#">charts</a></li>
						<li class="active"><span>easy pie chart</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
					
				</div>
				<!-- /Title -->
				
				<div class="row">
					<div class="col-lg-6 col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">easy-pie-chart with scale</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body pb-0">
									<div class="row">
										<div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_1" class="easypiechart" data-percent="86">
												<span class="percent head-font">86</span>
											</span>
										</div>
										<div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_2" class="easypiechart" data-percent="46">
												<span class="percent head-font">46</span>
											</span>
										</div>
										<div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_3" class="easypiechart" data-percent="90">
												<span class="percent head-font">90</span>
											</span>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">easy-pie-chart without scale</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body pb-0">
									<div class="row">
										<div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_4" class="easypiechart" data-percent="46">
												<span class="percent head-font">46</span>
											</span>
										</div>
										<div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_5" class="easypiechart" data-percent="66">
												<span class="percent head-font">66</span>
											</span>
										</div>
										<div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_6" class="easypiechart" data-percent="90">
												<span class="percent head-font">90</span>
											</span>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">avatar with scale</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body pb-0">
									<div class="row">
										<div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_7" class="easypiechart" data-percent="40">
												<span><img src="../img/user.png" alt="user"  class="img-circle"/></span>
											</span>
										</div>
										<div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_8" class="easypiechart" data-percent="50">
												<span><img src="../img/user1.png" alt="user"  class="img-circle"/></span>
											</span>
										</div>
										<div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_9" class="easypiechart" data-percent="90">
												<span><img src="../img/user2.png" alt="user"  class="img-circle"/></span>
											</span>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">avatar without scale</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body pb-0">
									<div class="row">
										<div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_10" class="easypiechart" data-percent="40">
												<span><img src="../img/user.png" alt="user"  class="img-circle"/></span>
											</span>
										</div>
										<div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_11" class="easypiechart" data-percent="50">
												<span><img src="../img/user1.png" alt="user"  class="img-circle"/></span>
											</span>
										</div>
										<div class="col-sm-4 mb-15 text-center">
											<span id="pie_chart_12" class="easypiechart" data-percent="90">
												<span><img src="../img/user2.png" alt="user"  class="img-circle"/></span>
											</span>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
					
@endsection
@section('js')		

	<script src="{{asset('assets/admin/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('assets/admin/dist/js/easypiechart-data.js')}}"></script>
  @endsection
	