<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title><?= $setting->title ?> 404</title>
    
    <!-- Favicon  -->
    <link rel="icon" href="<?= img_src($setting->icon,'assets/img/')?>">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?= base_url().'assets/css/style.css'?>" />
    <link href="<?= base_url().'assets/third/'?>font-awesome/css/font-awesome.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>4<span>0</span>4</h1>
			</div>
			<h2>Ups! Halaman yang kamu minta tidak ada</h2>
			<p>Mohon maaf nih, tampaknya kamu tersesat. Klik tombol dibawah untuk menuju halaman website</p>
			<a href="<?= ($this->uri->segment(1) == 'admin' ? backend_url():base_url())?>"><i class="fa fa-arrow-left fa-fw"></i> Kembali</a>
		</div>
	</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>