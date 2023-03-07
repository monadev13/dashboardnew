@extends('layouts.master')
  @section('title')
  dorpdown
  @endsection

  @section('css')
  @endsection
@section('content')

      <!-- Title -->
      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h5 class="txt-dark">dropdown</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="index.html">Dashboard</a></li>
          <li><a href="#"><span>ui-elements</span></a></li>
          <li class="active"><span>dropdown</span></li>
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
                <h6 class="panel-title txt-dark">Rollover dropdown</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <p class="muted">Use <code>show-on-hover</code> class with dropdown class.</p>
                <div class="btn-group mt-40">
                  <div class="dropdown show-on-hover">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu"  role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-sm-4">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Regular dropdown</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <p class="muted">Use <code>dropdown</code> class  for default dropdown.</p>
                <div class="btn-group mt-40">
                  <div class="dropdown">
                    <!-- Single button -->
                    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Dropdown
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-sm-4">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Dropdown with icon</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <p class="muted">Just put icon class with i tag.</p>
                <div class="btn-group mt-40">
                  <div class="dropdown">
                    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-default btn-outline dropdown-toggle " type="button"> <i class="zmdi zmdi-favorite-outline"></i> <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li>
                        <a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
                      </li>
                      <li>
                        <a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
                      </li>
                      <li>
                        <a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
                      </li>
                      <li>
                        <a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                      </li>
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
        <div class="col-sm-4">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Fancy dropdown 1</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <p class="muted">Use Animate.css classes with <code>data-dropdown-in="fadeIn" data-dropdown-out="fadeOut"</code>.</p>
                <div class="btn-group mt-40">
                  <div class="dropdown">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                    Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-sm-4">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">fancy dropdown 2</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <p class="muted">Use Animate.css classes with <code>data-dropdown-in="flipInX" data-dropdown-out="flipOutX"</code>.</p>
                <div class="btn-group mt-40">
                  <div class="dropdown">
                    <!-- Single button -->
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Dropdown
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-sm-4">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Dropdown with icon</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <p class="muted">Use Animate.css classes with <code>data-dropdown-in="flipInY" data-dropdown-out="flipOutY"</code>.</p>
                <div class="btn-group mt-40">
                  <div class="dropdown">
                    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-success btn-outline dropdown-toggle " type="button"> dropdown <span class="caret"></span></button>
                    <ul role="menu" data-dropdown-in="flipInY" data-dropdown-out="flipOutY" class="dropdown-menu">
                      <li>
                        <a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
                      </li>
                      <li>
                        <a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
                      </li>
                      <li>
                        <a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
                      </li>
                      <li>
                        <a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                      </li>
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
        <div class="col-sm-4">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Fancy dropdown 3</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <p class="muted">Use Animate.css classes with <code>data-dropdown-in="slideInRight" data-dropdown-out="flipOutX"</code>.</p>
                <div class="btn-group mt-40">
                  <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" data-dropdown-in="slideInRight" data-dropdown-out="flipOutX">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-sm-4">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">fancy dropdown 4</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <p class="muted">Use Animate.css classes with <code>data-dropdown-in="bounceIn" data-dropdown-out="bounceOut"</code>.</p>
                <div class="btn-group mt-40">
                  <div class="dropdown">
                    <!-- Single button -->
                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Dropdown
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-sm-4">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Fancy Dropdown 5</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <p class="muted">Use Animate.css classes with <code>data-dropdown-in="rollIn" data-dropdown-out="rollOut"</code>.</p>
                <div class="btn-group mt-40">
                  <div class="dropdown">
                    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-info btn-outline dropdown-toggle " type="button"> dropdown <span class="caret"></span></button>
                    <ul role="menu" data-dropdown-in="rollIn" data-dropdown-out="rollOut" class="dropdown-menu">
                      <li>
                        <a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
                      </li>
                      <li>
                        <a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
                      </li>
                      <li>
                        <a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
                      </li>
                      <li>
                        <a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
					<!-- /Row -->
					
					<div class="seprator-block"></div>
          @endsection

@section('js')

	
@endsection
