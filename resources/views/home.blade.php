@extends('layouts.app')

@push('page-styles')
	<link rel="stylesheet" href="{{ asset('css/beranda.css') }}?v=2">
@endpush

@push('page-scripts')
	<script src="{{ asset('js/beranda.js') }}?v=1" defer></script>
@endpush

@section('content')
	<section class="hero" id="beranda" aria-label="Beranda CIHOPRINTSHOP ">
		<img class="hero-image" data-machine-image="{{ asset('images/ciho-printing-machine.jpg') }}" src="{{ asset('images/ciho-printing-machine.jpg') }}" alt="Mesin cetak digital CIHOPRINTSHOP" fetchpriority="high">
		<div class="hero-shade" aria-hidden="true"></div>
		<div class="hero-inner">
			<div class="hero-copy" aria-live="polite">
				<p class="eyebrow" id="slide-eyebrow">Solusi digital printing terpercaya</p>
				<h1 id="slide-title"><span id="slide-title-main">CIHO</span><br><span class="accent" id="slide-title-accent">Digital Printing</span></h1>
				<p class="hero-description" id="slide-description" hidden></p>
				<div class="hero-services" id="slide-services" hidden>
					<div><span>01</span><strong>Digital Printing</strong></div>
					<div><span>02</span><strong>Large Format</strong></div>
					<div><span>03</span><strong>Stiker &amp; Kemasan</strong></div>
				</div>
				<div class="hero-actions">
					<a class="button" id="primary-action" data-about-url="{{ route('about') }}" data-contact-url="{{ route('contact') }}" href="{{ route('about') }}"><span id="primary-action-label">Tentang Kami</span> <span class="button-arrow" aria-hidden="true">→</span></a>
					<a class="button-secondary" href="{{ route('project') }}">Lihat Hasil Kami <span class="button-arrow" aria-hidden="true">→</span></a>
				</div>
				<div class="slider-controls" aria-label="Kontrol slide beranda">
					<button class="slider-arrow" type="button" data-direction="previous" aria-label="Slide sebelumnya">‹</button>
					<div class="slider-dots" role="group" aria-label="Pilih slide">
						<button class="slider-dot" type="button" aria-label="Slide 1" aria-current="true"></button>
						<button class="slider-dot" type="button" aria-label="Slide 2" aria-current="false"></button>
						<button class="slider-dot" type="button" aria-label="Slide 3" aria-current="false"></button>
					</div>
					<button class="slider-arrow" type="button" data-direction="next" aria-label="Slide berikutnya">›</button>
				</div>
			</div>
		</div>
		<span class="sr-only" id="slide-announcement" aria-live="polite"></span>
	</section>
	<div class="home-ticker" role="region" aria-label="Layanan dan produk cetak CIHO">
		<div class="ticker-track">
			<div class="ticker-group">
				<span>Sticker</span><i aria-hidden="true">✦</i><span>Kaos Custom</span><i aria-hidden="true">✦</i><span>Brosur</span><i aria-hidden="true">✦</i><span>Packaging</span><i aria-hidden="true">✦</i><span>Neon Box</span><i aria-hidden="true">✦</i><span>Banner</span><i aria-hidden="true">✦</i>
			</div>
			<div class="ticker-group" aria-hidden="true">
				<span>Sticker</span><i>✦</i><span>Kaos Custom</span><i>✦</i><span>Brosur</span><i>✦</i><span>Packaging</span><i>✦</i><span>Neon Box</span><i>✦</i><span>Banner</span><i>✦</i>
			</div>
		</div>
	</div>

	<section class="home-services" id="layanan-utama">
		<div class="page-wrap">
			<div class="home-section-heading">
				<div>
					<p class="eyebrow"><span></span> Layanan utama</p>
					<h2>Cetak untuk banyak<br><span class="accent">kebutuhan.</span></h2>
				</div>
				<p class="home-section-lead">Dari media promosi hingga kemasan produk, temukan beragam solusi digital printing untuk mendukung kebutuhan bisnis, acara, dan personal Anda.</p>
			</div>
			<div class="home-service-list">
				<article class="home-service-item">
					<span class="home-item-number">01</span>
					<div><h3>Digital printing</h3><p>Brosur, kartu nama, flyer, undangan, dan kebutuhan cetak harian.</p></div>
					<a href="{{ route('contact') }}" aria-label="Tanyakan layanan digital printing">↗</a>
				</article>
				<article class="home-service-item">
					<span class="home-item-number">02</span>
					<div><h3>Large format</h3><p>Spanduk, banner, poster, dan materi promosi berukuran besar.</p></div>
					<a href="{{ route('machines') }}" aria-label="Lihat mesin produksi CIHO">↗</a>
				</article>
				<article class="home-service-item">
					<span class="home-item-number">03</span>
					<div><h3>Stiker, label & kemasan</h3><p>Label produk dan kemasan untuk kebutuhan usaha maupun personal.</p></div>
					<a href="{{ route('project') }}" aria-label="Lihat inspirasi hasil cetak">↗</a>
				</article>
			</div>
		</div>
		<div class="home-advantages">
			<div class="page-wrap">
				<section class="feature-carousel" aria-label="Keunggulan CIHO" aria-roledescription="carousel">
					<div class="feature-carousel-slides" aria-live="polite">
						<article class="feature-carousel-slide" role="group" aria-roledescription="slide" aria-label="1 dari 3">
							<div class="feature-carousel-copy">
								<p class="eyebrow"><span></span> Keunggulan CIHO / Fleksibilitas</p>
								<h2>Cetak sesuai <span>kebutuhan.</span></h2>
								<p>Pilihan bahan, ukuran, dan jumlah cetak dapat disesuaikan dengan kebutuhan bisnis maupun personal Anda.</p>
								<a class="button" href="{{ route('materials') }}">Jelajahi bahan <span class="button-arrow" aria-hidden="true">→</span></a>
							</div>
							<div class="feature-carousel-photo" aria-hidden="true"><span>Foto banner CIHO</span></div>
						</article>
						<article class="feature-carousel-slide" role="group" aria-roledescription="slide" aria-label="2 dari 3" hidden>
							<div class="feature-carousel-copy">
								<p class="eyebrow"><span></span> Keunggulan CIHO / Layanan</p>
								<h2>Dari ide, jadi <span>nyata.</span></h2>
								<p>Temukan solusi cetak untuk media promosi, merchandise, stiker, label, hingga kemasan produk.</p>
								<a class="button" href="{{ route('project') }}">Lihat hasil kami <span class="button-arrow" aria-hidden="true">→</span></a>
							</div>
							<div class="feature-carousel-photo" aria-hidden="true"><span>Foto banner CIHO</span></div>
						</article>
						<article class="feature-carousel-slide" role="group" aria-roledescription="slide" aria-label="3 dari 3" hidden>
							<div class="feature-carousel-copy">
								<p class="eyebrow"><span></span> Keunggulan CIHO / Konsultasi</p>
								<h2>Didampingi dari <span>awal.</span></h2>
								<p>Dapatkan rekomendasi bahan dan spesifikasi cetak yang tepat untuk mewujudkan proyek Anda.</p>
								<a class="button" href="{{ route('contact') }}">Konsultasi sekarang <span class="button-arrow" aria-hidden="true">→</span></a>
							</div>
							<div class="feature-carousel-photo" aria-hidden="true"><span>Foto banner CIHO</span></div>
						</article>
					</div>
					<div class="feature-carousel-controls" aria-label="Kontrol keunggulan CIHO">
						<button class="feature-carousel-arrow" type="button" data-direction="previous" aria-label="Slide keunggulan sebelumnya">‹</button>
						<div class="feature-carousel-dots" role="group" aria-label="Pilih slide keunggulan">
							<button class="feature-carousel-dot" type="button" aria-label="Slide 1" aria-current="true"></button>
							<button class="feature-carousel-dot" type="button" aria-label="Slide 2" aria-current="false"></button>
							<button class="feature-carousel-dot" type="button" aria-label="Slide 3" aria-current="false"></button>
						</div>
						<button class="feature-carousel-arrow" type="button" data-direction="next" aria-label="Slide keunggulan berikutnya">›</button>
					</div>
				</section>
			</div>
		</div>
	</section>

	<section class="home-products" id="produk-populer">
		<div class="page-wrap">
			<div class="home-section-heading">
				<div>
					<p class="eyebrow"><span></span> Produk populer</p>
					<h2>Produk favorit<br><span class="accent">Ide tanpa batas.</span></h2>
				</div>
				<a class="text-arrow" href="{{ route('project') }}">Jelajahi project <span aria-hidden="true">→</span></a>
			</div>
			<div class="popular-grid">
				<a class="popular-product" href="{{ route('contact') }}">
					<img src="{{ asset('images/produk-kaos-custom.png') }}" alt="Kaos custom hasil cetak CIHOPRINTSHOP" loading="lazy">
					<span>01 / PROMOSI</span><h3>Kaos & Jersey Custom</h3><p>Pakaian custom dengan desain menarik untuk kebutuhan acara, komunitas, dan promosi.</p>
				</a>
				<a class="popular-product" href="{{ route('contact') }}">
					<img class="popular-product-medal" src="{{ asset('images/produk-medali.png') }}" alt="Medali custom untuk acara dan perlombaan" loading="lazy">
					<span>02 / MERCHANDISE</span><h3>Medali & Lanyard</h3><p>Aksesori custom untuk perlombaan, kegiatan sekolah, dan berbagai acara spesial.</p>
				</a>
				<a class="popular-product" href="{{ route('contact') }}">
					<img src="{{ asset('images/produk-plakat-tumbler.png') }}" alt="Plakat penghargaan dan tumbler custom" loading="lazy">
					<span>03 / STATIONERY</span><h3>Plakat & Tumbler</h3><p>Pilihan souvenir dan penghargaan untuk kenang-kenangan, hadiah, maupun apresiasi acara.</p>
				</a>
				<a class="popular-product" href="{{ route('contact') }}">
					<img src="{{ asset('images/produk-powerbank-custom.png') }}" alt="Power bank custom dengan hasil cetak desain" loading="lazy">
					<span>04 / PRODUK</span><h3>Produk Custom</h3><p>Produk dengan desain dan identitas visual khusus untuk kebutuhan personal maupun bisnis.</p>
				</a>
			</div>
			<div class="products-cta"><span>Masih punya pertanyaan seputar kebutuhan cetak Anda? Mari konsultasikan bersama CIHO. </span><a class="button" href="{{ route('contact') }}">Konsultasi Pemesanan <span class="button-arrow" aria-hidden="true">→</span></a></div>
		</div>
	</section>
@endsection
