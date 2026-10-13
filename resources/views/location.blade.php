@extends('layouts.app')

@section('title', 'Lokasi & Workshop Produksi | CIHOPRINTSHOP Jakarta')
@section('description', 'Kunjungi workshop CIHOPRINTSHOP di Jakarta untuk konsultasi bahan cetak, pengecekan sampel fisik, dan pengambilan pesanan secara langsung.')

@section('content')
	<section class="content-page location-page">
		<!-- Hero Masthead -->
		<div class="page-hero-premium">
			<div class="page-wrap">
				<div class="page-hero-header">
					<div class="badge-pill badge-pill-yellow">
						<span class="status-indicator"></span> SENTRA PRODUKSI & KANTOR RESMI
					</div>
					<h1>Kunjungi Workshop Produksi<br><span class="accent">CIHOPRINTSHOP Jakarta.</span></h1>
					<p class="page-lead">Datang langsung untuk melihat ratusan sampel material fisik, berkonsultasi mengenai teknis file bersama operator cetak kami, atau mengambil pesanan yang telah selesai diproduksi.</p>
				</div>

				<!-- Stats Strip -->
				<div class="stats-strip">
					<div class="stat-item">
						<span class="stat-val">08.00<span class="stat-accent">–</span>20.00</span>
						<span class="stat-label">Jam Operasional (Senin – Sabtu)</span>
					</div>
					<div class="stat-item">
						<span class="stat-val">100<span class="stat-accent">+</span></span>
						<span class="stat-label">Sampel Material Fisik Siap Dicek</span>
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
						src="https://maps.google.com/maps?q=CIHOPRINTSHOP+Digital+Printing&t=&z=15&ie=UTF8&iwloc=&output=embed"
						loading="lazy"
						allowfullscreen=""
						referrerpolicy="no-referrer-when-downgrade"
						title="Peta Lokasi Workshop CIHOPRINTSHOP">
					</iframe>

					<a class="map-floating-action" href="https://maps.google.com/?q=CIHOPRINTSHOP+Digital+Printing" target="_blank" rel="noopener noreferrer">
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
					<h3 class="workshop-name">CIHOPRINTSHOP Digital Printing</h3>
					<p class="workshop-address" id="workshop-full-address">Workshop & Sentra Digital Printing Format Lebar, Stiker, dan Kemasan. Siap melayani konsultasi langsung dan pick-up pesanan.</p>
					
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
							<span class="info-label">Senin – Sabtu</span>
							<strong class="info-value">08.00 – 20.00 WIB</strong>
						</div>
						<div class="info-row">
							<span class="info-label">Minggu & Hari Libur</span>
							<strong class="info-value">Konfirmasi Terlebih Dahulu</strong>
						</div>
						<div class="info-row">
							<span class="info-label">Layanan di Tempat</span>
							<strong class="info-value">Cek Sampel, Konsultasi & Pick-Up</strong>
						</div>
						<div class="info-row">
							<span class="info-label">Hotline Admin</span>
							<strong class="info-value">0813-9000-1217</strong>
						</div>
					</div>
				</div>

				<!-- Facility Badges -->
				<div class="facilities-row">
					<span class="facility-tag">🚗 Parkir Mobil & Motor</span>
					<span class="facility-tag">📦 Pick-Up Cepat</span>
					<span class="facility-tag">📑 Cek Sampel Fisik</span>
					<span class="facility-tag">💬 Operator Siap Bantu</span>
				</div>

				<!-- Direct WhatsApp Contact Button -->
				<a class="button" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20berkunjung%20ke%20workshop." target="_blank" rel="noopener noreferrer">
					Konfirmasi Kunjungan via WA <span class="button-arrow" aria-hidden="true">↗</span>
				</a>
			</div>
		</div>

		<!-- Transport Guide Section -->
		<div class="page-wrap">
			<div class="transport-section-v2">
				<div class="transport-header">
					<div class="badge-pill">AKSES & TRANSPORTASI</div>
					<h3>Panduan Menuju Workshop CIHO</h3>
					<p>Kemudahan akses transportasi untuk menjamin kelancaran kunjungan maupun pengiriman pesanan Anda.</p>
				</div>

				<div class="transport-grid-v2">
					<div class="transport-card-v2">
						<div class="transport-icon-box">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.5 2.8C2.1 10.8 2 11 2 11.2V16c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg>
						</div>
						<h4>Mobil & Kendaraan Pribadi</h4>
						<p>Jalan akses leluasa dua arah dengan area parkir mobil tamu yang aman persis di depan gedung workshop, memudahkan proses bongkar muat.</p>
					</div>

					<div class="transport-card-v2">
						<div class="transport-icon-box">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18.5" cy="17.5" r="3.5"/><circle cx="5.5" cy="17.5" r="3.5"/><circle cx="15" cy="5" r="1"/><path d="M12 17.5V14l-3-3 4-3 2 3h2"/></svg>
						</div>
						<h4>Motor & Kurir Instan (Ojol)</h4>
						<p>Sangat mudah diakses oleh kurir GoSend / GrabExpress. Titik jemput jelas dan pesanan yang siap kirim diserahkan instan tanpa antre.</p>
					</div>

					<div class="transport-card-v2">
						<div class="transport-icon-box">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
						</div>
						<h4>Truk & Ekspedisi Kargo</h4>
						<p>Mendukung armada kargo dan ekspedisi antar-kota untuk pesanan partai besar dengan fasilitas loading barang yang lapang dan aman.</p>
					</div>
				</div>
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
					<a class="button-secondary" href="https://maps.google.com/?q=CIHOPRINTSHOP+Digital+Printing" target="_blank" rel="noopener noreferrer">Buka Peta GPS <span class="button-arrow" aria-hidden="true">↗</span></a>
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
