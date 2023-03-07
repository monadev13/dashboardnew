@extends('layouts.master')
  @section('title')
  documentation
  @endsection

  @section('css')
  <!-- Custom CSS -->
	<link href="{{asset('assets/admin/dist/css/perfect-scrollbar.min.css')}}" rel="stylesheet" type="text/css">
  @endsection
@section('content')
	
	
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Documentation</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li class="active"><span>documentation</span></li>
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
									<h6 class="panel-title txt-dark">Inroduction</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted">Droopy Admin is a WebApp template for admin dashboards and control panels. It is a responsive HTML template that is based on the CSS framework Bootstrap 3.3.7 stable version. It utilizes all of the Bootstrap components in its design and re-styles many commonly used plugins to create a consistent design that can be used as a user interface for backend applications. Droopy Admin is based on a modular design, which allows it to be easily customized and built upon. This documentation will guide you through installing the template and exploring the various components that are bundled with the template.</p>
									<div class="row mt-30">
										<div class="col-md-4 col-xs-12">
											<ul class="list-icons">
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle txt-success mr-5"></i> 7 Different Dashboards</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Ecommerce Pages Included</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> 90+ pages </li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> 1000+ fonts </li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> 300+ Ui Components</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Light,dark, and boxed layout.</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> toggle left side menu</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Used Bower A package manager for the web.</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Used gruntjs (The javascript task runner.)</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Vector Maps & Google maps included.</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Powered by Bootstrap Sass.</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>  CSS3 Animations.</li>
												
											</ul>
										</div>
										<div class="col-md-4 col-xs-12">
											<ul class="list-icons">
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Lots of widgets </li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Bootstrap 3x </li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> linea-icon Icons</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Themify Icons</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Simple line Icons</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Pe-icon Icons</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Responsive Layout</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> W3C HTML Valid code</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Multi-Browser Support</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Box & Full-screen layout options</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Dark & Light Demo options.</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Quick setting panel with many cool options.</li>
											</ul>
										</div>
										<div class="col-md-4 col-xs-12">
											<ul class="list-icons">
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Mobile Responsive Tabs</li>
												<li  class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Specially Designed Mobile Menu</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Desktop Sidebar Menu</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Tablet Icon Menu</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>  Multilevel Navigation</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Mega Menu</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Beautiful Profile page</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i> Working Instagram Live Feeds</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>Thoughtfully designed widgets.</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>Email App included.</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>Stunning Chat App included.</li>
												<li class="mb-10"><i class="zmdi zmdi-caret-right-circle text-success mr-5"></i>Login, Forget Password, Register, lock screen and many more.</li>
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
					<div class="col-sm-12">
						 <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Installation (Install Node.js, Bower, Grunt)</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="mb-20">Use of these tools are completely optional.</p>
									<ul class="uo-list mt-20 mb-20 pl-15">
										<li class="mb-10 txt-dark">Node.js and NPM. You can download Node.js from here <a href="https://nodejs.org." target="_blank">https://nodejs.org.</a> Npm comes bundled with Node.js</li>
										<li class="mb-10 txt-dark">Next you need to install bower.</li>
										<li class="txt-dark" >At last install grunt using <code>npm install -g grunt-cli</code> and <code>npm install grunt --save-dev</code></li>
									</ul>
									<p>After installing all the required frameworks, components and dependencies, go to the root folder of and run the following commands from the command line:</p>
									<ul class="uo-list mt-20 mb-20 pl-15">
										<li class="mb-10 txt-dark">npm install</li>
										<li class="mb-10 txt-dark">bower install</li>
										<li class="txt-dark" >grunt</li>
									</ul>
									<p>If everything was installed correctly, you should see the jQuery version of Droopy running in <strong>http://localhost:9000/</strong></p>
									<br/>
									<p><strong>Above all procedures are optional you can directly use the compiled file(dist/) which we provided you.</strong></p>
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
									<h6 class="panel-title txt-dark">File structure</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<pre class="pt-20">
										  
										  HTML
										  ├── 
										  │   └── Droopy/
										  │       └── dist
										  │            └── Distribution pkg(Ready to Use)
										  │       └── src
										  │            └── Source pkg
										  │       └── vendors
										  │            └── bower_components
										  │            └── All Required plugins files
										  │       └── All Html Pages
										  │       └── .bowerrc
										  │       └── .bowerrc
										  │       └── .jshintrc
										  │       └── bower.json
										  │       └── package.json
										  └── 
										
									  </pre>
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
									<h6 class="panel-title txt-dark">Html structure</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
								  <pre class="pt-20">
									&lt;body&gt;

									<span style="color:#ccc;">&lt;!-- Preloader --&gt;</span>
									&lt;div class="preloader-it"&gt;
									&lt;div class="la-anim-1"&gt;&lt;/div&gt;
									&lt;/div&gt;
									<span style="color:#ccc;">!-- /Preloader --&gt;</span>

									<span style="color:#ccc;">&lt;!-- Wrapper --&gt;</span>
									&lt;div id="wrapper"&gt;
										&lt;!-- Top Menu Items --&gt;
										&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
										------
										&lt;!-- Left Sidebar Menu --&gt;
										&lt;div class="fixed-sidebar-left"&gt;
										------
										
										&lt;!-- Right Sidebar Menu --&gt;
										&lt;div class="fixed-sidebar-right"&gt;
										------
										
										&lt;!-- Right Sidebar Backdrop --&gt;
										&lt;div class="right-sidebar-backdrop"&gt;
										------
										
										&lt;!-- Main Content --&gt;
										&lt;div class="page-wrapper"&gt;
											
											&lt;!-- Title --&gt;
											&lt;div class="row heading-bg"&gt;
												------
												&lt;!-- Breadcrumb --&gt;
												&lt;div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"&gt;
													------
												--content--
										&lt;!-- Footer --&gt;
										&lt;footer class="footer container-fluid pl-30 pr-30"&gt;
									
										&lt;/body&gt;
									&lt;/html&gt;
									</pre>
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
									<h6 class="panel-title txt-dark">Background Colors</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="mb-20">please use below classes bg colors:</p>
									<code class="block mb-10">bg-green</code>
									<code class="block mb-10">bg-blue</code>
									<code class="block mb-10">bg-red</code>
									<code class="block mb-10">bg-pink</code>
									<code class="block mb-10">bg-yellow</code>
									<code class="block mb-10">bg-light</code>
									<code class="block mb-10">bg-dark</code>
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
									<h6 class="panel-title txt-dark">Text Colors</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="mb-20">please use below classes for text colors:</p>
									<code class="block mb-10">For green use .txt-success</code>
									<code class="block mb-10">For blue use .txt-primary</code>
									<code class="block mb-10">For pink use .txt-info</code>
									<code class="block mb-10">For yellow use .txt-warning</code>
									<code class="block mb-10">For red use .txt-danger</code>
									<code class="block mb-10">For white use .txt-light</code>
									<code class="block mb-10">For black use .txt-dark</code>
									<code class="block mb-10">For grey use .txt-grey</code>
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
									<h6 class="panel-title txt-dark">scss files</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted">main scss file in present in src folder.</p>
									<div class="table-responsive">  
										<table class="table table-bordered m-0">
											<thead>
											  <tr>
												<th style="width: 20%;">File</th>
												<th>Description</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td><code>style.scss</code> </td>
												<td> you can update main style using this scss file.</td>
											  </tr>
											   <tr>
												<td><code>style-dark.scss</code> </td>
												<td> you can update main style for dark version using this scss file.</td>
											  </tr>
											  <tr>
												<td><code>_bourbon.scss</code></td>
												<td> for all styles of bourbon css. </td>
											  </tr>
											  <tr>
												<td><code>mixins.sess</code></td>
												<td> for  all preset mixins.</td>
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
									<h6 class="panel-title txt-dark">js files</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted">custom js file in present in dist/js folder.</p>
									<div class="table-responsive">  
										<table class="table table-bordered m-0">
											<thead>
											  <tr>
												<th style="width: 20%;">File</th>
												<th>Description</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td><code>init.js</code> </td>
												<td>all custom js required for Droopy.</td>
											  </tr>
											  
											  <tr>
												<td><code>**-data.scss</code></td>
												<td>all js with **-data are releted with individual pages.</td>
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
									<h6 class="panel-title txt-dark">How to edit files ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-25">All index files represent that how can you use all the widgets,tables,charts etc. Other html files are created using there original names like dropzone.html, chartist.html etc. You can easily edit them.</p>
									<p class="muted">all js which are present in dist/js folder with **-data are releted to individual pages. We used nomenclature related to inividual html page like chartjs-data.js for chats.html, bootstrap-wysuhtml5-data.js for bootstrap-wysihtml5.html etc.</p>
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
									<h6 class="panel-title txt-dark">How to change Logo ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted">You can change the logo by either replace it from img folder or you can edit it from HTML file.</p>
									<pre class="pt-20 mt-20">
										&ltdiv class="logo-wrap"&gt
											&lta href="index.html"&gt
												&ltimg class="brand-img" src="../img/logo.png" alt="brand"/&gt
												&ltspan class="brand-text"&gtDroopy&lt/span&gt
											&lt/a&gt
										&lt/div&gt   
									</pre>	  
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
									<h6 class="panel-title txt-dark">How to edit header color ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-20">We provided 6 header styles which you can use, you have to add below classes with <code>.wrapper</code> class.</p>
									<code class="block mb-10">.theme-1-active</code>
									<code class="block mb-10">.theme-2-active</code>
									<code class="block mb-10">.theme-3-active</code>
									<code class="block mb-10">.theme-4-active</code>
									<code class="block mb-10">.theme-5-active</code>
									<code class="block">.theme-6-active</code>
									<pre class="mt-20 pt-20">
										&ltdiv class="wrapper  theme-1-active pimary-color-green"&gt
									</pre>
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
									<h6 class="panel-title txt-dark">How to add carousels ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-20">Add class <code class="">.carousel-caption</code>.</p>
									<pre class="mt-20 pt-20">
										&lt!-- START carousel--&gt
										&ltdiv id="carousel-example-captions" data-ride="carousel" class="carousel slide mt-40"&gt
											&ltol class="carousel-indicators"&gt
											   &ltli data-target="#carousel-example-captions" data-slide-to="0" class="active"&gt&lt/li&gt
											   &ltli data-target="#carousel-example-captions" data-slide-to="1"&gt&lt/li&gt
											   &ltli data-target="#carousel-example-captions" data-slide-to="2"&gt&lt/li&gt
											&lt/ol&gt
											&ltdiv role="listbox" class="carousel-inner"&gt
											   &ltdiv class="item active"&gt
												  &ltimg src="dist/img/big/img1.jpg" alt="First slide image"&gt
												  &ltdiv class="carousel-caption"&gt
													&ltp&gt Lorem ipsum dolor sit amet, consectetur adipiscing elit. &lt/p&gt
												  &lt/div&gt
											   &lt/div&gt
											   &ltdiv class="item"&gt
												  &ltimg src="dist/img/big/img2.jpg" alt="Second slide image"&gt
												  &ltdiv class="carousel-caption"&gt
													 &ltp&gt Lorem ipsum dolor sit amet, consectetur adipiscing elit. &lt/p&gt
												  &lt/div&gt
											   &lt/div&gt
											   &ltdiv class="item"&gt
												  &ltimg src="dist/img/big/img3.jpg" alt="Third slide image"&gt
												  &ltdiv class="carousel-caption"&gt
													&ltp&gt Lorem ipsum dolor sit amet, consectetur adipiscing elit. &lt/p&gt
												  &lt/div&gt
											   &lt/div&gt
											&lt/div&gt
											&lta href="#carousel-example-captions" role="button" data-slide="prev" class="left carousel-control"&gt &ltspan aria-hidden="true" class="fa fa-angle-left"&gt&lt/span&gt &ltspan class="sr-only"&gtPrevious&lt/span&gt &lt/a&gt &lta href="#carousel-example-captions" role="button" data-slide="next" class="right carousel-control"&gt &ltspan aria-hidden="true" class="fa fa-angle-right"&gt&lt/span&gt &ltspan class="sr-only"&gtNext&lt/span&gt &lt/a&gt 
										&lt/div&gt
										&lt!-- END carousel--&gt
									</pre>
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
									<h6 class="panel-title txt-dark">How to add tabs ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-20">Default version of tab add <code>tab-struct custom-tab-1</code> class.</p>
									<pre class="mt-20 pt-20">
										&ltdiv  class="tab-struct custom-tab-1 mt-40"&gt
											&ltul role="tablist" class="nav nav-tabs" id="myTabs_7"&gt
												&ltli class="active" role="presentation"&gt&lta aria-expanded="true"  data-toggle="tab" role="tab" id="home_tab_7" href="#home_7"&gtactive&lt/a&gt&lt/li&gt
												&ltli role="presentation" class=""&gt&lta  data-toggle="tab" id="profile_tab_7" role="tab" href="#profile_7" aria-expanded="false"&gtinactive&lt/a&gt&lt/li&gt
												&ltli class="dropdown" role="presentation"&gt
													&lta  data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop_7" href="#" aria-expanded="false"&gtDropdown &ltspan class="caret"&gt&lt/span&gt&lt/a&gt
													&ltul id="myTabDrop_7_contents"  class="dropdown-menu"&gt
														&ltli class=""&gt&lta  data-toggle="tab" id="dropdown_13_tab" role="tab" href="#dropdown_13" aria-expanded="true"&gt@fat&lt/a&gt&lt/li&gt
														&ltli class=""&gt&lta  data-toggle="tab" id="dropdown_14_tab" role="tab" href="#dropdown_14" aria-expanded="false"&gt@mdo&lt/a&gt&lt/li&gt
													&lt/ul&gt
												&lt/li&gt
											&lt/ul&gt
											&ltdiv class="tab-content" id="myTabContent_7"&gt
												&ltdiv  id="home_7" class="tab-pane fade active in" role="tabpanel"&gt
													&ltp&gtLorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.&lt/p&gt
												&lt/div&gt
												&ltdiv  id="profile_7" class="tab-pane fade" role="tabpanel"&gt
													&ltp&gtFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.&lt/p&gt
												&lt/div&gt
												&ltdiv id="dropdown_13" class="tab-pane fade " role="tabpanel"&gt
													&ltp&gtEtsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.&lt/p&gt
												&lt/div&gt
												&ltdiv id="dropdown_14" class="tab-pane fade" role="tabpanel"&gt
													&ltp&gtTrust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.&lt/p&gt
												&lt/div&gt
											&lt/div&gt
										&lt/div&gt
									</pre>
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
									<h6 class="panel-title txt-dark">How to add accordions ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-20">Default version of accordions.</p>
									<pre class="mt-20 pt-20">
										&ltdiv class="panel-group accordion-struct" id="accordion_1" role="tablist" aria-multiselectable="true"&gt
											&ltdiv class="panel panel-default"&gt
												&ltdiv class="panel-heading activestate" role="tab" id="heading_1"&gt
													&lta role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_1" aria-expanded="true"&gtcollapse one&lt/a&gt 
												&lt/div&gt
												&ltdiv id="collapse_1" class="panel-collapse collapse in" role="tabpanel"&gt
													&ltdiv class="panel-body pa-15"&gt Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer la. &lt/div&gt
												&lt/div&gt
											&lt/div&gt
											&ltdiv class="panel panel-default"&gt
												&ltdiv class="panel-heading" role="tab" id="heading_2"&gt
													&lta class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_2" aria-expanded="false"&gtcollapse two &lt/a&gt
												&lt/div&gt
												&ltdiv id="collapse_2" class="panel-collapse collapse" role="tabpanel"&gt
													&ltdiv class="panel-body pa-15"&gt Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, &lt/div&gt
												&lt/div&gt
											&lt/div&gt
											&ltdiv class="panel panel-default"&gt
												&ltdiv class="panel-heading" role="tab" id="heading_3"&gt
													&lta class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_3" aria-expanded="false" &gtcollapse three&lt/a&gt
												&lt/div&gt
												&ltdiv id="collapse_3" class="panel-collapse collapse" role="tabpanel"&gt
													&ltdiv class="panel-body pa-15"&gt Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, inable VHS. &lt/div&gt
												&lt/div&gt
											&lt/div&gt
											&ltdiv class="panel panel-default"&gt
												&ltdiv class="panel-heading" role="tab" id="heading_4"&gt
													&lta class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_4" aria-expanded="false"&gt collapse four&lt/a&gt
												&lt/div&gt
												&ltdiv id="collapse_4" class="panel-collapse collapse" role="tabpanel"&gt
													&ltdiv class="panel-body pa-15"&gt Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, inable VHS. &lt/div&gt
												&lt/div&gt
											&lt/div&gt
										&lt/div&gt
									</pre>
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
									<h6 class="panel-title txt-dark">How to edit layout ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-20">For all the layout you have to add below classes with <code>.wrapper</code> class.</p>
									<code class="block mb-10">For boxed layout add .</code>
									<code class="block mb-10">For dark version use <b class="txt-dark">grunt sass-dark</b></code>
									<code class="block mb-10">For rtl version use <b class="txt-dark">grunt sass-rtl</b></code>
									<code class="block mb-10">For scrollable header add .scrollable-nav</code>
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
									<h6 class="panel-title txt-dark">How to edit primary color ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-20">We provide 8 primary color scheme which you can use, you have to add below classes with <code>.wrapper</code> class.</p>
									<code class="block mb-10">.pimary-color-red</code>
									<code class="block mb-10">.pimary-color-blue</code>
									<code class="block mb-10">.pimary-color-green</code>
									<code class="block mb-10">.pimary-color-yellow</code>
									<code class="block mb-10">.pimary-color-pink</code>
									<code class="block mb-10">.pimary-color-orange</code>
									<code class="block mb-10">.pimary-color-gold</code>
									<code class="block">.pimary-color-silver</code>
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
									<h6 class="panel-title txt-dark">How to edit Weather app ?</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p class="muted mb-20">We provided working weather app with the help of yahoo API.</p>
									<p class="muted mb-20">For editing the app first open simpleweather-data.js file,If you want to use weather app with forcast of seven day use</p>
									<code class="block mb-10">/*With Forcast*/<br>
									$.simpleWeather({...</code>
									<p class="muted mb-20">If you want to use weather app withot forcastuse</p>
									<code class="block mb-10">/*Without Forcast*/<br>
									$.simpleWeather({...</code>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view pt-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<p><strong>Note : Images are not included in downloaded version source.</strong></p>
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
										<h6 class="panel-title txt-dark">credits</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<ul class="common-credits">
										<li>Bootstrap framework</li>
										<li><a href="http://getbootstrap.com/">http://getbootstrap.com/</a></li>
										<li>Jquery</li>
										<li><a href="https://jquery.com/">https://jquery.com/</a></li>
										<li>Material Design Iconic Font</li>
										<li><a href="http://zavoloklom.github.io/material-design-iconic-font/icons.html">http://zavoloklom.github.io/material-design-iconic-font/icons.html</a></li>
										<li>Font-Awesome</li>
										<li><a href="http://fortawesome.github.io/Font-Awesome/">http://fortawesome.github.io/Font-Awesome/</a></li>
										<li>Themify</li>
										<li><a href="https://themify.me/themify-icons">https://themify.me/themify-icons</a></li>
										<li>linea-icon</li>
										<li><a href="http://linea.io/">http://linea.io/</a></li>
										<li>Simple line icons</li>
										<li><a href="simplelineicons.com">simplelineicons.com</a></li>
										
										<li>Pe-7 icons</li>
										<li><a href="http://themes-pixeden.com/font-demos/7-stroke/">http://themes-pixeden.com/font-demos/7-stroke/</a></li>
										
										<li>Sweet-Alert</li>
										<li><a href="http://tristanedwards.me/sweetalert">http://tristanedwards.me/sweetalert</a></li>
										<li>Nestable</li>
										<li><a href="http://dbushell.com/">http://dbushell.com/</a></li>
										<li>Slimscroll</li>
										<li><a href="http://rocha.la/jQuery-slimScroll">http://rocha.la/jQuery-slimScroll</a></li>
										<li>Full Calendar</li>
										<li><a href="http://arshaw.com/fullcalendar/">http://arshaw.com/fullcalendar/</a></li>
										
										<li>Bootstrap-timepicker</li>
										<li><a href="http://jdewit.github.com/bootstrap-timepicker">http://jdewit.github.com/bootstrap-timepicker</a></li>
										<li>Bootstrap Colorpicker</li>
										<li><a href="http://www.eyecon.ro/bootstrap-colorpicker">http://www.eyecon.ro/bootstrap-colorpicker</a></li>
										<li>Multi-select</li>
										<li><a href="http://loudev.com/">http://loudev.com/</a></li>
										<li>Select2</li>
										<li><a href="https://select2.github.io/">https://select2.github.io/</a></li>
										<li>Wysihtml5</li>
										<li><a href="https://github.com/xing/wysihtml5">https://github.com/xing/wysihtml5</a></li>
										<li>Datatables</li>
										<li><a href="https://www.datatables.net/">https://www.datatables.net/</a></li>
										<li>Jsgrid</li>
										<li><a href="http://js-grid.com/">http://js-grid.com/</a></li>
										<li>Morris</li>
										<li><a href="http://morrisjs.github.io/morris.js/">http://morrisjs.github.io/morris.js/</a></li>
										<li>Chartjs</li>
										<li><a href="http://chartjs.org/">http://chartjs.org/</a></li>
										<li>Sparkline</li>
										<li><a href="http://omnipotent.net/jquery.sparkline/">http://omnipotent.net/jquery.sparkline/</a>
										</li>
										<li>Google maps</li>
										<li><a href="https://hpneo.github.io/gmaps/">https://hpneo.github.io/gmaps/</a></li>
										<li>Vector Maps</li>
										<li><a href="http://jqvmap.com/">http://jqvmap.com/</a></li>
										<li>Pexels (images)</li>
										<li><a href="https://pexels.com/">https://pexels.com/</a></li>
										<li>Flot-charts</li>
										<li><a href="http://www.flotcharts.org/">http://www.flotcharts.org/</a></li>
										<li>Owl carousel</li>
										<li><a href="http://owlgraphic.com/owlcarousel/"> http://owlgraphic.com/owlcarousel/</a></li>
										<li>Switchery</li>
										<li><a href="https://github.com/abpetkov/switchery"> https://github.com/abpetkov/switchery</a></li>
										<li>Bootstrap select</li>
										<li><a href="https://github.com/silviomoreto/bootstrap-select"> https://github.com/silviomoreto/bootstrap-select</a></li>
										<li>Wysiwig Editor</li>
										<li><a href="http://www.tinymce.com/">http://www.tinymce.com/</a></li>
										<li>Chartist chart</li>
										<li><a href="https://gionkunz.github.io/chartist-js/"> https://gionkunz.github.io/chartist-js/</a></li>
									  </ul>
            
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
										<h6 class="panel-title txt-dark">Support</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="muted">If you have any questions that aren’t covered in this article, please mail us at <a href="mailto:support@hencework.com">support@hencework.com</a></p>
									</div>
								</div>
							</div>
					</div>
				</div>				
				<!-- /Row -->
			
			
			
      @endsection
@section('js')
	<!-- Data table JavaScript -->
	<script src="{{asset('assets/admin/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/admin/dist/js/dataTables-data.js')}}"></script>
@endsection
		

	
	
