@extends('layouts.master')
  @section('title')
  bootstrap-ui
  @endsection

  @section('css')
  @endsection
@section('content')
        <!-- Title -->
        <div class="row heading-bg">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">bootstrap-ui</h5>
          </div>
          <!-- Breadcrumb -->
          <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="#"><span>ui-elements</span></a></li>
            <li class="active"><span>bootstrap ui</span></li>
            </ol>
          </div>
          <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->
        
        <!-- Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h6 class="panel-title txt-dark">Basic Tooltip</h6>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <p class="text-muted">Just put this to any tag <code>data-toggle="tooltip" title="Default tooltip"</code>.</p>
                  <div class="button-list mt-25">
                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-placement="top" title="Tooltip on top" >Tooltip on top</button>
                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Tooltip on right</button>
                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Tooltip on bottom</button>
                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Tooltip on left</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Row -->
        
        <!-- Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h6 class="panel-title txt-dark">Clickable Tooltip</h6>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <p class="text-muted">Four options are available: top, right, bottom, and left aligned.</p>
                  <div class="button-list mt-25">
                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-trigger="click" data-placement="top" title="" data-original-title="Tooltip on top">Tooltip on top</button>
                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-trigger="click" data-placement="right" title="" data-original-title="Tooltip on right">Tooltip on right</button>
                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-trigger="click" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Tooltip on bottom</button>
                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-trigger="click" data-placement="left" title="" data-original-title="Tooltip on left">Tooltip on left</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Row -->	
        
        <!-- Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h6 class="panel-title txt-dark">Basic popover</h6>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <p class="text-muted">Four options are available: top, right, bottom, and left aligned.</p>
                  <div class="button-list  mt-25">
                    <button type="button" class="btn btn-default btn-outline" data-container="body" title="" data-toggle="popover" data-placement="top" data-content="Photo booth Tofu biodiesel williamsburg marfa, four loko." data-original-title="Popover title">Popover on top</button>
                    <button type="button" class="btn btn-default btn-outline" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Photo booth Tofu biodiesel williamsburg marfa, four loko." data-original-title="Popover title"> Popover on bottom </button>
                    <button type="button" class="btn btn-default btn-outline" data-container="body" title="" data-toggle="popover" data-placement="right" data-content="Photo booth Tofu biodiesel williamsburg marfa, four loko." data-original-title="Popover title"> Popover on right </button>
                    <button type="button" class="btn btn-default btn-outline" data-container="body" title="" data-toggle="popover" data-placement="left" data-content="Photo booth Tofu biodiesel williamsburg marfa, four loko." data-original-title="Popover title"> Popover on left </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Row -->
        
        <!-- Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h6 class="panel-title txt-dark">Colleps Example</h6>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <p class="text-muted">Just put <code>data-toggle="collapse" href="#collapseExample (respective ID)"</code>.</p>
                  <div class="button-list mt-25">
                    <a class="btn btn-info" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Link with href</a>
                    <button class="btn btn-primary " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Link with button</button>
                    <div class="collapse" id="collapseExample">
                      <div class="well"> haven't heard of them. Photo booth Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan </div>
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
          <div class="col-lg-12">
            <div class="panel panel-default card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h6 class="panel-title txt-dark">Images shapes</h6>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <p class="text-muted">Use class <code>img-rounded, img-circle, img-thumbnail</code>for respective results.</p>
                  <div class="row mt-40">
                    <div class="col-sm-4">
                      <img src="../img/big/img1.jpg" alt="image" class="img-responsive img-rounded" width="250"/>
                    </div>
                    <div class="col-sm-4 text-center">
                      <img src="../img/big/circle.jpg" alt="image" class="img-circle" width="170" />
                    </div>
                    <div class="col-sm-4 text-right">
                      <img src="../img/big/img3.jpg" alt="image" class="img-thumbnail " width="250"/>
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
          <div class="col-lg-6">
            <div class="panel panel-default card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h6 class="panel-title txt-dark">Default Pagination</h6>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="pagination">
                        <li> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                        <li> <a href="#">1</a> </li>
                        <li> <a href="#">2</a> </li>
                        <li> <a href="#">3</a> </li>
                        <li> <a href="#">4</a> </li>
                        <li> <a href="#">5</a> </li>
                        <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="panel panel-default card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h6 class="panel-title txt-dark">Default and active state</h6>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="pagination pagination-split">
                        <li> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                        <li  class="disabled"> <a href="#">1</a> </li>
                        <li class="active"> <a href="#">2</a> </li>
                        <li> <a href="#">3</a> </li>
                        <li> <a href="#">4</a> </li>
                        <li> <a href="#">5</a> </li>
                        <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                      </ul>
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
          <div class="col-lg-12">
            <div class="panel panel-default card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h6 class="panel-title txt-dark">sizes of Pagination</h6>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <p class="text-muted">use classes <code>pagination-lg, pagination-sm</code> form large and small paginations respectively.</p>
                  <div class="row mt-40">
                    <ul class="pagination pagination-lg mt-0 mb-0 mr-15">
                      <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                      <li> <a href="#">1</a> </li>
                      <li class="active"> <a href="#">2</a> </li>
                      <li> <a href="#">3</a> </li>
                      <li> <a href="#">4</a> </li>
                      <li> <a href="#">5</a> </li>
                      <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                    </ul>
                    <ul class="pagination mt-0 mb-0 mr-15">
                      <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                      <li> <a href="#">1</a> </li>
                      <li class="active"> <a href="#">2</a> </li>
                      <li> <a href="#">3</a> </li>
                      <li> <a href="#">4</a> </li>
                      <li> <a href="#">5</a> </li>
                      <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                    </ul>
                    <ul class="pagination pagination-sm mt-0 mb-0 mr-15">
                      <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                      <li> <a href="#">1</a> </li>
                      <li class="active"> <a href="#">2</a> </li>
                      <li> <a href="#">3</a> </li>
                      <li> <a href="#">4</a> </li>
                      <li> <a href="#">5</a> </li>
                      <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Row -->
        
        <!-- Row -->
        <div class="row">
          <div class="col-lg-4">
            <div class="panel panel-default card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h6 class="panel-title txt-dark">Default Pager</h6>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <ul class="pager">
                    <li> <a href="#"><i class="fa fa-angle-left"></i> Previous</a> </li>
                    <li> <a href="#">Next <i class="fa fa-angle-right"></i></a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-default card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h6 class="panel-title txt-dark">Aligned pager</h6>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <ul class="pager">
                    <li class="previous"> <a href="#">← Older</a> </li>
                    <li class="next"> <a href="#">Newer →</a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-default card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h6 class="panel-title txt-dark">Optional disabled state (pager)</h6>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <ul class="pager">
                    <li class="previous disabled"> <a href="#">← Older</a> </li>
                    <li class="next"> <a href="#">Newer →</a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Row -->
        @endsection

@section('js')
@endsection
