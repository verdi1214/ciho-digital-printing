@extends('layouts.app')

@push('page-styles')
	<link rel="stylesheet" href="{{ asset('css/tentang.css') }}?v=2">
@endpush

@section('title', 'Tentang Kami')
@section('description', 'Kenali CIHOPRINTSHOP, partner digital printing untuk kebutuhan bisnis dan personal.')

@section('content')
	<section class="content-page about-page" aria-labelledby="about-title">
		<div class="page-wrap about-editorial">
			<div class="about-brand-line">
				<p>CIHO <span>/</span> PRINTSHOP</p>
				<p>JAKARTA <span>/</span> DIGITAL PRINTING</p>
			</div>

			<div class="about-title-row">
				<h1 id="about-title">Di balik setiap<br>cetakan,<br><span>ada cerita.</span></h1>
				<img class="about-logo-stamp" src="{{ asset('images/ciho-logo.png') }}" alt="CIHOPRINTSHOP Jakarta">
			</div>

			<figure class="about-production">
				<img src="{{ asset('images/ciho-printing-machine.jpg') }}" alt="Mesin produksi digital printing CIHOPRINTSHOP" fetchpriority="high">
				<figcaption>
					<span>PROSES PRODUKSI CIHOPRINTSHOP</span>
					<span>DETAIL KECIL, HASIL BERARTI</span>
				</figcaption>
			</figure>

			<div class="about-introduction">
				<div class="about-introduction-heading">
					<p class="about-kicker">01 / MENGENAL CIHO</p>
					<h2>Partner cetak.<br>Teman bercerita.</h2>
				</div>
				<div class="about-introduction-copy">
					<h3>Ide kamu punya karakter. Hasil cetaknya juga harus begitu.</h3>
					<p>CIHOPRINTSHOP hadir untuk membantu kebutuhan digital printing dan percetakan, untuk bisnis, acara, maupun kebutuhan personal. Kami percaya setiap ide punya cerita yang layak diwujudkan dengan hasil cetak yang tepat.</p>
					<p>Dengan pilihan bahan dan layanan yang beragam, kami membantu mencari solusi cetak yang sesuai dengan kebutuhanmu. Kami percaya perhatian pada hal kecil membuat perbedaan besar.</p>
				</div>
			</div>
		</div>

		<div class="about-end-stripe" aria-hidden="true"></div>

		<section class="about-story-section" aria-labelledby="about-story-title">
			<div class="page-wrap">
				<p class="about-kicker">02 / SEJARAH CIHO</p>
				<h2 id="about-story-title">Setiap perjalanan punya cerita.</h2>
				<p class="about-story-placeholder">[Sejarah singkat CIHO: awal berdiri dan perjalanan usaha hingga saat ini. Materi resmi akan ditambahkan di sini.]</p>
			</div>
		</section>

		<div class="about-end-stripe" aria-hidden="true"></div>
	</section>
@endsection
