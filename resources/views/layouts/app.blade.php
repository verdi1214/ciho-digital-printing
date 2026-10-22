<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#11100f">
	<meta name="description" content="@yield('description', 'CIHOPRINTSHOP melayani kebutuhan digital printing dengan hasil berkualitas untuk bisnis dan personal.')">
	<title>@yield('title', 'CIHO Digital Printing')</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/ciho.css') }}?v=83">
	@stack('page-styles')
	<link rel="icon" type="image/png" href="{{ asset('images/ciho-logo-color.png') }}?v=1">
</head>
<body>
	<svg class="visual-effects" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
		<filter id="remove-white-background" color-interpolation-filters="sRGB">
			<feColorMatrix type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  -1 -1 -1 3 0"/>
		</filter>
	</svg>
	<header class="site-header">
		<div class="header-inner">
			<a class="brand" href="{{ route('home') }}" aria-label="CIHOPRINTSHOP, beranda">
				<img class="brand-wordmark brand-wordmark-light"
					src="{{ asset('images/ciho-wordmark-footer.png') }}?v=1"
					alt=""
					width="4228"
					height="768">
				<img class="brand-wordmark brand-wordmark-color"
					src="{{ asset('images/ciho-wordmark-color.png') }}?v=1"
					alt=""
					width="4228"
					height="768">
			</a>
			<nav class="main-nav" id="main-nav" aria-label="Navigasi utama">
				<a href="{{ route('home') }}" @class(['is-active' => request()->routeIs('home')])>Beranda</a>
				<a href="{{ route('about') }}" @class(['is-active' => request()->routeIs('about')])>Tentang</a>
				<a href="{{ route('materials') }}" @class(['is-active' => request()->routeIs('materials')])>Bahan</a>
				<a href="{{ route('machines') }}" @class(['is-active' => request()->routeIs('machines')])>Mesin</a>
				<a href="{{ route('project') }}" @class(['is-active' => request()->routeIs('project')])>Produk</a>
				<a href="{{ route('price-list') }}" @class(['is-active' => request()->routeIs('price-list')])>Price List</a>
				<a href="{{ route('location') }}" @class(['is-active' => request()->routeIs('location')])>Lokasi</a>
			</nav>
			<a class="button header-cta" href="{{ route('contact') }}">Hubungi Kami <span class="button-arrow" aria-hidden="true">→</span></a>
			<button class="menu-toggle" type="button" aria-label="Buka menu" aria-expanded="false" aria-controls="main-nav">
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M3 5h14M3 10h14M3 15h14" stroke="currentColor" stroke-width="1.7" stroke-linecap="square"/></svg>
			</button>
		</div>
	</header>

	<main>
		@yield('content')
	</main>

	<footer class="site-footer">
		<div class="footer-inner">
			<div class="footer-main">
				<div class="footer-about">
					<a class="brand footer-brand" href="{{ route('home') }}" aria-label="CIHOPRINTSHOP, beranda">
						<img class="brand-wordmark" src="{{ asset('images/ciho-wordmark-footer.png') }}?v=1" alt="CIHOPRINTSHOP Digital Printing" width="4228" height="768">
					</a>
					<p class="footer-tagline">Ide kamu, kami cetak jadi nyata.</p>
					<p class="footer-description">Partner digital printing untuk kebutuhan promosi, produk, acara, dan bisnis Anda.</p>
					<a class="footer-whatsapp-link" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20kebutuhan%20cetak." target="_blank" rel="noopener noreferrer">
						<svg viewBox="0 0 32 32" aria-hidden="true" focusable="false"><path d="M16 3.5a12.5 12.5 0 0 0-10.7 19L4 28l5.7-1.5A12.5 12.5 0 1 0 16 3.5Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path d="M11.1 9.5c-.3-.6-.6-.6-.9-.6h-.8c-.3 0-.7.1-1 .5-.4.4-1.3 1.3-1.3 3.2s1.3 3.7 1.5 4c.2.3 2.7 4.2 6.5 5.8.9.4 1.6.6 2.1.7.9.2 1.7.2 2.3.1.7-.1 2-.8 2.3-1.7.3-.8.3-1.6.2-1.7-.1-.2-.4-.3-.8-.5l-2.4-1.1c-.3-.1-.6-.2-.8.2-.3.4-.8 1.1-1.1 1.3-.2.3-.4.3-.8.1-.4-.2-1.6-.6-3.1-1.8-1.1-1-1.8-2.2-2-2.5-.2-.4 0-.6.2-.8.2-.2.4-.5.6-.7.2-.2.3-.4.5-.6.1-.2.1-.4 0-.6l-.9-2.1Z" fill="currentColor"/></svg>
						<span>Chat WhatsApp Admin</span>
						<span aria-hidden="true">↗</span>
					</a>
					<div class="footer-social-links" aria-label="Media sosial CIHOPRINTSHOP">
						<a class="footer-social-link" href="https://www.instagram.com/cihojakarta_printshop?obrf=MWFjaG5leHNnczQ5cw==" target="_blank" rel="noopener noreferrer">
							<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><defs><linearGradient id="instagram-gradient" x1="3" y1="21" x2="21" y2="3" gradientUnits="userSpaceOnUse"><stop stop-color="#feda75"/><stop offset=".3" stop-color="#fa7e1e"/><stop offset=".58" stop-color="#d62976"/><stop offset=".8" stop-color="#962fbf"/><stop offset="1" stop-color="#4f5bd5"/></linearGradient></defs><rect x="3" y="3" width="18" height="18" rx="5" fill="none" stroke="url(#instagram-gradient)" stroke-width="2"/><circle cx="12" cy="12" r="4" fill="none" stroke="url(#instagram-gradient)" stroke-width="2"/><circle cx="17.5" cy="6.5" r="1" fill="url(#instagram-gradient)"/></svg>
							<span>Instagram</span>
							<span aria-hidden="true">↗</span>
						</a>
						<a class="footer-social-link" href="https://www.tiktok.com/@cihojakarta_printshop?_r=1&amp;_t=ZS-9AlC6FcFEgf" target="_blank" rel="noopener noreferrer">
							<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M15 3v11.2a4.2 4.2 0 1 1-3.6-4.15M15 3c.6 3.1 2.4 5 5 5.4" fill="none" stroke="#25f4ee" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" transform="translate(-.8 .5)"/><path d="M15 3v11.2a4.2 4.2 0 1 1-3.6-4.15M15 3c.6 3.1 2.4 5 5 5.4" fill="none" stroke="#fe2c55" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" transform="translate(.8 -.3)"/><path d="M15 3v11.2a4.2 4.2 0 1 1-3.6-4.15M15 3c.6 3.1 2.4 5 5 5.4" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/></svg>
							<span>TikTok</span>
							<span aria-hidden="true">↗</span>
						</a>
					</div>
				</div>

				<nav class="footer-column" aria-label="Layanan">
					<h2>Layanan</h2>
					<a href="{{ route('contact') }}">Digital printing</a>
					<a href="{{ route('machines') }}">Cetak format lebar</a>
					<a href="{{ route('materials') }}">Stiker, label &amp; bahan</a>
					<a href="{{ route('project') }}">Merchandise &amp; produk</a>
					<a href="{{ route('contact') }}">Konsultasi pesanan</a>
				</nav>

				<nav class="footer-column" aria-label="Tautan">
					<h2>Jelajahi</h2>
					<a href="{{ route('about') }}">Tentang kami</a>
					<a href="{{ route('materials') }}">Katalog bahan</a>
					<a href="{{ route('machines') }}">Mesin produksi</a>
					<a href="{{ route('project') }}">Project &amp; portofolio</a>
					<a href="{{ route('price-list') }}">Price list</a>
					<a href="{{ route('location') }}">Lokasi workshop</a>
				</nav>

				<div class="footer-column footer-consultation">
					<h2>Ada proyek cetak?</h2>
					<p>Ceritakan kebutuhan ukuran, bahan, dan jumlah cetak. Tim kami siap membantu.</p>
					<a class="footer-contact-link" href="{{ route('contact') }}">Hubungi kami <span aria-hidden="true">→</span></a>
				</div>
			</div>

			<div class="footer-contact-row">
				<a class="footer-contact-item" href="https://wa.me/6281390001217" target="_blank" rel="noopener noreferrer">
					<span class="footer-contact-icon" aria-hidden="true">
						<svg viewBox="0 0 32 32" focusable="false"><path d="M16 3.5a12.5 12.5 0 0 0-10.7 19L4 28l5.7-1.5A12.5 12.5 0 1 0 16 3.5Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path d="M11.1 9.5c-.3-.6-.6-.6-.9-.6h-.8c-.3 0-.7.1-1 .5-.4.4-1.3 1.3-1.3 3.2s1.3 3.7 1.5 4c.2.3 2.7 4.2 6.5 5.8.9.4 1.6.6 2.1.7.9.2 1.7.2 2.3.1.7-.1 2-.8 2.3-1.7.3-.8.3-1.6.2-1.7-.1-.2-.4-.3-.8-.5l-2.4-1.1c-.3-.1-.6-.2-.8.2-.3.4-.8 1.1-1.1 1.3-.2.2-.4.3-.8.1-.4-.2-1.6-.6-3.1-1.8-1.1-1-1.8-2.2-2-2.5-.2-.4 0-.6.2-.8.2-.2.4-.5.6-.7.2-.2.3-.4.5-.6.1-.2.1-.4 0-.6l-.9-2.1Z" fill="currentColor"/></svg>
					</span>
					<span><strong>WhatsApp Admin</strong><small>0813-9000-1217</small></span>
				</a>
				<a class="footer-contact-item" href="{{ route('location') }}">
					<span class="footer-contact-icon" aria-hidden="true">
						<svg viewBox="0 0 32 32" focusable="false">
							<defs>
								<clipPath id="google-maps-pin">
									<path d="M16 1.5A12.5 12.5 0 0 0 3.5 14c0 7.2 12.5 17.5 12.5 17.5S28.5 21.2 28.5 14A12.5 12.5 0 0 0 16 1.5Z"/>
								</clipPath>
							</defs>
							<g clip-path="url(#google-maps-pin)">
								<path fill="#4285F4" d="M0 0h32v32H0z"/>
								<path fill="#EA4335" d="M0 0h32v13c-5.7 0-9.3 3.5-16 3.5S5.7 13 0 13z"/>
								<path fill="#FBBC04" d="M16 11c5.8 0 9.8 2.2 16 2.2V32H18c0-8.5-.5-14-2-21z"/>
								<path fill="#34A853" d="M0 13.2C6.2 13.2 10.2 11 16 11c-1.5 7-2 12.5-2 21H0z"/>
							</g>
							<circle cx="16" cy="14" r="4.2" fill="#fff"/>
						</svg>
					</span>
					<span><strong>Lokasi Workshop</strong><small>Jl. Radio Dalam Raya No.F3A, Gandaria Utara, Jakarta Selatan</small></span>
				</a>
				<div class="footer-contact-item">
					<span class="footer-contact-icon" aria-hidden="true">
						<svg viewBox="0 0 32 32" fill="none" stroke-linecap="round" stroke-linejoin="round" focusable="false">
							<circle cx="16" cy="16" r="11.5" fill="#fff" stroke="#fff" stroke-width="3"/>
							<circle cx="16" cy="16" r="11.5" stroke="#EA4335" stroke-width="3" stroke-dasharray="15 57" transform="rotate(-45 16 16)"/>
							<circle cx="16" cy="16" r="11.5" stroke="#FBBC04" stroke-width="3" stroke-dasharray="15 57" transform="rotate(45 16 16)"/>
							<circle cx="16" cy="16" r="11.5" stroke="#34A853" stroke-width="3" stroke-dasharray="15 57" transform="rotate(135 16 16)"/>
							<path d="M16 10.5v5.7l4.2 2.4" stroke="#4285F4" stroke-width="2.2"/>
							<circle cx="16" cy="16" r="1.6" fill="#EA4335"/>
						</svg>
					</span>
					<span><strong>Jam Operasional</strong><small>Setiap hari, 08.00–23.59 WIB</small></span>
				</div>
			</div>

			<div class="footer-bottom">
				<p>© {{ date('Y') }} CIHOPRINTSHOP. Ide kamu, kami cetak jadi nyata.</p>
				<a href="{{ route('home') }}">Digital Printing Jakarta</a>
			</div>
		</div>
	</footer>
	<a class="whatsapp-float" href="https://wa.me/6281390001217?text=Halo%20CIHOPRINTSHOP%2C%20saya%20ingin%20konsultasi%20kebutuhan%20cetak." target="_blank" rel="noopener noreferrer" aria-label="Hubungi CIHOPRINTSHOP melalui WhatsApp" title="Chat via WhatsApp">
		<svg viewBox="0 0 32 32" aria-hidden="true" focusable="false"><path d="M16 3.5a12.5 12.5 0 0 0-10.7 19L4 28l5.7-1.5A12.5 12.5 0 1 0 16 3.5Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path d="M11.1 9.5c-.3-.6-.6-.6-.9-.6h-.8c-.3 0-.7.1-1 .5-.4.4-1.3 1.3-1.3 3.2s1.3 3.7 1.5 4c.2.3 2.7 4.2 6.5 5.8.9.4 1.6.6 2.1.7.9.2 1.7.2 2.3.1.7-.1 2-.8 2.3-1.7.3-.8.3-1.6.2-1.7-.1-.2-.4-.3-.8-.5l-2.4-1.1c-.3-.1-.6-.2-.8.2-.3.4-.8 1.1-1.1 1.3-.2.3-.4.3-.8.1-.4-.2-1.6-.6-3.1-1.8-1.1-1-1.8-2.2-2-2.5-.2-.4 0-.6.2-.8.2-.2.4-.5.6-.7.2-.2.3-.4.5-.6.1-.2.1-.4 0-.6l-.9-2.1Z" fill="currentColor"/></svg>
	</a>

	<script src="{{ asset('js/ciho.js') }}?v=12" defer></script>
	@stack('page-scripts')
</body>
</html>
