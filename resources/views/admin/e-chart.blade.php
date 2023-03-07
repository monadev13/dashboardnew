@extends('layouts.master')
  @section('title')
  e-chart
  @endsection

  @section('css')
  @endsection
@section('content')


				<!-- Title -->					
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">chart.js</h5>
					</div>
					
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#">charts</a></li>
						<li class="active"><span>chart.js</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
					
				</div>
				<!-- /Title -->
				
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">line Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<canvas id="chart_1" height="100"></canvas>	
								</div>
							</div>
						</div>
					</div>
				</div>		
				
				<div class="row">
					<div class="col-lg-6">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">radar Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<canvas id="chart_3" height="200"></canvas>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-lg-6">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">polar area Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<canvas id="chart_4" height="200"></canvas>
								</div>	
							</div>
						</div>
					</div>
				</div>	
			
				
				<div class="row">
					<div class="col-lg-6">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">bubble Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<canvas id="chart_5" height="200"></canvas>
								</div>	
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">pie Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<canvas id="chart_6" height="200"></canvas>
								</div>
							</div>
								
						</div>	
					</div>
				</div>	
				
				<div class="row">
					<div class="col-lg-6">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">bar Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<canvas id="chart_2" height="200"></canvas>
								</div>	
							</div>
						</div>
					</div>
					<div class="col-lg-6">
					   <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">doughnut Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									 <!-- prepare a DOM container with width and height -->
									<div  id="main" style="width:100%; height:400px;">
										<div ></div>
									</div>
    
								</div>	
							</div>
						</div>
					</div>
				</div>	
        @endsection

@section('js')			
	<!-- ChartJS JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/echarts/dist/echarts-en.min.js')}}"></script>
	<script type="text/javascript">

        var myChart = echarts.init(document.getElementById('main'));
		option = {
			title : {
				text: 'demo',
				subtext: '1	'
			},
			tooltip : {
				trigger: 'axis'
			},
			legend: {
				data:['蒸发量','降水量']
			},
			toolbox: {
				show : true,
				feature : {
					dataView : {show: true, readOnly: false},
					magicType : {show: true, type: ['line', 'bar']},
					restore : {show: true},
					saveAsImage : {show: true}
				}
			},
			calculable : true,
			xAxis : [
				{
					type : 'category',
					data : ['1','2','3','4','5','6','7','8','9','10','11','12']
				}
			],
			yAxis : [
				{
					type : 'value'
				}
			],
			series : [
				{
					name:'bar1',
					type:'bar',
					data:[2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
					markPoint : {
						data : [
							{type : 'max', name: 'bar2'},
							{type : 'min', name: 'bar3'}
						]
					},
					itemStyle: {
						normal: {
							color: "rgba(255,144,128,1)"
							}
						},
					markLine : {
						data : [
							{type : 'average', name: 'bar4'}
						]
					}
				},
				{
					name:'bar5',
					type:'bar',
					data:[2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3],
					markPoint : {
						data : [
							{name : 'bar6', value : 182.2, xAxis: 7, yAxis: 183},
							{name : 'bar7', value : 2.3, xAxis: 11, yAxis: 3}
						]
					},
					markLine : {
						data : [
							{type : 'average', name : 'bar7'}
						]
					}
				}
			]
		};
		// use configuration item and data specified to show chart
		myChart.setOption(option);
		setTimeout(function(){
			$(window).on("resize", function () {
				setTimeout(function(){
					myChart.resize();
				},100);
			}).resize();
		},100); 
		
    </script>
    @endsection
	
