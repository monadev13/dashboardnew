@extends('layouts.master')
  @section('title')
  e-chart
  @endsection

  @section('css')
  <link href="{{asset('assets/admin/vendors/bower_components/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css')}}" rel="stylesheet" />

  @endsection
@section('content')

		

					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">form x-editable</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>forms</span></a></li>
							<li class="active"><span>form x-editable</span></li>
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
										<h6 class="panel-title txt-dark">X -Editable Inline editor</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
												<table style="clear: both" class="table table-bordered table-striped" id="user">
													<tbody>
														<tr>
															<td style="width:35%">Simple text field</td>
															<td style="width:65%"><a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></td>
														</tr>
														<tr>
															<td>Empty text field, required</td>
															<td><a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a></td>
														</tr>
														<tr>
															<td>Select, local array, custom display</td>
															<td><a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a></td>
														</tr>
														<tr>
															<td>Select, error while loading</td>
															<td><a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></td>
														</tr>
														<tr>
															<td>Combodate</td>
															<td><a href="#" id="inline-dob" data-type="combodate" data-value="2015-09-24" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a></td>
														</tr>
														<tr>
															<td>Textarea, buttons below</td>
															<td><a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
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
				
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">X -Editable Popup  editor</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
												<table style="clear: both" class="table table-bordered table-striped" id="user_2">
													<tbody>
														<tr>
															<td style="width:35%">Simple text field</td>
															<td style="width:65%"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></td>
														</tr>
														<tr>
															<td>Empty text field, required</td>
															<td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a></td>
														</tr>
														<tr>
															<td>Select, local array, custom display</td>
															<td><a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a></td>
														</tr>
														<tr>
															<td>Select, error while loading</td>
															<td><a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></td>
														</tr>
														<tr>
															<td>Combodate</td>
															<td><a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a></td>
														</tr>
														<tr>
															<td>Textarea, buttons below</td>
															<td><a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
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
				
				</div>
				@endsection
				@section('js') 
				
		<script type="text/javascript" src="{{asset('assets/admin/vendors/bower_components/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js')}}"></script>
		
		<!-- Form-xeditable Init JavaScript -->
		<script src="{{asset('assets/admin/dist/js/form-xeditable-data.js')}}"></script>
		@endsection
		
