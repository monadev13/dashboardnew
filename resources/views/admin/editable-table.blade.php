@extends('layouts.master')
  @section('title')
  e-chart
  @endsection
    <!-- Data table CSS -->
	<link href="{{asset('assets/admin/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
  @section('css')
  @endsection
@section('content')

				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Editable table</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>table</span></a></li>
						<li class="active"><span>editable table</span></li>
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
									<h6 class="panel-title txt-dark">simple editable table</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="edit_datable_1" class="table  table-bordered table-striped m-b-0">
												<thead>
													<tr>
													  <th>Name</th>
													  <th>Cost</th>
													  <th>Profit</th>
													  <th>Fun</th>
													</tr>
												</thead>
												<tbody>
													<tr>
													  <td>Car</td>
													  <td>100</td>
													  <td>200</td>
													  <td>0</td>
													</tr>
													<tr>
													  <td>Bike</td>
													  <td>330</td>
													  <td>240</td>
													  <td>1</td>
													</tr>
													<tr>
													  <td>Plane</td>
													  <td>430</td>
													  <td>540</td>
													  <td>3</td>
													</tr>
													<tr>
													  <td>Yacht</td>
													  <td>100</td>
													  <td>200</td>
													  <td>0</td>
													</tr>
													<tr>
													  <td>Segway</td>
													  <td>330</td>
													  <td>240</td>
													  <td>1</td>
													</tr>
													</tbody>
													<tfoot>
													<tr>
													  <th><strong>TOTAL</strong></th>
													  <th></th>
													  <th></th>
													  <th></th>
													</tr>
												</tfoot>
											</table>
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
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">editable table with datatable</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="text-muted">Editable table with fixed constraint.</p>
									<div class="table-wrap mt-40">
										<div class="table-responsive">
											<table id="edit_datable_2" class="table table-hover display mb-30" >
												<thead>
													<tr>
														<th>Name</th>
														<th>Position</th>
														<th>Salary</th>
														<th>Office</th>
														<th>Extn.</th>
														<th>E-mail</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>$320,800</td>
														<td>Edinburgh</td>
														<td>5421</td>
														<td>t.nixon@example.com</td>
													</tr>
													<tr>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>$170,750</td>
														<td>Tokyo</td>
														<td>8422</td>
														<td>g.winters@example.com</td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>$86,000</td>
														<td>San Francisco</td>
														<td>1562</td>
														<td>a.cox@example.com</td>
													</tr>
													<tr>
														<td>Cedric Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>$433,060</td>
														<td>Edinburgh</td>
														<td>6224</td>
														<td>c.kelly@example.com</td>
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
	<script src="{{asset('assets/admin/vendors/bower_components/editable-table/mindmup-editabletable.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/bower_components/editable-table/numeric-input-example.js')}}"></script>
	<script src="{{asset('assets/admin/dist/js/editable-table-data.js')}}"></script>
  @endsection
	