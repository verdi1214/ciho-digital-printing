@extends('layouts.app')

@push('page-styles')
	<link rel="stylesheet" href="{{ asset('css/mesin.css') }}?v=3">
@endpush

@section('title', 'Mesin Kami')
@section('description', 'Kenali mesin digital printing format lebar yang digunakan CIHOPRINTSHOP.')

@section('content')
	<section class="content-page">
		<div class="page-hero page-hero-compact">
			<div class="page-wrap">
				<p class="eyebrow"><span></span> Katalog 10 mesin</p>
				<h1>Mesin produksi<br><span class="accent">yang tersedia.</span></h1>
				<p class="page-lead">Kenali peralatan cetak CIHOPRINTSHOP. Informasi ditampilkan sesuai dokumentasi dan spesifikasi yang sudah terverifikasi.</p>
			</div>
		</div>
		@php
			$machines = [[
				'number' => 1,
				'category' => 'Mesin Outdoor',
				'title' => 'Printer format lebar',
				'description' => 'Mesin outdoor atau wide format printer adalah mesin percetakan digital untuk mencetak desain berukuran besar dan lebar. Mesin ini digunakan untuk kebutuhan media promosi, periklanan, serta visual yang dipasang di luar maupun di dalam ruangan. Media yang dapat dicetak antara lain banner, spanduk, baliho, poster, stiker, dan berbagai bahan promosi lainnya. Dengan teknologi digital, desain dari komputer dapat langsung dicetak menjadi produk fisik sesuai ukuran dan kebutuhan pelanggan.',
				'image' => asset('images/ciho-printing-machine.jpg'),
				'image_alt' => 'Mesin digital printing format lebar di tempat produksi CIHOPRINTSHOP',
				'photo_fit' => 'cover',
				'photo_position' => 'center bottom',
			], [
				'number' => 2,
				'category' => 'Mesin Cutting Sticker',
				'title' => 'Mesin Cutting Sticker Rhinotec',
				'description' => 'Mesin Cutting Sticker Rhinotec merupakan mesin pemotong bahan stiker secara digital untuk menghasilkan berbagai bentuk, tulisan, logo, dan desain sesuai pola yang dibuat melalui komputer. Mesin ini menggunakan pisau kecil khusus yang bergerak mengikuti jalur desain sehingga dapat memotong bahan dengan tingkat ketelitian yang baik. Mesin cutting sticker biasanya digunakan dalam industri digital printing untuk kebutuhan promosi, dekorasi, branding, dan pembuatan identitas visual. Berbeda dengan printer yang mencetak gambar menggunakan tinta, mesin ini memotong bahan mengikuti bentuk desain yang telah ditentukan.',
				'image' => asset('images/mesin-hinode-outdoor.png'),
				'image_alt' => 'Mesin cutting sticker Rhinotec di ruang produksi',
				'photo_fit' => 'cover',
				'photo_position' => 'center 42%',
			], [
				'number' => 3,
				'category' => 'Mesin Sublimasi',
				'title' => 'Epson SureColor SC-F531',
				'description' => 'Epson SureColor SC-F531 merupakan printer digital dengan teknologi sublimasi untuk mencetak desain, gambar, tulisan, dan motif pada media tertentu. Mesin ini dirancang untuk produksi merchandise, produk promosi, serta kebutuhan percetakan dengan teknik transfer panas. Proses sublimasi menggunakan tinta khusus yang dicetak pada kertas transfer, lalu ditempelkan pada bahan dan diproses dengan mesin heat press pada suhu serta tekanan tertentu. Panas memindahkan tinta dari kertas ke permukaan bahan sehingga gambar menyatu dengan lapisannya. Mesin ini menghasilkan warna tajam, detail yang baik, dan gradasi halus, cocok untuk produksi merchandise dan produk custom sesuai permintaan pelanggan.',
				'image' => asset('images/mesin-epson-sc-f531.png'),
				'image_alt' => 'Printer Epson SureColor SC-F531 di ruang produksi',
				'photo_fit' => 'cover',
				'photo_position' => 'center 94%',
			], [
				'number' => 4,
				'category' => 'Mesin Flatbed',
				'title' => 'Printer Nocai',
				'description' => 'Printer Flatbed Nocai merupakan mesin digital printing yang mencetak desain, gambar, tulisan, logo, dan motif secara langsung pada permukaan media. Mesin ini memiliki meja datar untuk meletakkan bahan, sehingga dapat mencetak pada berbagai jenis media lembaran atau benda dengan permukaan datar, sesuai ukuran dan ketebalan yang mampu ditangani mesin. Berbeda dengan printer outdoor yang umumnya mencetak bahan gulungan seperti banner dan spanduk, printer flatbed difokuskan pada media lembaran dan benda datar. Mesin ini digunakan untuk kebutuhan promosi, merchandise, dekorasi, dan produk custom. Desain dari komputer dapat dikirim langsung ke mesin untuk dicetak pada media yang telah disiapkan, sehingga proses produksi lebih praktis dan hasilnya sesuai desain yang diinginkan.',
				'image' => asset('images/mesin-nocai-flatbed-baru.png'),
				'image_alt' => 'Printer flatbed Nocai dengan latar merah',
				'photo_fit' => 'cover',
				'photo_position' => 'center 45%',
			], [
				'number' => 5,
				'category' => 'Mesin DTF',
				'title' => 'Printer DTF Hinode',
				'description' => 'Printer DTF Hinode menggunakan teknologi Direct to Film (DTF), yaitu metode pencetakan desain dengan tinta khusus pada lembaran film transfer. Hasil cetak kemudian diberi bubuk perekat khusus dan dipindahkan ke permukaan kain menggunakan mesin heat press. Teknologi ini memungkinkan pencetakan desain berwarna dengan detail yang kompleks, cocok untuk kaos custom, seragam, jersey, hoodie, tote bag, dan produk tekstil lainnya. Berbeda dengan sablon manual yang memerlukan screen untuk setiap desain, DTF mencetak desain digital langsung ke film khusus sehingga prosesnya lebih fleksibel untuk pesanan satuan maupun dalam jumlah banyak.',
				'image' => asset('images/mesin-hinode-dtf.png'),
				'image_alt' => 'Printer DTF Hinode di ruang produksi',
				'photo_fit' => 'cover',
				'photo_position' => 'center',
			], [
				'number' => 6,
				'category' => 'Mesin Finishing',
				'title' => 'Laminasi Dingin',
				'description' => 'Laminasi dingin adalah proses melapisi permukaan hasil cetakan menggunakan plastik laminasi yang memiliki perekat khusus tanpa menggunakan panas. Proses ini dilakukan dengan bantuan mesin roll yang menekan plastik laminasi agar menempel secara merata pada media cetak. Laminasi dingin berfungsi untuk melindungi hasil cetakan dari debu, goresan, air, dan kerusakan, sekaligus membuat tampilan cetakan lebih rapi dan tahan lama.',
				'image' => asset('images/mesin-laminasi.png'),
				'image_alt' => 'Mesin laminasi roll untuk finishing media cetak',
				'photo_fit' => 'cover',
				'photo_position' => 'center',
			],

				[
					'number' => 7,
					'category' => 'Mesin Finishing',
					'title' => 'Mesin Sealing',
					'description' => 'Mesin sealing adalah mesin yang digunakan untuk merekatkan dan menutup kemasan plastik menggunakan panas agar kemasan tertutup rapat. Mesin ini bekerja dengan bantuan pemanas dan roller yang menarik serta menekan bagian plastik sehingga menyatu dengan kuat. Mesin sealing biasanya digunakan untuk mengemas berbagai produk agar terlindungi dari debu, udara, dan kotoran serta menjaga isi kemasan tetap aman.',
					'image' => asset('images/mesin-sealer.png'),
					'image_alt' => 'Mesin sealer dengan conveyor belt',
					'photo_fit' => 'cover',
					'photo_position' => 'center',
				],
				[
					'number' => 8,
					'category' => 'Mesin Finishing',
					'title' => 'Laminasi Panas',
					'description' => 'Laminasi panas adalah proses melapisi permukaan hasil cetakan menggunakan plastik laminasi khusus dengan bantuan suhu panas. Mesin akan memanaskan lapisan perekat pada plastik laminasi agar menempel kuat pada media cetak. Proses ini berfungsi untuk melindungi hasil cetakan dari air, debu, goresan, dan kerusakan, sekaligus membuat hasil cetakan lebih awet dan terlihat lebih rapi.',
					'image' => asset('images/mesin-laminasi-roll.png'),
					'image_alt' => 'Mesin laminasi roll meja untuk finishing cetakan',
					'photo_fit' => 'cover',
					'photo_position' => 'center',
				],
				[
					'number' => 9,
					'category' => 'Mesin Finishing',
					'title' => 'Mesin Jilid',
					'description' => 'Mesin jilid ialah perkakas pejabat atau mesin percetakan yang digunakan untuk menebuk lubang pada tepi kertas dan menyatukan helaian dokumen tersebut menggunakan gegelung (spiral) plastik atau dawai. Fungsi utamanya adalah untuk memudahkan penyusunan dan kekemasan dokumen seperti laporan, modul, atau skripsi supaya kelihatan lebih kemas, tersusun, dan profesional.',
					'image' => asset('images/mesin-jilid.png'),
					'image_alt' => 'Mesin jilid dokumen di meja produksi',
					'photo_fit' => 'cover',
					'photo_position' => 'center',
				],
				[
					'number' => 10,
					'category' => 'Mesin Cetak',
					'title' => 'Printer Multifungsi',
					'description' => 'Printer Multifungsi (Multifunction Printer / MFP) ialah mesin pemprosesan dokumen yang mengabungkan fungsi pencetak (printer), mesin fotostat (copier), pengimbas (scanner), dan faks dalam satu peranti sahaja. Penggunaan mesin ini membolehkan helaian dokumen fizikal dicetak, disalin, atau ditukar kepada format digital dengan lebih cepat, menjimatkan ruang pejabat, serta memudahkan pengurusan dokumen secara keseluruhan.',
					'image' => asset('images/printer-multifungsi.png'),
					'image_alt' => 'Printer multifungsi di ruang produksi',
					'photo_fit' => 'cover',
					'photo_position' => 'center',
				],
			];
		@endphp
		<div class="page-wrap machine-content">
			<div class="machine-grid">
				@foreach ($machines as $machine)
					<article class="machine-card {{ $machine['image'] ? 'machine-card-featured' : 'machine-card-placeholder' }}">
						@if ($machine['image'])
							<div class="machine-card-visual">
								<img class="machine-photo" src="{{ $machine['image'] }}" alt="{{ $machine['image_alt'] }}" style="object-fit: {{ $machine['photo_fit'] }}; object-position: {{ $machine['photo_position'] }};">
								<span class="machine-photo-tag">Mesin {{ sprintf('%02d', $machine['number']) }}</span>
							</div>
						@else
							<div class="machine-placeholder-visual" aria-hidden="true">
								<div class="machine-placeholder-note">
									<span>Slot mesin {{ sprintf('%02d', $machine['number']) }}</span>
									<strong>Foto mesin</strong>
									<p>Ganti area ini dengan foto mesin.</p>
								</div>
							</div>
						@endif
						<div class="machine-card-body">
							<span class="machine-type">{{ $machine['category'] }}</span>
							<h2>{{ $machine['title'] }}</h2>
							<p>{{ $machine['description'] }}</p>
						</div>
					</article>
				@endforeach
			</div>
		</div>

		<section class="machine-benefits">
			<div class="page-wrap machine-benefits-inner">
				<div class="machine-benefits-heading">
					<p class="eyebrow"><span></span> Memahami kebutuhan cetak</p>
					<h2>Format lebar, kebutuhan yang beragam.</h2>
				</div>
				<div class="machine-benefits-copy">
					<a class="button" href="{{ route('contact') }}">Konsultasikan kebutuhan cetak <span class="button-arrow" aria-hidden="true">↗</span></a>
					<p class="machine-benefits-lead">Setiap pekerjaan punya kebutuhan yang berbeda. Ceritakan rencana cetakmu, dan tim kami akan membantu menentukan langkah yang sesuai.</p>
				</div>
				<div class="machine-benefit-list">
					<article><span aria-hidden="true">↔</span><div><h3>Ukuran &amp; penempatan</h3><p>Sesuaikan ukuran hasil cetak dengan lokasi pemasangan.</p></div></article>
					<article><span aria-hidden="true">▤</span><div><h3>Bahan &amp; penggunaan</h3><p>Pilih bahan berdasarkan kebutuhan dan kondisi pemakaian.</p></div></article>
					<article><span aria-hidden="true">✳</span><div><h3>Desain &amp; berkas</h3><p>Siapkan desain agar siap diproses untuk kebutuhan cetak.</p></div></article>
				</div>
		</section>
	</section>
@endsection
