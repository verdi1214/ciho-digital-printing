@extends('layouts.app')

@push('page-styles')
	<link rel="stylesheet" href="{{ asset('css/tentang.css') }}?v=9">
@endpush

@section('title', 'Tentang Kami')
@section('description', 'Kenali CIHOPRINTSHOP, partner digital printing untuk kebutuhan bisnis dan personal.')

@section('content')
	<section class="content-page about-page">
		<div class="about-masthead">
			<div class="page-wrap">
				<div class="about-masthead-top">
					<p class="eyebrow"><span></span> TENTANG / CIHO PRINTSHOP</p>
					<p class="about-masthead-note">Kenal CIHO, lihat prosesnya.</p>
				</div>
				<div class="about-masthead-content">
					<h1>Di Balik Setiap Cetakan, <span class="accent">Ada Cerita.</span></h1>
					<div class="about-masthead-bottom">
						<a class="about-scroll-link" href="#about-intro">
							<span class="about-scroll-icon" aria-hidden="true">↓</span>
							<span>Lebih dekat dengan CIHO</span>
						</a>
						<p>Bukan sekadar tinta di atas media. Kami membantu ide Anda hadir dalam cetakan yang berarti — untuk kebutuhan personal, bisnis, dan organisasi.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="page-wrap about-content" id="about-intro">
			<figure class="about-photo-wrap">
				<img class="about-photo" src="{{ asset('images/ciho-printing-machine.jpg') }}" alt="Mesin digital printing CIHOPRINTSHOP">
				<figcaption class="photo-caption">
					<span>Di balik setiap cetakan, ada proses yang teliti.</span>
					<strong>RUANG CERITA</strong>
				</figcaption>
			</figure>
			<div class="about-copy">
				<p class="eyebrow"><span></span> 01 / Mengenal CIHO</p>
				<h2>Partner cetak.<br>Teman <span class="accent">bercerita.</span></h2>
				<p>CIHO Printshop membantu kebutuhan digital printing dan percetakan untuk individu, bisnis, serta organisasi. Kami percaya setiap kebutuhan punya cerita dan layak dikerjakan dengan sepenuh perhatian.</p>
				<p>Dari memahami ide hingga merapikan detail akhir, kualitas cetak dan pelayanan menjadi pegangan kami.</p>
				<a class="button" href="{{ route('contact') }}">Diskusikan kebutuhan Anda <span class="button-arrow" aria-hidden="true">→</span></a>
			</div>
		</div>
		<div class="values-band">
			<div class="page-wrap values-grid">
				<article><span>01</span><h3>Teliti pada detail</h3><p>Ukuran, warna, dan finishing dipertimbangkan untuk hasil yang lebih sesuai.</p></article>
				<article><span>02</span><h3>Solusi fleksibel</h3><p>Beragam kebutuhan cetak untuk bisnis, acara, dan penggunaan personal.</p></article>
				<article><span>03</span><h3>Proses yang jelas</h3><p>Kebutuhan Anda dibicarakan sejak awal agar pilihan cetak lebih tepat.</p></article>
			</div>
		</div>
	</section>
@endsection
