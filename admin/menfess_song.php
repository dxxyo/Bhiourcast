<?php
require '../script/auth.php';
require '../script/table.php';
validate();
$data = $menfess_song['get']();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bhiourcast!</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="../script/script.js" defer></script>
</head>

<body class="h-max mt-10 mb-10 bg-gradient-to-b from-[#190060] to-[#1A0014]">
	<div class="text-white flex flex-col items-center justify-center w-full">
		<img src="../assets/DMV.png" class="w-[154px]" alt="logo dmv">
		<a href="/" class="text-[36px] font-bold uppercase"> Bhiourcast</a>
		<h5 class="font-semibold text-[14px]">!- Rahasiamu 101% Aman -!</h5>
	</div>

	<div class="h-max w-full px-16 flex flex-col justify-center items-center space-y-6 mt-16 ">

		<div class="flex space-x-7 md:w-full rounded-lg items-center justify-center p-[25px] bg-white bg-opacity-10 backdrop-blur-md w-max text-white h-max border border-white border-opacity-10">
			<a href="./">Menfess</a>
			<a href="./quotes.php">Quotes</a>
			<a href="./menfess_song.php" class="font-bold">Song</a>
			<a href="./cerita.php">Cerita</a>
			<a href="./lainnya.php">Lainnya</a>
		</div>

		<h1 class="w-full text-center font-semibold tracking-wide text-4xl text-white underline pt-28">Draft</h1>
		<div class="md:w-full w-[335px] grid lg:grid-cols-2 xl:grid-cols-4 3xl:grid-cols-5 gap-y-5 grid-cols-1  pt-5">
			<?php
			foreach ($data as $x) {
				$status = $x['status'] ? 'green' : 'blue';

				echo '
					<div class="flex flex-col rounded-lg p-[25px] bg-' . $status . '-500 bg-opacity-10 backdrop-blur-md w-[335px] h-max border border-white border-opacity-10">
						<label for="to" class="text-slate-300 ml-3">To :</label>
						<h5 id="to" class="w-full mt-1 py-2 text-[14px] font-thin tracking-widest px-4 text-pink-200 bg-white bg-opacity-5 backdrop-blur-sm rounded-xl "> ' . $x['to'] . '</h5>
						<label for="from" class="mt-4 ml-3 text-slate-300">From :</label>
						<h5 id="from" class="w-full mt-1 py-2 text-[14px] font-thin tracking-widest px-4 text-pink-200 bg-white bg-opacity-5 backdrop-blur-sm rounded-xl "> ' . $x['from'] . '</h5>
						<label for="judul" class="mt-4 ml-3 text-slate-300">Judul :</label>
						<h5 id="judul" class="w-full mt-1 py-2 text-[14px] font-thin tracking-widest px-4 text-pink-200 bg-white bg-opacity-5 backdrop-blur-sm rounded-xl "> ' . $x['judul'] . '</h5>
						<label for="menit" class="mt-4 ml-3 text-slate-300">Menit :</label>
						<h5 id="menit" class="w-full mt-1 py-2 text-[14px] font-thin tracking-widest px-4 text-pink-200 bg-white bg-opacity-5 backdrop-blur-sm rounded-xl "> ' . $x['menit_ke'] . '</h5>
						<h5 id="" class="w-full mt-10 py-2 text-[16px] font-thin tracking-wide px-4 text-pink-200 bg-white bg-opacity-5 backdrop-blur-sm rounded-xl ">' . $x['message'] . '</h5>
						<button onclick="changeStatus(this, ' . $x['id'] . ', \'menfess_song\')" class="w-full text-center mt-10 py-2 text-[14px] font-bold text-black bg-green-300 rounded-xl hover:bg-white hover:scale-105 duration-200 ease-linear" value="Terbaca">✓</button>
					</div>
                ';
			}
			?>
		</div>

		<div class="flex text-sm tracking-widest w-full items-center justify-center text-white pt-3">
			<h5>Made with ❤️ by <a href="https://www.instagram.com/dmv_smkn4kotabogor/"> DMV !</a> </h5>
		</div>

	</div>

</body>

</html>