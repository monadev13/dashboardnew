@extends('layouts.master')
  @section('title')
  cropperjs
  @endsection

  @section('css')
  <!-- vector map CSS -->
  <link href="{{asset('assets/admin/vendors/bower_components/cropperjs/dist/cropper.min.css')}}" rel="stylesheet" type="text/css"/>
  @endsection
@section('content')

					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Cropper.js</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>forms</span></a></li>
							<li class="active"><span>Cropper.js</span></li>
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
										<h6 class="panel-title txt-dark">Cropper js</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> <code>Cropper.js</code> for croping the image.</p>
										<!-- Row -->
										<div class="row mt-40">
											<div class="col-md-8">
												<!-- <h3 class="page-header">Demo:</h3> -->
												<div class="img-container">
													<img src="../img/cropper.jpg" alt="Picture">
												</div>
											</div>
											<div class="col-md-4">
												<!-- <h3 class="page-header">Preview:</h3> -->
												<div class="docs-preview clearfix">
													<div class="img-preview preview-lg"></div>
													<div class="img-preview preview-md"></div>
													<div class="img-preview preview-sm"></div>
													<div class="img-preview preview-xs"></div>
												</div>
												<!-- <h3 class="page-header">Data:</h3> -->
												<div class="docs-data">
													<div class="input-group ">
														<label class="input-group-addon" for="dataX">X</label>
														<input type="text" class="form-control" id="dataX" placeholder="x">
														<span class="input-group-addon">px</span>
													</div>
													<div class="input-group ">
														<label class="input-group-addon" for="dataY">Y</label>
														<input type="text" class="form-control" id="dataY" placeholder="y">
														<span class="input-group-addon">px</span>
													</div>
													<div class="input-group ">
														<label class="input-group-addon" for="dataWidth">Width</label>
														<input type="text" class="form-control" id="dataWidth" placeholder="width">
														<span class="input-group-addon">px</span>
													</div>
													<div class="input-group ">
														<label class="input-group-addon" for="dataHeight">Height</label>
														<input type="text" class="form-control" id="dataHeight" placeholder="height">
														<span class="input-group-addon">px</span>
													</div>
													<div class="input-group ">
														<label class="input-group-addon" for="dataRotate">Rotate</label>
														<input type="text" class="form-control" id="dataRotate" placeholder="rotate">
														<span class="input-group-addon">deg</span>
													</div>
													<div class="input-group ">
														<label class="input-group-addon" for="dataScaleX">ScaleX</label>
														<input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
													</div>
													<div class="input-group ">
														<label class="input-group-addon" for="dataScaleY">ScaleY</label>
														<input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
													</div>
												</div>
											</div>
										</div>
										<!-- /Row -->
										
										<!-- Row -->
										<div class="row" id="actions">
											<div class="col-md-8 docs-buttons">
												<!-- <h3 class="page-header">Toolbar:</h3> -->
												<div class="btn-group">
													<button type="button" class="btn btn-success" data-method="setDragMode" data-option="move" title="Move">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.setDragMode(&quot;move&quot;)">
													<span class="fa fa-arrows"></span>
													</span>
													</button>
													<button type="button" class="btn btn-success" data-method="setDragMode" data-option="crop" title="Crop">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.setDragMode(&quot;crop&quot;)">
													<span class="fa fa-crop"></span>
													</span>
													</button>
												</div>
												<div class="btn-group">
													<button type="button" class="btn btn-success" data-method="zoom" data-option="0.1" title="Zoom In">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(0.1)">
													<span class="fa fa-search-plus"></span>
													</span>
													</button>
													<button type="button" class="btn btn-success" data-method="zoom" data-option="-0.1" title="Zoom Out">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(-0.1)">
													<span class="fa fa-search-minus"></span>
													</span>
													</button>
												</div>
												<div class="btn-group">
													<button type="button" class="btn btn-success" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(-10, 0)">
													<span class="fa fa-arrow-left"></span>
													</span>
													</button>
													<button type="button" class="btn btn-success" data-method="move" data-option="10" data-second-option="0" title="Move Right">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(10, 0)">
													<span class="fa fa-arrow-right"></span>
													</span>
													</button>
													<button type="button" class="btn btn-success" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(0, -10)">
													<span class="fa fa-arrow-up"></span>
													</span>
													</button>
													<button type="button" class="btn btn-success" data-method="move" data-option="0" data-second-option="10" title="Move Down">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(0, 10)">
													<span class="fa fa-arrow-down"></span>
													</span>
													</button>
												</div>
												<div class="btn-group">
													<button type="button" class="btn btn-success" data-method="rotate" data-option="-45" title="Rotate Left">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotate(-45)">
													<span class="fa fa-rotate-left"></span>
													</span>
													</button>
													<button type="button" class="btn btn-success" data-method="rotate" data-option="45" title="Rotate Right">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotate(45)">
													<span class="fa fa-rotate-right"></span>
													</span>
													</button>
												</div>
												<div class="btn-group">
													<button type="button" class="btn btn-success" data-method="scaleX" data-option="-1" title="Flip Horizontal">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.scaleX(-1)">
													<span class="fa fa-arrows-h"></span>
													</span>
													</button>
													<button type="button" class="btn btn-success" data-method="scaleY" data-option="-1" title="Flip Vertical">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.scaleY(-1)">
													<span class="fa fa-arrows-v"></span>
													</span>
													</button>
												</div>
												<div class="btn-group">
													<button type="button" class="btn btn-success" data-method="crop" title="Crop">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.crop()">
													<span class="fa fa-check"></span>
													</span>
													</button>
													<button type="button" class="btn btn-success" data-method="clear" title="Clear">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.clear()">
													<span class="fa fa-remove"></span>
													</span>
													</button>
												</div>
												<div class="btn-group">
													<button type="button" class="btn btn-success" data-method="disable" title="Disable">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.disable()">
													<span class="fa fa-lock"></span>
													</span>
													</button>
													<button type="button" class="btn btn-success" data-method="enable" title="Enable">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.enable()">
													<span class="fa fa-unlock"></span>
													</span>
													</button>
												</div>
												<div class="btn-group">
													<button type="button" class="btn btn-success" data-method="reset" title="Reset">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.reset()">
													<span class="fa fa-refresh"></span>
													</span>
													</button>
													<label class="btn btn-success btn-upload" for="inputImage" title="Upload image file">
													<input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
													<span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
													<span class="fa fa-upload"></span>
													</span>
													</label>
													<button type="button" class="btn btn-success" data-method="destroy" title="Destroy">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.destroy()">
													<span class="fa fa-power-off"></span>
													</span>
													</button>
												</div>
												<div class="btn-group btn-group-crop">
													<button type="button" class="btn btn-success" data-method="getCroppedCanvas">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCroppedCanvas()">
													Get Cropped Canvas
													</span>
													</button>
													<button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCroppedCanvas({ width: 160, height: 90 })">
													160&times;90
													</span>
													</button>
													<button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
													<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCroppedCanvas({ width: 320, height: 180 })">
													320&times;180
													</span>
													</button>
												</div>
												<!-- Show the cropped image in modal -->
												<div class="modal fade docs-cropped" id="getCroppedCanvasModal" role="dialog" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" tabindex="-1">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																<h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
															</div>
															<div class="modal-body"></div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																<a class="btn btn-success" id="download" href="javascript:void(0);" download="cropped.html">Download</a>
															</div>
														</div>
													</div>
												</div>
												<!-- /.modal -->
												<button type="button" class="btn btn-success" data-method="getData" data-option data-target="#putData">
												<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getData()">
												Get Data
												</span>
												</button>
												<button type="button" class="btn btn-success" data-method="setData" data-target="#putData">
												<span class="docs-tooltip" data-toggle="tooltip" title="cropper.setData(data)">
												Set Data
												</span>
												</button>
												<button type="button" class="btn btn-success" data-method="getContainerData" data-option data-target="#putData">
												<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getContainerData()">
												Get Container Data
												</span>
												</button>
												<button type="button" class="btn btn-success" data-method="getImageData" data-option data-target="#putData">
												<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getImageData()">
												Get Image Data
												</span>
												</button>
												<button type="button" class="btn btn-success" data-method="getCanvasData" data-option data-target="#putData">
												<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCanvasData()">
												Get Canvas Data
												</span>
												</button>
												<button type="button" class="btn btn-success" data-method="setCanvasData" data-target="#putData">
												<span class="docs-tooltip" data-toggle="tooltip" title="cropper.setCanvasData(data)">
												Set Canvas Data
												</span>
												</button>
												<button type="button" class="btn btn-success" data-method="getCropBoxData" data-option data-target="#putData">
												<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCropBoxData()">
												Get Crop Box Data
												</span>
												</button>
												<button type="button" class="btn btn-success" data-method="setCropBoxData" data-target="#putData">
												<span class="docs-tooltip" data-toggle="tooltip" title="cropper.setCropBoxData(data)">
												Set Crop Box Data
												</span>
												</button>
												<button type="button" class="btn btn-success" data-method="moveTo" data-option="0">
												<span class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)">
												0,0
												</span>
												</button>
												<button type="button" class="btn btn-success" data-method="zoomTo" data-option="1">
												<span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)">
												100%
												</span>
												</button>
												<button type="button" class="btn btn-success" data-method="rotateTo" data-option="180">
												<span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)">
												180°
												</span>
												</button>
												<input type="text" class="form-control" id="putData" placeholder="Get data to here or set data with this value">
											</div>
											<!-- /.docs-buttons -->
											<div class="col-md-4 docs-toggles">
												<!-- <h3 class="page-header">Toggles:</h3> -->
												<div class="btn-group docs-aspect-ratios" data-toggle="buttons">
													<label class="btn btn-success active">
													<input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.7777777777777777">
													<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">
													16:9
													</span>
													</label>
													<label class="btn btn-success">
													<input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1.3333333333333333">
													<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">
													4:3
													</span>
													</label>
													<label class="btn btn-success">
													<input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="1">
													<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
													1:1
													</span>
													</label>
													<label class="btn btn-success">
													<input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="0.6666666666666666">
													<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
													2:3
													</span>
													</label>
													<label class="btn btn-success">
													<input type="radio" class="sr-only" id="aspectRatio5" name="aspectRatio" value="NaN">
													<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
													Free
													</span>
													</label>
												</div>
												<div class="btn-group docs-view-modes" data-toggle="buttons">
													<label class="btn btn-success active">
													<input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
													<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
													VM0
													</span>
													</label>
													<label class="btn btn-success">
													<input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
													<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
													VM1
													</span>
													</label>
													<label class="btn btn-success">
													<input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
													<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
													VM2
													</span>
													</label>
													<label class="btn btn-success">
													<input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
													<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
													VM3
													</span>
													</label>
												</div>
												<div class="dropdown dropup docs-options">
													<button type="button" class="btn btn-success btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown"  data-placement="top" aria-expanded="true">
													Toggle Options
													<span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu" aria-labelledby="toggleOptions">
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="responsive" checked>
															responsive
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="restore" checked>
															restore
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="checkCrossOrigin" checked>
															checkCrossOrigin
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="checkOrientation" checked>
															checkOrientation
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="modal" checked>
															modal
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="guides" checked>
															guides
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="center" checked>
															center
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="highlight" checked>
															highlight
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="background" checked>
															background
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="autoCrop" checked>
															autoCrop
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="movable" checked>
															movable
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="rotatable" checked>
															rotatable
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="scalable" checked>
															scalable
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="zoomable" checked>
															zoomable
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="zoomOnTouch" checked>
															zoomOnTouch
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="zoomOnWheel" checked>
															zoomOnWheel
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="cropBoxMovable" checked>
															cropBoxMovable
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="cropBoxResizable" checked>
															cropBoxResizable
															</label>
														</li>
														<li role="presentation">
															<label class="checkbox-inline">
															<input type="checkbox" name="toggleDragModeOnDblclick" checked>
															toggleDragModeOnDblclick
															</label>
														</li>
													</ul>
												</div>
												<!-- /.dropdown -->
											</div>
											<!-- /.docs-toggles -->
										</div>
										<!-- /Row -->
									</div>
								</div>
							</div>	
						</div>			
					</div>
					<!-- /Row -->
					
				
          @endsection

@section('js')
		<!-- Cropper -->
		<script src="{{asset('assets/admin/vendors/bower_components/cropperjs/dist/cropper.min.js')}}"></script>
		<script src="{{asset('assets/admin/dist/js/cropperjs-data.js')}}"></script>
    @endsection	
	