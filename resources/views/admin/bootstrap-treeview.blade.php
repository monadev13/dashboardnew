@extends('layouts.master')
  @section('title')
  blank
  @endsection

  @section('css')
  <!-- Bootstrap table CSS -->
	<link href="{{asset('assets/admin/assets/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  @endsection
@section('content')
		
	
      <!-- Title -->
      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h5 class="txt-dark">bootstrap-treeview</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="index.html">Dashboard</a></li>
          <li><a href="#"><span>ui-elements</span></a></li>
          <li class="active"><span>bootstrap-treeview</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>
      <!-- /Title -->
      
      <!-- Row -->
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Default</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="treeview" id="treeview1"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">collapsed</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="treeview" id="treeview2"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">expanded</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="treeview" id="treeview3"></div>
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
                <h6 class="panel-title txt-dark">JSON</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="treeview" id="treeview4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Row -->
@endsection

@section('js')

		<!-- Treeview JavaScript -->
		<script src="{{asset('assets/admin/vendors/bower_components/bootstrap-treeview/dist/bootstrap-treeview.min.js')}}"></script>
		
		<!-- Treeview Init JavaScript -->
		<script src="{{asset('assets/admin/dist/js/treeview-data.js')}}"></script>
@endsection