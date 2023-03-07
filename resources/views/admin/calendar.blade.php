@extends('layouts.master')
  @section('title')
  calendar
  @endsection
  <!-- Calendar CSS -->
  <link href="{{asset('assets/admin/vendors/bower_components/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet" type="text/css"/>

  @section('css')
  @endsection
@section('content')

    <!-- Title -->
    <div class="row heading-bg">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h5 class="txt-dark">calendar</h5>
      </div>
      <!-- Breadcrumb -->
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
        <li><a href="index.html">Dashboard</a></li>
        <li><a href="#"><span>apps</span></a></li>
        <li class="active"><span>calendar</span></li>
        </ol>
      </div>
      <!-- /Breadcrumb -->
    </div>
    <!-- /Title -->
    <!-- Row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default card-view">
          <div class="panel-wrapper collapse in">
            <div class="panel-body">
              <div class="add-event-wrap">
                <div class="calendar-event btn btn-success">My Event One <a href="javascript:void(0);" class="remove-calendar-event"><i class="fa fa-times fa-fw"></i></a></div>
                <div class="calendar-event btn btn-info">My Event Two <a href="javascript:void(0);" class="remove-calendar-event"><i class="fa fa-times fa-fw"></i></a></div>
                <div class="calendar-event btn btn-warning">My Event Three <a href="javascript:void(0);" class="remove-calendar-event"><i class="fa fa-times fa-fw"></i></a></div>
                <div class="calendar-event btn btn-primary">My Event Four <a href="javascript:void(0);" class="remove-calendar-event"><i class="fa fa-times fa-fw"></i></a></div>
                <input type="text" placeholder="Add Event and hit enter" class="form-control add-event mt-30">
              </div>
              <div class="calendar-wrap mt-40">
                <div id="calendar"></div>
              </div>
            </div>
          </div>
        </div>	
      </div>	
    </div>	<!-- /Row -->
@endsection

@section('js')
<!-- Calender JavaScripts -->
  <script src="{{asset('assets/admin/vendors/bower_components/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendors/jquery-ui.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
  <script src="{{asset('assets/admin/dist/js/fullcalendar-data.js')}}"></script>
@endsection	
		
		
		
		
		