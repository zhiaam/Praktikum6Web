<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="csstabel.css">
    <title>PRAK601</title>
</head>
<body>

<div id="wrapper">


	<div class="header">
	<img src="logo.png" alt="No Logo?" width="80" height="80" align="left">
	<h1>TUGAS PRAK601</h1>
	<br>
	<div class="content">
	<ul>
	<li><a href="index.php">Beranda</a></li>
	<li><a href="Member.php">Member</a></li>
	<li><a href="Buku.php">Buku</a></li>
	<li><a href="Peminjaman.php">Peminjaman</a></li>
	<li><a href="FormLogin.php">Login</a></li>
	<?php if(isset($_SESSION['nomor_member'])){
		echo "<li><font color='red'> Admin</font></li>";
	}?>
	</ul>
	</div>
	</div>
	
	<div class="konten">