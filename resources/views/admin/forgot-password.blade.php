  @section('title')
  e-chart
  @endsection
    <!-- vector map CSS -->
		<link href="{{asset('assets/admin/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  @section('css')
  @endsection
@section('content')

		
		
		
		
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper  pa-0">
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="sp-logo-wrap text-center pa-0 mb-30">
											<a href="index.html">
												<img class="brand-img mr-10" src="{{asset('assets/admin/img/logo.png" alt="brand"/>
												<span class="brand-text">Droopy</span>
											</a>
										</div>
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Need help with your password?</h3>
											<h6 class="text-center txt-grey nonecase-font">Enter the email you use for Droopy, and we’ll help you create a new password.</h6>
										</div>	
										<div class="form-wrap">
											<form action="#">
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
													<input type="email" class="form-control" required="" id="exampleInputEmail_2" placeholder="Enter email">
												</div>
												
												<div class="form-group text-center">
													<button type="submit" class="btn btn-success btn-rounded">Reset</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
    @endsection
@section('js')  
		<!-- jQuery -->
		<script src="{{asset('assets/admin/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('assets/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/admin/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="{{asset('assets/admin/dist/js/jquery.slimscroll.js')}}"></script>
		
		<!-- Init JavaScript -->
		<script src="{{asset('assets/admin/dist/js/init.js')}}"></script>
    @endsection