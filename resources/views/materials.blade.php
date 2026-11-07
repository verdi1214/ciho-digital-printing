@extends('layouts.app')

@push('page-styles')
	<link rel="stylesheet" href="{{ asset('css/bahan.css') }}?v=8">
@endpush

@push('page-scripts')
	<script type="module" src="{{ asset('js/bahan.js') }}?v=4"></script>
@endpush

@section('title', 'Katalog Bahan Cetak & Finishing | CIHOPRINTSHOP')
@section('description', 'Katalog material dan pilihan cetak digital printing CIHOPRINTSHOP: HVS, Art Paper & Carton, fancy paper, sticker A3, brosur, leaflet, flyer, lanyard custom, mug custom, handuk bordir, kaos polos dengan cetak DTF A4, Paper Bag ukuran custom, gantungan kunci custom, Hard Box ukuran custom, bahan indoor, Polyfoam, Inpraboard, cetak Direct To Film (DTF), ID Card dan E-Money, cetak Ultra Violet (UV), kartu nama, Flexi Korcin, Flexi Frontlite, X-Banner, Roll Up Banner, Tripod Banner, dan finishing protektif.')

@section('content')
	<section class="content-page materials-page">
		<!-- Hero Masthead -->
		<div class="page-hero-premium">
			<div class="page-wrap">
				<div class="page-hero-header">
					<div class="badge-pill badge-pill-yellow">
						<span class="status-indicator"></span> KATALOG SPESIFIKASI MATERIAL LENGKAP
					</div>
					<h1>Panduan Material Cetak<br><span class="accent">Presisi, Kuat & Tahan Cuaca.</span></h1>
					<p class="page-lead">Setiap media cetak memiliki karakteristik fisik, daya serap tinta, dan ketahanan cuaca yang berbeda. Pilih bahan paling ideal sesuai peruntukan promosi dan anggaran bisnis Anda.</p>
				</div>

				<!-- Stats Strip -->
				<div class="stats-strip">
					<div class="stat-item">
						<span class="stat-val"><span class="stat-count" data-count="76">76</span><span class="stat-accent">+</span></span>
						<span class="stat-label">Pilihan Bahan & Cetak</span>
					</div>
					<div class="stat-item">
						<span class="stat-val"><span class="stat-count" data-count="100">100</span><span class="stat-accent">%</span></span>
						<span class="stat-label">Bahan Grade A Anti Pudar</span>
					</div>
					<div class="stat-item">
						<span class="stat-val"><span class="stat-count" data-count="4">4</span><span class="stat-accent">+</span></span>
						<span class="stat-label">Opsi Finishing & Proteksi</span>
					</div>
				</div>
			</div>
		</div>

		<!-- Filter Bar & Cards Grid -->
		<div class="page-wrap materials-content-v2">
			<!-- Interactive Category Filter Bar -->
			<div class="filter-container" id="materials-filter" role="tablist" aria-label="Filter Kategori Bahan">
				<button class="filter-btn is-active" type="button" data-filter="all">
					Semua Kategori <span class="filter-count">76</span>
				</button>
				<button class="filter-btn" type="button" data-filter="hvs">
					HVS 80gr & Pilihan Cetak <span class="filter-count">4</span>
				</button>
				<button class="filter-btn" type="button" data-filter="format-besar">
					Spanduk & Banner <span class="filter-count">8</span>
				</button>
				<button class="filter-btn" type="button" data-filter="art-paper-carton">
					Art Paper & Carton <span class="filter-count">7</span>
				</button>
				<button class="filter-btn" type="button" data-filter="stiker-label">
					Sticker A3 <span class="filter-count">5</span>
				</button>
				<button class="filter-btn" type="button" data-filter="fancy-paper">
					Fancy Paper <span class="filter-count">6</span>
				</button>
				<button class="filter-btn" type="button" data-filter="indoor">
					Indoor <span class="filter-count">5</span>
				</button>
				<button class="filter-btn" type="button" data-filter="polyfoam-inpraboard">
					Sticker Polyfoam/Inpraboard <span class="filter-count">9</span>
				</button>
				<button class="filter-btn" type="button" data-filter="dtf">
					Direct To Film (DTF) <span class="filter-count">3</span>
				</button>
				<button class="filter-btn" type="button" data-filter="id-card-e-money">
					ID Card & E-Money <span class="filter-count">6</span>
				</button>
				<button class="filter-btn" type="button" data-filter="ultra-violet">
					Ultra Violet (UV) <span class="filter-count">1</span>
				</button>
				<button class="filter-btn" type="button" data-filter="kartu-nama">
					Kartu Nama <span class="filter-count">5</span>
				</button>
				<button class="filter-btn" type="button" data-filter="brosur-leaflet-flyer">
					Brosur/Leaflet/Flyer <span class="filter-count">4</span>
				</button>
				<button class="filter-btn" type="button" data-filter="lanyard-custom">
					Lanyard Custom <span class="filter-count">2</span>
				</button>
				<button class="filter-btn" type="button" data-filter="mug-custom">
					Mug Custom <span class="filter-count">1</span>
				</button>
				<button class="filter-btn" type="button" data-filter="handuk-bordir">
					Handuk Bordir <span class="filter-count">2</span>
				</button>
				<button class="filter-btn" type="button" data-filter="kaos-polos-dtf">
					Kaos Polos <span class="filter-count">5</span>
				</button>
				<button class="filter-btn" type="button" data-filter="paper-bag">
					Paper Bag <span class="filter-count">1</span>
				</button>
				<button class="filter-btn" type="button" data-filter="gantungan-kunci">
					Gantungan Kunci <span class="filter-count">1</span>
				</button>
				<button class="filter-btn" type="button" data-filter="hard-box">
					Hard Box <span class="filter-count">1</span>
				</button>
				<button class="filter-btn" type="button" data-filter="finishing">
					Finishing & Proteksi <span class="filter-count">4</span>
				</button>
			</div>

			<!-- Material Categories -->
			<div class="material-sections" id="materials-list">
				<section class="material-category-section" data-category="hvs" data-section-order="1">
					<header class="material-section-heading">
						<span class="material-section-number">01</span>
						<h2>HVS 80gr</h2>
					</header>
					<div class="material-grid material-grid-four">
				<article class="material-card-v2" data-category="hvs">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-hvs-80gr-bw-1-side.png') }}?v=1" alt="Ilustrasi umum cetak hitam putih satu sisi pada kertas HVS 80 gram" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>HVS 80gr B&amp;W 1 sisi</h3>
						<p class="material-desc">Cetak hitam-putih satu sisi pada kertas HVS 80 gsm.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20cetak%20HVS%2080gr%20B%26W%201%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="hvs">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-hvs-80gr-bw-2-side.png') }}?v=1" alt="Ilustrasi umum cetak hitam putih dua sisi pada kertas HVS 80 gram" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>HVS 80gr B&amp;W 2 sisi</h3>
						<p class="material-desc">Cetak hitam-putih bolak-balik pada kertas HVS 80 gsm.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20cetak%20HVS%2080gr%20B%26W%202%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="hvs">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-hvs-80gr-color-1-side.png') }}?v=1" alt="Ilustrasi umum cetak warna satu sisi pada kertas HVS 80 gram" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>HVS 80gr Warna 1 sisi</h3>
						<p class="material-desc">Cetak warna satu sisi pada kertas HVS 80 gsm.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20cetak%20HVS%2080gr%20Warna%201%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="hvs">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-hvs-80gr-color-2-side.png') }}?v=1" alt="Ilustrasi umum cetak warna dua sisi pada kertas HVS 80 gram" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>HVS 80gr Warna 2 sisi</h3>
						<p class="material-desc">Cetak warna bolak-balik pada kertas HVS 80 gsm.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20cetak%20HVS%2080gr%20Warna%202%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="art-paper-carton" data-section-order="2">
					<header class="material-section-heading">
						<span class="material-section-number">02</span>
						<h2>Art Paper & Carton</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="art-paper-carton">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-art-papper-150gr.png') }}" alt="Ilustrasi umum kertas Art Papper 150 gram" width="768" height="768" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Art Papper 150gr 1 sisi</h3>
						<p class="material-desc">Kertas Art Paper 150 gram dengan cetak satu sisi, cocok untuk kebutuhan promosi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Art%20Papper%20150gr%201%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="art-paper-carton">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-art-papper-150gr.png') }}" alt="Ilustrasi umum kertas Art Papper 150 gram" width="768" height="768" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Art Papper 150gr 2 sisi</h3>
						<p class="material-desc">Kertas Art Paper 150 gram dengan cetak bolak-balik untuk materi promosi dua sisi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Art%20Papper%20150gr%202%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="art-paper-carton">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-art-carton.png') }}?v=3" alt="Ilustrasi umum lembaran Art Carton putih" width="450" height="450" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Art Carton 210gr 1 sisi</h3>
						<p class="material-desc">Kertas Art Carton 210 gram dengan cetak satu sisi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Art%20Carton%20210gr%201%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="art-paper-carton">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-art-carton.png') }}?v=3" alt="Ilustrasi umum lembaran Art Carton putih" width="450" height="450" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Art Carton 210gr 2 sisi</h3>
						<p class="material-desc">Kertas Art Carton 210 gram dengan cetak bolak-balik.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Art%20Carton%20210gr%202%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="art-paper-carton">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-art-carton.png') }}?v=3" alt="Ilustrasi umum lembaran Art Carton putih" width="450" height="450" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Art Carton 260gr 1 sisi</h3>
						<p class="material-desc">Kertas Art Carton 260 gram dengan cetak satu sisi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Art%20Carton%20260gr%201%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="art-paper-carton">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-art-carton.png') }}?v=3" alt="Ilustrasi umum lembaran Art Carton putih" width="450" height="450" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Art Carton 260gr 2 sisi</h3>
						<p class="material-desc">Kertas Art Carton 260 gram dengan cetak bolak-balik.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Art%20Carton%20260gr%202%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="art-paper-carton">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-art-carton.png') }}?v=3" alt="Ilustrasi umum lembaran Art Carton putih" width="450" height="450" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Art Carton 310gr 1 sisi</h3>
						<p class="material-desc">Kertas Art Carton 310 gram dengan cetak satu sisi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Art%20Carton%20310gr%201%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="format-besar" data-section-order="5">
					<header class="material-section-heading">
						<span class="material-section-number">05</span>
						<h2>Spanduk & Banner</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="format-besar">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-flexi-frontlite.png') }}" alt="Bahan Flexi Frontlite 280 gram dengan detail serat bahan roll to roll" width="768" height="768" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Flexi Frontlite 280gr</h3>
						<p class="material-desc">Bahan banner outdoor yang tahan air dan cuaca.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Flexi%20Frontlite%20280gr." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="format-besar">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum bahan cetak banner Flexi Korcin" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Flexi Korcin 340gr</h3>
						<p class="material-desc">Bahan Flexi Korcin 340 gram untuk kebutuhan cetak spanduk dan banner.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Flexi%20Korcin%20340gr." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="format-besar">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum bahan cetak banner Flexi Korcin" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Flexi Korcin 440gr</h3>
						<p class="material-desc">Bahan Flexi Korcin 440 gram untuk kebutuhan cetak spanduk dan banner.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Flexi%20Korcin%20440gr." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="format-besar">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum media X-Banner" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>X-Banner 60x160cm</h3>
						<p class="material-desc">Media X-Banner ukuran 60 × 160 cm untuk promosi indoor.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20X-Banner%2060x160cm." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="format-besar">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum media Roll Up Banner" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Roll Up Banner 60x160cm</h3>
						<p class="material-desc">Media Roll Up Banner ukuran 60 × 160 cm untuk kebutuhan promosi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Roll%20Up%20Banner%2060x160cm." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7-7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="format-besar">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum media Roll Up Banner" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Roll Up Banner 80x200cm</h3>
						<p class="material-desc">Media Roll Up Banner ukuran 80 × 200 cm untuk kebutuhan promosi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Roll%20Up%20Banner%2080x200cm." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="format-besar">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum Tripod Banner" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Tripod Banner A2</h3>
						<p class="material-desc">Media Tripod Banner ukuran A2 untuk menampilkan materi promosi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Tripod%20Banner%20A2." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="format-besar">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum Tripod Banner" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Tripod Banner A3</h3>
						<p class="material-desc">Media Tripod Banner ukuran A3 untuk menampilkan materi promosi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Tripod%20Banner%20A3." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="stiker-label" data-section-order="4">
					<header class="material-section-heading">
						<span class="material-section-number">04</span>
						<h2>Sticker A3</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="stiker-label">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-vinyl-glossy.png') }}?v=1" alt="Ilustrasi umum lembar stiker vinyl glossy dengan permukaan mengilap" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Stiker Vinyl Glossy</h3>
						<p class="material-desc">Ilustrasi umum stiker vinyl dengan permukaan mengilap untuk warna cetak yang tampak lebih cerah.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Stiker%20Vinyl%20Glossy." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="stiker-label">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-vinyl-matte.png') }}?v=1" alt="Ilustrasi umum lembar stiker vinyl matte dengan permukaan doff" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Stiker Vinyl Matte</h3>
						<p class="material-desc">Ilustrasi umum stiker vinyl dengan permukaan doff dan pantulan cahaya yang lebih lembut.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Stiker%20Vinyl%20Matte." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="stiker-label">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-sticker-chromo.png') }}?v=1" alt="Ilustrasi umum lembar stiker Chromo glossy dengan beberapa label warna" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Stiker Chromo</h3>
						<p class="material-desc">Ilustrasi umum stiker kertas berpermukaan glossy yang ekonomis untuk label dan kemasan kering.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Stiker%20Chromo." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="stiker-label">
					<img class="material-card-image" src="{{ asset('images/produk-plakat-tumbler.png') }}" alt="Contoh hasil cetak pada produk tumbler" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Stiker Transparan</h3>
						<p class="material-desc">Stiker bening untuk tampilan kemasan yang bersih.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Stiker%20Transparan." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="stiker-label">
					<img class="material-card-image" src="{{ asset('images/produk-medali.png') }}" alt="Contoh produk custom CIHOPRINTSHOP" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Stiker Hologram</h3>
						<p class="material-desc">Efek pelangi untuk segel dan kemasan yang lebih menarik.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Stiker%20Hologram." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="fancy-paper" data-section-order="3">
					<header class="material-section-heading">
						<span class="material-section-number">03</span>
						<h2>Fancy Paper</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="fancy-paper">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-concorde-80gr.png') }}?v=3" alt="Tumpukan kertas Concorde 80 gram bertekstur" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Concorde 80gr</h3>
						<p class="material-desc">Kertas fancy bertekstur untuk kebutuhan surat, stationery, dan cetak kreatif.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Concorde%2080gr." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="fancy-paper">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-ivory-250gr.png') }}?v=2" alt="Tumpukan kertas Ivory 250 gram" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Ivory 250gr</h3>
						<p class="material-desc">Kertas ivory 250 gram yang tebal dan kokoh, cocok untuk kemasan dan kebutuhan cetak.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Ivory%20250gr." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="fancy-paper">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-linen-230gr.png') }}?v=2" alt="Tumpukan kertas Linen Jepang 230 gram bertekstur" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Linen 230gr</h3>
						<p class="material-desc">Kertas bertekstur serat untuk undangan, kartu nama, dan kebutuhan cetak eksklusif.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Linen%20230gr." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="fancy-paper">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-jasmine-white-80gr.png') }}?v=1" alt="Kemasan kertas Jasmine White 80 gram" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Jasmine White 80gr</h3>
						<p class="material-desc">Kertas putih 80 gram untuk kebutuhan cetak dengan tampilan ringan dan elegan.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Jasmine%20White%2080gr." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="fancy-paper">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-jasmine-natural-80gr.png') }}?v=1" alt="Lembaran kertas Jasmine Plasma Natural 80 gram" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Jasmine Natural 80gr</h3>
						<p class="material-desc">Kertas Fancy Paper Jasmine Plasma natural 80 gram ukuran 79 × 109 cm, cocok untuk undangan dan kebutuhan cetak bernuansa natural.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Jasmine%20Natural%2080gr." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="fancy-paper">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-brief-card-200gr.png') }}?v=1" alt="Tumpukan kertas Brief Card (TIK) 200 gram ukuran A4" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Brief Card (TIK) 200gr</h3>
						<p class="material-desc">Kertas HVS tebal 200 gsm ukuran A4 (21,5 × 29,7 cm) untuk kebutuhan cetak kartu dan dokumen.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Brief%20Card%20(TIK)%20200gr." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="indoor" data-section-order="6">
					<header class="material-section-heading">
						<span class="material-section-number">06</span>
						<h2>Indoor</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="indoor">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-vinyl-glossy.png') }}?v=1" alt="Ilustrasi umum permukaan stiker vinyl mengilap untuk bahan Sticker Vinyl Supergloss" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Sticker Vinyl Supergloss</h3>
						<p class="material-desc">Stiker vinyl dengan permukaan ekstra mengilap untuk tampilan warna yang lebih cerah.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Sticker%20Vinyl%20Supergloss." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7-7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="indoor">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum produk cetak indoor untuk Sticker One Way" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Sticker One Way</h3>
						<p class="material-desc">Stiker perforasi satu arah untuk media kaca, dengan tampilan cetak dari luar dan pandangan dari dalam.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Sticker%20One%20Way." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7-7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="indoor">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/produk-plakat-tumbler.png') }}" alt="Contoh penggunaan stiker transparan pada produk" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Sticker Transparan</h3>
						<p class="material-desc">Stiker bening untuk kebutuhan cetak pada kaca atau kemasan dengan tampilan transparan.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Sticker%20Transparan." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="indoor">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum produk cetak indoor untuk bahan Albatros" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Albatros</h3>
						<p class="material-desc">Media cetak indoor dengan permukaan halus untuk poster, display, dan materi promosi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Albatros." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7-7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="indoor">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum produk cetak indoor untuk bahan Luster" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Luster</h3>
						<p class="material-desc">Media cetak indoor bertekstur halus dengan kilau lembut untuk foto dan materi visual.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Luster." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="polyfoam-inpraboard" data-section-order="7">
					<header class="material-section-heading">
						<span class="material-section-number">07</span>
						<h2>Sticker Polyfoam/Inpraboard</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="polyfoam-inpraboard">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum media cetak ukuran A0 Polyfoam" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>A0 Polyfoam</h3>
						<p class="material-desc">Media Polyfoam ukuran A0 untuk display dan kebutuhan promosi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20A0%20Polyfoam." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="polyfoam-inpraboard">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum media cetak ukuran A1 Polyfoam" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>A1 Polyfoam</h3>
						<p class="material-desc">Media Polyfoam ukuran A1 untuk display dan kebutuhan promosi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20A1%20Polyfoam." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="polyfoam-inpraboard">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum media cetak ukuran A2 Polyfoam" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>A2 Polyfoam</h3>
						<p class="material-desc">Media Polyfoam ukuran A2 untuk display dan kebutuhan promosi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20A2%20Polyfoam." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="polyfoam-inpraboard">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum media cetak ukuran A3 Polyfoam" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>A3 Polyfoam</h3>
						<p class="material-desc">Media Polyfoam ukuran A3 untuk display dan kebutuhan promosi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20A3%20Polyfoam." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="polyfoam-inpraboard">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum media cetak ukuran A4 Polyfoam" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>A4 Polyfoam</h3>
						<p class="material-desc">Media Polyfoam ukuran A4 untuk display dan kebutuhan promosi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20A4%20Polyfoam." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="polyfoam-inpraboard">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum media cetak ukuran A0 Inpraboard" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>A0 Inpraboard</h3>
						<p class="material-desc">Media Inpraboard ukuran A0 untuk display dan kebutuhan promosi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20A0%20Inpraboard." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="polyfoam-inpraboard">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum media cetak ukuran A1 Inpraboard" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>A1 Inpraboard</h3>
						<p class="material-desc">Media Inpraboard ukuran A1 untuk display dan kebutuhan promosi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20A1%20Inpraboard." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="polyfoam-inpraboard">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum media cetak ukuran A2 Inpraboard" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>A2 Inpraboard</h3>
						<p class="material-desc">Media Inpraboard ukuran A2 untuk display dan kebutuhan promosi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20A2%20Inpraboard." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="polyfoam-inpraboard">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-printing-products-hd.png') }}" alt="Ilustrasi umum media cetak ukuran A3 Inpraboard" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>A3 Inpraboard</h3>
						<p class="material-desc">Media Inpraboard ukuran A3 untuk display dan kebutuhan promosi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20A3%20Inpraboard." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="dtf" data-section-order="8">
					<header class="material-section-heading">
						<span class="material-section-number">08</span>
						<h2>Direct To Film (DTF)</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="dtf">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/mesin-hinode-dtf.png') }}" alt="Ilustrasi mesin cetak Direct To Film untuk layanan print DTF A3" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Print A3 - 29,7x42cm</h3>
						<p class="material-desc">Cetak Direct To Film ukuran A3, 29,7 × 42 cm, untuk kebutuhan transfer desain ke media kain.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Print%20DTF%20A3%20ukuran%2029%2C7x42cm." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="dtf">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/mesin-hinode-dtf.png') }}" alt="Ilustrasi mesin cetak Direct To Film untuk layanan print DTF A4" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Print A4 - 21x29,7cm</h3>
						<p class="material-desc">Cetak Direct To Film ukuran A4, 21 × 29,7 cm, untuk kebutuhan transfer desain ke media kain.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Print%20DTF%20A4%20ukuran%2021x29%2C7cm." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="dtf">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/mesin-hinode-dtf.png') }}" alt="Ilustrasi mesin cetak Direct To Film untuk layanan print DTF A5" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Print A5 - 14,8x21cm</h3>
						<p class="material-desc">Cetak Direct To Film ukuran A5, 14,8 × 21 cm, untuk kebutuhan transfer desain ke media kain.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Print%20DTF%20A5%20ukuran%2014%2C8x21cm." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="id-card-e-money" data-section-order="9">
					<header class="material-section-heading">
						<span class="material-section-number">09</span>
						<h2>ID Card & E-Money</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="id-card-e-money">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/produk-medali.png') }}" alt="Contoh ilustrasi produk ID card untuk cetak UV satu sisi pada bahan PVC" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>PVC - Print UV - 1 Sisi</h3>
						<p class="material-desc">Kartu PVC dengan cetak UV satu sisi untuk kebutuhan kartu identitas atau kartu custom.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20PVC%20Print%20UV%201%20Sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="id-card-e-money">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/produk-medali.png') }}" alt="Contoh ilustrasi produk ID card untuk cetak UV dua sisi pada bahan PVC" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>PVC - Print UV - 2 Sisi</h3>
						<p class="material-desc">Kartu PVC dengan cetak UV pada kedua sisi untuk kebutuhan kartu identitas atau kartu custom.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20PVC%20Print%20UV%202%20Sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="id-card-e-money">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/produk-plakat-tumbler.png') }}" alt="Contoh ilustrasi kartu Mandiri dengan cetak UV satu sisi" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Mandiri - Print UV - 1 Sisi</h3>
						<p class="material-desc">Kartu Mandiri dengan cetak UV satu sisi untuk personalisasi desain.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Mandiri%20Print%20UV%201%20Sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="id-card-e-money">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/produk-plakat-tumbler.png') }}" alt="Contoh ilustrasi kartu Mandiri dengan cetak UV dua sisi" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Mandiri - Print UV - 2 Sisi</h3>
						<p class="material-desc">Kartu Mandiri dengan cetak UV pada kedua sisi untuk personalisasi desain.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Mandiri%20Print%20UV%202%20Sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="id-card-e-money">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/produk-plakat-tumbler.png') }}" alt="Contoh ilustrasi kartu Flazz dengan cetak UV satu sisi" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Flazz - Print UV - 1 Sisi</h3>
						<p class="material-desc">Kartu Flazz dengan cetak UV satu sisi untuk personalisasi desain.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Flazz%20Print%20UV%201%20Sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="id-card-e-money">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/produk-plakat-tumbler.png') }}" alt="Contoh ilustrasi kartu Flazz dengan cetak UV dua sisi" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Flazz - Print UV - 2 Sisi</h3>
						<p class="material-desc">Kartu Flazz dengan cetak UV pada kedua sisi untuk personalisasi desain.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Flazz%20Print%20UV%202%20Sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="ultra-violet" data-section-order="10">
					<header class="material-section-heading">
						<span class="material-section-number">10</span>
						<h2>Ultra Violet (UV)</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="ultra-violet">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/mesin-nocai-flatbed.png') }}" alt="Ilustrasi mesin flatbed untuk layanan cetak Ultra Violet" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Print / 1cm</h3>
						<p class="material-desc">Layanan cetak Ultra Violet dengan perhitungan per sentimeter sesuai ukuran bidang cetak.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20cetak%20Ultra%20Violet%20(UV)%20per%201cm." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="kartu-nama" data-section-order="11">
					<header class="material-section-heading">
						<span class="material-section-number">11</span>
						<h2>Kartu Nama (1 Box: 100pcs)</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="kartu-nama">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-linen-230gr.png') }}?v=2" alt="Ilustrasi kertas Linen 230 gram untuk kartu nama cetak satu sisi" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Linen 230gr - 1 sisi</h3>
						<p class="material-desc">Kartu nama berbahan Linen 230 gram dengan cetak satu sisi. Satu box berisi 100 pcs.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20kartu%20nama%20Linen%20230gr%20cetak%201%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="kartu-nama">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-linen-230gr.png') }}?v=2" alt="Ilustrasi kertas Linen 230 gram untuk kartu nama cetak dua sisi" width="600" height="600" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Linen 230gr - 2 sisi</h3>
						<p class="material-desc">Kartu nama berbahan Linen 230 gram dengan cetak dua sisi. Satu box berisi 100 pcs.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20kartu%20nama%20Linen%20230gr%20cetak%202%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="kartu-nama">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-art-carton.png') }}" alt="Ilustrasi kertas Art Carton 210 gram untuk kartu nama cetak satu sisi" width="768" height="768" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Art Carton 210gr - 1 sisi</h3>
						<p class="material-desc">Kartu nama berbahan Art Carton 210 gram dengan cetak satu sisi. Satu box berisi 100 pcs.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20kartu%20nama%20Art%20Carton%20210gr%20cetak%201%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="kartu-nama">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-art-carton.png') }}" alt="Ilustrasi kertas Art Carton 210 gram untuk kartu nama cetak dua sisi" width="768" height="768" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Art Carton 210gr - 2 sisi</h3>
						<p class="material-desc">Kartu nama berbahan Art Carton 210 gram dengan cetak dua sisi. Satu box berisi 100 pcs.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20kartu%20nama%20Art%20Carton%20210gr%20cetak%202%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="kartu-nama">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-art-carton.png') }}" alt="Ilustrasi kertas Art Carton 260 gram untuk kartu nama cetak dua sisi" width="768" height="768" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Art Carton 260gr - 2 sisi</h3>
						<p class="material-desc">Kartu nama berbahan Art Carton 260 gram dengan cetak dua sisi. Satu box berisi 100 pcs.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20kartu%20nama%20Art%20Carton%20260gr%20cetak%202%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="brosur-leaflet-flyer" data-section-order="12">
					<header class="material-section-heading">
						<span class="material-section-number">12</span>
						<h2>Brosur/Leaflet/Flyer</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="brosur-leaflet-flyer">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-art-papper-150gr.png') }}" alt="Ilustrasi kertas Art Paper 150 gram untuk brosur A4 cetak satu sisi" width="768" height="768" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>(A4) AP 150gr - 1 sisi - 1rim</h3>
						<p class="material-desc">Cetak brosur, leaflet, atau flyer ukuran A4 pada Art Paper 150 gram, satu sisi. Paket satu rim.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20brosur%20A4%20AP%20150gr%201%20sisi%201%20rim." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="brosur-leaflet-flyer">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-art-papper-150gr.png') }}" alt="Ilustrasi kertas Art Paper 150 gram untuk brosur A4 cetak dua sisi" width="768" height="768" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>(A4) AP 150gr - 2 sisi - 1rim</h3>
						<p class="material-desc">Cetak brosur, leaflet, atau flyer ukuran A4 pada Art Paper 150 gram, dua sisi. Paket satu rim.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20brosur%20A4%20AP%20150gr%202%20sisi%201%20rim." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="brosur-leaflet-flyer">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-art-papper-150gr.png') }}" alt="Ilustrasi kertas Art Paper 150 gram untuk brosur A5 cetak satu sisi" width="768" height="768" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>(A5) AP 150gr - 1 sisi - 1rim</h3>
						<p class="material-desc">Cetak brosur, leaflet, atau flyer ukuran A5 pada Art Paper 150 gram, satu sisi. Paket satu rim.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20brosur%20A5%20AP%20150gr%201%20sisi%201%20rim." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="brosur-leaflet-flyer">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/material-art-papper-150gr.png') }}" alt="Ilustrasi kertas Art Paper 150 gram untuk brosur A5 cetak dua sisi" width="768" height="768" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>(A5) AP 150gr - 2 sisi - 1rim</h3>
						<p class="material-desc">Cetak brosur, leaflet, atau flyer ukuran A5 pada Art Paper 150 gram, dua sisi. Paket satu rim.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20brosur%20A5%20AP%20150gr%202%20sisi%201%20rim." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="lanyard-custom" data-section-order="13">
					<header class="material-section-heading">
						<span class="material-section-number">13</span>
						<h2>Lanyard Custom</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="lanyard-custom">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/portofolio-lanyard-medali.jpg') }}" alt="Contoh lanyard custom dengan medali" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Print Lanyard 1 sisi</h3>
						<p class="material-desc">Lanyard custom dengan desain cetak pada satu sisi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Print%20Lanyard%201%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="lanyard-custom">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/portofolio-lanyard-medali.jpg') }}" alt="Contoh lanyard custom dengan medali" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Print Lanyard 2 sisi</h3>
						<p class="material-desc">Lanyard custom dengan desain cetak pada kedua sisi.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Print%20Lanyard%202%20sisi." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="mug-custom" data-section-order="14">
					<header class="material-section-heading">
						<span class="material-section-number">14</span>
						<h2>Mug Custom</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="mug-custom">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/portofolio-kemasan-box-mug.jpg') }}" alt="Contoh mug putih custom dengan desain cetak" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Putih polos (bebas didesain)</h3>
						<p class="material-desc">Mug putih polos yang dapat dicetak dengan desain custom sesuai keinginan.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Mug%20Custom%20putih%20polos%20bebas%20desain." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="handuk-bordir" data-section-order="15">
					<header class="material-section-heading">
						<span class="material-section-number">15</span>
						<h2>Handuk Bordir</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="handuk-bordir">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-merchandise.png') }}" alt="Ilustrasi umum produk merchandise custom untuk handuk bordir ukuran 30 x 70 cm" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Ukuran 30x70</h3>
						<p class="material-desc">Handuk ukuran 30 × 70 cm dengan bordir custom.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20handuk%20bordir%20ukuran%2030x70." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="handuk-bordir">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-merchandise.png') }}" alt="Ilustrasi umum produk merchandise custom untuk handuk bordir ukuran 70 x 140 cm" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Ukuran 70x140</h3>
						<p class="material-desc">Handuk ukuran 70 × 140 cm dengan bordir custom.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20handuk%20bordir%20ukuran%2070x140." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="kaos-polos-dtf" data-section-order="16">
					<header class="material-section-heading">
						<span class="material-section-number">16</span>
						<h2>Kaos Polos (Include Print DTF A4)</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="kaos-polos-dtf">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/produk-kaos-custom.png') }}" alt="Contoh kaos custom dengan hasil cetak DTF" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>20s L Pendek</h3>
						<p class="material-desc">Kaos polos 20s lengan pendek, sudah termasuk cetak DTF ukuran A4.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20kaos%20polos%2020s%20lengan%20pendek%20include%20print%20DTF%20A4." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="kaos-polos-dtf">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/produk-kaos-custom.png') }}" alt="Contoh kaos custom dengan hasil cetak DTF" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>24s L Pendek</h3>
						<p class="material-desc">Kaos polos 24s lengan pendek, sudah termasuk cetak DTF ukuran A4.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20kaos%20polos%2024s%20lengan%20pendek%20include%20print%20DTF%20A4." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="kaos-polos-dtf">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/produk-kaos-custom.png') }}" alt="Contoh kaos custom dengan hasil cetak DTF" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>30s L Pendek</h3>
						<p class="material-desc">Kaos polos 30s lengan pendek, sudah termasuk cetak DTF ukuran A4.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20kaos%20polos%2030s%20lengan%20pendek%20include%20print%20DTF%20A4." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="kaos-polos-dtf">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/produk-kaos-custom.png') }}" alt="Contoh kaos custom dengan hasil cetak DTF" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>NSA L Pendek</h3>
						<p class="material-desc">Kaos polos NSA lengan pendek, sudah termasuk cetak DTF ukuran A4.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20kaos%20polos%20NSA%20lengan%20pendek%20include%20print%20DTF%20A4." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="kaos-polos-dtf">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/produk-kaos-custom.png') }}" alt="Contoh kaos custom dengan hasil cetak DTF" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Lengan Panjang</h3>
						<p class="material-desc">Kaos polos lengan panjang, sudah termasuk cetak DTF ukuran A4.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20kaos%20polos%20lengan%20panjang%20include%20print%20DTF%20A4." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="paper-bag" data-section-order="17">
					<header class="material-section-heading">
						<span class="material-section-number">17</span>
						<h2>Paper Bag</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="paper-bag">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-merchandise.png') }}" alt="Ilustrasi merchandise custom dengan contoh tas" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Ukuran Custom</h3>
						<p class="material-desc">Paper Bag ukuran custom, mulai Rp 35.000.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Paper%20Bag%20ukuran%20custom%20mulai%20Rp%2035.000." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="gantungan-kunci" data-section-order="18">
					<header class="material-section-heading">
						<span class="material-section-number">18</span>
						<h2>Gantungan Kunci</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="gantungan-kunci">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-merchandise.png') }}" alt="Ilustrasi produk Gantungan Kunci custom" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Ukuran Custom</h3>
						<p class="material-desc">Gantungan kunci ukuran custom, mulai dari Rp 10.000.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Gantungan%20Kunci%20ukuran%20custom%20mulai%20dari%20Rp%2010.000." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
				<section class="material-category-section" data-category="hard-box" data-section-order="19">
					<header class="material-section-heading">
						<span class="material-section-number">19</span>
						<h2>Hard Box</h2>
					</header>
					<div class="material-grid">
				<article class="material-card-v2" data-category="hard-box">
					<img class="material-card-image material-card-image-poster" src="{{ asset('images/ciho-banner-merchandise.png') }}" alt="Ilustrasi produk Hard Box custom" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Ukuran Custom</h3>
						<p class="material-desc">Hard Box ukuran custom, mulai dari Rp 90.000.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20Hard%20Box%20ukuran%20custom%20mulai%20dari%20Rp%2090.000." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
					</div>
				</section>
			</div>

			<!-- Finishing Studio Section -->
			<div class="finishing-studio-section" id="finishing-studio" data-category="finishing">
				<div class="finishing-studio-header">
					<div class="badge-pill">
						<span>04</span> SENTUHAN AKHIR
					</div>
					<h2>Pilihan Finishing & Proteksi Tambahan</h2>
					<p>Tingkatkan daya tahan dan estetika hasil cetakan Anda dengan lapisan pelindung anti-gores dan teknik potong mesin presisi.</p>
				</div>

				<div class="finishing-studio-grid">
					<div class="finishing-studio-card">
						<span class="finishing-badge">LAPISAN MATTE</span>
						<h4>Laminasi Doff (Matte)</h4>
						<p>Lapisan plastik tipis lembut tanpa pantulan cahaya. Memberikan kesan eksklusif, anti bekas sidik jari, dan perlindungan dari kelembapan udara.</p>
					</div>

					<div class="finishing-studio-card">
						<span class="finishing-badge">LAPISAN KILAU</span>
						<h4>Laminasi Glossy</h4>
						<p>Lapisan bening mengkilap yang memperkuat saturasi warna agar tampak lebih kontras, menyala, dan melindungi media dari cipratan cairan.</p>
					</div>

					<div class="finishing-studio-card">
						<span class="finishing-badge">POTONG POLA</span>
						<h4>Die Cut (Tembus Satuan)</h4>
						<p>Pemotongan pisau mesin presisi yang menembus seluruh lapisan hingga kertas/stiker terlepas satuan sesuai kontur bentuk bebas desain Anda.</p>
					</div>

					<div class="finishing-studio-card">
						<span class="finishing-badge">POTONG LEMBAR</span>
						<h4>Kiss Cut (Lembaran)</h4>
						<p>Pemotongan khusus stiker yang hanya menembus lapisan vinil atas tanpa merobek kertas penopang. Memudahkan pengelupasan dan praktis disimpan.</p>
					</div>
				</div>
			</div>

			<!-- Quick Recommendation Matrix -->
			<div class="matrix-section">
				<div class="matrix-header">
					<div>
						<div class="badge-pill badge-pill-yellow">PANDUAN CEPAT</div>
						<h3>Bingung Memilih Bahan yang Pas?</h3>
					</div>
					<a class="button" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20butuh%20rekomendasi%20bahan%20cetak." target="_blank" rel="noopener noreferrer">
						Konsultasi Bahan via WA <span class="button-arrow" aria-hidden="true">↗</span>
					</a>
				</div>

				<div class="matrix-grid">
					<div class="matrix-item">
						<strong>Kebutuhan 1: Spanduk & Banner Toko</strong>
						<span>Pilih: Flexi Frontlite 340g / 440g</span>
						<p>Paling kuat menghadapi panas dan hujan lebat. Alternatif hemat: Flexi 280g untuk event berdurasi singkat.</p>
					</div>

					<div class="matrix-item">
						<strong>Kebutuhan 2: Stiker Botol / Frozen Food</strong>
						<span>Pilih: Stiker Vinyl + Laminasi Doff</span>
						<p>100% anti-air dan tidak sobek saat dimasukkan ke dalam freezer es. Lem akrilik menempel sangat rekat.</p>
					</div>

					<div class="matrix-item">
						<strong>Kebutuhan 3: Display Pameran & Seminar</strong>
						<span>Pilih: Albatros Matte + Roll Up Banner</span>
						<p>Permukaan tanpa pori membuat teks kecil dan logo sangat tajam. Tidak melengkung di tepi saat dipajang.</p>
					</div>
				</div>
			</div>

			<!-- Bottom CTA Banner -->
			<div class="page-cta-v2">
				<div>
					<div class="badge-pill badge-pill-yellow">SAMPEL FISIK GRATIS</div>
					<h2>Ingin Melihat Contoh Bahan Langsung?</h2>
					<p>Kunjungi workshop kami di Jakarta untuk memegang sampel fisik material, menguji ketebalan, atau konsultasikan file Anda langsung ke tim teknis.</p>
				</div>
				<div class="page-cta-actions">
					<a class="button" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20tanya%20sampel%20bahan." target="_blank" rel="noopener noreferrer">Konsultasi Bahan via WA <span class="button-arrow" aria-hidden="true">↗</span></a>
					<a class="button-secondary" href="{{ route('location') }}">Cek Lokasi Workshop <span class="button-arrow" aria-hidden="true">→</span></a>
				</div>
			</div>
		</div>
	</section>
@endsection
