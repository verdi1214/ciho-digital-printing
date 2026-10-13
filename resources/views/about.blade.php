@extends('layouts.app')

@section('title', 'Tentang Kami | Profil & Nilai Unggulan CIHOPRINTSHOP')
@section('description', 'Kenali CIHOPRINTSHOP: Partner digital printing terpercaya di Jakarta dengan pengalaman lebih dari 18 tahun, teknologi mesin modern, dan kalibrasi warna presisi.')

@section('content')
	<section class="content-page about-page">
		<!-- Hero Masthead -->
		<div class="page-hero-premium">
			<div class="page-wrap">
				<div class="page-hero-header">
					<div class="badge-pill badge-pill-yellow">
						<span class="status-indicator"></span> EST. 2006 · WORKSHOP PRODUKSI JAKARTA
					</div>
					<h1>Mengubah Ide Kreatif<br><span class="accent">Menjadi Karya Cetak Presisi.</span></h1>
					<p class="page-lead">Lebih dari 18 tahun kami mendedikasikan keahlian dalam kalibrasi warna, ketahanan material, dan kecepatan produksi untuk menyempurnakan setiap identitas visual bisnis Anda.</p>
				</div>

				<!-- Stats Counter Strip -->
				<div class="stats-strip">
					<div class="stat-item">
						<span class="stat-val">18<span class="stat-accent">+</span></span>
						<span class="stat-label">Tahun Dedikasi Digital Printing</span>
					</div>
					<div class="stat-item">
						<span class="stat-val">10<span class="stat-accent">+</span></span>
						<span class="stat-label">Unit Mesin Produksi Modern</span>
					</div>
					<div class="stat-item">
						<span class="stat-val">50k<span class="stat-accent">+</span></span>
						<span class="stat-label">Meter Media Berhasil Dicetak</span>
					</div>
					<div class="stat-item">
						<span class="stat-val">99.8<span class="stat-accent">%</span></span>
						<span class="stat-label">Akurasi Warna & Standar QC</span>
					</div>
				</div>
			</div>
		</div>

		<!-- Identity & Story Section -->
		<div class="page-wrap about-hero-section">
			<div class="about-hero-layout">
				<div class="about-media-card">
					<img class="about-main-img" src="{{ asset('images/ciho-printing-machine.jpg') }}" alt="Mesin digital printing format lebar di tempat produksi CIHOPRINTSHOP">
					<div class="about-media-floating">
						<div>
							<strong>Workshop Produksi Aktif</strong>
							<span>Standar QC terintegrasi & kalibrasi presisi</span>
						</div>
						<span class="about-floating-badge">Verified Hub</span>
					</div>
				</div>

				<div class="about-text-content">
					<div class="badge-pill">
						<span>01</span> FILOSOFI & DEDIKASI
					</div>
					<h2>Percetakan yang Mengerti Standar Brand Anda</h2>
					<p class="about-lead-p">CIHOPRINTSHOP lahir dari keyakinan bahwa cetakan berkualitas adalah cermin profesionalisme sebuah brand. Kami tidak sekadar mencetak di atas kertas atau banner, tetapi memastikan pesan visual Anda tersampaikan dengan ketajaman warna sempurna.</p>
					<p class="about-body-p">Dari kebutuhan materi promosi instan, stiker kemasan anti-air, hingga spanduk reklame berukuran raksasa, tim kami siap mengawal setiap tahapan produksi: mulai dari pengecekan resolusi file desain, rekomendasi material yang efisien anggaran, hingga pengemasan aman sampai tujuan.</p>
					
					<div class="about-features-pill-row">
						<span class="about-pill-tag">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
							Profil Warna Terkalibrasi
						</span>
						<span class="about-pill-tag">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
							Material Grade A Tahan Cuaca
						</span>
						<span class="about-pill-tag">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
							Kapasitas Satuan & Partai Besar
						</span>
						<span class="about-pill-tag">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
							Konsultasi File Siap Cetak
						</span>
					</div>

					<a class="button" href="{{ route('contact') }}">Konsultasikan Kebutuhan Cetak <span class="button-arrow" aria-hidden="true">→</span></a>
				</div>
			</div>
		</div>

		<!-- Bento Values Grid -->
		<section class="bento-section">
			<div class="page-wrap">
				<div class="bento-header">
					<div class="badge-pill">
						<span>02</span> NILAI & KEUNGGULAN
					</div>
					<h2>Mengapa Ratusan Bisnis Memilih CIHO?</h2>
					<p>Setiap lembar cetakan diproses dengan standar ketat untuk memastikan detail grafis dan ketahanan fisik berada di level optimal.</p>
				</div>

				<div class="bento-grid">
					<!-- Bento Featured 1 -->
					<article class="bento-card bento-card-featured">
						<div class="bento-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m4.93 4.93 4.24 4.24"/><path d="m14.83 9.17 4.24-4.24"/><path d="m14.83 14.83 4.24 4.24"/><path d="m9.17 14.83-4.24 4.24"/></svg>
						</div>
						<h3>Kalibrasi Warna & Kontrol Presisi Tinggi</h3>
						<p>Menggunakan profil warna digital berstandar industri dengan pengawasan operator berpengalaman, warna hasil cetak konsisten dari lembar pertama hingga pesanan ribuan pcs berikutnya.</p>
						<div class="bento-card-footer">
							<span>Akurasi CMYK Teruji</span> ✦
						</div>
					</article>

					<!-- Bento 2 -->
					<article class="bento-card">
						<div class="bento-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
						</div>
						<h3>Material Grade A Tahan Cuaca</h3>
						<p>Hanya menggunakan bahan baku pilihan yang terbukti tahan terik matahari, cipratan air, serta tidak mudah mengelupas atau sobek saat dipasang di luar ruang.</p>
						<div class="bento-card-footer">
							<span>Durabilitas Ekstra</span> →
						</div>
					</article>

					<!-- Bento 3 -->
					<article class="bento-card">
						<div class="bento-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
						</div>
						<h3>Kecepatan Produksi & Ketepatan Jadwal</h3>
						<p>Alur kerja terstruktur dengan sistem antrian digital memungkinkan penyelesaian pesanan tepat waktu tanpa mengurangi ketelitian kontrol mutu.</p>
						<div class="bento-card-footer">
							<span>Layanan Cepat & Tepat</span> →
						</div>
					</article>

					<!-- Bento 4 -->
					<article class="bento-card">
						<div class="bento-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
						</div>
						<h3>Konsultasi Langsung & Proofing Sampel</h3>
						<p>Pelanggan dapat berkonsultasi langsung mengenai kecocokan bahan, gramatur, serta meminta sampel uji sebelum proses produksi massal dimulai.</p>
						<div class="bento-card-footer">
							<span>Bebas Konsultasi File</span> →
						</div>
					</article>

					<!-- Bento 5 -->
					<article class="bento-card">
						<div class="bento-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
						</div>
						<h3>Kemasan Rapi & Pengiriman Aman</h3>
						<p>Setiap produk dipacking dengan proteksi berlapis (kardus, bubble wrap, tabung selongsong) untuk memastikan barang sampai tanpa cacat atau terlipat.</p>
						<div class="bento-card-footer">
							<span>Standar Ekspedisi Aman</span> →
						</div>
					</article>
				</div>
			</div>
		</section>

		<!-- Milestone Timeline Section -->
		<section class="history-section-modern">
			<div class="page-wrap">
				<div class="history-header">
					<div>
						<div class="badge-pill badge-pill-yellow">
							<span>03</span> REKAM JEJAK
						</div>
						<h2>Evolusi Perjalanan <span>CIHO</span></h2>
					</div>
					<p>Dari percetakan lokal sederhana hingga menjadi sentra produksi digital printing terintegrasi yang melayani berbagai instansi, korporasi, UMKM, dan perorangan di Jakarta dan sekitarnya.</p>
				</div>

				<div class="timeline-cards-grid">
					<article class="timeline-card">
						<span class="timeline-year-badge">2006 — FONDASI AWAL</span>
						<h3>Lahir dari Kebutuhan Digital Printing</h3>
						<p>Memulai langkah di industri percetakan dengan komitmen menghadirkan layanan cetak digital cepat dan solutif untuk kebutuhan dokumen, kartu nama, dan materi usaha sekitar.</p>
					</article>

					<article class="timeline-card">
						<span class="timeline-year-badge">2016 — EKSPANSI FORMAT BESAR</span>
						<h3>Investasi Mesin Format Lebar & Label</h3>
						<p>Memperluas lini mesin dengan menambahkan printer outdoor Hinode, mesin indoor high-res Albatros, dan fasilitas potong stiker presisi die-cut untuk mendukung branding UMKM.</p>
					</article>

					<article class="timeline-card">
						<span class="timeline-year-badge">KINI & MASA DEPAN</span>
						<h3>Workshop Terintegrasi & Teknologi Terkini</h3>
						<p>Menghadirkan armada mesin mutakhir mencakup Epson Sublimasi, Nocai Flatbed UV, Hinode DTF, serta sistem pemesanan online cepat via WhatsApp langsung ke operator.</p>
					</article>
				</div>
			</div>
		</section>

		<!-- Bottom CTA -->
		<div class="page-wrap">
			<div class="page-cta-v2">
				<div>
					<div class="badge-pill badge-pill-yellow">MULAI PROJECT ANDA</div>
					<h2>Punya Desain yang Siap Dicetak?</h2>
					<p>Konsultasikan spesifikasi file, pilihan material terbaik, dan estimasi biaya bersama tim CIHOPRINTSHOP sekarang juga.</p>
				</div>
				<div class="page-cta-actions">
					<a class="button" href="{{ route('contact') }}">Hubungi Tim Kami <span class="button-arrow" aria-hidden="true">→</span></a>
					<a class="button-secondary" href="{{ route('materials') }}">Lihat Katalog Bahan <span class="button-arrow" aria-hidden="true">→</span></a>
				</div>
			</div>
		</div>
	</section>
@endsection
