@extends('layouts.master')
  @section('title')
  e-chart
  @endsection

  @section('css')
  

	<!-- Data table CSS -->
	<link href="{{asset('assets/admin/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
	
	@endsection
	@section('content')

				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">invoice archive</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>special pages</span></a></li>
							<li class="active"><span>invoice archive</span></li>
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
									<h6 class="panel-title txt-dark">Invoice List</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_1" class="table  display table-hover mb-30">
												<thead>
													<tr>
														<th>#Invoice</th>
														<th>Description</th>
														<th>Amount</th>
														<th>Status</th>
														<th>issue date</th>
														<th>due date</th>
														<th>View</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td>#5012</td>
														<td>System Architect</td>
														<td>$205,500</td>
														<td>
															<span class="label label-danger">unpaid</span>
														</td>
														<td>2011/04/25</td>
														<td>2012/12/02</td>
														<td>
															<a href="#">
																<i class="fa fa-file-text-o" aria-hidden="true"></i>
															</a>	
														</td>
													</tr>
													<tr>
														<td>#5013</td>
														<td>Accountant</td>
														<td>$205,500</td>
														<td>
															<span class="label label-success">paid</span>
														</td>
														<td>2011/07/25</td>
														<td>2012/12/02</td>
														<td>
															<a href="#">
																<i class="fa fa-file-text-o" aria-hidden="true"></i>
															</a>	
														</td>
													</tr>
													<tr>
														<td>#5014</td>
														<td>Junior Technical Author</td>
														<td>$205,500</td>
														<td>
															<span class="label label-warning">pending</span>
														</td>
														<td>2009/01/12</td>
														<td>2012/12/02</td>
														<td>
															<a href="#">
																<i class="fa fa-file-text-o" aria-hidden="true"></i>
															</a>	
														</td>
													</tr>
													<tr>
														<td>#5015</td>
														<td>Senior Javascript Developer</td>
														<td>$205,500</td>
														<td>
															<span class="label label-success">paid</span>
														</td>
														<td>2012/03/29</td>
														<td>2012/12/02</td>
														<td>
															<a href="#">
																<i class="fa fa-file-text-o" aria-hidden="true"></i>
															</a>	
														</td>
													</tr>
													<tr>
														<td>#5016</td>
														<td>Accountant</td>
														<td>$205,500</td>
														<td>
															<span class="label label-success">paid</span>
														</td>
														<td>2008/11/28</td>
														<td>2012/12/02</td>
														<td>
															<a href="#">
																<i class="fa fa-file-text-o" aria-hidden="true"></i>
															</a>	
														</td>
													</tr>
													<tr>
														<td>#5017</td>
														<td>Integration Specialist</td>
														<td>$205,500</td>
														<td>
															<span class="label label-success">paid</span>
														</td>
														<td>2012/12/02</td>
														<td>2016/12/02</td>
														<td>
															<a href="#">
																<i class="fa fa-file-text-o" aria-hidden="true"></i>
															</a>	
														</td>
													</tr>
													<tr>
														<td>#5017</td>
														<td>Sales Assistant</td>
														<td>$205,500</td>
														<td>
															<span class="label label-success">paid</span>
														</td>
														<td>2012/08/06</td>
														<td>2013/09/15</td>
														<td>
															<a href="#">
																<i class="fa fa-file-text-o" aria-hidden="true"></i>
															</a>	
														</td>
													</tr>
													<tr>
														<td>#5010</td>
														<td>Integration Specialist</td>
														<td>$205,500</td>
														<td>
															<span class="label label-success">paid</span>
														</td>
														<td>2010/10/14</td>
														<td>2014/09/15</td>
														<td>
															<a href="#">
																<i class="fa fa-file-text-o" aria-hidden="true"></i>
															</a>	
														</td>
													</tr>
													<tr>
														<td>#5011</td>
														<td>Javascript Developer</td>
														<td>$205,500</td>
														<td>
															<span class="label label-success">paid</span>
														</td>
														<td>2009/09/15</td>
														<td>2013/09/15</td>
														<td>
															<a href="#">
																<i class="fa fa-file-text-o" aria-hidden="true"></i>
															</a>	
														</td>
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
	<script src="{{asset('assets/admin/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/admin/dist/js/dataTables-data.js')}}"></script>
	@endsection
	
