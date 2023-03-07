@extends('layouts.master')
  @section('title')
    contact-card
  @endsection

  @section('css')
  <!-- switchery CSS -->
  <link href="{{asset('assets/admin/vendors/bower_components/switchery/dist/switchery.min.css')}}" rel="stylesheet" type="text/css"/>

  @endsection
@section('content')
		
		
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">contact cards</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.html">Dashboard</a></li>
								<li><a href="#"><span>apps</span></a></li>
								<li class="active"><span>contact cards</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-danger contact-card card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<div class="pull-left user-img-wrap mr-15">
											<img class="card-user-img img-circle pull-left" src="../img/user.png" alt="user"/>
										</div>
										<div class="pull-left user-detail-wrap">	
											<span class="block card-user-name">
												Clay Masse
											</span>
											<span class="block card-user-desn">
												designer
											</span>
										</div>
									</div>
									<div class="pull-right">
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-edit txt-light"></i>
										</a>
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-delete txt-light"></i>
										</a>
										<div class="pull-left inline-block dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert txt-light"></i></a>
											<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Full Info</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Send Message</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Follow</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body row">
										<div class="user-others-details pl-15 pr-15">
											<div class="mb-15">
												<i class="zmdi zmdi-email-open inline-block mr-10"></i>
												<span class="inline-block txt-dark">markh@example.com</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-smartphone inline-block mr-10"></i>
												<span class="inline-block txt-dark">+01234567890</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-phone inline-block mr-10"></i>
												<span class="inline-block txt-dark">1234567890</span>
											</div>
											<div>	
												<i class="zmdi zmdi zmdi-skype inline-block mr-10"></i>
												<span class="inline-block txt-dark">jberincker</span>
											</div>
										</div>
										<hr class="light-grey-hr mt-20 mb-20"/>
										<div class="emp-detail pl-15 pr-15">
											<div class="mb-5">
												<span class="inline-block capitalize-font mr-5">joininig date:</span>
												<span class="txt-dark">12-10-2014</span>
											</div>
											<div>
												<span class="inline-block capitalize-font mr-5">salery:</span>
												<span class="txt-dark">$12000</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-success contact-card card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<div class="pull-left user-img-wrap mr-15">
											<img class="card-user-img img-circle pull-left" src="../img/user1.png" alt="user"/>
										</div>
										<div class="pull-left user-detail-wrap">	
											<span class="block card-user-name">
												Evie Ono
											</span>
											<span class="block card-user-desn">
												developer
											</span>
										</div>
									</div>
									<div class="pull-right">
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-edit txt-light"></i>
										</a>
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-delete txt-light"></i>
										</a>
										<div class="pull-left inline-block dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert txt-light"></i></a>
											<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Full Info</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Send Message</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Follow</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body row">
										<div class="user-others-details pl-15 pr-15">
											<div class="mb-15">
												<i class="zmdi zmdi-email-open inline-block mr-10"></i>
												<span class="inline-block txt-dark">markh@example.com</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-smartphone inline-block mr-10"></i>
												<span class="inline-block txt-dark">+01234567890</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-phone inline-block mr-10"></i>
												<span class="inline-block txt-dark">1234567890</span>
											</div>
											<div>	
												<i class="zmdi zmdi zmdi-skype inline-block mr-10"></i>
												<span class="inline-block txt-dark">jberincker</span>
											</div>
										</div>
										<hr class="light-grey-hr mt-20 mb-20"/>
										<div class="emp-detail pl-15 pr-15">
											<div class="mb-5">
												<span class="inline-block capitalize-font mr-5">joininig date:</span>
												<span class="txt-dark">02-10-2014</span>
											</div>
											<div>
												<span class="inline-block capitalize-font mr-5">salery:</span>
												<span class="txt-dark">$14000</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-warning contact-card card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<div class="pull-left user-img-wrap mr-15">
											<img class="card-user-img img-circle pull-left" src="../img/user4.png" alt="user"/>
										</div>
										<div class="pull-left user-detail-wrap">	
											<span class="block card-user-name">
												Madalyn Rascon
											</span>
											<span class="block card-user-desn">
												designer
											</span>
										</div>
									</div>
									<div class="pull-right">
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-edit txt-light"></i>
										</a>
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-delete txt-light"></i>
										</a>
										<div class="pull-left inline-block dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert txt-light"></i></a>
											<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Full Info</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Send Message</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Follow</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body row">
										<div class="user-others-details pl-15 pr-15">
											<div class="mb-15">
												<i class="zmdi zmdi-email-open inline-block mr-10"></i>
												<span class="inline-block txt-dark">markh@example.com</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-smartphone inline-block mr-10"></i>
												<span class="inline-block txt-dark">+01234567890</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-phone inline-block mr-10"></i>
												<span class="inline-block txt-dark">1234567890</span>
											</div>
											<div>	
												<i class="zmdi zmdi zmdi-skype inline-block mr-10"></i>
												<span class="inline-block txt-dark">jberincker</span>
											</div>
										</div>
										<hr class="light-grey-hr mt-20 mb-20"/>
										<div class="emp-detail pl-15 pr-15">
											<div class="mb-5">
												<span class="inline-block capitalize-font mr-5">joininig date:</span>
												<span class="txt-dark">10-10-2016</span>
											</div>
											<div>
												<span class="inline-block capitalize-font mr-5">salery:</span>
												<span class="txt-dark">$10000</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-primary contact-card card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<div class="pull-left user-img-wrap mr-15">
											<img class="card-user-img img-circle pull-left" src="../img/user2.png" alt="user"/>
										</div>
										<div class="pull-left user-detail-wrap">	
											<span class="block card-user-name">
												Mitsuko Heid
											</span>
											<span class="block card-user-desn">
												designer
											</span>
										</div>
									</div>
									<div class="pull-right">
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-edit txt-light"></i>
										</a>
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-delete txt-light"></i>
										</a>
										<div class="pull-left inline-block dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert txt-light"></i></a>
											<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Full Info</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Send Message</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Follow</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body row">
										<div class="user-others-details pl-15 pr-15">
											<div class="mb-15">
												<i class="zmdi zmdi-email-open inline-block mr-10"></i>
												<span class="inline-block txt-dark">markh@example.com</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-smartphone inline-block mr-10"></i>
												<span class="inline-block txt-dark">+01234567890</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-phone inline-block mr-10"></i>
												<span class="inline-block txt-dark">1234567890</span>
											</div>
											<div>	
												<i class="zmdi zmdi zmdi-skype inline-block mr-10"></i>
												<span class="inline-block txt-dark">jberincker</span>
											</div>
										</div>
										<hr class="light-grey-hr mt-20 mb-20"/>
										<div class="emp-detail pl-15 pr-15">
											<div class="mb-5">
												<span class="inline-block capitalize-font mr-5">joininig date:</span>
												<span class="txt-dark">12-11-2014</span>
											</div>
											<div>
												<span class="inline-block capitalize-font mr-5">salery:</span>
												<span class="txt-dark">$19000</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-info contact-card card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<div class="pull-left user-img-wrap mr-15">
											<img class="card-user-img img-circle pull-left" src="../img/user4.png" alt="user"/>
										</div>
										<div class="pull-left user-detail-wrap">	
											<span class="block card-user-name">
												Ezequiel Merideth
											</span>
											<span class="block card-user-desn">
												designer
											</span>
										</div>
									</div>
									<div class="pull-right">
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-edit txt-light"></i>
										</a>
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-delete txt-light"></i>
										</a>
										<div class="pull-left inline-block dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert txt-light"></i></a>
											<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Full Info</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Send Message</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Follow</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body row">
										<div class="user-others-details pl-15 pr-15">
											<div class="mb-15">
												<i class="zmdi zmdi-email-open inline-block mr-10"></i>
												<span class="inline-block txt-dark">markh@example.com</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-smartphone inline-block mr-10"></i>
												<span class="inline-block txt-dark">+01234567890</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-phone inline-block mr-10"></i>
												<span class="inline-block txt-dark">1234567890</span>
											</div>
											<div>	
												<i class="zmdi zmdi zmdi-skype inline-block mr-10"></i>
												<span class="inline-block txt-dark">jberincker</span>
											</div>
										</div>
										<hr class="light-grey-hr mt-20 mb-20"/>
										<div class="emp-detail pl-15 pr-15">
											<div class="mb-5">
												<span class="inline-block capitalize-font mr-5">joininig date:</span>
												<span class="txt-dark">12-10-2011</span>
											</div>
											<div>
												<span class="inline-block capitalize-font mr-5">salery:</span>
												<span class="txt-dark">$17500</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-danger contact-card card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<div class="pull-left user-img-wrap mr-15">
											<img class="card-user-img img-circle pull-left" src="../img/user2.png" alt="user"/>
										</div>
										<div class="pull-left user-detail-wrap">	
											<span class="block card-user-name">
												Jonnie Metoyer
											</span>
											<span class="block card-user-desn">
												developer
											</span>
										</div>
									</div>
									<div class="pull-right">
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-edit txt-light"></i>
										</a>
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-delete txt-light"></i>
										</a>
										<div class="pull-left inline-block dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert txt-light"></i></a>
											<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Full Info</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Send Message</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Follow</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body row">
										<div class="user-others-details pl-15 pr-15">
											<div class="mb-15">
												<i class="zmdi zmdi-email-open inline-block mr-10"></i>
												<span class="inline-block txt-dark">markh@example.com</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-smartphone inline-block mr-10"></i>
												<span class="inline-block txt-dark">+01234567890</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-phone inline-block mr-10"></i>
												<span class="inline-block txt-dark">1234567890</span>
											</div>
											<div>	
												<i class="zmdi zmdi zmdi-skype inline-block mr-10"></i>
												<span class="inline-block txt-dark">jberincker</span>
											</div>
										</div>
										<hr class="light-grey-hr mt-20 mb-20"/>
										<div class="emp-detail pl-15 pr-15">
											<div class="mb-5">
												<span class="inline-block capitalize-font mr-5">joininig date:</span>
												<span class="txt-dark">12-10-2016</span>
											</div>
											<div>
												<span class="inline-block capitalize-font mr-5">salery:</span>
												<span class="txt-dark">$12000</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-warning contact-card card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<div class="pull-left user-img-wrap mr-15">
											<img class="card-user-img img-circle pull-left" src="../img/user.png" alt="user"/>
										</div>
										<div class="pull-left user-detail-wrap">	
											<span class="block card-user-name">
												Angelic Lauver
											</span>
											<span class="block card-user-desn">
												designer
											</span>
										</div>
									</div>
									<div class="pull-right">
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-edit txt-light"></i>
										</a>
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-delete txt-light"></i>
										</a>
										<div class="pull-left inline-block dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert txt-light"></i></a>
											<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Full Info</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Send Message</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Follow</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body row">
										<div class="user-others-details pl-15 pr-15">
											<div class="mb-15">
												<i class="zmdi zmdi-email-open inline-block mr-10"></i>
												<span class="inline-block txt-dark">markh@example.com</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-smartphone inline-block mr-10"></i>
												<span class="inline-block txt-dark">+01234567890</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-phone inline-block mr-10"></i>
												<span class="inline-block txt-dark">1234567890</span>
											</div>
											<div>	
												<i class="zmdi zmdi zmdi-skype inline-block mr-10"></i>
												<span class="inline-block txt-dark">jberincker</span>
											</div>
										</div>
										<hr class="light-grey-hr mt-20 mb-20"/>
										<div class="emp-detail pl-15 pr-15">
											<div class="mb-5">
												<span class="inline-block capitalize-font mr-5">joininig date:</span>
												<span class="txt-dark">12-10-2016</span>
											</div>
											<div>
												<span class="inline-block capitalize-font mr-5">salery:</span>
												<span class="txt-dark">$12000</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-success contact-card card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<div class="pull-left user-img-wrap mr-15">
											<img class="card-user-img img-circle pull-left" src="../img/user2.png" alt="user"/>
										</div>
										<div class="pull-left user-detail-wrap">	
											<span class="block card-user-name">
												Priscila Sandy
											</span>
											<span class="block card-user-desn">
												designer
											</span>
										</div>
									</div>
									<div class="pull-right">
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-edit txt-light"></i>
										</a>
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-delete txt-light"></i>
										</a>
										<div class="pull-left inline-block dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert txt-light"></i></a>
											<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Full Info</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Send Message</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Follow</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body row">
										<div class="user-others-details pl-15 pr-15">
											<div class="mb-15">
												<i class="zmdi zmdi-email-open inline-block mr-10"></i>
												<span class="inline-block txt-dark">markh@example.com</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-smartphone inline-block mr-10"></i>
												<span class="inline-block txt-dark">+01234567890</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-phone inline-block mr-10"></i>
												<span class="inline-block txt-dark">1234567890</span>
											</div>
											<div>	
												<i class="zmdi zmdi zmdi-skype inline-block mr-10"></i>
												<span class="inline-block txt-dark">jberincker</span>
											</div>
										</div>
										<hr class="light-grey-hr mt-20 mb-20"/>
										<div class="emp-detail pl-15 pr-15">
											<div class="mb-5">
												<span class="inline-block capitalize-font mr-5">joininig date:</span>
												<span class="txt-dark">12-10-2014</span>
											</div>
											<div>
												<span class="inline-block capitalize-font mr-5">salery:</span>
												<span class="txt-dark">$12000</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-primary contact-card card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<div class="pull-left user-img-wrap mr-15">
											<img class="card-user-img img-circle pull-left" src="../img/user4.png" alt="user"/>
										</div>
										<div class="pull-left user-detail-wrap">	
											<span class="block card-user-name">
												Linda Stack
											</span>
											<span class="block card-user-desn">
												designer
											</span>
										</div>
									</div>
									<div class="pull-right">
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-edit txt-light"></i>
										</a>
										<a class="pull-left inline-block mr-15" href="#">
											<i class="zmdi zmdi-delete txt-light"></i>
										</a>
										<div class="pull-left inline-block dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert txt-light"></i></a>
											<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Full Info</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Send Message</a></li>
												<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Follow</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body row">
										<div class="user-others-details pl-15 pr-15">
											<div class="mb-15">
												<i class="zmdi zmdi-email-open inline-block mr-10"></i>
												<span class="inline-block txt-dark">markh@example.com</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-smartphone inline-block mr-10"></i>
												<span class="inline-block txt-dark">+01234567890</span>
											</div>
											<div class="mb-15">
												<i class="zmdi zmdi-phone inline-block mr-10"></i>
												<span class="inline-block txt-dark">1234567890</span>
											</div>
											<div>	
												<i class="zmdi zmdi zmdi-skype inline-block mr-10"></i>
												<span class="inline-block txt-dark">jberincker</span>
											</div>
										</div>
										<hr class="light-grey-hr mt-20 mb-20"/>
										<div class="emp-detail pl-15 pr-15">
											<div class="mb-5">
												<span class="inline-block capitalize-font mr-5">joininig date:</span>
												<span class="txt-dark">12-10-2014</span>
											</div>
											<div>
												<span class="inline-block capitalize-font mr-5">salery:</span>
												<span class="txt-dark">$12800</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<!-- Row -->
          @endsection

@section('js')

	
@endsection
	