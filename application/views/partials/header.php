<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Monitoring | Dashboard</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>back_assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet"
		  href="<?= base_url() ?>back_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?= base_url() ?>back_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?= base_url() ?>back_assets/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>back_assets/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?= base_url() ?>back_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?= base_url() ?>back_assets/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?= base_url() ?>back_assets/plugins/summernote/summernote-bs4.min.css">

<!--	mapbox-->

	<script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />


	<!--	end mapbox-->
	<style>
		* {
			transition: all 0.5s;
		}

		.blur-ios-black {
			-webkit-backdrop-filter: saturate(180%) blur(20px);
			backdrop-filter: saturate(180%) blur(15px);
			background: rgba(0, 0, 0, 0.8);
		}
	</style>

	<script>
		const baseUrl = '<?= base_url() ?>';
	</script>
</head>
<body class="hold-transition  sidebar-mini layout-fixed">
<div class="wrapper">
