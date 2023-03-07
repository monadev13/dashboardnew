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
          <h5 class="txt-dark">Bootstrap table</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="index.html">Dashboard</a></li>
          <li><a href="#"><span>table</span></a></li>
          <li class="active"><span>bootstrap table</span></li>
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
                <h6 class="panel-title txt-dark">Basic Table</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="table-wrap">
                  <table data-toggle="table">
                    <thead>
                      <tr>
                        <th>Item ID</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Item 1</td>
                        <td>$1</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Item 2</td>
                        <td>$2</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Item 3</td>
                        <td>$3</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Item 4</td>
                        <td>$4</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Item 5</td>
                        <td>$5</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Item 6</td>
                        <td>$6</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>Item 7</td>
                        <td>$7</td>
                      </tr>
                    </tbody>
                  </table>
                </div>	
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
                <h6 class="panel-title txt-dark">Data from JSON file</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="table-wrap">
                  <table data-toggle="table" data-buttons-class='default btn-sm btn-outline' data-pagination="true" data-search="true"   data-url="dist/json/bootstrap-table.json" data-height="280" data-mobile-responsive="true" data-sort-order="desc" class="table">
                    <thead>
                      <tr>
                        <th data-field="id" 
                          data-sortable="true"> Id </th>
                        <th data-field="name" 
                          data-sortable="true" data-width="100"> Name </th>
                        <th data-field="price" 
                        data-sortable="true"> Price </th>
                      </tr>
                    </thead>
                  </table>
                </div>	
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
                <h6 class="panel-title txt-dark">Data from JS</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="table-wrap">
                  
                  <table id="table_js" data-buttons-class='default  btn-outline' data-search="true" data-show-columns="true" data-show-toggle="true" data-click-to-select="true"  data-pagination="true"  data-height="300">
                    <thead>
                      <tr>
                        <th data-field="stargazers_count" data-sortable="true">Stars</th>
                        <th data-field="name" data-sortable="true" >Name</th>
                        <th data-field="forks_count" data-sortable="true">Forks</th>
                        <th data-field="description" data-sortable="true">Description</th>
                      </tr>
                    </thead>
                  </table>
                  <div class="form-inline">
                    <button id="mybtn_top" type="button" 
                        class="btn btn-default btn-outline  mr-10 mt-20">
                      Scroll to top
                    </button>
                    <button id="mybtn_row" type="button" 
                        class="btn btn-default btn-outline  mr-10 mt-20">
                      Scroll to row index: 
                    </button>
                      <input id="row_index" type="number" 
                            class="form-control mr-10 mt-20" 
                            value="3" min="0">
                    <button id="mybtn_btm" type="button" 
                        class="btn btn-default btn-outline  mr-10 mt-20">
                      Scroll to bottom
                    </button>
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
        <div class="col-sm-12">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Table with Radio Button</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="table-wrap">
                  <table id="table_js_1"  data-click-to-select="true" data-select-item-name="myRadioName" >
                    <thead>
                      <tr>
                        <th data-field="state" data-radio="true"></th>
                        <th data-field="stargazers_count" data-sortable="true">Stars</th>
                        <th data-field="name" data-sortable="true" >Name</th>
                        <th data-field="forks_count" data-sortable="true">Forks</th>
                        <th data-field="description" data-sortable="true">Description</th>
                      </tr>
                    </thead>
                  </table>
                </div>	
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
                <h6 class="panel-title txt-dark">Table with Checkbox Button</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="table-wrap">
                  <table id="table_js_2" data-click-to-select="true" data-select-item-name="myChk" >
                    <thead>
                      <tr>
                        <th data-field="state" data-checkbox="true"></th>
                        <th data-field="stargazers_count" data-sortable="true">Stars</th>
                        <th data-field="name" data-sortable="true" >Name</th>
                        <th data-field="forks_count" data-sortable="true">Forks</th>
                        <th data-field="description" data-sortable="true">Description</th>
                      </tr>
                    </thead>
                  </table>
                </div>	
              </div>	
            </div>	
          </div>	
        </div>
      </div>
      <!-- /Row -->
				
@endsection

@section('js')

	<!-- Bootstrap-table JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/bootstrap-table/dist/bootstrap-table.min.js"></script>
	<script src="{{asset('assets/admin/dist/js/bootstrap-table-data.js')}}"></script>
	
@endsection