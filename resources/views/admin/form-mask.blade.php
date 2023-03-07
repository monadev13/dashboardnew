@extends('layouts.master')
  @section('title')
  e-chart
  @endsection

  @section('css')
  <link href="{{asset('assets/admin/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

  @endsection
@section('content')

					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">form mask</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.html">Dashboard</a></li>
								<li><a href="#"><span>forms</span></a></li>
								<li class="active"><span>form-mask</span></li>
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
										<h6 class="panel-title txt-dark">Form mask</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> Use <code>data-mask</code> to the input element.</p>
										<div class="row mt-40">
											<div class="col-md-12">
												<div class="form-wrap">
													<form action="#">
														<div class="form-group">
															<label class="control-label mb-10">Phone</label>
															<input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control">
															<span class="text-muted">(999) 999-9999</span> 
														</div>
														<div class="form-group">
															<label class="control-label mb-10">Date</label>
															<input type="text" placeholder="" data-mask="99/99/9999" class="form-control">
															<span class="text-muted">dd/mm/yyyy</span> 
														</div>
														<div class="form-group">
															<label class="control-label mb-10">SSN field 1</label>
															<input type="text" placeholder="" data-mask="999-99-9999" class="form-control">
															<span class="text-muted">e.g "999-99-9999"</span> 
														</div>
														<div class="form-group">
															<label class="control-label mb-10">Phone field + ext.</label>
															<input type="text" placeholder="" data-mask="+40 999 999 999" class="form-control">
															<span class="text-muted">+40 999 999 999</span> 
														</div>
														<div class="form-group">
															<label class="control-label mb-10">Product Key</label>
															<input type="text" placeholder="" data-mask="a*-999-a999" class="form-control">
															<span class="text-muted">e.g a*-999-a999</span> 
														</div>
														<div class="form-group">
															<label class="control-label mb-10">Currency</label>
															<input type="text" placeholder="" data-mask="$ 999,999,999.99" class="form-control">
															<span class="text-muted">$ 999,999,999.99</span> 
														</div>
														<div class="form-group">
															<label class="control-label mb-10">Date 2</label>
															<input type="text" placeholder="" data-mask="99-99-9999" class="form-control">
															<span class="text-muted">dd-mm-yyyy</span> 
														</div>
														<div class="form-group">
															<label class="control-label mb-10">Eye Script</label>
															<input type="text" placeholder="" data-mask="~9.99 ~9.99 999" class="form-control">
															<span class="text-muted">~9.99 ~9.99 999</span> 
														</div>
														<div class="form-group">
															<label class="control-label mb-10">Percent</label>
															<input type="text" placeholder="" data-mask="99%" class="form-control">
															<span class="text-muted">e.g "99%"</span> 
														</div>
														<div class="form-group mb-0">
															<label class="control-label mb-10">Pc Ip</label>
															<input type="text" placeholder="" data-mask="999.999.999.9999" class="form-control">
															<span class="text-muted">e.g "999.999.999.9999"</span> 
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
		