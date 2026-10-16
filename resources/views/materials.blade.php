@extends('layouts.app')

@push('page-styles')
	<link rel="stylesheet" href="{{ asset('css/bahan.css') }}?v=1">
@endpush

@push('page-scripts')
	<script type="module" src="{{ asset('js/bahan.js') }}?v=1"></script>
@endpush

@section('title', 'Katalog Bahan Cetak & Finishing | CIHOPRINTSHOP')
@section('description', 'Katalog material digital printing berkualitas di CIHOPRINTSHOP: Flexi Frontlite, Albatros Matte, Luster Photo, Stiker Vinyl, Art Carton, dan pilihan finishing protektif.')

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
						<span class="stat-val">12<span class="stat-accent">+</span></span>
						<span class="stat-label">Pilihan Material Berkualitas</span>
					</div>
					<div class="stat-item">
						<span class="stat-val">100<span class="stat-accent">%</span></span>
						<span class="stat-label">Bahan Grade A Anti Pudar</span>
					</div>
					<div class="stat-item">
						<span class="stat-val">4<span class="stat-accent">+</span></span>
						<span class="stat-label">Opsi Finishing & Proteksi</span>
					</div>
					<div class="stat-item">
						<span class="stat-val">Free</span>
						<span class="stat-label">Konsultasi Pemilihan Bahan</span>
					</div>
				</div>
			</div>
		</div>

		<!-- Filter Bar & Cards Grid -->
		<div class="page-wrap materials-content-v2">
			<!-- Interactive Category Filter Bar -->
			<div class="filter-container" id="materials-filter" role="tablist" aria-label="Filter Kategori Bahan">
				<button class="filter-btn is-active" type="button" data-filter="all">
					Semua Kategori <span class="filter-count">12</span>
				</button>
				<button class="filter-btn" type="button" data-filter="format-besar">
					Format Besar & Banner <span class="filter-count">4</span>
				</button>
				<button class="filter-btn" type="button" data-filter="stiker-label">
					Stiker & Label Produk <span class="filter-count">4</span>
				</button>
				<button class="filter-btn" type="button" data-filter="digital-a3">
					Kertas Promosi & A3+ <span class="filter-count">4</span>
				</button>
				<button class="filter-btn" type="button" data-filter="finishing">
					Finishing & Proteksi <span class="filter-count">4</span>
				</button>
			</div>

			<!-- Material Items Grid -->
			<div class="material-grid" id="materials-list">
				<!-- 01 Format Besar: Flexi Frontlite -->
				<article class="material-card-v2" data-category="format-besar">
					<div class="material-card-top">
						<span class="badge-pill">Outdoor Heavy Duty</span>
						<span class="spec-pill spec-pill-blue">💧 100% Waterproof</span>
					</div>
					<h3>Flexi Frontlite (280g / 340g / 440g)</h3>
					<div class="material-spec-pills">
						<span class="spec-pill">Gramatur: 280g - 440g</span>
						<span class="spec-pill">Tahan UV Outdoor 1-2 Thn</span>
						<span class="spec-pill spec-pill-amber">Serat PVC Kokoh</span>
					</div>
					<p class="material-desc">Material berserat poliester berlapis PVC tebal yang tahan air, terpaan angin kencang, dan sengatan panas matahari. Pilihan utama dan paling tahan banting untuk promosi luar ruang skala menengah hingga billboard.</p>
					<div class="material-use-box">
						<strong>Rekomendasi Aplikasi:</strong>
						Spanduk toko, backdrop panggung seminar, baliho jalan raya, banner pagar proyek, dan event luar ruang.
					</div>
					<div class="material-card-action">
						<span class="spec-pill spec-pill-green">Tersedia Ready Stock</span>
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Flexi%20Frontlite." target="_blank" rel="noopener noreferrer">
							Tanya Bahan Ini
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>

				<!-- 02 Format Besar: Albatros Matte -->
				<article class="material-card-v2" data-category="format-besar">
					<div class="material-card-top">
						<span class="badge-pill">Indoor High-Res</span>
						<span class="spec-pill spec-pill-blue">Tekstur Halus Tanpa Pori</span>
					</div>
					<h3>Albatros Matte</h3>
					<div class="material-spec-pills">
						<span class="spec-pill">Sintetis Tebal 180-210µm</span>
						<span class="spec-pill">Anti Lengkung Tepi</span>
						<span class="spec-pill spec-pill-amber">Resolusi Tajam Jarak Dekat</span>
					</div>
					<p class="material-desc">Material sintetis bertekstur sehalus satin tanpa pori-pori kasar. Tidak mudah melengkung di tepi (anti-curling) dan mampu mereproduksi detail teks serta foto kecil dengan ketajaman kristal saat dilihat dari dekat.</p>
					<div class="material-use-box">
						<strong>Rekomendasi Aplikasi:</strong>
						Roll Up Banner, X-Banner, Y-Banner, Tripod Display, poster pameran mall, dan stand promosi interior.
					</div>
					<div class="material-card-action">
						<span class="spec-pill spec-pill-green">Tersedia Ready Stock</span>
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Albatros%20Matte." target="_blank" rel="noopener noreferrer">
							Tanya Bahan Ini
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>

				<!-- 03 Format Besar: Luster Photo Pearl -->
				<article class="material-card-v2" data-category="format-besar">
					<div class="material-card-top">
						<span class="badge-pill">Galeri & Portofolio</span>
						<span class="spec-pill spec-pill-amber">Kilau Mutiara Mewah</span>
					</div>
					<h3>Luster Photo Pearl</h3>
					<div class="material-spec-pills">
						<span class="spec-pill">Gramatur: 260gsm</span>
						<span class="spec-pill">Permukaan Pearl Luster</span>
						<span class="spec-pill">Gradasi Warna Halus</span>
					</div>
					<p class="material-desc">Kertas foto bersalut khusus dengan tekstur butir mutiara mewah yang memantulkan kilau elegan tanpa silau menyilaukan. Sangat akurat dalam menangkap detail bayangan (shadow) dan saturasi warna pekat.</p>
					<div class="material-use-box">
						<strong>Rekomendasi Aplikasi:</strong>
						Cetak foto pameran, lukisan digital seni rupa, display interior showroom, dan sertifikat berbingkai eksklusif.
					</div>
					<div class="material-card-action">
						<span class="spec-pill spec-pill-green">Tersedia Ready Stock</span>
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Luster%20Photo." target="_blank" rel="noopener noreferrer">
							Tanya Bahan Ini
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>

				<!-- 04 Format Besar: Backlite Film (Duratrans) -->
				<article class="material-card-v2" data-category="format-besar">
					<div class="material-card-top">
						<span class="badge-pill">Neon Box & Lightbox</span>
						<span class="spec-pill spec-pill-blue">Transmisi Cahaya Merata</span>
					</div>
					<h3>Backlite Film (Duratrans)</h3>
					<div class="material-spec-pills">
						<span class="spec-pill">Film Poliester Khusus</span>
						<span class="spec-pill">Kontras Tinggi Disorot Lampu</span>
						<span class="spec-pill spec-pill-amber">Warna Tidak Pudar</span>
					</div>
					<p class="material-desc">Material tembus cahaya berkualitas tinggi yang menyebarkan pencahayaan LED dari belakang secara merata tanpa bintik lampu. Warna tetap menyala, pekat, dan tajam baik saat lampu menyala maupun padam.</p>
					<div class="material-use-box">
						<strong>Rekomendasi Aplikasi:</strong>
						Neon box menu cafe/resto, papan reklame bioskop, lightbox display bandara, dan papan nama toko malam hari.
					</div>
					<div class="material-card-action">
						<span class="spec-pill spec-pill-green">Tersedia Ready Stock</span>
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Backlite%20Film." target="_blank" rel="noopener noreferrer">
							Tanya Bahan Ini
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>

				<!-- 05 Stiker: Stiker Vinyl (Glossy & Doff) -->
				<article class="material-card-v2" data-category="stiker-label">
					<div class="material-card-top">
						<span class="badge-pill">Tahan Air & Fleksibel</span>
						<span class="spec-pill spec-pill-blue">💧 100% Anti Robek</span>
					</div>
					<h3>Stiker Vinyl (Glossy & Doff)</h3>
					<div class="material-spec-pills">
						<span class="spec-pill">Bahan Plastik PVC Fleksibel</span>
						<span class="spec-pill">Lem Akrilik Kuat</span>
						<span class="spec-pill spec-pill-green">Tahan Frozen Food & Minyak</span>
					</div>
					<p class="material-desc">Stiker berbahan dasar vinil sintetis yang elastis dan 100% tahan air serta minyak. Mampu menempel kuat pada botol kaca, plastik, helm, hingga bodi kendaraan tanpa mudah mengelupas atau sobek.</p>
					<div class="material-use-box">
						<strong>Rekomendasi Aplikasi:</strong>
						Label minuman dingin, frozen food, branding motor/mobil, stiker distro, tumbler, dan helm.
					</div>
					<div class="material-card-action">
						<span class="spec-pill spec-pill-green">Paling Populer</span>
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Stiker%20Vinyl." target="_blank" rel="noopener noreferrer">
							Tanya Bahan Ini
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>

				<!-- 06 Stiker: Stiker Chromo -->
				<article class="material-card-v2" data-category="stiker-label">
					<div class="material-card-top">
						<span class="badge-pill">Ekonomis & Praktis</span>
						<span class="spec-pill spec-pill-amber">Harga Terbaik</span>
					</div>
					<h3>Stiker Chromo (Kertas Glossy)</h3>
					<div class="material-spec-pills">
						<span class="spec-pill">Bahan Kertas Mengkilap</span>
						<span class="spec-pill">Daya Rekat Sangat Kuat</span>
						<span class="spec-pill">Cetak Cepat Jumlah Besar</span>
					</div>
					<p class="material-desc">Stiker berbasis kertas dengan lapisan permukaan licin berkilau. Opsi paling ekonomis dan efisien untuk kemasan kering, segel kardus, atau label produk yang tidak direndam air/cairan es.</p>
					<div class="material-use-box">
						<strong>Rekomendasi Aplikasi:</strong>
						Label toples kue kering, segel dus makanan, stiker promosi kemasan snack, dan label kemasan online shop.
					</div>
					<div class="material-card-action">
						<span class="spec-pill spec-pill-green">Tersedia Ready Stock</span>
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Stiker%20Chromo." target="_blank" rel="noopener noreferrer">
							Tanya Bahan Ini
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>

				<!-- 07 Stiker: Stiker Transparan -->
				<article class="material-card-v2" data-category="stiker-label">
					<div class="material-card-top">
						<span class="badge-pill">Kesan Mewah & Bening</span>
						<span class="spec-pill spec-pill-blue">Tembus Pandang Jernih</span>
					</div>
					<h3>Stiker Transparan (Clear Vinyl)</h3>
					<div class="material-spec-pills">
						<span class="spec-pill">Vinil Bening 100%</span>
						<span class="spec-pill">Dukungan Tinta Putih UV</span>
						<span class="spec-pill">Menyatu dengan Kemasan</span>
					</div>
					<p class="material-desc">Stiker plastik tembus pandang yang membuat warna dasar kemasan tetap terlihat, memberikan efek seolah-olah desain dicetak langsung (*direct print*) ke wadah produk Anda.</p>
					<div class="material-use-box">
						<strong>Rekomendasi Aplikasi:</strong>
						Botol kaca kosmetik/skincare, cup kopi transparan, jar selai madu, kaca etalase, dan merchandise clean-look.
					</div>
					<div class="material-card-action">
						<span class="spec-pill spec-pill-green">Tersedia Ready Stock</span>
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Stiker%20Transparan." target="_blank" rel="noopener noreferrer">
							Tanya Bahan Ini
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>

				<!-- 08 Stiker: Stiker Hologram & Segel -->
				<article class="material-card-v2" data-category="stiker-label">
					<div class="material-card-top">
						<span class="badge-pill">Keamanan & Eksklusif</span>
						<span class="spec-pill spec-pill-amber">Efek Kilau Pelangi</span>
					</div>
					<h3>Stiker Hologram / Rainbow</h3>
					<div class="material-spec-pills">
						<span class="spec-pill">Efek Spektrum Cahaya</span>
						<span class="spec-pill">Anti Pemalsuan Produk</span>
						<span class="spec-pill">Daya Tarik Visual Tinggi</span>
					</div>
					<p class="material-desc">Menghasilkan kilauan spektrum warna-warni saat terkena pantulan sudut cahaya. Memberikan prestise eksklusif pada kemasan sekaligus berfungsi sebagai segel garansi keaslian produk.</p>
					<div class="material-use-box">
						<strong>Rekomendasi Aplikasi:</strong>
						Segel garansi elektronik, stiker sertifikat keaslian, merchandise komunitas limited edition, dan tiket acara.
					</div>
					<div class="material-card-action">
						<span class="spec-pill spec-pill-green">Tersedia Ready Stock</span>
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Stiker%20Hologram." target="_blank" rel="noopener noreferrer">
							Tanya Bahan Ini
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>

				<!-- 09 Digital A3+: Art Carton -->
				<article class="material-card-v2" data-category="digital-a3">
					<div class="material-card-top">
						<span class="badge-pill">Tebal & Kokoh</span>
						<span class="spec-pill spec-pill-amber">Karton Halus Licin</span>
					</div>
					<h3>Art Carton (210g / 260g / 310g)</h3>
					<div class="material-spec-pills">
						<span class="spec-pill">Gramatur: 210g, 260g, 310g</span>
						<span class="spec-pill">2 Sisi Putih Halus</span>
						<span class="spec-pill">Kuat & Tidak Melengkung</span>
					</div>
					<p class="material-desc">Kertas karton padat dengan kedua sisi putih bersih dan permukaan semi-glossy. Memberikan kesan kokoh dan premium, sangat cocok dikombinasikan dengan laminasi doff atau glossy.</p>
					<div class="material-use-box">
						<strong>Rekomendasi Aplikasi:</strong>
						Kartu nama bisnis eksklusif, map company profile, hang tag pakaian distro, cover buku, dan kartu undangan.
					</div>
					<div class="material-card-action">
						<span class="spec-pill spec-pill-green">Tersedia Ready Stock</span>
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Art%20Carton." target="_blank" rel="noopener noreferrer">
							Tanya Bahan Ini
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>

				<!-- 10 Digital A3+: Art Paper -->
				<article class="material-card-v2" data-category="digital-a3">
					<div class="material-card-top">
						<span class="badge-pill">Brosur & Flyer</span>
						<span class="spec-pill spec-pill-blue">Menyerap Tinta Presisi</span>
					</div>
					<h3>Art Paper (120g / 150g)</h3>
					<div class="material-spec-pills">
						<span class="spec-pill">Gramatur: 120g, 150g</span>
						<span class="spec-pill">Licin Mengkilap Halus</span>
						<span class="spec-pill">Mudah Dilipat Rapi</span>
					</div>
					<p class="material-desc">Kertas dengan permukaan licin mengkilap yang menyerap tinta digital secara tajam. Ringan dan sangat fleksibel untuk dilipat 2 atau 3 bagian tanpa retak pada bagian lipatan.</p>
					<div class="material-use-box">
						<strong>Rekomendasi Aplikasi:</strong>
						Flyer promosi event, brosur lipat 3, katalog produk menu, majalah mini, dan sisipan informasi kemasan.
					</div>
					<div class="material-card-action">
						<span class="spec-pill spec-pill-green">Tersedia Ready Stock</span>
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Art%20Paper." target="_blank" rel="noopener noreferrer">
							Tanya Bahan Ini
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>

				<!-- 11 Digital A3+: Ivory Paper (Food Grade) -->
				<article class="material-card-v2" data-category="digital-a3">
					<div class="material-card-top">
						<span class="badge-pill">Kemasan Konsumsi</span>
						<span class="spec-pill spec-pill-green">Sertifikasi Food Grade</span>
					</div>
					<h3>Ivory Paper (210g / 250g / 300g)</h3>
					<div class="material-spec-pills">
						<span class="spec-pill">1 Sisi Halus, 1 Sisi Doff</span>
						<span class="spec-pill">Aman Kontak Makanan</span>
						<span class="spec-pill">Tegak & Kuat Lipatan</span>
					</div>
					<p class="material-desc">Material karton khusus dengan bagian luar halus mengkilap untuk grafis tajam dan bagian dalam doff bersih higienis. Pilihan baku industri untuk box produk konsumsi dan kosmetik.</p>
					<div class="material-use-box">
						<strong>Rekomendasi Aplikasi:</strong>
						Box kemasan makanan take-away, packaging kosmetik, kotak obat farmasi, dan gift box produk retail.
					</div>
					<div class="material-card-action">
						<span class="spec-pill spec-pill-green">Tersedia Ready Stock</span>
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Ivory%20Paper." target="_blank" rel="noopener noreferrer">
							Tanya Bahan Ini
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>

				<!-- 12 Digital A3+: Kraft Paper (Eco Rustic) -->
				<article class="material-card-v2" data-category="digital-a3">
					<div class="material-card-top">
						<span class="badge-pill">Eco Vintage</span>
						<span class="spec-pill spec-pill-amber">Serat Alami Coklat</span>
					</div>
					<h3>Kraft Paper (Rustic & Eco-Friendly)</h3>
					<div class="material-spec-pills">
						<span class="spec-pill">Gramatur: 150g - 280g</span>
						<span class="spec-pill">Warna Coklat Klasik</span>
						<span class="spec-pill">Karakter Hangat & Estetik</span>
					</div>
					<p class="material-desc">Kertas daur ulang berserat alami berwarna coklat klasik yang memberikan karakter hangat, ramah lingkungan, dan bernuansa artisan (*craftmanship*) yang sangat diminati pasar masa kini.</p>
					<div class="material-use-box">
						<strong>Rekomendasi Aplikasi:</strong>
						Paper bag distro, hang tag pakaian rustic, sleeve cup kopi cafe, kemasan sabun organik, dan kartu ucapan.
					</div>
					<div class="material-card-action">
						<span class="spec-pill spec-pill-green">Tersedia Ready Stock</span>
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Kraft%20Paper." target="_blank" rel="noopener noreferrer">
							Tanya Bahan Ini
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
			</div>

			<!-- Finishing Studio Section -->
			<div class="finishing-studio-section" id="finishing-studio">
				<div class="finishing-studio-header">
					<div class="badge-pill">
						<span>04</span> SENTUHAN AKHIR
					</div>
					<h3>Pilihan Finishing & Proteksi Tambahan</h3>
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
