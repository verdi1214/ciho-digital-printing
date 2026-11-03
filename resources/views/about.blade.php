@extends('layouts.app')

@push('page-styles')
	<link rel="stylesheet" href="{{ asset('css/tentang.css') }}?v=15">
@endpush

@section('title', 'Tentang Kami')
@section('description', 'Kenali CIHOPRINTSHOP, partner digital printing untuk kebutuhan bisnis dan personal.')

@section('content')
	<section class="content-page about-page" aria-labelledby="about-title">
		<div class="about-editorial">
			<div class="about-logo-panel">
				<img class="about-logo-wordmark" src="{{ asset('images/ciho-wordmark-about.png') }}" alt="CIHOPRINTSHOP — Digital Printing, Advertising, Merchandise" width="4228" height="768">
			</div>

			<div class="page-wrap">
				<div class="about-title-row">
					<h1 id="about-title">Di balik setiap cetakan, <span>ada cerita.</span></h1>
				</div>

				<figure class="about-production">
					<img src="{{ asset('images/ciho-about-banner.png') }}" alt="Banner CIHOPRINTSHOP menampilkan hasil cetak berkualitas berupa kaos dan merchandise" width="1509" height="768" fetchpriority="high">
					<figcaption>
						<span>HASIL CETAK CIHOPRINTSHOP</span>
						<span>DIGITAL PRINTING · ADVERTISING · MERCHANDISE</span>
					</figcaption>
				</figure>

				<div class="about-introduction">
					<div class="about-introduction-heading">
						<p class="about-kicker">01 / MENGENAL CIHO</p>
						<h2>Partner cetak.<br>Teman bercerita.</h2>
					</div>
					<div class="about-introduction-copy">
						<h3>Ide kamu punya karakter. Hasil cetaknya juga harus begitu.</h3>
						<p>CIHOPRINTSHOP hadir untuk membantu kebutuhan digital printing dan percetakan, untuk bisnis, acara, maupun kebutuhan personal. Kami percaya setiap ide punya cerita yang layak diwujudkan dengan hasil cetak yang tepat.</p>
						<p>Dengan pilihan bahan dan layanan yang beragam, kami membantu mencari solusi cetak yang sesuai dengan kebutuhanmu. Kami percaya perhatian pada hal kecil membuat perbedaan besar.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="about-end-stripe" aria-hidden="true"></div>

		<section class="about-story-section" aria-labelledby="about-story-title">
			<div class="page-wrap">
				<div class="about-story-heading">
					<div>
						<p class="about-kicker">02 / SEJARAH CIHO</p>
						<h2 id="about-story-title">Tumbuh dari ide,<br>bergerak bersama kebutuhan.</h2>
					</div>
					<p class="about-story-intro">Berawal dari Sumedang, CIHO berkembang hingga hadir lebih dekat untuk pelanggan di Jakarta.</p>
				</div>

				<ol class="about-history-grid" aria-label="Perjalanan CIHO">
					<li class="about-history-card">
						<p class="about-history-year">2005/2006</p>
						<h3>Berawal di Sumedang</h3>
						<p>Perjalanan CIHO bermula di Sumedang pada 2005/2006. Di bawah naungan CIHO Grup, Hendra Nugraha Diatmadja (Hendra Ciho) membangun usaha percetakan kreatif dan kepercayaan pelanggan di Jawa Barat sebelum memperluas jangkauan ke Jakarta.</p>
					</li>
					<li class="about-history-card">
						<p class="about-history-year">2024</p>
						<h3>Hadir lebih dekat di Jakarta</h3>
						<p>Pada 2024, CIHO Jakarta Printshop hadir di Jalan Radio Dalam Raya No. F3B, Jakarta Selatan. Kehadirannya bertujuan menyediakan layanan percetakan modern dan berkualitas bagi masyarakat, bisnis, UMKM, industri kreatif, instansi pemerintahan, serta kalangan akademis. Untuk informasi dan pemesanan, hubungi <a href="tel:+6281390001217">0813-9000-1217</a>.</p>
					</li>
					<li class="about-history-card">
						<p class="about-history-year">SEKARANG</p>
						<h3>Solusi cetak makin lengkap</h3>
						<p>Menjawab kebutuhan cetak yang cepat dan fleksibel, CIHO Jakarta mengusung konsep <em>One Stop Shopping Digital Printing</em>. Teknologi digital printing melengkapi metode konvensional dengan waktu pengerjaan singkat dan tanpa minimum order. Layanannya mencakup cetak SRA3 yang dapat ditunggu hingga produksi skala besar. CIHO Jakarta juga dipercaya menjadi mitra official merchandiser untuk event otomotif regional.</p>
					</li>
				</ol>
			</div>
		</section>

		<div class="about-end-stripe" aria-hidden="true"></div>

		<div class="about-purpose-band">
			<div class="page-wrap">
				<section class="about-purpose" aria-labelledby="about-purpose-title">
					<div class="about-purpose-heading">
						<div>
							<p class="about-kicker">03 / ARAH KAMI</p>
							<h2 id="about-purpose-title">Punya tujuan.<br><span>Punya arah.</span></h2>
						</div>
						<p>Setiap proses cetak berangkat dari kebutuhan yang berbeda. Visi dan misi ini menjadi pegangan kami dalam membantu mewujudkannya.</p>
					</div>

					<div class="about-purpose-grid">
						<article class="about-purpose-card about-purpose-card-vision">
							<span class="about-purpose-number" aria-hidden="true">01</span>
							<div>
								<p class="about-purpose-label">VISI</p>
								<h3>Menjadi partner digital printing yang tepercaya untuk setiap ide.</h3>
								<p>Menghadirkan solusi cetak yang membantu bisnis dan personal menyampaikan cerita mereka dengan percaya diri.</p>
							</div>
						</article>

						<article class="about-purpose-card about-purpose-card-mission">
							<span class="about-purpose-number" aria-hidden="true">02</span>
							<div>
								<p class="about-purpose-label">MISI</p>
								<ul>
									<li>Mendengarkan kebutuhan sebelum merekomendasikan solusi.</li>
									<li>Membantu memilih bahan dan layanan yang sesuai tujuan.</li>
									<li>Menjaga perhatian pada detail dari konsultasi hingga produksi.</li>
									<li>Memberikan layanan yang komunikatif dan ramah.</li>
								</ul>
							</div>
						</article>
					</div>
				</section>
			</div>
		</div>

		<div class="about-end-stripe" aria-hidden="true"></div>
	</section>
@endsection
