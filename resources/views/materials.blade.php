@extends('layouts.app')

@push('page-styles')
	<link rel="stylesheet" href="{{ asset('css/bahan.css') }}?v=3">
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
				<article class="material-card-v2" data-category="format-besar">
					<img class="material-card-image" src="{{ asset('images/ciho-printing-machine.jpg') }}" alt="Mesin cetak format besar CIHOPRINTSHOP" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Flexi Frontlite</h3>
						<p class="material-desc">Bahan banner outdoor yang tahan air dan cuaca.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Flexi%20Frontlite." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="format-besar">
					<img class="material-card-image" src="{{ asset('images/portofolio-plakat-penghargaan.jpg') }}" alt="Contoh hasil cetak display CIHOPRINTSHOP" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Albatros Matte</h3>
						<p class="material-desc">Permukaan matte halus untuk banner dan display indoor.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Albatros%20Matte." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="format-besar">
					<img class="material-card-image" src="{{ asset('images/portofolio-kemasan-box-mug.jpg') }}" alt="Contoh hasil cetak produk CIHOPRINTSHOP" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Luster Photo Pearl</h3>
						<p class="material-desc">Kertas foto dengan warna tajam dan kilau lembut.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Luster%20Photo%20Pearl." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="format-besar">
					<img class="material-card-image" src="{{ asset('images/ciho-printing-machine.jpg') }}" alt="Mesin cetak format besar CIHOPRINTSHOP" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Backlite Film</h3>
						<p class="material-desc">Film tembus cahaya untuk neon box dan lightbox.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Backlite%20Film." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="stiker-label">
					<img class="material-card-image" src="{{ asset('images/portofolio-kemasan-box-mug.jpg') }}" alt="Contoh hasil cetak kemasan dan produk CIHOPRINTSHOP" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Stiker Vinyl</h3>
						<p class="material-desc">Stiker fleksibel dan tahan air untuk produk atau kendaraan.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Stiker%20Vinyl." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="stiker-label">
					<img class="material-card-image" src="{{ asset('images/portofolio-kemasan-box-mug.jpg') }}" alt="Contoh cetak label pada kemasan produk" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Stiker Chromo</h3>
						<p class="material-desc">Stiker glossy ekonomis untuk label dan kemasan kering.</p>
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
				<article class="material-card-v2" data-category="digital-a3">
					<img class="material-card-image" src="{{ asset('images/portofolio-kemasan-box-mug.jpg') }}" alt="Contoh hasil cetak kemasan produk" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Art Carton</h3>
						<p class="material-desc">Karton tebal untuk kartu nama dan kemasan premium.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Art%20Carton." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="digital-a3">
					<img class="material-card-image" src="{{ asset('images/portofolio-plakat-penghargaan.jpg') }}" alt="Contoh hasil cetak display CIHOPRINTSHOP" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Art Paper</h3>
						<p class="material-desc">Kertas glossy untuk brosur, flyer, dan katalog.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Art%20Paper." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="digital-a3">
					<img class="material-card-image" src="{{ asset('images/portofolio-kemasan-box-mug.jpg') }}" alt="Contoh hasil cetak kemasan CIHOPRINTSHOP" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Ivory Paper</h3>
						<p class="material-desc">Karton kokoh untuk box makanan dan kosmetik.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Ivory%20Paper." target="_blank" rel="noopener noreferrer">
							Tanya bahan
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</article>
				<article class="material-card-v2" data-category="digital-a3">
					<img class="material-card-image" src="{{ asset('images/portofolio-kemasan-box-mug.jpg') }}" alt="Contoh hasil cetak kemasan produk CIHOPRINTSHOP" loading="lazy" decoding="async">
					<div class="material-card-copy">
						<h3>Kraft Paper</h3>
						<p class="material-desc">Kertas cokelat bernuansa natural untuk kemasan.</p>
					</div>
					<div class="material-card-action">
						<a class="material-wa-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20bahan%20Kraft%20Paper." target="_blank" rel="noopener noreferrer">
							Tanya bahan
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
