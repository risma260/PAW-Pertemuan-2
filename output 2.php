<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>output pertemuan 2</title>
	<style type="text/css">
		body{
			background-image: url(pict/bg.png);
			margin: 100px 400px 0px 400px;
			text-align: center;
		}
		.content{
			background-color: #87CEFA;
			border-radius: 20%;
			width: 450px;
			text-align: center;
		}
		img{
			width: 250px;
			height: 300px;
		}
	</style>
</head>
<body>
	<div class="content">
		<h1> BIODATA</h1>
		<img src="pict/risma.jpeg" alt="risma" class="gambar">
		<?php
			$nama = "Indah Kharisma";
			$nim = 210411100147;
			$kelas = "PAW C";
			$prodi = "Teknik Informatika";
			echo "<h2> NAMA : $nama";
			echo "<h2> NIM : $nim";
			echo "<h2> KELAS : $kelas";
			echo "<h2> PRODI : $prodi";
			echo "<h2> Apakah NIM saya terdiri dari 12 angka ? ";
			$x=12;
			var_dump($x == 12);
		?>
	</div>
	<script>
		window.alert("Selamat datang di web yang berisi biodata saya");
	</script>

</body>
</html>