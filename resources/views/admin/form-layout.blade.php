@extends('layouts.master')
  @section('title')
  e-chart
  @endsection

  @section('css')
  <link href="{{asset('assets/admin/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

  @endsection
@section('content')

		
	
		
		<div class="wrapper  theme-1-active pimary-color-green">
		

	
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">form layout</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.html">Dashboard</a></li>
								<li><a href="#"><span>form</span></a></li>
								<li class="active"><span>form-layout</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Form with icon</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">User Name</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Username">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputEmail_1">Email address</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																<input type="email" class="form-control" id="exampleInputEmail_1" placeholder="Enter email">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Password</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
																<input type="password" class="form-control" id="exampleInputpwd_1" placeholder="Enter email">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Confirm Password</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
																<input type="password" class="form-control" id="exampleInputpwd_2" placeholder="Enter email">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10">Gender</label>
															<div>
																<div class="radio">
																	<input type="radio" name="radio1" id="radio_1" value="option1" checked="">
																	<label for="radio_1">
																	M
																	</label>
																</div>
																<div class="radio">
																	<input type="radio" name="radio1" id="radio_2" value="option2" checked="">
																	<label for="radio_2">
																	F
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="checkbox checkbox-success">
																<input id="checkbox_1" type="checkbox">
																<label for="checkbox_1"> Remember me </label>
															</div>
														</div>
														<button type="submit" class="btn btn-success mr-10">Submit</button>
														<button type="submit" class="btn btn-default">Cancel</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">form with right icon</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_2">User Name</label>
															<div class="input-group">
																<input type="text" class="form-control" id="exampleInputuname_2" placeholder="Username">
																<div class="input-group-addon"><i class="icon-user"></i></div>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
															<div class="input-group">
																<input type="email" class="form-control" id="exampleInputEmail_2" placeholder="Enter email">
																<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_3">Password</label>
															<div class="input-group">
																<input type="password" class="form-control" id="exampleInputpwd_3" placeholder="Enter pwd">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_42">Confirm Password</label>
															<div class="input-group">
																<input type="password" class="form-control" id="exampleInputpwd_42" placeholder="Enter pwd">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10">Gender</label>
															<div>
																<div class="radio">
																	<input type="radio" name="radio2" id="radio_3" value="option1" checked="">
																	<label for="radio_3">
																	M
																	</label>
																</div>
																<div class="radio">
																	<input type="radio" name="radio2" id="radio_4" value="option2" checked="">
																	<label for="radio_4">
																	F
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="checkbox checkbox-success">
																<input id="checkbox_2" type="checkbox">
																<label for="checkbox_2"> Remember me </label>
															</div>
														</div>
														<div class="form-group mb-0">
															<button type="submit" class="btn btn-success  mr-10">Submit</button>
															<button type="submit" class="btn btn-default  ">Cancel</button>
														</div>
													</form>
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
						<div class="col-md-6">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Horizontal form with icon</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form class="form-horizontal">
														<div class="form-group">
															<label for="exampleInputuname_3" class="col-sm-3 control-label">Username*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<div class="input-group-addon"><i class="icon-user"></i></div>
																	<input type="text" class="form-control" id="exampleInputuname_3" placeholder="Username">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  for="exampleInputEmail_3" class="col-sm-3 control-label">Email*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																	<input type="email" class="form-control" id="exampleInputEmail_3" placeholder="Enter email">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label for="exampleInputweb_31" class="col-sm-3 control-label">Website</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<div class="input-group-addon"><i class="icon-globe"></i></div>
																	<input type="text" class="form-control" id="exampleInputweb_31" placeholder="Enter Website Name">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label for="exampleInputpwd_32" class="col-sm-3 control-label">Password*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<div class="input-group-addon"><i class="icon-lock"></i></div>
																	<input type="password" class="form-control" id="exampleInputpwd_32" placeholder="Enter pwd">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label for="exampleInputpwd_4" class="col-sm-3 control-label">Re Password*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<div class="input-group-addon"><i class="icon-lock"></i></div>
																	<input type="password" class="form-control" id="exampleInputpwd_4" placeholder="Re Enter pwd">
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-sm-offset-3 col-sm-9">
																<div class="checkbox checkbox-success">
																	<input id="checkbox_33" type="checkbox">
																	<label for="checkbox_33">Check me out !</label>
																</div>
															</div>
														</div>
														<div class="form-group mb-0">
															<div class="col-sm-offset-3 col-sm-9">
																<button type="submit" class="btn btn-info ">Sign in</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
						
						<div class="col-md-6">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">horizontal form with right icon</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form class="form-horizontal">
														<div class="form-group">
															<label for="exampleInputuname_4" class="col-sm-3 control-label">Username*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="text" class="form-control" id="exampleInputuname_4" placeholder="Username">
																	<div class="input-group-addon"><i class="icon-user"></i></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label for="exampleInputEmail_4" class="col-sm-3 control-label">Email*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="email" class="form-control" id="exampleInputEmail_4" placeholder="Enter email">
																	<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label for="exampleInputweb_41" class="col-sm-3 control-label">Website</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="text" class="form-control" id="exampleInputweb_41" placeholder="Enter Website Name">
																	<div class="input-group-addon"><i class="icon-globe"></i></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label for="exampleInputpwd_5" class="col-sm-3 control-label">Password*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="password" class="form-control" id="exampleInputpwd_5" placeholder="Enter pwd">
																	<div class="input-group-addon"><i class="icon-lock"></i></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  for="exampleInputpwd_6" class="col-sm-3 control-label">Re Password*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="password" class="form-control" id="exampleInputpwd_6" placeholder="Re Enter pwd">
																	<div class="input-group-addon"><i class="icon-lock"></i></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-sm-offset-3 col-sm-9">
																<div class="checkbox checkbox-success">
																	<input id="checkbox_34" type="checkbox">
																	<label for="checkbox_34">Check me out !</label>
																</div>
															</div>
														</div>
														<div class="form-group mb-0">
															<div class="col-sm-offset-3 col-sm-9">
																<button type="submit" class="btn btn-info ">Sign in</button>
															</div>
														</div>
													</form>
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
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">with two columns</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form action="#">
														<div class="form-body">
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6>
															<hr class="light-grey-hr"/>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">First Name</label>
																		<input type="text" id="firstName" class="form-control" placeholder="John doe">
																		<span class="help-block"> This is inline help </span> 
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group has-error">
																		<label class="control-label mb-10">Last Name</label>
																		<input type="text" id="lastName" class="form-control" placeholder="12n">
																		<span class="help-block"> This field has error. </span> 
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Gender</label>
																		<select class="form-control">
																			<option value="">Male</option>
																			<option value="">Female</option>
																		</select>
																		<span class="help-block"> Select your gender </span> 
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Date of Birth</label>
																		<input type="text" class="form-control" placeholder="dd/mm/yyyy">
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Category</label>
																		<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
																			<option value="Category 1">Category 1</option>
																			<option value="Category 2">Category 2</option>
																			<option value="Category 3">Category 5</option>
																			<option value="Category 4">Category 4</option>
																		</select>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Membership</label>
																		<div class="radio-list">
																			<div class="radio-inline pl-0">
																				<span class="radio radio-info">
																					<input type="radio" name="radio5" id="radio_5" value="option1">
																			<label for="radio_5">Option 1</label>
																			</span>
																			</div>
																			<div class="radio-inline">
																				<span class="radio radio-info">
																					<input type="radio" name="radio5" id="radio_6" value="option2">
																			<label for="radio_6">Option 2 </label>
																			</span>
																			</div>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															
															<div class="seprator-block"></div>
															
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account-box mr-10"></i>address</h6>
															<hr class="light-grey-hr"/>
															<div class="row">
																<div class="col-md-12 ">
																	<div class="form-group">
																		<label class="control-label mb-10">Street</label>
																		<input type="text" class="form-control">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">City</label>
																		<input type="text" class="form-control">
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">State</label>
																		<input type="text" class="form-control">
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Post Code</label>
																		<input type="text" class="form-control">
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Country</label>
																		<select class="form-control">
																			<option>--Select your Country--</option>
																			<option>India</option>
																			<option>Sri Lanka</option>
																			<option>USA</option>
																		</select>
																	</div>
																</div>
																<!--/span-->
															</div>
														</div>
														<div class="form-actions mt-10">
															<button type="submit" class="btn btn-success  mr-10"> Save</button>
															<button type="button" class="btn btn-default">Cancel</button>
														</div>
													</form>
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
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">with two columns horizontal form</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<form action="#" class="form-horizontal">
														<div class="form-body">
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6>
															<hr class="light-grey-hr"/>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">First Name</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control" placeholder="John doe">
																			<span class="help-block"> This is inline help </span> 
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group has-error">
																		<label class="control-label col-md-3">Last Name</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control" placeholder="12n">
																			<span class="help-block"> This field has error. </span> 
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Gender</label>
																		<div class="col-md-9">
																			<select class="form-control">
																				<option value="">Male</option>
																				<option value="">Female</option>
																			</select>
																			<span class="help-block"> Select your gender. </span> 
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Date of Birth</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control" placeholder="dd/mm/yyyy">
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Category</label>
																		<div class="col-md-9">
																			<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
																				<option value="Category 1">Category 1</option>
																				<option value="Category 2">Category 2</option>
																				<option value="Category 3">Category 5</option>
																				<option value="Category 4">Category 4</option>
																			</select>
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Membership</label>
																		<div class="col-md-9">
																			<div class="radio-list">
																				<div class="radio-inline pl-0">
																					<span class="radio radio-info">																					<input type="radio" name="radio7" id="radio_9" value="option1">
																						<label for="radio_9">Option 1</label>
																					</span>
																				</div>
																				<div class="radio-inline pl-0">
																					<span class="radio radio-info">																				<input type="radio" name="radio7" id="radio_10" value="option2">
																						<label for="radio_10">Option 2</label>
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															
															<div class="seprator-block"></div>
															
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account-box mr-10"></i>address</h6>
															<hr class="light-grey-hr"/>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Address 1</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Address 2</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">City</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">State</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Post Code</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Country</label>
																		<div class="col-md-9">
																			<select class="form-control">
																				<option>Country 1</option>
																				<option>Country 2</option>
																			</select>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
														</div>
														<div class="form-actions mt-10">
															<div class="row">
																<div class="col-md-6">
																	<div class="row">
																		<div class="col-md-offset-3 col-md-9">
																			<button type="submit" class="btn btn-success  mr-10">Submit</button>
																			<button type="button" class="btn btn-default">Cancel</button>
																		</div>
																	</div>
																</div>
																<div class="col-md-6"> </div>
															</div>
														</div>
													</form>
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
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Read only</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<form class="form-horizontal" role="form">
														<div class="form-body">
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6>
															<hr class="light-grey-hr"/>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">First Name:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> John </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Last Name:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> Doe </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Gender:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> Male </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Date of Birth:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> 24/05/1990 </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Category:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> Category1 </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Membership:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> Free </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															
															<div class="seprator-block"></div>
															
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account-box mr-10"></i>address</h6>
															<hr class="light-grey-hr"/>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Address:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> 827 Deerfield Ave. 
																			Greenwood</p>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">City:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> Los Angeles </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">State:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> California</p>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Post Code:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> 457890 </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Country:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> USA </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
														</div>
														<div class="form-actions mt-10">
															<div class="row">
																<div class="col-md-6">
																	<div class="row">
																		<div class="col-md-offset-3 col-md-9">
																			<button type="submit" class="btn btn-info btn-icon left-icon  mr-10"> <i class="zmdi zmdi-edit"></i> <span>Edit</span></button>
																			<button type="button" class="btn btn-default">Cancel</button>
																		</div>
																	</div>
																</div>
																<div class="col-md-6"> </div>
															</div>
														</div>
													</form>
												</div>
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
		
		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('assets/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/admin/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
		@endsection	
		