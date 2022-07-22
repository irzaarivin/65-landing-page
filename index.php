<?php  

function ambilDataSiswaRpl() {
	$data = file_get_contents("http://localhost:8080/65DigitalEnvironment/dataSiswaRpl.json");
	$data = json_decode($data);

	// $dataSiswaRpl = array(
 //        "status" => 1,
 //        "message" => "Success",
 //        "data" => $data
 //    );
 //    header('Content-Type: application/json');
 //    echo json_encode($dataSiswaRpl);

	// foreach ($data as $key => $siswa) {
	// 	echo "{$siswa->field1} | {$siswa->field2} | {$siswa->field3} | {$siswa->field5} | {$siswa->field6} | {$siswa->field7} <br>";
	// };

	return $data;
}

// echo ambilDataSiswaRpl();

$data = ambilDataSiswaRpl();

function getCurl($url) {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($curl);
	curl_close($curl);
	return json_decode($result, true);
}

$result = getCurl('https://www.googleapis.com/youtube/v3/search?key=AIzaSyDdlcSKWOx-xEGhogQFk4lWQ2pptq8BUFs&channelId=UCI_QeaRtSzhl98oze6YMHkw&maxResults=4&order=viewCount&part=snippet');
$firstYoutubeVideos = $result['items'][0]['id']['videoId'];
$secondYoutubeVideos = $result['items'][1]['id']['videoId'];
$thirdYoutubeVideos = $result['items'][2]['id']['videoId'];
$fourthYoutubeVideos = $result['items'][3]['id']['videoId'];
$firstYoutubeTitle = $result['items'][0]['snippet']['title'];
$secondYoutubeTitle = $result['items'][1]['snippet']['title'];
$thirdYoutubeTitle = $result['items'][2]['snippet']['title'];
$fourthYoutubeTitle = $result['items'][3]['snippet']['title'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>65 Digital Environment</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="aos.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>
	<link rel="stylesheet" href="hoverEffects/css/hover.css">
	<script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
</head>
<body> 

	<!-- HEADER -->
	
	<div class="header">
		<img src="source/smkn65jkt.png" alt="SMK Negeri 65 Jakarta" data-aos="fade-right">
		<div class="judul" data-aos="fade-left">
			<h1>65 DIGITAL<br>ENVIRONMENT</h1>
		</div>
		<div class="socMed">
			<a href="https://www.instagram.com/smkn65jkt.official/" target="_blank">
				<i class="fa-brands fa-instagram"></i>
			</a>
			<a href="https://www.youtube.com/channel/UCCNgtS7GYQXgwg8yXbEJgtg" target="_blank">
				<i class="fa-brands fa-youtube"></i>
			</a>
			<a href="https://smkn65jkt.blogspot.com/" target="_blank">
				<i class="fa-brands fa-blogger"></i>
			</a>
			<a href="https://smkn65-jkt.sch.id/" target="_blank">
				<i class="fa-brands fa-google"></i>
			</a>
			<a href="mailto:info@smkn65-jkt.sch.id" target="_blank">
				<i class="fa-solid fa-envelope"></i>
			</a>
			<a href="tel:628561736028" target="_blank">
				<i class="fa-solid fa-phone"></i>
			</a>
			<a href="https://www.facebook.com/smkn65jkt" target="_blank">
				<i class="fa-brands fa-facebook"></i>
			</a>
			<a href="https://www.linkedin.com/company/smkn65-jkt/" target="_blank">
				<i class="fa-brands fa-linkedin"></i>
			</a>
			<a href="https://wa.me/628561736028" target="_blank">
				<i class="fa-brands fa-whatsapp"></i>
			</a>
			<a href="https://twitter.com/65smkn" target="_blank">
				<i class="fa-brands fa-twitter"></i>
			</a>
		</div>
	</div>

	<!-- BODY -->

	<div class="body" id="body">
		
		<div class="box first">
			<h1 data-aos="fade-down">Hey you there...</h1>
			<br>
			<p data-aos="fade-up-right"><b>Do you know?</b> SMK Negeri 65 Jakarta is a school that grows with the abilities of its students. They work together use their skills to make their school the best.</p>
			<br>
			<p data-aos="fade-up-left">Because of their ability, they make a variety of software, movies, videos and photos. Then, all of their work is documented in <u>65 Digital Environment</u> as an appreciation for their efforts.</p>
		</div>

		<div class="box first" style="background-color: #0C0032;">
			<h1 data-aos="fade-down" style="color: white;">What have they done?</h1>
			<div class="container">
				<div class="cont" data-aos="fade-up-right" data-aos-delay="500">
					<h2>MM</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Odit neque facere sit repudiandae. Quae nam eius distinctio, fugiat dolorum harum praesentium voluptates id quo fugit. Facilis vel ex veritatis hic culpa, nostrum asperiores sequi eos qui corporis, maxime eius atque eligendi, perferendis saepe iure modi, ducimus deleniti molestiae tempore magnam?</p>
					<button id="visitMm" class="hvr-underline-from-center">See</button>
				</div>
				<div class="cont" data-aos="fade-up" data-aos-delay="500">
					<h2>RPL</h2>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Laborum perspiciatis nisi earum, omnis sapiente illum. Labore, eveniet, placeat. Quaerat dolore, tenetur, magni nulla reprehenderit culpa impedit veniam suscipit quos cum tempore minus laboriosam, necessitatibus accusantium dolores error quo facere rerum similique fuga repellendus, perspiciatis porro ad architecto? Ipsum, quam, est.</p>
					<button id="visitRpl" class="hvr-underline-from-center">See</button>
				</div>
				<div class="cont" data-aos="fade-up-left" data-aos-delay="500">
					<h2>PFTV</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, aliquam quae temporibus dignissimos perspiciatis maiores blanditiis dolores a. Reprehenderit voluptate consectetur officia explicabo ut minima in totam molestiae neque aliquam! Maxime incidunt quaerat doloribus ullam! Harum, accusamus? Nostrum repudiandae sed dolorum at autem deserunt error hic cumque beatae, aliquid amet.</p>
					<button id="visitPftv" class="hvr-underline-from-center">See</button>
				</div>
				<script>
					const visitMm = document.getElementById('visitMm');
					const visitRpl = document.getElementById('visitRpl');
					const visitPftv = document.getElementById('visitPftv');

					visitMm.addEventListener("click", function() {
						document.location.href = "#infoMm";
					});

					visitRpl.addEventListener("click", function() {
						document.location.href = "#infoRpl";
					});

					visitPftv.addEventListener("click", function() {
						document.location.href = "#infoPftv";
					});
				</script>
			</div>
		</div>

		<!-- INFO MM -->

		<div class="box" id="infoMm">
			<h1 data-aos="fade-down">Multimedia</h1>
			<p data-aos="fade-up"><b>Multimedia</b> is one of the majors in SMK that learns about the use of computers. Learning multimedia in SMK means that we learn how to present data in the form of sound, animation, text, images, and videos.</p>
			<div class="keahlian">
				<div data-aos="fade-down-right">
					<i class="fa-solid fa-camera"></i>
					<p>Photography</p>
				</div>
				<div data-aos="fade-down">
					<i class="fa-solid fa-photo-film"></i>
					<p>Editing</p>
				</div>
				<div data-aos="fade-down">
					<i class="fa-solid fa-print"></i>
					<p>Printing</p>
				</div>
				<div data-aos="fade-down-left">
					<i class="fa-solid fa-laptop"></i>
					<p>Design</p>
				</div>
				<div data-aos="fade-up-right">
					<i class="fa-solid fa-palette"></i>
					<p>Coloring</p>
				</div>
				<div data-aos="fade-up-left">
					<i class="fa-solid fa-shapes"></i>
					<p>Shapes</p>
				</div>
			</div>
		</div>

		<!-- INFO RPL -->

		<div class="box dark" id="infoRpl">
			<img src="rpl-projects/rpl.jpg" alt="Rekayasa Perangkat Lunak" data-aos="zoom-in-up" data-aos-delay="500">
			<h1 data-aos="fade-down">Rekayasa Perangkat Lunak</h1>
			<p data-aos="fade-up"><b>Rekayasa Perangkat Lunak</b> (Software Engineering) is a professional field that studies software development methods including creation, maintenance, organizational management of software development and quality management.</p>
			<div class="keahlian">
				<div data-aos="fade-down-right">
					<i class="fa-solid fa-robot"></i>
					<p>Robotic</p>
				</div>
				<div data-aos="fade-down">
					<i class="fa-solid fa-brain"></i>
					<p>AI</p>
				</div>
				<div data-aos="fade-down">
					<i class="fa-brands fa-apple"></i>
					<p>IOS</p>
				</div>
				<div data-aos="fade-down-left">
					<i class="fa-brands fa-android"></i>
					<p>Android</p>
				</div>
				<div data-aos="fade-up-right">
					<i class="fa-solid fa-code"></i>
					<p>Programming</p>
				</div>
				<div data-aos="fade-up">
					<i class="fa-brands fa-linux"></i>
					<p>Hacking</p>
				</div>
				<div data-aos="fade-up">
					<i class="fa-solid fa-database"></i>
					<p>Database</p>
				</div>
				<div data-aos="fade-up-left">
					<i class="fa-solid fa-server"></i>
					<p>Server</p>
				</div>
			</div>
			<h1 data-aos="fade-down">What has RPL students made?</h1>
			<div class="projectRpl">
				<a href="http://localhost/osisMpk65/" target="_blank" data-aos="fade-right">
					<img src="rpl-projects/osismpk65.jpg" alt="Website OSIS MPK SMK Negeri 65 Jakarta">
					<p>Website OSIS-MPK SMK Negeri 65 Jakarta</p>
				</a>
				<a href="http://localhost/65blog/" target="_blank" data-aos="fade-left">
					<img src="rpl-projects/65blog.jpg" alt="65Blog - Artikelnya SMK Negeri 65 Jakarta">
					<p>Website Literasi SMK Negeri 65 Jakarta</p>
				</a>
				<a href="https://fromwhere.000webhostapp.com/" target="_blank" data-aos="fade-right">
					<img src="rpl-projects/portfolioirzaarivin.jpg" alt="Website Portfolio - Irza Arivin">
					<p>Website Portfolio - Irza Arivin</p>
				</a>
				<a href="https://lintangraditya.000webhostapp.com/" target="_blank" data-aos="fade-left">
					<img src="rpl-projects/portfoliolintang.jpg" alt="Website Portfolio - Lintang Raditya">
					<p>Website Portfolio - Lintang Raditya</p>
				</a>
				<button id="goToRpl" data-aos="fade-up">See More...</button>
				<script>
					const goToRpl = document.getElementById('goToRpl');
					goToRpl.addEventListener("click", function() {
						document.location.href = "rpl-projects/";
					});
				</script>
			</div>
		</div>

		<!-- INFO PFTV -->

		<div class="box" id="infoPftv">
			<h1 data-aos="fade-down">Produksi Film & Program Televisi</h1>
			<p data-aos="fade-up"><b>Produksi Film & Program Televisi</b> (Film & Television Production) is a field of science that studies how to create forms in audio-visual complete with various processes and also acts as a center for developing science and expertise in the field of television and film that produces professional human resources who uphold ethics and cultural values.</p>
			<h1 data-aos="fade-down" style="margin: 150px auto 130px auto;">What has PFTV students made?</h1>
			<div class="yt" data-aos="fade-up">
				<div class="g-ytsubscribe" data-channelid="UCI_QeaRtSzhl98oze6YMHkw" data-layout="full" data-count="default"></div>
			</div>
			<div class="projectPftv">
				<div data-aos="fade-up" class="hvr-underline-reveal">
					<iframe src="https://www.youtube.com/embed/<?= $firstYoutubeVideos; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
					<p><?= $firstYoutubeTitle; ?></p>
				</div>
				<div data-aos="fade-up" class="hvr-underline-reveal">
					<iframe src="https://www.youtube.com/embed/<?= $secondYoutubeVideos; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
					<p><?= $secondYoutubeTitle; ?></p>
				</div>
				<div data-aos="fade-up" class="hvr-underline-reveal">
					<iframe src="https://www.youtube.com/embed/<?= $thirdYoutubeVideos; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
					<p><?= $thirdYoutubeTitle; ?></p>
				</div>
				<div data-aos="fade-up" class="hvr-underline-reveal">
					<iframe src="https://www.youtube.com/embed/<?= $fourthYoutubeVideos; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
					<p><?= $fourthYoutubeTitle; ?></p>
				</div>
				<button id="goToPftv" data-aos="fade-up">See More...</button>
				<script>
					const goToPftv = document.getElementById('goToPftv');
					goToPftv.addEventListener("click", function() {
						document.location.href = "https://www.youtube.com/channel/UCI_QeaRtSzhl98oze6YMHkw";
					});
				</script>
			</div>
		</div>

	</div>

	<!-- <script>
		visitRpl.addEventListener("click", function() {

			let xhr = new XMLHttpRequest();

			xhr.onreadystatechange = function() {

				if(xhr.readyState == 4 && xhr.status == 200) {
					let container = document.getElementById('body');
					container.innerHTML = xhr.responseText;
				};

			};

			xhr.open('GET', 'ajaxRpl.html', true);
			xhr.send();

		});
	</script> -->

	<!-- COPYRIGHT -->

	<div class="copyRights">
		<p><b><strong>Copyright © 2021</strong></b> <a style="color: white;" href="https://smkn65-jkt.sch.id/" target="_blank">SMK Negeri 65 Jakarta</a>. All Rights Reserved. Developed</a> by <a style="color: white;" href="https://fromwhere.000webhostapp.com/" target="_blank">Irza Arivin</a></p>
	</div>

	<!-- JAVASCRIPT -->

	<script src="aos.js"></script>
	<script>
		AOS.init();
	</script>
	<script type="text/javascript" src="vanilla-tilt.min.js"></script>
	<script type="text/javascript">
		VanillaTilt.init(document.querySelector(".header img"), {
			max: 35,
			speed: 400,
			glare: true,
			scale: 1.1
		});
		VanillaTilt.init(document.querySelector("#infoRpl img"), {
			max: 35,
			speed: 400,
			glare: true,
			scale: 1.1
		});
	</script>
	<script src="https://apis.google.com/js/platform.js"></script>
</body>
</html>