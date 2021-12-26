<?php

require_once "assets/php/connection.php";
$hata=$connection->prepare("SELECT * FROM hata  where hata_id=?");
$hata->execute(array(2));
$hatacek=$hata->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Yazılım Yapmak Kolay İş | HataBot</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/media-queries.css">
	<link rel="stylesheet" href="assets/css/blog.css">

	<!-- Favicon and touch icons -->
	<link rel="shortcut icon" href="assets/ico/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

	<!-- Wrapper -->
	<div class="wrapper">

		<?php require_once "sections/sidebar.php";?>

		<!-- Content -->
		<div class="content">

			<!-- open sidebar menu -->
			<a class="btn btn-primary btn-customized open-menu" href="#" role="button">
				<i class="fas fa-align-left"></i> <span>Menu</span>
			</a>

			<!-- Top content -->
			<div class="top-content section-container" id="top-content">
				<div class="container">
					<div class="row">
						<div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
							<h1 class="wow fadeIn">Çözemediğiniz Hataları Birlikte Çözmek İçin <strong>HataBot
									Karşınızda</strong></h1>
							<div class="description wow fadeInLeft">
								<p>
									Yazılım yapmayı baş belası yapan hataları çözemediğiniz hatalar için geliştirdiğimiz
									site. Keyifli vakitler!

								</p>
							</div>
							<div class="buttons wow fadeInUp">
								<a class="btn btn-primary btn-customized scroll-link" href="#section-1" role="button">
									<i class="fas fa-book-open"></i> Hata Araştır
								</a>
								<a class="btn btn-primary btn-customized-2 scroll-link" href="#section-3" role="button">
									<i class="fas fa-pencil-alt"></i> Hata Oluştur
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>