@extends('layouts.app')

@push('page-styles')
	<link rel="stylesheet" href="{{ asset('css/lokasi.css') }}?v=1">
@endpush

@push('page-scripts')
	<script src="{{ asset('js/lokasi.js') }}?v=1" defer></script>
@endpush

@section('title', 'Lokasi & Workshop Produksi | CIHOPRINTSHOP Jakarta')
@section('description', 'Kunjungi workshop CIHOPRINTSHOP di Jakarta untuk konsultasi bahan cetak, pengecekan sampel fisik, dan pengambilan pesanan secara langsung.')

@section('content')
	<section class="content-page location-page">
		<!-- Hero Masthead -->
		<div class="page-hero-premium">
			<div class="page-wrap">
				<div class="page-hero-header">
					<div class="badge-pill badge-pill-red">
						<span class="status-indicator"></span> SENTRA PRODUKSI & KANTOR RESMI
					</div>
					<h1>Kunjungi Workshop<br><span class="accent">CIHOPRINTSHOP Jakarta.</span></h1>
					<p class="page-lead">Kunjungi workshop CIHOPRINTSHOP Jakarta untuk mengenal material cetak, berkonsultasi mengenai kebutuhan produksi, dan melihat lebih dekat proses pengerjaan pesanan Anda.</p>
				</div>

				<!-- Stats Strip -->
				<div class="stats-strip">
					<div class="stat-item">
						<span class="stat-val">08.00<span class="stat-accent">–</span>23.59 WIB</span>
						<span class="stat-label">Jam Operasional (Setiap Hari)</span>
					</div>
					<div class="stat-item">
						<span class="stat-val">Gratis</span>
						<span class="stat-label">Area Parkir Tamu Mobil & Motor</span>
					</div>
					<div class="stat-item">
						<span class="stat-val">Langsung</span>
						<span class="stat-label">Konsultasi File dengan Operator</span>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Command Center Layout -->
		<div class="page-wrap location-content-v2">
			<!-- Left: Interactive Map Card -->
			<div class="map-card-v2">
				<div class="map-card-top-bar">
					<div>
						<div class="badge-pill badge-pill-green">
							<span class="pulse-dot"></span> WORKSHOP BUKA HARI INI
						</div>
						<h2>Peta Interaktif Workshop</h2>
					</div>
				</div>

				<div class="map-container-v2">
					<iframe
						class="google-map-iframe"
						src="https://maps.google.com/maps?q=Jl.+Radio+Dalam+Raya+No.F3A,+RT.5%2FRW.4,+Gandaria+Utara,+Kec.+Kby.+Baru,+Kota+Jakarta+Selatan,+Daerah+Khusus+Ibukota+Jakarta+12140&t=&z=17&ie=UTF8&iwloc=&output=embed"
						loading="lazy"
						allowfullscreen=""
						referrerpolicy="no-referrer-when-downgrade"
						title="Peta Lokasi Workshop CIHOPRINTSHOP – Jl. Radio Dalam Raya No.F3A, RT.5/RW.4, Gandaria Utara, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140">
					</iframe>

					<a class="map-floating-action" href="https://www.google.com/maps/search/?api=1&query=Jl.+Radio+Dalam+Raya+No.F3A,+RT.5%2FRW.4,+Gandaria+Utara,+Kec.+Kby.+Baru,+Kota+Jakarta+Selatan,+Daerah+Khusus+Ibukota+Jakarta+12140" target="_blank" rel="noopener noreferrer">
						<span>Buka Rute di Google Maps</span>
						<span class="button-arrow" aria-hidden="true">↗</span>
					</a>
				</div>
			</div>

			<!-- Right: Workshop Info & Contact Hub -->
			<div class="location-hub-card">
				<!-- Address Box -->
				<div class="location-address-block">
					<div class="badge-pill">ALAMAT WORKSHOP</div>
					<h3 class="workshop-name">CIHOPRINTSHOP Jakarta Digital Printing</h3>
					<p class="workshop-address" id="workshop-full-address">Jl. Radio Dalam Raya No.F3A, RT.5/RW.4, Gandaria Utara, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140</p>

					<button class="copy-address-btn" id="copy-address-trigger" type="button" aria-label="Salin alamat workshop">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
						<span id="copy-btn-label">Salin Alamat Lengkap</span>
					</button>
				</div>

				<!-- Operating Schedule -->
				<div class="operating-hours-box">
					<div class="operating-hours-header">
						<h4>Jadwal Kunjungan & Layanan</h4>
						<span class="badge-pill badge-pill-green" style="margin-bottom:0">Operasional Aktif</span>
					</div>
					<div class="contact-info-grid">
						<div class="info-row">
							<span class="info-label">Setiap Hari</span>
							<strong class="info-value">08.00 – 23.59 WIB</strong>
						</div>
						<div class="info-row">
							<span class="info-label">Alamat</span>
							<strong class="info-value" style="text-align:right;max-width:200px;line-height:1.4">Jl. Radio Dalam Raya No.F3A, RT.5/RW.4, Gandaria Utara, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140</strong>
						</div>
						<div class="info-row">
							<span class="info-label">Layanan di Tempat</span>
							<strong class="info-value">Konsultasi, Pemesanan, dan Produksi</strong>
						</div>
						<div class="info-row">
							<span class="info-label">Hubungi Admin</span>
							<strong class="info-value">0813-9000-1217</strong>
						</div>
					</div>
				</div>

				<!-- Direct WhatsApp Contact Button -->
				<a class="button" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20berkunjung%20ke%20workshop." target="_blank" rel="noopener noreferrer">
					Konfirmasi Kunjungan via WA <span class="button-arrow" aria-hidden="true">↗</span>
				</a>
			</div>
		</div>

		<!-- Bottom CTA Banner -->
		<div class="page-wrap">
			<div class="page-cta-v2 location-cta" style="margin-top: 56px;">
				<div>
					<div class="badge-pill badge-pill-yellow">BUTUH PANDUAN ARAH?</div>
					<h2>Ingin Berkunjung atau Cek Sampel Hari Ini?</h2>
					<p class="cta-desc">Hubungi admin WhatsApp kami terlebih dahulu agar tim kami dapat menyiapkan sampel yang Anda butuhkan dan menyambut kedatangan Anda.</p>
				</div>
				<div class="page-cta-actions">
					<a class="button" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20berkunjung%20ke%20workshop." target="_blank" rel="noopener noreferrer">Hubungi WhatsApp Admin <span class="button-arrow" aria-hidden="true">↗</span></a>
					<a class="button-secondary" href="https://www.google.com/maps/search/?api=1&query=Jl.+Radio+Dalam+Raya+No.F3A,+RT.5%2FRW.4,+Gandaria+Utara,+Kec.+Kby.+Baru,+Kota+Jakarta+Selatan,+Daerah+Khusus+Ibukota+Jakarta+12140" target="_blank" rel="noopener noreferrer">Buka Peta GPS <span class="button-arrow" aria-hidden="true">↗</span></a>
				</div>
			</div>
		</div>

		<!-- Toast Notification Element -->
		<div class="toast-msg" id="address-toast" role="status" aria-live="polite">
			<span class="toast-check">✓</span>
			<span>Alamat workshop berhasil disalin ke clipboard!</span>
		</div>
	</section>
@endsection
