@extends('layouts.app')

@push('page-styles')
	<link rel="stylesheet" href="{{ asset('css/portofolio.css') }}?v=5">
@endpush

@push('page-scripts')
	<script type="module" src="{{ asset('js/portofolio.js') }}?v=4"></script>
@endpush

@section('title', 'Portofolio & Hasil Cetak | CIHOPRINTSHOP')
@section('description', 'Jelajahi berbagai hasil cetak CIHOPRINTSHOP, mulai dari merchandise custom, media promosi, label stiker, hingga bahan cetak berkualitas.')

@section('content')
	<section class="content-page project-page">
		<!-- Hero Masthead -->
		<div class="page-hero-premium">
			<div class="page-wrap">
				<div class="page-hero-header">
					<div class="badge-pill badge-pill-yellow">
						<span class="status-indicator"></span> BUKTI NYATA KUALITAS PRODUKSI
					</div>
					<h1>Portofolio & Hasil Cetak<br><span class="accent">Kualitas Nyata, <br>Hasil Istimewa.</span></h1>
					<p class="page-lead">Jelajahi berbagai hasil produksi CIHOPRINTSHOP, mulai dari media promosi hingga kebutuhan cetak bisnis. Setiap proyek dikerjakan dengan presisi, material berkualitas, dan perhatian terhadap detail.</p>
				</div>

				<!-- Stats Strip -->
				<div class="stats-strip">
					<div class="stat-item">
						<span class="stat-val"><span class="stat-count" data-count="100000">100.000</span><span class="stat-accent">+</span></span>
						<span class="stat-label">Project Selesai</span>
					</div>
					<div class="stat-item">
						<span class="stat-val"><span class="stat-count" data-count="100">100</span><span class="stat-accent">%</span></span>
						<span class="stat-label">Garansi Kerapian Potong</span>
					</div>
					<div class="stat-item">
						<span class="stat-val"><span class="stat-count" data-count="1-2">1-2</span><span class="stat-accent">Hari</span></span>
						<span class="stat-label">Rata-rata Waktu Produksi</span>
					</div>
				</div>
			</div>
		</div>

		<!-- Portfolio Gallery Grid & Filter -->
		<div class="page-wrap project-content-v2">
			<div class="project-gallery-intro">
				<div>
					<p class="project-gallery-eyebrow">INSPIRASI HASIL PRODUKSI</p>
					<h2>Ide menarik, hasil cetak <span>lebih berkesan.</span></h2>
					<p>Temukan berbagai pilihan produk dan media cetak untuk kebutuhan personal, bisnis, maupun acara spesial.</p>
				</div>
			</div>

			<!-- Interactive Category Filter Bar -->
			<div class="filter-container" id="project-filter" role="tablist" aria-label="Filter Kategori Project">
				<button class="filter-btn is-active" type="button" data-filter="all">
					Semua Produk <span class="filter-count">22</span>
				</button>
				<button class="filter-btn" type="button" data-filter="merchandise">
					Merchandise <span class="filter-count">6</span>
				</button>
				<button class="filter-btn" type="button" data-filter="kemasan">
					Kemasan & Box <span class="filter-count">1</span>
				</button>
				<button class="filter-btn" type="button" data-filter="banner">
					Banner & Reklame <span class="filter-count">2</span>
				</button>
				<button class="filter-btn" type="button" data-filter="stiker">
					Label & Stiker <span class="filter-count">2</span>
				</button>
				<button class="filter-btn" type="button" data-filter="media">
					Media Cetak <span class="filter-count">11</span>
				</button>
			</div>

			<!-- Projects Gallery -->
			<div class="project-gallery-grid" id="project-list">
				<!-- Project 1 (Featured: Jersey Kaos Custom) -->
				<article class="project-card-v2 is-featured-project" data-category="merchandise">
					<div class="project-thumb-box">
						<img class="project-thumb-img" src="{{ asset('images/portofolio-jersey-kaos-baru.png') }}" alt="Jersey printing sublimasi dan kaos komunitas lari Ewako Runners" loading="lazy">
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
						<img class="project-thumb-img" src="{{ asset('images/portofolio-lanyard-medali.png') }}" alt="Tali lanyard custom dan medali event Bulan K3 Nasional" loading="lazy">
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
						<img class="project-thumb-img" src="{{ asset('images/portofolio-plakat-penghargaan.png') }}" alt="Plakat akrilik penghargaan wisuda kedinasan dan cinderamata custom" loading="lazy">
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
						<img class="project-thumb-img" src="{{ asset('images/portofolio-kemasan-box-mug-baru.png') }}" alt="Hardbox kemasan souvenir wedding dan custom mug hampers" loading="lazy">
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
						<img class="project-thumb-img" src="{{ asset('images/portofolio-tumbler-custom-baru.png') }}" alt="Tumbler stainless steel custom print UV dan grafir souvenir" loading="lazy">
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
						<img class="project-thumb-img" src="{{ asset('images/portofolio-backdrop-panggung-baru.png') }}" alt="Backdrop panggung seminar Inspirasi Hari Ini untuk Masa Depan" loading="lazy">
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
						<img class="project-thumb-img" src="{{ asset('images/portofolio-label-botol-frozen-baru.png') }}" alt="Label stiker botol minuman dan kemasan frozen food waterproof" loading="lazy">
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
						<img class="project-thumb-img" src="{{ asset('images/portofolio-roll-up-banner-baru.png') }}" alt="Roll up banner pameran dan display showroom custom" loading="lazy">
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

				<!-- Project 9 (Stiker Chromo) -->
				<article class="project-card-v2" data-category="stiker">
					<div class="project-thumb-box">
						<img class="project-thumb-img" src="{{ asset('images/portofolio-label-stiker-chromo-baru.png') }}" alt="Contoh label stiker chromo untuk kemasan produk" loading="lazy">
						<span class="project-category-tag">Label & Stiker</span>
					</div>
					<div class="project-body">
						<h3>Label Stiker Chromo untuk Kemasan Produk</h3>
						<p>Stiker dengan permukaan halus dan hasil warna cerah, cocok untuk label produk, kemasan makanan, dan kebutuhan promosi.</p>
						<div class="project-meta-row">
							<span class="project-meta-pill"><strong>Bahan:</strong> Chromo</span>
							<span class="project-meta-pill"><strong>Aplikasi:</strong> Label & Kemasan</span>
						</div>
					</div>
				</article>

				@php
				$additionalProjects = [
					[
						'category' => 'merchandise',
						'label' => 'Merchandise & Apparel',
						'image' => 'produk-kaos-custom-baru.png',
						'title' => 'Kaos Custom Full Print',
						'description' => 'Pilihan pakaian custom untuk promosi, seragam, dan acara komunitas.',
					],
					[
						'category' => 'merchandise',
						'label' => 'Merchandise & Souvenir',
						'image' => 'produk-powerbank-custom.png',
						'title' => 'Powerbank Custom',
						'description' => 'Perangkat praktis dengan tampilan desain atau identitas bisnis Anda.',
					],
					[
						'category' => 'media',
						'label' => 'Kertas & Media Cetak',
						'image' => 'portofolio-art-carton-kartu-nama-baru.png',
						'title' => 'Art Carton untuk Kartu & Kemasan',
						'description' => 'Kertas tebal dengan permukaan halus untuk kartu, cover, dan kemasan.',
					],
					[
						'category' => 'media',
						'label' => 'Kertas & Media Cetak',
						'image' => 'material-art-papper-150gr.png',
						'title' => 'Art Paper 150gr',
						'description' => 'Kertas dengan permukaan licin untuk brosur, flyer, dan materi promosi.',
					],
					[
						'category' => 'media',
						'label' => 'Kertas & Media Cetak',
						'image' => 'material-brief-card-200gr.png',
						'title' => 'Brief Card 200gr',
						'description' => 'Media kartu yang pas untuk kartu ucapan, insert, dan kebutuhan stationery.',
					],
					[
						'category' => 'media',
						'label' => 'Kertas & Media Cetak',
						'image' => 'material-concorde-80gr.png',
						'title' => 'Concorde 80gr',
						'description' => 'Kertas bertekstur untuk kebutuhan surat, undangan, dan stationery.',
					],
					[
						'category' => 'media',
						'label' => 'Kertas & Media Cetak',
						'image' => 'material-hvs-80gr-bw-1-side.png',
						'title' => 'HVS Hitam Putih Satu Sisi',
						'description' => 'Cetak dokumen hitam putih satu sisi untuk kebutuhan harian.',
					],
					[
						'category' => 'media',
						'label' => 'Kertas & Media Cetak',
						'image' => 'material-hvs-80gr-bw-2-side.png',
						'title' => 'HVS Hitam Putih Dua Sisi',
						'description' => 'Cetak dokumen bolak-balik yang rapi dan efisien.',
					],
					[
						'category' => 'media',
						'label' => 'Kertas & Media Cetak',
						'image' => 'material-hvs-80gr-color-1-side.png',
						'title' => 'HVS Warna Satu Sisi',
						'description' => 'Cetak warna untuk kebutuhan dokumen, materi belajar, dan informasi.',
					],
					[
						'category' => 'media',
						'label' => 'Kertas & Media Cetak',
						'image' => 'material-hvs-80gr-color-2-side.png',
						'title' => 'HVS Warna Dua Sisi',
						'description' => 'Cetak warna bolak-balik untuk dokumen yang praktis dan informatif.',
					],
					[
						'category' => 'media',
						'label' => 'Kertas & Media Cetak',
						'image' => 'material-ivory-250gr.png',
						'title' => 'Ivory 250gr',
						'description' => 'Kertas tebal dengan satu sisi halus untuk kartu dan kemasan.',
					],
					[
						'category' => 'media',
						'label' => 'Kertas & Media Cetak',
						'image' => 'material-jasmine-natural-80gr.png',
						'title' => 'Jasmine Natural 80gr',
						'description' => 'Kertas bertekstur dengan nuansa natural untuk undangan dan stationery.',
					],
					[
						'category' => 'media',
						'label' => 'Kertas & Media Cetak',
						'image' => 'material-jasmine-white-80gr.png',
						'title' => 'Jasmine White 80gr',
						'description' => 'Kertas putih bertekstur untuk undangan dan kebutuhan cetak khusus.',
					],
				];
				@endphp

				@foreach ($additionalProjects as $project)
					<article class="project-card-v2 is-compact-project" data-category="{{ $project['category'] }}">
						<div class="project-thumb-box">
							<img class="project-thumb-img" src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['title'] }}" loading="lazy" decoding="async">
							<span class="project-category-tag">{{ $project['label'] }}</span>
						</div>
						<div class="project-body">
							<h3>{{ $project['title'] }}</h3>
							<p>{{ $project['description'] }}</p>
						</div>
					</article>
				@endforeach
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
