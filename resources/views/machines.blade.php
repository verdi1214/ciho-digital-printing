@extends('layouts.app')

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
				'description' => 'Untuk mencetak media berukuran besar dengan hasil yang disesuaikan dengan kebutuhan pesanan.',
				'image' => asset('images/ciho-printing-machine.jpg'),
				'image_alt' => 'Mesin digital printing format lebar di tempat produksi CIHOPRINTSHOP',
				'photo_fit' => 'cover',
				'photo_position' => 'center bottom',
				'use' => 'Cetak media format lebar.',
				'note' => 'Diskusikan bahan dan ukuran sebelum produksi.',
			], [
				'number' => 2,
				'category' => 'Mesin Outdoor',
				'title' => 'Printer Outdoor Hinode',
				'description' => 'Printer format lebar Hinode untuk kebutuhan produksi media cetak berukuran besar.',
				'image' => asset('images/mesin-hinode-outdoor.png'),
				'image_alt' => 'Printer format lebar Hinode di ruang produksi',
				'photo_fit' => 'cover',
				'photo_position' => 'center 42%',
				'use' => 'Produksi cetak media format lebar.',
				'note' => 'Tanyakan pilihan bahan dan ukuran cetak.',
			], [
				'number' => 3,
				'category' => 'Mesin Sublimasi',
				'title' => 'Epson SureColor SC-F531',
				'description' => 'Printer Epson SureColor SC-F531 untuk kebutuhan cetak sublimasi.',
				'image' => asset('images/mesin-epson-sc-f531.png'),
				'image_alt' => 'Printer Epson SureColor SC-F531 di ruang produksi',
				'photo_fit' => 'cover',
				'photo_position' => 'center 94%',
				'use' => 'Pengerjaan cetak sublimasi.',
				'note' => 'Konsultasikan bahan dan kebutuhan hasil cetak.',
			], [
				'number' => 4,
				'category' => 'Mesin Flatbed',
				'title' => 'Printer Nocai',
				'description' => 'Printer flatbed Nocai untuk kebutuhan produksi cetak.',
				'image' => asset('images/mesin-nocai-flatbed.png'),
				'image_alt' => 'Printer flatbed Nocai di ruang produksi',
				'photo_fit' => 'cover',
				'photo_position' => 'center 45%',
				'use' => 'Pengerjaan cetak menggunakan mesin flatbed.',
				'note' => 'Tanyakan detail media yang dapat dicetak.',
			], [
				'number' => 5,
				'category' => 'Mesin DTF',
				'title' => 'Printer DTF Hinode',
				'description' => 'Printer DTF Hinode untuk membantu proses cetak transfer desain.',
				'image' => asset('images/mesin-hinode-dtf.png'),
				'image_alt' => 'Printer DTF Hinode di ruang produksi',
				'photo_fit' => 'contain',
				'photo_position' => 'center',
				'use' => 'Pengerjaan cetak transfer DTF.',
				'note' => 'Konsultasikan bahan dan kebutuhan desain.',
			], [
				'number' => 6,
				'category' => 'Mesin Finishing',
				'title' => 'Mesin Laminasi',
				'description' => 'Mesin laminasi roll untuk mendukung proses finishing hasil cetak.',
				'image' => asset('images/mesin-laminasi.png'),
				'image_alt' => 'Mesin laminasi roll untuk finishing media cetak',
				'photo_fit' => 'cover',
				'photo_position' => 'center',
				'use' => 'Proses laminasi pada media cetak.',
				'note' => 'Jenis laminasi menyesuaikan kebutuhan pekerjaan.',
			],

				[
					'number' => 7,
					'category' => 'Mesin Finishing',
					'title' => 'Mesin Sealer',
					'description' => 'Mesin sealer untuk membantu proses penyegelan kemasan.',
					'image' => asset('images/mesin-sealer.png'),
					'image_alt' => 'Mesin sealer dengan conveyor belt',
					'photo_fit' => 'cover',
					'photo_position' => 'center',
					'use' => 'Penyegelan kemasan.',
					'note' => 'Sesuaikan penggunaan dengan kebutuhan kemasan.',
				],
				[
					'number' => 8,
					'category' => 'Mesin Finishing',
					'title' => 'Mesin Laminasi Roll',
					'description' => 'Mesin laminasi roll untuk membantu proses finishing cetakan.',
					'image' => asset('images/mesin-laminasi-roll.png'),
					'image_alt' => 'Mesin laminasi roll meja untuk finishing cetakan',
					'photo_fit' => 'cover',
					'photo_position' => 'center',
					'use' => 'Proses laminasi pada media cetak.',
					'note' => 'Jenis laminasi menyesuaikan kebutuhan pekerjaan.',
				],
				[
					'number' => 9,
					'category' => 'Mesin Finishing',
					'title' => 'Mesin Jilid',
					'description' => 'Mesin jilid untuk membantu proses penjilidan dokumen.',
					'image' => asset('images/mesin-jilid.png'),
					'image_alt' => 'Mesin jilid dokumen di meja produksi',
					'photo_fit' => 'cover',
					'photo_position' => 'center',
					'use' => 'Proses penjilidan dokumen.',
					'note' => 'Tanyakan jenis jilid yang tersedia.',
				],
				[
					'number' => 10,
					'category' => 'Mesin Cetak',
					'title' => 'Printer Multifungsi',
					'description' => 'Printer multifungsi untuk kebutuhan cetak dan pengelolaan dokumen.',
					'image' => asset('images/printer-multifungsi.png'),
					'image_alt' => 'Printer multifungsi di ruang produksi',
					'photo_fit' => 'cover',
					'photo_position' => 'center',
					'use' => 'Pengerjaan cetak dokumen.',
					'note' => 'Konsultasikan kebutuhan cetak dokumen.',
				],
			];
		@endphp
		<div class="page-wrap machine-content">
			<div class="machine-grid">
				@foreach ($machines as $machine)
					<article class="machine-card {{ $machine['image'] ? 'machine-card-featured' : 'machine-card-placeholder' }}">
						@if ($machine['image'])
							<div class="machine-card-visual">
								<img class="machine-photo-backdrop" src="{{ $machine['image'] }}" alt="" aria-hidden="true">
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
							<ul class="machine-points">
								<li><span aria-hidden="true">↗</span><span><strong>Fokus penggunaan</strong>{{ $machine['use'] }}</span></li>
								<li><span aria-hidden="true">✓</span><span><strong>Informasi mesin</strong>{{ $machine['note'] }}</span></li>
							</ul>
							<a class="button machine-cta" href="{{ route('contact') }}">Konsultasikan kebutuhan cetak <span class="button-arrow" aria-hidden="true">↗</span></a>
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
				<p class="machine-benefits-lead">Setiap pekerjaan punya kebutuhan yang berbeda. Ceritakan rencana cetakmu, dan tim kami akan membantu menentukan langkah yang sesuai.</p>
				<div class="machine-benefit-list">
					<article><span aria-hidden="true">↔</span><div><h3>Ukuran &amp; penempatan</h3><p>Sesuaikan ukuran hasil cetak dengan lokasi pemasangan.</p></div></article>
					<article><span aria-hidden="true">▤</span><div><h3>Bahan &amp; penggunaan</h3><p>Pilih bahan berdasarkan kebutuhan dan kondisi pemakaian.</p></div></article>
					<article><span aria-hidden="true">✳</span><div><h3>Desain &amp; berkas</h3><p>Siapkan desain agar siap diproses untuk kebutuhan cetak.</p></div></article>
				</div>
				<a class="button" href="{{ route('contact') }}">Diskusikan proyekmu <span class="button-arrow" aria-hidden="true">→</span></a>
		</section>
	</section>
@endsection
