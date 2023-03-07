@extends('layouts.master')
  @section('title')
  bootstrap-ui.
  @endsection

  @section('css')
  <!-- Bootstrap table CSS -->
  <link href="{{asset('assets/admin/assets/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  @endsection
@section('content')
		
		

      <!-- Title -->
      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h5 class="txt-dark">bootstrap-wyshtml5</h5>
        </div>
      
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="#"><span>forms</span></a></li>
            <li class="active"><span>bootstrap-wyshtml5</span></li>
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
                <h6 class="panel-title txt-dark">Bootstrap wysihtml5 editor</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <form method="post">
                  <div class="form-group">
                  <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Row -->
@endsection

@section('js')
		<!-- wysuhtml5 Plugin JavaScript -->
		<script src="{{asset('assets/admin/vendors/bower_components/wysihtml5x/dist/wysihtml5x.min.js')}}"></script>
		
		<script src="{{asset('assets/admin/vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.js')}}"></script>
		
		<!-- Bootstrap Wysuhtml5 Init JavaScript -->
		<script src="{{asset('assets/admin/dist/js/bootstrap-wysuhtml5-data.js')}}"></script>
@endsection
	
		
