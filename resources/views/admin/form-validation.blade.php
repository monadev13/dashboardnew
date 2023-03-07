@extends('layouts.master')
  @section('title')
  e-chart
  @endsection

  @section('css')
  <link href="{{asset('assets/admin/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

  @endsection
@section('content')

					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">form validation</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.html">Dashboard</a></li>
								<li><a href="#"><span>forms</span></a></li>
								<li class="active"><span>form-validation</span></li>
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
										<h6 class="panel-title txt-dark">Form Validation</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<form data-toggle="validator" role="form">
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Name</label>
															<input type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required>
														</div>
														<div class="form-group has-feedback">
															<label for="inputTwitter" class="control-label mb-10">Twitter</label>
															<div class="input-group">
																<span class="input-group-addon">@</span>
																<input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="1000hz" required>
																<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
															</div>
															
															<div class="help-block with-errors">Hey look, this one has feedback icons!</div>
														</div>
														<div class="form-group">
															<label for="inputEmail" class="control-label mb-10">Email</label>
															<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
															<div class="help-block with-errors"></div>
														</div>
														<div class="form-group">
															<label for="inputPassword" class="control-label mb-10">Password</label>
															<div class="row">
																<div class="form-group col-sm-12">
																	<input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
																	<div class="help-block">Minimum of 6 characters</div>
																</div>
																<div class="form-group col-sm-12">
																	<input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
																	<div class="help-block with-errors"></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="radio">
															  <input type="radio" name="underwear" id="box" required>
															  <label for="box"> Boxers </label>
															</div>
															<div class="radio">
															  <input type="radio" name="underwear" id="bri" required>
															  <label for="bri"> Briefs </label>
															</div>
														</div>
														<div class="form-group">
															<div class="checkbox">
																<input type="checkbox" id="terms" data-error="Before you check yourself" required>
																<label for="terms" >Check yourself</label>
																<div class="help-block with-errors"></div>
															</div>
														</div>
														<div class="form-group mb-0">
															<button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>
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
				</div>
				
				@endsection
				@section('js') 	
		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('assets/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/admin/vendors/bower_components/bootstrap-validator/dist/validator.min.js')}}"></script>
		@endsection
		