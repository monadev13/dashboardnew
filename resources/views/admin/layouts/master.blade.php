<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>@yield('title')</title>
	<meta name="description" content="Droopy is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Droopy Admin, Droopyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	@include('layouts.head')
	
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper  theme-5-active pimary-color-green">
      @include('layouts.main-header')	
      @include('layouts.sidebar-left')
      @include('layouts.sidebar-right')

      <!-- Main Content -->
      <div class="page-wrapper">
        <div class="container-fluid pt-25">
            @yield('content')
        </div>
        @include('layouts.footer')
      </div><!-- /Main Content -->
    </div><!-- /#wrapper -->
      @include('layouts.footerjs')
    </body>

</html>
            