<?php 

function ambilDataSiswaRpl($url) {
	$data = file_get_contents($url);
	$data = json_decode($data);

	return $data;
}

$siswaRpl = ambilDataSiswaRpl("http://0.0.0.0:8080/dataSiswaRpl.json");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Software Engineering</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>
</head>
<body>
	<div class="back" id="back">
		<i class="fa-solid fa-house"></i>
	</div>

	<script>
		let backToHome = document.getElementById('back');
		backToHome.addEventListener("click", function() {
			document.location.href = '../infoRpl';
		});
	</script>

	<h1 data-aos="fade-down">What has RPL students made?</h1>
	<div class="projectRpl">
		<a href="http://localhost/osisMpk65/" target="_blank" data-aos="fade-right">
			<img src="osismpk65.jpg" alt="Website OSIS MPK SMK Negeri 65 Jakarta">
			<p>Website OSIS-MPK SMK Negeri 65 Jakarta</p>
		</a>
		<a href="http://localhost/65blog/" target="_blank" data-aos="fade-left">
			<img src="65blog.jpg" alt="65Blog - Artikelnya SMK Negeri 65 Jakarta">
			<p>Website Literasi SMK Negeri 65 Jakarta</p>
		</a>
		<a href="https://fromwhere.000webhostapp.com/" target="_blank" data-aos="fade-right">
			<img src="portfolioirzaarivin.jpg" alt="Website Portfolio - Irza Arivin">
			<p>Website Portfolio - Irza Arivin</p>
		</a>
		<a href="https://lintangraditya.000webhostapp.com/" target="_blank" data-aos="fade-left">
			<img src="portfoliolintang.jpg" alt="Website Portfolio - Lintang Raditya">
			<p>Website Portfolio - Lintang Raditya</p>
		</a>
	</div>

	<h1 data-aos="fade-down">XI RPL Students :</h1>
	<form action="./ajaxCariSiswa.php" method="get">
	    <input data-aos="fade-down" type="search" name="keyword">
	    <input data-aos="fade-up" type="submit" value="Cari" name="Submit">
	</form>
	<table cellspacing="0" cellpadding="7px" border="1px solid white">
		<tr>
			<td style="text-align: center; font-weight: bolder; background-color: black; padding: 20px;"><h3>No</h3></td>
			<td style="text-align: center; font-weight: bolder; background-color: black; padding: 20px;"><h3>Nama</h3></td>
			<td style="text-align: center; font-weight: bolder; background-color: black; padding: 20px;"><h3>Asal Sekolah</h3></td>
			<td style="text-align: center; font-weight: bolder; background-color: black; padding: 20px;"><h3>No. HP</h3></td>
			<td style="text-align: center; font-weight: bolder; background-color: black; padding: 20px;"><h3>Alamat</h3></td>
		</tr>

		<?php foreach($siswaRpl as $key => $siswa) : ?>
		<tr>
			<td style="text-align: center; font-weight: bolder; background-color: black;"><h3><?= "{$siswa->field1}"; ?></h3></td>
			<td><?= "{$siswa->field3}"; ?></td>
			<td style="text-align: center;"><?= "{$siswa->field5}"; ?></td>
			<td style="text-align: center;"><?= "{$siswa->field6}"; ?></td>
			<td><?= "{$siswa->field7}"; ?></td>
		</tr>
		<?php endForeach; ?>
		
	</table>
</body>
</html>