<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Sistema Web</title>
	<link href="../css/admin.css" rel="stylesheet" />
	<link rel="shortcut icon" href="../../img/logo.ico" type="image/x-icon">
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
	<!-- Bootstrap CSS v5.0.2 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- cdn icnonos-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<a class="navbar-brand" href="../index.php"></a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
		< <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?= $_SESSION['nombre'] ?> <?= $_SESSION['apellido'] ?> <i class="fas fa-user fa-fw"></i></a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a class="dropdown-item" href="#">Configuración </a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="../vistas/logout.php">Salir</a>
				</div>
			</li>
			</ul>
	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
				<div class="sb-sidenav-menu">
					<div class="nav">
						<a class="nav-link" href="#">
							<div class="sb-nav-link-icon"><i class="bi bi-code-square"></i></i></div>
							Dashboard
						</a>


						<div class="sb-sidenav-menu-heading">Interface</div>
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
							<div class="sb-nav-link-icon"><i class="bi bi-person-badge"></i></div>
							Clientes
							<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
						</a>
						<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
							<nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../admin/clientes.php">Ajustes</a></nav>
						</div>

						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
							<div class="sb-nav-link-icon"><i class="bi bi-person-bounding-box"></i></i></div>
							Autos
							<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
						</a>
						<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
							<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

								<nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../admin/autos.php">Ajustes</a></nav>
						</div>

						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapProve" aria-expanded="false" aria-controls="collapProve">
							<div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
							Compras
							<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
						</a>
						<div class="collapse" id="collapProve" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
							<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
								<nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link" href="../admin/compras.php">Ver</a>
								</nav>
							</nav>
						</div>

						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapCorreos" aria-expanded="false" aria-controls="collapCorreos">
							<div class="sb-nav-link-icon"><i class="bi bi-envelope-fill"></i></div>
							Correos
							<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
						</a>
						<div class="collapse" id="collapCorreos" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
							<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
								<nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link" href="../admin/correos.php">Ver correos</a>
								</nav>
							</nav>
						</div>






					</div>
				</div>

			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>