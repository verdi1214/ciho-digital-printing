@extends('layouts.app')

@push('page-styles')
	<link rel="stylesheet" href="{{ asset('css/portofolio.css') }}?v=2">
@endpush

@push('page-scripts')
	<script type="module" src="{{ asset('js/portofolio.js') }}?v=1"></script>
@endpush

@section('title', 'Portofolio & Hasil Cetak | CIHOPRINTSHOP')
@section('description', 'Lihat galeri hasil cetak digital printing CIHOPRINTSHOP: Banner promosi, label stiker kemasan, stationery kantor, dan kemasan produk berkualitas tinggi.')

@section('content')
	<section class="content-page project-page">
		<!-- Hero Masthead -->
		<div class="page-hero-premium">
			<div class="page-wrap">
				<div class="page-hero-header">
					<div class="badge-pill badge-pill-yellow">
						<span class="status-indicator"></span> BUKTI NYATA KUALITAS PRODUKSI
					</div>
					<h1>Portofolio & Hasil Cetak<br><Hasil class="accent">Kualitas Nyata, <br>Hasil Istimewa.</span></h1>
					<p class="page-lead">Jelajahi berbagai hasil produksi CIHOPRINTSHOP, mulai dari media promosi hingga kebutuhan cetak bisnis. Setiap proyek dikerjakan dengan presisi, material berkualitas, dan perhatian terhadap detail.</p>
				</div>

				<!-- Stats Strip -->
				<div class="stats-strip">
					<div class="stat-item">
						<span class="stat-val">1.000<span class="stat-accent">+</span></span>
						<span class="stat-label">Project Selesai Tiap Bulan</span>
					</div>
					<div class="stat-item">
						<span class="stat-val">100<span class="stat-accent">%</span></span>
						<span class="stat-label">Garansi Kerapian Potong</span>
					</div>
					<div class="stat-item">
						<span class="stat-val">1-2<span class="stat-accent">Hari</span></span>
						<span class="stat-label">Rata-rata Waktu Produksi</span>
					</div>
				</div>
			</div>
		</div>

		<!-- Portfolio Gallery Grid & Filter -->
		<div class="page-wrap project-content-v2">
			<!-- Interactive Category Filter Bar -->
			<div class="filter-container" id="project-filter" role="tablist" aria-label="Filter Kategori Project">
				<button class="filter-btn is-active" type="button" data-filter="all">
					Semua Project <span class="filter-count">10</span>
				</button>
				<button class="filter-btn" type="button" data-filter="merchandise">
					Merchandise & Souvenir <span class="filter-count">4</span>
				</button>
				<button class="filter-btn" type="button" data-filter="kemasan">
					Kemasan & Box <span class="filter-count">2</span>
				</button>
				<button class="filter-btn" type="button" data-filter="banner">
					Banner & Reklame <span class="filter-count">2</span>
				</button>
				<button class="filter-btn" type="button" data-filter="stiker">
					Label & Stiker <span class="filter-count">2</span>
				</button>
			</div>

			<!-- Projects Gallery -->
			<div class="project-gallery-grid" id="project-list">
				<!-- Project 1 (Featured: Jersey Kaos Custom) -->
				<article class="project-card-v2 is-featured-project" data-category="merchandise">
					<div class="project-thumb-box">
						<img class="project-thumb-img" src="{{ asset('images/portofolio-jersey-kaos.jpg') }}" alt="Jersey printing sublimasi dan kaos komunitas lari Ewako Runners" loading="lazy">
						<span class="project-category-tag">Merchandise & Apparel</span>
					</div>
					<div class="project-body">
						<h3>Jersey Printing Sublim & Kaos Komunitas Lari</h3>
						<p>Produksi jersey lari dan windbreaker komunitas dengan teknologi cetak sublimasi full color. Warna cerah beresolusi tinggi, tahan cuaca, jahitan rapi, dan material bernapas (quick-dry) untuk kenyamanan maksimal.</p>
						<div class="project-meta-row">
							<span class="project-meta-pill"><strong>Bahan:</strong> Dry-Fit Milano & Windbreaker</span>
							<span class="project-meta-pill"><strong>Cetak:</strong> Sublimasi Full Color HD</span>
							<span class="project-meta-pill"><strong>Aplikasi:</strong> Event & Komunitas Olahraga</span>
						</div>
					</div>
				</article>

				<!-- Project 2 (Lanyard & Medali) -->
				<article class="project-card-v2" data-category="merchandise">
					<div class="project-thumb-box">
						<img class="project-thumb-img" src="{{ asset('images/portofolio-lanyard-medali.jpg') }}" alt="Tali lanyard custom dan medali event Bulan K3 Nasional" loading="lazy">
						<span class="project-category-tag">Merchandise & Event</span>
					</div>
					<div class="project-body">
						<h3>Tali Lanyard Printing & Medali Fun Run</h3>
						<p>Lanyard printing dua sisi dengan bahan tissue halus, dilengkapi stopper dan pengait kokoh serta medali custom untuk perlombaan lari, gathering perusahaan, dan event nasional.</p>
						<div class="project-meta-row">
							<span class="project-meta-pill"><strong>Bahan:</strong> Tissue Lanyard 2cm</span>
							<span class="project-meta-pill"><strong>Aksesoris:</strong> Stopper + Medali Custom</span>
							<span class="project-meta-pill"><strong>Finishing:</strong> Print 2 Sisi HD</span>
						</div>
					</div>
				</article>

				<!-- Project 3 (Plakat Akrilik & Cinderamata) -->
				<article class="project-card-v2" data-category="merchandise">
					<div class="project-thumb-box">
						<img class="project-thumb-img" src="{{ asset('images/portofolio-plakat-penghargaan.jpg') }}" alt="Plakat akrilik penghargaan wisuda kedinasan dan cinderamata custom" loading="lazy">
						<span class="project-category-tag">Merchandise & Plakat</span>
					</div>
					<div class="project-body">
						<h3>Plakat Akrilik Penghargaan & Jam Meja Custom</h3>
						<p>Plakat akrilik potong laser presisi dipadukan print UV beresolusi tinggi dan dudukan kayu/box beludru mewah untuk penghargaan wisuda, kedinasan, pensiun, maupun kenang-kenangan pernikahan.</p>
						<div class="project-meta-row">
							<span class="project-meta-pill"><strong>Bahan:</strong> Akrilik Bening 5-10mm</span>
							<span class="project-meta-pill"><strong>Cetak:</strong> UV Flatbed Print</span>
							<span class="project-meta-pill"><strong>Dudukan:</strong> Kayu Solid & Box Beludru</span>
						</div>
					</div>
				</article>

				<!-- Project 4 (Hardbox Kemasan & Mug) -->
				<article class="project-card-v2" data-category="kemasan">
					<div class="project-thumb-box">
						<img class="project-thumb-img" src="{{ asset('images/portofolio-kemasan-box-mug.jpg') }}" alt="Hardbox kemasan souvenir wedding dan custom mug hampers" loading="lazy">
						<span class="project-category-tag">Kemasan & Box</span>
					</div>
					<div class="project-body">
						<h3>Hardbox Kemasan Gift Box & Souvenir Mug Custom</h3>
						<p>Kotak kemasan karton board tebal kokoh dengan cetak foil emas eksklusif, dipadukan mug keramik printing untuk paket hampers pernikahan, kenang-kenangan seminar, dan cinderamata perusahaan.</p>
						<div class="project-meta-row">
							<span class="project-meta-pill"><strong>Bahan:</strong> Rigid Hardboard + Ivory</span>
							<span class="project-meta-pill"><strong>Finishing:</strong> Foil Emas + Laminasi Doff</span>
							<span class="project-meta-pill"><strong>Include:</strong> Custom Mug Keramik</span>
						</div>
					</div>
				</article>

				<!-- Project 5 (Tumbler Custom) -->
				<article class="project-card-v2" data-category="merchandise">
					<div class="project-thumb-box">
						<img class="project-thumb-img" src="{{ asset('images/portofolio-tumbler-custom.jpg') }}" alt="Tumbler stainless steel custom print UV dan grafir souvenir" loading="lazy">
						<span class="project-category-tag">Merchandise & Souvenir</span>
					</div>
					<div class="project-body">
						<h3>Tumbler Stainless Steel Custom Print UV & Grafir</h3>
						<p>Botol minum tumbler stainless tahan panas dan dingin dengan personalisasi cetak desain floral, logo perusahaan, atau grafir nama. Hasil cetak tahan gores dan tidak mudah mengelupas.</p>
						<div class="project-meta-row">
							<span class="project-meta-pill"><strong>Bahan:</strong> Stainless Steel SUS 304</span>
							<span class="project-meta-pill"><strong>Cetak:</strong> UV Flatbed & Grafir Laser</span>
							<span class="project-meta-pill"><strong>Kapasitas:</strong> 500ml - 750ml</span>
						</div>
					</div>
				</article>

				<!-- Project 6 (Banner Backdrop) -->
				<article class="project-card-v2" data-category="banner">
					<div class="project-thumb-box">
						<img class="project-thumb-img" src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&amp;fit=crop&amp;w=1200&amp;q=85" alt="Spanduk dan backdrop promosi format lebar" loading="lazy">
						<span class="project-category-tag">Banner & Reklame</span>
					</div>
					<div class="project-body">
						<h3>Backdrop Panggung Seminar & Reklame Storefront</h3>
						<p>Produksi spanduk dan backdrop panggung format besar beresolusi tajam dengan finishing mata ayam (keling) presisi di setiap sudutnya untuk pameran berskala nasional.</p>
						<div class="project-meta-row">
							<span class="project-meta-pill"><strong>Bahan:</strong> Flexi Frontlite 440g</span>
							<span class="project-meta-pill"><strong>Finishing:</strong> Seaming + Mata Ayam</span>
							<span class="project-meta-pill"><strong>Area:</strong> Outdoor & Indoor</span>
						</div>
					</div>
				</article>

				<!-- Project 7 (Stiker Botol) -->
				<article class="project-card-v2" data-category="stiker">
					<div class="project-thumb-box">
						<img class="project-thumb-img" src="https://images.unsplash.com/photo-1547887538-e3a2f32cb1cc?auto=format&amp;fit=crop&amp;w=900&amp;q=85" alt="Label stiker kemasan botol minuman dingin" loading="lazy">
						<span class="project-category-tag">Label & Stiker</span>
					</div>
					<div class="project-body">
						<h3>Label Botol Minuman & Frozen Food Waterproof</h3>
						<p>Stiker vinyl tahan air yang direkatkan pada botol kaca dan wadah plastik dingin. Tetap menempel kuat walau terendam es batu dan suhu beku.</p>
						<div class="project-meta-row">
							<span class="project-meta-pill"><strong>Bahan:</strong> Vinyl Glossy</span>
							<span class="project-meta-pill"><strong>Potong:</strong> Kiss Cut Presisi</span>
						</div>
					</div>
				</article>

				<!-- Project 8 (Roll Up Banner) -->
				<article class="project-card-v2" data-category="banner">
					<div class="project-thumb-box">
						<img class="project-thumb-img" src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&amp;fit=crop&amp;w=900&amp;q=85" alt="Roll Up Banner promosi interior showroom" loading="lazy">
						<span class="project-category-tag">Banner & Reklame</span>
					</div>
					<div class="project-body">
						<h3>Roll Up Banner Pameran & Display Showroom</h3>
						<p>Media display promosi indoor dengan material Albatros tanpa pori. Warna solid pekat dan tidak melengkung di tepi saat dipajang tegak.</p>
						<div class="project-meta-row">
							<span class="project-meta-pill"><strong>Bahan:</strong> Albatros Matte</span>
							<span class="project-meta-pill"><strong>Rangka:</strong> Aluminium Portabel</span>
						</div>
					</div>
				</article>

				<!-- Project 9 (Stiker Hologram) -->
				<article class="project-card-v2" data-category="stiker">
					<div class="project-thumb-box">
						<img class="project-thumb-img" src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&amp;fit=crop&amp;w=900&amp;q=85" alt="Stiker hologram segel produk dan garansi" loading="lazy">
						<span class="project-category-tag">Label & Stiker</span>
					</div>
					<div class="project-body">
						<h3>Stiker Hologram Segel Produk & Garansi Resmi</h3>
						<p>Label pengaman dengan efek pelangi berkilau untuk segel kemasan barang berharga, suku cadang, dan sertifikat resmi agar terhindar dari pemalsuan.</p>
						<div class="project-meta-row">
							<span class="project-meta-pill"><strong>Bahan:</strong> Rainbow Hologram</span>
							<span class="project-meta-pill"><strong>Potong:</strong> Die Cut Satuan</span>
						</div>
					</div>
				</article>

				<!-- Project 10 (Paper Bag Distro) -->
				<article class="project-card-v2" data-category="kemasan">
					<div class="project-thumb-box">
						<img class="project-thumb-img" src="https://images.unsplash.com/photo-1530587191325-3db32d826c18?auto=format&amp;fit=crop&amp;w=900&amp;q=85" alt="Paper bag craft daur ulang ramah lingkungan" loading="lazy">
						<span class="project-category-tag">Kemasan & Box</span>
					</div>
					<div class="project-body">
						<h3>Paper Bag Distro & Hang Tag Pakaian Ramah Lingkungan</h3>
						<p>Kemasan berkarakter artisan dari kertas Kraft coklat berserat alami, memberikan identitas hangat dan bernilai estetik tinggi pada produk fashion.</p>
						<div class="project-meta-row">
							<span class="project-meta-pill"><strong>Bahan:</strong> Kraft Paper 280g</span>
							<span class="project-meta-pill"><strong>Aksen:</strong> Tali Kur + Keling Besi</span>
						</div>
					</div>
				</article>
			</div>

			<!-- Bottom CTA -->
			<div class="page-cta-v2">
				<div>
					<div class="badge-pill badge-pill-yellow">KONSULTASI GRATIS</div>
					<h2>Ingin Mencetak Project Serupa?</h2>
					<p>Kirimkan file desain Anda untuk pengecekan kesiapan file, rekomendasi bahan, dan penawaran harga terbaik dari tim CIHOPRINTSHOP.</p>
				</div>
				<div class="page-cta-actions">
					<a class="button" href="{{ route('contact') }}">Konsultasi Pemesanan <span class="button-arrow" aria-hidden="true">→</span></a>
					<a class="button-secondary" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20project%20cetak." target="_blank" rel="noopener noreferrer">Chat via WhatsApp <span class="button-arrow" aria-hidden="true">↗</span></a>
				</div>
			</div>
		</div>
	</section>
@endsection
