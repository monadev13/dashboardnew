@extends('layouts.master')
  @section('title')
  e-chart
  @endsection

  @section('css')
  @endsection
@section('content')

					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">file manager</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>apps</span></a></li>
							<li class="active"><span>file manager</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view pa-0">
								<div class="panel-wrapper collapse in">
									<div class="panel-body pa-0">
										<div class="">
											<div class="col-lg-3 col-md-4 file-directory pa-0">
												<div class="ibox float-e-margins">
													<div class="ibox-content">
														<div class="file-manager">
															<div class="mt-20 mb-20 ml-15 mr-15">
																<div class="fileupload btn btn-success btn-anim btn-block"><i class="fa fa-upload"></i><span class="btn-text">Upload files</span>
																	<input type="file" class="upload">
																</div>
															</div>
															<div class="pl-15 mb-30">
																<a href="#" class="file-control active">All</a>
																<a href="#" class="file-control">Documents</a>
																<a href="#" class="file-control">Audio</a>
																<a href="#" class="file-control">Images</a>
															</div>	
															
															<h6 class="mb-10 pl-15">Folders</h6>
															<ul class="folder-list mb-30">
																<li class="active"><a href=""><i class="zmdi zmdi-folder"></i> Files</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Pictures</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Web pages</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Illustrations</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Films</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Books</a></li>
															</ul>
															<h6 class="pl-15 mb-10">Tags</h6>
															<ul class="tag-list pl-15 pr-15">
																<li><a href="">Family</a></li>
																<li><a href="">Work</a></li>
																<li><a href="">Home</a></li>
																<li><a href="">Children</a></li>
																<li><a href="">Holidays</a></li>
																<li><a href="">Music</a></li>
																<li><a href="">Photography</a></li>
																<li><a href="">Film</a></li>
															</ul>
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-9 col-md-8 file-sec pt-20">
												<div class="row">
													<div class="col-lg-12">
														<div class="row">
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="icon">
																			<i class="zmdi zmdi-file-text"></i>
																		</div>
																		<div class="file-name">
																			Document_2016.doc
																			<br>
																			<span>Added: Jan 11, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="image" style="background-image:url(../img/gallery/mock1.jpg)">
																		</div>
																		<div class="file-name">
																			Italy street.jpg
																			<br>
																			<span>Added: Jan 6, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="image" style="background-image:url(../img/gallery/mock2.jpg)">
																		</div>
																		<div class="file-name">
																			My feel.png
																			<br>
																			<span>Added: Jan 7, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="icon">
																			<i class="zmdi zmdi-collection-music"></i>
																		</div>
																		<div class="file-name">
																			Michal Jackson.mp3
																			<br>
																			<span>Added: Jan 22, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="image" style="background-image:url(../img/gallery/mock3.jpg)">
																		</div>
																		<div class="file-name">
																			Document_2016.doc
																			<br>
																			<span>Added: Fab 11, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="icon">
																			<i class="img-responsive zmdi zmdi-collection-video"></i>
																		</div>
																		<div class="file-name">
																			Monica's birthday.mpg4
																			<br>
																			<span>Added: Fab 18, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<a href="#">
																	<div class="file">
																		
																		<div class="icon">
																			<i class="zmdi zmdi-chart"></i>
																		</div>
																		<div class="file-name">
																			Annual report 2016.xls
																			<br>
																			<span>Added: Fab 22, 2016</span>
																		</div>
																	</div>
																</a>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="icon">
																			<i class="zmdi zmdi-file-text"></i>
																		</div>
																		<div class="file-name">
																			Document_2016.doc
																			<br>
																			<span>Added: Jan 11, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="image" style="background-image:url(../img/gallery/equal-size/mock6.jpg)">
																		</div>
																		<div class="file-name">
																			Italy street.jpg
																			<br>
																			<span>Added: Jan 6, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="image" style="background-image:url(../img/gallery/equal-size/mock3.jpg)">
																		</div>
																		<div class="file-name">
																			My feel.png
																			<br>
																			<span>Added: Jan 7, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="icon">
																			<i class="zmdi zmdi-collection-music"></i>
																		</div>
																		<div class="file-name">
																			Michal Jackson.mp3
																			<br>
																			<span>Added: Jan 22, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="image" style="background-image:url(../img/gallery/equal-size/mock2.jpg)">
																		</div>
																		<div class="file-name">
																			Document_2016.doc
																			<br>
																			<span>Added: Fab 11, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="icon">
																			<i class="img-responsive zmdi zmdi-collection-video"></i>
																		</div>
																		<div class="file-name">
																			Monica's birthday.mpg4
																			<br>
																			<span>Added: Fab 18, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<a href="#">
																	<div class="file">
																		
																		<div class="icon">
																			<i class="zmdi zmdi-chart"></i>
																		</div>
																		<div class="file-name">
																			Annual report 2016.xls
																			<br>
																			<span>Added: Fab 22, 2016</span>
																		</div>
																	</div>
																</a>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="icon">
																			<i class="zmdi zmdi-file-text"></i>
																		</div>
																		<div class="file-name">
																			Document_2016.doc
																			<br>
																			<span>Added: Jan 11, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="image" style="background-image:url(../img/gallery/mock6.jpg)">
																		</div>
																		<div class="file-name">
																			Italy street.jpg
																			<br>
																			<span>Added: Jan 6, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="image" style="background-image:url(../img/gallery/equal-size/mock5.jpg)">
																		</div>
																		<div class="file-name">
																			My feel.png
																			<br>
																			<span>Added: Jan 7, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="icon">
																			<i class="zmdi zmdi-collection-music"></i>
																		</div>
																		<div class="file-name">
																			Michal Jackson.mp3
																			<br>
																			<span>Added: Jan 22, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="image" style="background-image:url(../img/gallery/equal-size/mock4.jpg)">
																		</div>
																		<div class="file-name">
																			Document_2016.doc
																			<br>
																			<span>Added: Fab 11, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<div class="file">
																	<a href="#">
																		
																		<div class="icon">
																			<i class="img-responsive zmdi zmdi-collection-video"></i>
																		</div>
																		<div class="file-name">
																			Monica's birthday.mpg4
																			<br>
																			<span>Added: Fab 18, 2016</span>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
																<a href="#">
																	<div class="file">
																		
																		<div class="icon">
																			<i class="zmdi zmdi-chart"></i>
																		</div>
																		<div class="file-name">
																			Annual report 2016.xls
																			<br>
																			<span>Added: Fab 22, 2016</span>
																		</div>
																	</div>
																</a>
															</div>
														</div>
													</div>
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
@endsection