<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Software Engineering</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
</head>
<body>
	<div class="back" id="back">
		<i class="fa-solid fa-house"></i>
	</div>
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
	<input type="text" id="KeywordText" />
	<button type="button" id="CariHasil">Cari</button>
	<table cellspacing="0" cellpadding="7px" border="1px solid white">
		<tr>
			<td style="text-align: center; font-weight: bolder; background-color: black; padding: 20px;"><h3>No</h3></td>
			<td style="text-align: center; font-weight: bolder; background-color: black; padding: 20px;"><h3>Nama</h3></td>
			<td style="text-align: center; font-weight: bolder; background-color: black; padding: 20px;"><h3>Asal Sekolah</h3></td>
			<td style="text-align: center; font-weight: bolder; background-color: black; padding: 20px;"><h3>No. HP</h3></td>
			<td style="text-align: center; font-weight: bolder; background-color: black; padding: 20px;"><h3>Alamat</h3></td>
		</tr>

		<tbody id="TableSiswa">
		</tbody>
	</table>
</body>
</html>