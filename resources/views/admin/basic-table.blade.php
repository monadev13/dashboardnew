@extends('layouts.master')
  @section('title')
    basic-table
  @endsection

  @section('css')
  @endsection
@section('content')
	
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">basic table</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>table</span></a></li>
						<li class="active"><span>basic table</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<div class="row">
					<!-- Basic Table -->
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Basic Table</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="text-muted">Add class <code>table</code> in table tag.</p>
									<div class="table-wrap mt-40">
										<div class="table-responsive">
											<table class="table mb-0">
												<thead>
												  <tr>
													<th>#</th>
													<th>First Name</th>
													<th>Last Name</th>
													<th>Username</th>
													<th>Role</th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>1</td>
													<td>Jens</td>
													<td>Brincker</td>
													<td>Brincker123</td>
													<td><span class="label label-danger">admin</span> </td>
												  </tr>
												  <tr>
													<td>2</td>
													<td>Mark</td>
													<td>Hay</td>
													<td>Hay123</td>
													<td><span class="label label-info">member</span> </td>
												  </tr>
												  <tr>
													<td>3</td>
													<td>Anthony</td>
													<td>Davie</td>
													<td>Davie123</td>
													<td><span class="label label-warning">developer</span> </td>
												  </tr>
												  <tr>
													<td>4</td>
													<td>David</td>
													<td>Perry</td>
													<td>Perry123</td>
													<td><span class="label label-success">supporter</span> </td>
												  </tr>
												  <tr>
													<td>5</td>
													<td>Anthony</td>
													<td>Davie</td>
													<td>Davie123</td>
													<td><span class="label label-info">member</span> </td>
												  </tr>
												  <tr>
													<td>6</td>
													<td>Alan</td>
													<td>Gilchrist</td>
													<td>Gilchrist123</td>
													<td><span class="label label-success">supporter</span> </td>
												  </tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Basic Table -->
				</div>	
				
				<div class="row">
					<!-- Table Hover -->
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Table Hover</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									
									<p class="text-muted">Add class <code>table-hover</code> in table tag.</p>
									<div class="table-wrap mt-40">
										<div class="table-responsive">
										  <table class="table table-hover mb-0">
											<thead>
											  <tr>
												<th>#</th>
												<th>Products</th>
												<th>Popularity</th>
												<th>Sales</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>1</td>
												<td>Milk Powder</td>
												<td><span class="peity-bar" data-width="90" data-peity='{ "fill": ["#ed6f56"], "stroke":["#ed6f56"]}' data-height="40">0,-3,-2,-4,5,-4,3,-2,5,-1</span> </td>
												<td><span class="text-danger text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 28.76%</span> </td>
											  </tr>
											  <tr>
												<td>2</td>
												<td>Air Conditioner</td>
												<td><span class="peity-bar" data-width="90" data-peity='{ "fill": ["#ed6f56"], "stroke":["#ed6f56"]}' data-height="40">0,-1,1,-2,-3,1,-2,-3,1,-2</span> </td>
												<td><span class="text-warning text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 8.55%</span> </td>
											  </tr>
											  <tr>
												<td>3</td>
												<td>RC Cars</td>
												<td><span class="peity-bar" data-width="90" data-peity='{ "fill": ["#ed6f56"], "stroke":["#ed6f56"]}' data-height="40">0,3,6,1,2,4,6,3,2,1</span> </td>
												<td><span class="text-success text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 58.56%</span> </td>
											  </tr>
											  <tr>
												<td>4</td>
												<td>Down Coat</td>
												<td><span class="peity-bar" data-width="90" data-peity='{ "fill": ["#ed6f56"], "stroke":["#ed6f56"]}' data-height="40">0,3,6,4,5,4,7,3,4,2</span> </td>
												<td><span class="text-info text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 35.76%</span> </td>
											  </tr>
											</tbody>
										  </table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Table Hover -->
				</div>
				
				<div class="row">
					
					<!-- Bordered Table -->
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Bordered Table</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="text-muted">Add class <code>table-bordered</code> in table tag for borders on all sides of the
										  table and cells.</p>
									<div class="table-wrap mt-40">
										<div class="table-responsive">
										  <table class="table table-hover table-bordered mb-0">
											<thead>
											  <tr>
												<th>Task</th>
												<th>Progress</th>
												<th>Deadline</th>
												<th class="text-nowrap">Action</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>Lunar probe project</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-danger" style="width: 35%"></div>
												  </div></td>
												<td>May 15, 2015</td>
												<td class="text-nowrap"><a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a> </td>
											  </tr>
											  <tr>
												<td>Dream successful plan</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
												  </div></td>
												<td>July 1, 2015</td>
												<td class="text-nowrap"><a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a> </td>
											  </tr>
											  <tr>
												<td>Office automatization</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-success" style="width: 100%"></div>
												  </div></td>
												<td>Apr 12, 2015</td>
												<td class="text-nowrap"><a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a> </td>
											  </tr>
											  <tr>
												<td>The sun climbing plan</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-primary" style="width: 70%"></div>
												  </div></td>
												<td>Aug 9, 2015</td>
												<td class="text-nowrap"><a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a> </td>
											  </tr>
											  <tr>
												<td>Open strategy</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-primary" style="width: 85%"></div>
												  </div></td>
												<td>Apr 2, 2015</td>
												<td class="text-nowrap"><a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a> </td>
											  </tr>
											  <tr>
												<td>Tantas earum numeris</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
												  </div></td>
												<td>July 11, 2015</td>
												<td class="text-nowrap"><a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a> </td>
											  </tr>
											</tbody>
										  </table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Bordered Table -->
					
				</div>
				
				<div class="row">
					
					<!-- Bordered Table -->
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">striped Table</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="text-muted">Add class <code>table-striped</code> in table tag.</p>
									<div class="table-wrap mt-40">
										<div class="table-responsive">
										  <table class="table table-striped mb-0">
											<thead>
											  <tr>
												<th>Task</th>
												<th>Progress</th>
												<th>Deadline</th>
												<th class="text-nowrap">Action</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>Lunar probe project</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-danger" style="width: 35%"></div>
												  </div></td>
												<td>May 15, 2015</td>
												<td class="text-nowrap"><a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a> </td>
											  </tr>
											  <tr>
												<td>Dream successful plan</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
												  </div></td>
												<td>July 1, 2015</td>
												<td class="text-nowrap"><a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a> </td>
											  </tr>
											  <tr>
												<td>Office automatization</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-success" style="width: 100%"></div>
												  </div></td>
												<td>Apr 12, 2015</td>
												<td class="text-nowrap"><a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a> </td>
											  </tr>
											  <tr>
												<td>The sun climbing plan</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-primary" style="width: 70%"></div>
												  </div></td>
												<td>Aug 9, 2015</td>
												<td class="text-nowrap"><a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a> </td>
											  </tr>
											  <tr>
												<td>Open strategy</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-primary" style="width: 85%"></div>
												  </div></td>
												<td>Apr 2, 2015</td>
												<td class="text-nowrap"><a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a> </td>
											  </tr>
											  <tr>
												<td>Tantas earum numeris</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
												  </div></td>
												<td>July 11, 2015</td>
												<td class="text-nowrap"><a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a> </td>
											  </tr>
											</tbody>
										  </table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Bordered Table -->
					
				</div>
			
				<div class="row">
					<!-- Responsive Table -->
					<div class="col-lg-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Responsive Table </h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="text-muted">Create responsive tables by wrapping any <code>table</code> in <code>table-responsive </code> class.</p>	
									<div class="table-wrap mt-40">
										<div class="table-responsive">
											<table class="table mb-0">
												<thead>
												  <tr>
													<th>Invoice</th>
													<th>User</th>
													<th>Date</th>
													<th>Amount</th>
													<th>Status</th>
													<th>Country</th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td><a href="javascript:void(0)">Order #26589</a></td>
													<td>Herman Beck</td>
													<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2016</span> </td>
													<td>$45.00</td>
													<td><div class="label label-table label-success">Paid</div></td>
													<td>EN</td>
												  </tr>
												  <tr>
													<td><a href="javascript:void(0)">Order #58746</a></td>
													<td>Mary Adams</td>
													<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2016</span> </td>
													<td>$245.30</td>
													<td><div class="label label-table label-danger">Shipped</div></td>
													<td>CN</td>
												  </tr>
												  <tr>
													<td><a href="javascript:void(0)">Order #98458</a></td>
													<td>Caleb Richards</td>
													<td><span class="text-muted"><i class="fa fa-clock-o"></i> May 18, 2016</span> </td>
													<td>$38.00</td>
													<td><div class="label label-table label-info">Shipped</div></td>
													<td>AU</td>
												  </tr>
												  <tr>
													<td><a href="javascript:void(0)">Order #32658</a></td>
													<td>June Lane</td>
													<td><span class="text-muted"><i class="fa fa-clock-o"></i> Apr 28, 2016</span> </td>
													<td>$77.99</td>
													<td><div class="label label-table label-success">Paid</div></td>
													<td>FR</td>
												  </tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Responsive Table -->
				</div>
				
				<div class="row">
					<!-- Contextual Classes -->
					<div class="col-lg-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Contextual Classes </h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="text-muted">Use classes <code>( .active, .success, .info, .warning, .danger )</code> to color table rows or individual cells</p>
									<div class="table-wrap mt-40">
										<div class="table-responsive">
											<table class="table mb-0">
											  <thead>
												<tr>
												  <th>#</th>
												  <th>Column heading</th>
												  <th>Column heading</th>
												  <th>Column heading</th>
												</tr>
											  </thead>
											  <tbody>
												<tr class="active">
												  <th scope="row">1</th>
												  <td>Column content</td>
												  <td>Column content</td>
												  <td>Column content</td>
												</tr>
												<tr class="success">
												  <th scope="row">2</th>
												  <td>Column content</td>
												  <td>Column content</td>
												  <td>Column content</td>
												</tr>
												<tr class="info">
												  <th scope="row">3</th>
												  <td>Column content</td>
												  <td>Column content</td>
												  <td>Column content</td>
												</tr>
												<tr class="warning">
												  <th scope="row">4</th>
												  <td>Column content</td>
												  <td>Column content</td>
												  <td>Column content</td>
												</tr>
												<tr class="danger">
												  <th scope="row">5</th>
												  <td>Column content</td>
												  <td>Column content</td>
												  <td>Column content</td>
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
				<!-- /Contextual Classes -->
				
				<div class="row">
					<!-- Basic Table -->
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Table style 1</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="text-muted">Create style tables by wrapping any table with class <code>table  table-striped</code> in <code>color-bg-table</code> class.</p>
									<div class="table-wrap mt-40">
										<div class="table-responsive">
											<table class="table  table-striped mb-0">
												<thead>
												  <tr>
													<th>#</th>
													<th>First Name</th>
													<th>Last Name</th>
													<th>Username</th>
													<th>Role</th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>1</td>
													<td>Jens</td>
													<td>Brincker</td>
													<td>Brincker123</td>
													<td><span class="label label-danger">admin</span> </td>
												  </tr>
												  <tr>
													<td>2</td>
													<td>Mark</td>
													<td>Hay</td>
													<td>Hay123</td>
													<td><span class="label label-info">member</span> </td>
												  </tr>
												  <tr>
													<td>3</td>
													<td>Anthony</td>
													<td>Davie</td>
													<td>Davie123</td>
													<td><span class="label label-warning">developer</span> </td>
												  </tr>
												  <tr>
													<td>4</td>
													<td>David</td>
													<td>Perry</td>
													<td>Perry123</td>
													<td><span class="label label-success">supporter</span> </td>
												  </tr>
												  <tr>
													<td>5</td>
													<td>Anthony</td>
													<td>Davie</td>
													<td>Davie123</td>
													<td><span class="label label-info">member</span> </td>
												  </tr>
												  <tr>
													<td>6</td>
													<td>Alan</td>
													<td>Gilchrist</td>
													<td>Gilchrist123</td>
													<td><span class="label label-success">supporter</span> </td>
												  </tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Basic Table -->
				</div>
				
				<div class="row">
					<!-- Basic Table -->
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Table style 2</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="text-muted">Create style tables by wrapping any table with class <code>table  table-striped table-bordered</code> in <code>color-bg-table</code> class.</p>
									
									<div class="table-wrap mt-40">
										<div class="table-responsive">
											<table class="table table-striped table-bordered mb-0">
												<thead>
												  <tr>
													<th>#</th>
													<th>First Name</th>
													<th>Last Name</th>
													<th>Username</th>
													<th>Role</th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>1</td>
													<td>Jens</td>
													<td>Brincker</td>
													<td>Brincker123</td>
													<td><span class="label label-danger">admin</span> </td>
												  </tr>
												  <tr>
													<td>2</td>
													<td>Mark</td>
													<td>Hay</td>
													<td>Hay123</td>
													<td><span class="label label-info">member</span> </td>
												  </tr>
												  <tr>
													<td>3</td>
													<td>Anthony</td>
													<td>Davie</td>
													<td>Davie123</td>
													<td><span class="label label-warning">developer</span> </td>
												  </tr>
												  <tr>
													<td>4</td>
													<td>David</td>
													<td>Perry</td>
													<td>Perry123</td>
													<td><span class="label label-success">supporter</span> </td>
												  </tr>
												  <tr>
													<td>5</td>
													<td>Anthony</td>
													<td>Davie</td>
													<td>Davie123</td>
													<td><span class="label label-info">member</span> </td>
												  </tr>
												  <tr>
													<td>6</td>
													<td>Alan</td>
													<td>Gilchrist</td>
													<td>Gilchrist123</td>
													<td><span class="label label-success">supporter</span> </td>
												  </tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Basic Table -->
				</div>
				
@endsection

@section('js')
	<!-- Piety JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/peity/jquery.peity.min.js')}}"></script>
	<script src="{{asset('assets/admin/dist/js/peity-data.js')}}"></script>

@endsection
