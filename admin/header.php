<!DOCTYPE html>
<html>
<head>
	<?php 
	session_start();
	include 'cek.php';
	include 'config.php';
	?>
	<title>Data Alat</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.js"></script>	
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="" class="navbar-brand">TEI Kanesa</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">				
				<ul class="nav navbar-nav navbar-right">
					<li><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#"><?php echo $_SESSION['uname']  ?>&nbsp&nbsp<span class="glyphicon glyphicon-user"></span></a></li>
				</ul>
			</div>
		</div>
	</div>


<div class="col-md-2">
<?php 
$a  = '';
$b  = '';
$c  = '';
$d  = '';
$e  = '';
$f = '';
$g = '';

switch ($_SERVER['REQUEST_URI']) {
	case '/project_ei/admin/index.php':
		$a = 'class="active"';
		break;
	case '/project_ei/admin/alat.php':
		$b = 'class="active"';
		break;
	case '/project_ei/admin/alat_pinjam.php':
		$c = 'class="active"';
		break;
	case '/project_ei/admin/pengembalian.php':
		$d = 'class="active"';
		break;
		case '/project_ei/admin/komponen.php':
		$e = 'class="active"';
		break;
	case '/project_ei/admin/komponen_pinjam.php':
		$f = 'class="active"';
		break;
	case '/project_ei/admin/pengembaliank.php':
		$g = 'class="active"';
		break;
}

 ?>

		<div class="row"></div>
		<ul class="nav nav-pills nav-stacked">
			<li <?= $a; ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span>  Dashboard</a></li>			
			<li <?= $b; ?>><a href="alat.php"><span class="glyphicon glyphicon-briefcase"></span>  Data Alat</a></li>
			<li <?= $c; ?>><a href="alat_pinjam.php"><span class="glyphicon glyphicon-briefcase"></span>   Peminjaman Alat</a></li>
			<li <?= $d; ?>><a href="pengembalian.php"><span class="glyphicon glyphicon-briefcase"></span>   Pengembalian Alat</a></li>     					
					

			<li <?= $e; ?>><a href="komponen.php"><span class="glyphicon glyphicon-briefcase"></span>  Data Komponen</a></li>
			<li <?= $f; ?>><a href="komponen_pinjam.php"><span class="glyphicon glyphicon-briefcase"></span>   Peminjaman Komponen</a></li>
			<li <?= $g; ?>><a href="pengembaliank.php"><span class="glyphicon glyphicon-briefcase"></span></span><span style="font-size: 13px">  Pengembalian Komponen</span></a></li>     					
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>		

		</ul>
	</div>
	<div class="col-md-10">