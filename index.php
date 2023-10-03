<?php
$conn = mysqli_connect("localhost", "root", "", "prakweb2023b_213040077") or die('Connections_failed');

$buku = query("SELECT * FROM buku");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar" style="background-color:aqua;">
		<div class="container-fluid">
			<h1 class="navbar-brand text-center">BUKU</h1>
		</div>
	</nav>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	<div class="cardbody row justify-content-center">
		<?php $i = 1; ?>
		<?php foreach ($buku as $book) : ?>
			<div class="card" style="width: 18rem;">
				<img src="img/<?= $book["gambar_buku"]; ?>" class="img-review" width="auto" height="auto">
				<div class="card-body">
					<h5 class="card-title"><?= $book["judul_buku"]; ?></h5>
					<h6 class="card-text">Pengarang : <?= $book["pengarang"]; ?></h6>
					<h6 class="card-text">Tahun Terbit : <?= $book["tahun_terbit"]; ?></h6>
				</div>
			</div>
			<?php $i++; ?>
		<?php endforeach; ?>
	</div>
</body>

</html>