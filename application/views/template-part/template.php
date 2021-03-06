<!DOCTYPE html>
<html>
<head>
	<title>E-PPID BWS SULAWESI IV KENDARI</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/theme.css">
  	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>

	<header>
		<div class="container primary-color-container top-header-container">
			<img src="<?= base_url() ?>assets/images/logo/logo-pu-small.png" alt="logo-pu-small"> Website BWS Sulawesi IV Kendari
		</div>
		<div class="container header-banner-background">
			<img src="<?= base_url() ?>assets/images/logo/logo-pu.png" alt="logo-pu" class="header-logo"> <span class="header-title-text">Pejabat Pengelola Informasi dan Dokumentasi (PPID) <br> Balai Wilayah Sungai Sulawesi IV Kendari</span>
		</div>
		<div class="container primary-color-container">
			<?php $this->load->view($menu); ?>   
		</div>
	</header>
	<section class="container main-section">

		<?php $this->load->view($content); ?>   

	</section>
	<footer class="container primary-color-container">
		© 2019 | P P I D - Balai Wilayah Sungai Sulawesi IV Kendari. All Rights Reserved. By SISDA BWS Sulawesi IV Kendari
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


</html>