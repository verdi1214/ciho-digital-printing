@extends('layouts.app')

@push('page-styles')
	<link rel="stylesheet" href="{{ asset('css/beranda.css') }}?v=27">
@endpush

@push('page-scripts')
	<script src="{{ asset('js/beranda.js') }}?v=8" defer></script>
@endpush

@section('content')
	<section class="hero" id="beranda" aria-label="Beranda CIHOPRINTSHOP ">
		<img class="hero-image" src="{{ asset('images/ciho-printing-machine.jpg') }}" data-hero-image="{{ asset('images/ciho-printing-machine.jpg') }}" data-machine-image="{{ asset('images/mesin-nocai-flatbed.png') }}" data-shirt-image="{{ asset('images/hero-produk-kaos.png') }}" alt="Mesin digital printing CIHOPRINTSHOP" fetchpriority="high">
		<div class="hero-shade" aria-hidden="true"></div>
		<div class="hero-inner">
			<div class="hero-copy" aria-live="polite">
				<p class="eyebrow" id="slide-eyebrow">Produksi digital printing</p>
				<h1 id="slide-title"><span id="slide-title-main">Hasil cetak</span><br><span class="accent" id="slide-title-accent">berkualitas.</span></h1>
				<p class="hero-description" id="slide-description">Proses cetak profesional untuk kebutuhan promosi, bisnis, dan personal.</p>
				<div class="hero-services" id="slide-services" hidden>
					<div><span>01</span><strong>Digital Printing</strong></div>
					<div><span>02</span><strong>Large Format</strong></div>
					<div><span>03</span><strong>Stiker &amp; Kemasan</strong></div>
				</div>
				<div class="hero-actions">
					<a class="button" id="primary-action" data-machines-url="{{ route('machines') }}" href="{{ route('machines') }}"><span id="primary-action-label">Lihat Mesin</span> <span class="button-arrow" aria-hidden="true">→</span></a>
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
				<div class="feature-carousel-wrap" data-banner-carousel>
					<div class="feature-carousel" role="group" aria-roledescription="carousel" aria-label="Galeri banner CIHO">
						<img class="feature-carousel-image is-active" data-banner-slide src="{{ asset('images/ciho-promo-banner.png') }}" alt="Banner promo CIHO: printing, design, dan branding" aria-hidden="false">
						<img class="feature-carousel-image" data-banner-slide src="{{ asset('images/hero-produk-kaos.png') }}" alt="Kaos custom hasil cetak CIHOPRINTSHOP" aria-hidden="true">
						<img class="feature-carousel-image" data-banner-slide src="{{ asset('images/produk-plakat-tumbler.png') }}" alt="Plakat dan tumbler custom hasil cetak CIHOPRINTSHOP" aria-hidden="true">
					</div>
					<div class="feature-carousel-controls" role="group" aria-label="Kontrol galeri banner">
						<button class="feature-carousel-arrow" type="button" data-banner-direction="previous" aria-label="Gambar sebelumnya">‹</button>
						<div class="feature-carousel-dots" role="group" aria-label="Pilih gambar banner">
							<button class="feature-carousel-dot" type="button" data-banner-index="0" aria-label="Tampilkan gambar 1" aria-current="true"></button>
							<button class="feature-carousel-dot" type="button" data-banner-index="1" aria-label="Tampilkan gambar 2" aria-current="false"></button>
							<button class="feature-carousel-dot" type="button" data-banner-index="2" aria-label="Tampilkan gambar 3" aria-current="false"></button>
						</div>
						<button class="feature-carousel-arrow" type="button" data-banner-direction="next" aria-label="Gambar berikutnya">›</button>
					</div>
				</div>
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

	@php
		$machinePartners = [
			['name' => 'Hinode', 'detail' => 'Printer Outdoor & DTF', 'image' => 'hinode.svg'],
			['name' => 'Epson', 'detail' => 'SureColor SC-F531', 'image' => 'epson.svg'],
			['name' => 'Nocai', 'detail' => 'Printer Flatbed', 'image' => 'nocai.svg'],
		];
		$clients = [
			['name' => 'Pertamina', 'image' => 'pertamina.svg'],
			['name' => 'Pizza Hut', 'image' => 'pizza-hut.svg'],
			['name' => 'Samsung', 'image' => 'samsung.svg'],
			['name' => 'Tokopedia', 'image' => 'tokopedia.svg'],
			['name' => 'Traveloka', 'image' => 'traveloka.png'],
			['name' => 'BCA', 'image' => 'bca.svg'],
			['name' => 'BFI Finance', 'image' => 'bfi.png'],
			['name' => 'Bukalapak', 'image' => 'bukalapak.svg'],
			['name' => 'Bumi Langit', 'image' => 'bumi-langit.png'],
			['name' => 'Kepolisian', 'image' => 'kepolisian-ri.svg'],
			['name' => 'AQUA', 'image' => 'aqua.png'],
		];
	@endphp

	<section class="home-credibility" aria-labelledby="home-credibility-title" data-credibility-carousel>
		<div class="page-wrap">
			<div class="credibility-heading">
				<h2 id="home-credibility-title">Mesin &amp; klien kami</h2>
				<button class="credibility-toggle" type="button" aria-label="Jeda animasi mesin dan klien" aria-pressed="false">
					<span aria-hidden="true">Ⅱ</span>
				</button>
			</div>

			<div class="credibility-row">
				<h3>Didukung mesin cetak</h3>
				<div class="credibility-viewport" role="group" aria-label="Mesin cetak bergerak ke kiri" data-direction="left">
					<div class="credibility-track credibility-track-left">
						<ul class="credibility-group">
							@foreach (range(1, 3) as $machineSet)
								@foreach ($machinePartners as $machine)
									<li class="credibility-card">
										<img class="credibility-machine-logo" src="{{ asset('images/machine-logos/'.$machine['image']) }}" alt="{{ $machine['name'] }}" loading="lazy">
										<span class="credibility-detail">{{ $machine['detail'] }}</span>
									</li>
								@endforeach
							@endforeach
						</ul>
						<ul class="credibility-group" aria-hidden="true">
							@foreach (range(1, 3) as $machineSet)
								@foreach ($machinePartners as $machine)
									<li class="credibility-card">
										<img class="credibility-machine-logo" src="{{ asset('images/machine-logos/'.$machine['image']) }}" alt="" loading="lazy">
										<span class="credibility-detail">{{ $machine['detail'] }}</span>
									</li>
								@endforeach
							@endforeach
						</ul>
					</div>
				</div>
			</div>

			<div class="credibility-row">
				<h3>Dipercaya oleh</h3>
				<div class="credibility-viewport" role="group" aria-label="Klien bergerak ke kanan" data-direction="right">
					<div class="credibility-track credibility-track-right">
						<ul class="credibility-group">
							@foreach ($clients as $client)
								<li class="credibility-card">
									<img @class(['credibility-client-logo', 'credibility-client-logo-aqua' => $client['name'] === 'AQUA']) src="{{ asset('images/client-logos/'.$client['image']) }}" alt="{{ $client['name'] }}" loading="lazy">
								</li>
							@endforeach
						</ul>
						<ul class="credibility-group" aria-hidden="true">
							@foreach ($clients as $client)
								<li class="credibility-card">
									<img @class(['credibility-client-logo', 'credibility-client-logo-aqua' => $client['name'] === 'AQUA']) src="{{ asset('images/client-logos/'.$client['image']) }}" alt="" loading="lazy">
								</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
