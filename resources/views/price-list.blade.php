@extends('layouts.app')

@push('page-styles')
	<link rel="stylesheet" href="{{ asset('css/price-list.css') }}?v=8">
@endpush

@push('page-scripts')
	<script src="{{ asset('js/price-list.js') }}?v=1" defer></script>
@endpush

@section('title', 'Price List | CIHOPRINTSHOP')
@section('description', 'Daftar harga digital printing CIHOPRINTSHOP untuk kebutuhan cetak, stiker, banner, merchandise, dan lainnya.')

@section('content')
	<section class="content-page price-list-page">
		<div class="page-wrap price-list-content">
			<div class="price-list-board">
				<div class="price-list-stripe" aria-hidden="true"></div>
				<header class="price-list-hero">
					<p class="price-list-kicker">CIHO JAKARTA DIGITAL PRINTING</p>
					<h1 class="price-list-title">PRICE LIST</h1>
					<p class="price-list-lead">Untuk pemesanan dan konfirmasi harga terbaru, silakan hubungi admin CIHOPRINTSHOP.</p>
					<p class="price-list-starting-price">Mulai dari <strong>Rp 1.000</strong> <span>· Siap cetak hari ini</span></p>
				</header>

				<div class="price-list-panel">
				<div class="price-list-panel-heading">
					<div>
						<p class="price-list-panel-kicker">DAFTAR LAYANAN</p>
						<h2>Pilih yang kamu butuhkan</h2>
					</div>
					<label class="price-list-search">
						<span class="sr-only">Cari produk</span>
						<input type="search" data-price-search aria-controls="price-list-grid" placeholder="Cari produk..." autocomplete="off">
						<span aria-hidden="true">⌕</span>
					</label>
				</div>

				<div class="price-list-filters" role="group" aria-label="Filter kategori harga">
					<button type="button" data-price-filter="all" aria-pressed="true">Semua</button>
					<button type="button" data-price-filter="paper" aria-pressed="false">Print Kertas</button>
					<button type="button" data-price-filter="sticker" aria-pressed="false">Stiker</button>
					<button type="button" data-price-filter="banner" aria-pressed="false">Banner</button>
					<button type="button" data-price-filter="merchandise" aria-pressed="false">Merchandise</button>
					<button type="button" data-price-filter="identity" aria-pressed="false">Kartu &amp; ID</button>
					<button type="button" data-price-filter="dtf-uv" aria-pressed="false">DTF &amp; UV</button>
				</div>

				<div class="price-list-grid" id="price-list-grid" data-price-grid>
				<article class="price-list-card" data-price-category="paper">
					<h3>HVS</h3>
					<table><tbody>
						<tr><th>Fotokopi</th><td>Rp 1.000</td></tr>
						<tr><th>HVS 80 gr B&amp;W - 1 sisi</th><td>Rp 3.000</td></tr>
						<tr><th>HVS 80 gr B&amp;W - 2 sisi</th><td>Rp 6.000</td></tr>
						<tr><th>HVS 80 gr warna - 1 sisi</th><td>Rp 5.000</td></tr>
						<tr><th>HVS 80 gr warna - 2 sisi</th><td>Rp 10.000</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="paper">
					<h3>Art Paper &amp; Carton</h3>
					<table><tbody>
						<tr><th>Art Paper 150 gr - 1 sisi</th><td>Rp 10.000</td></tr>
						<tr><th>Art Paper 150 gr - 2 sisi</th><td>Rp 17.500</td></tr>
						<tr><th>Art Carton 210 gr - 1 sisi</th><td>Rp 15.000</td></tr>
						<tr><th>Art Carton 210 gr - 2 sisi</th><td>Rp 27.500</td></tr>
						<tr><th>Art Carton 260 gr - 1 sisi</th><td>Rp 20.000</td></tr>
						<tr><th>Art Carton 260 gr - 2 sisi</th><td>Rp 37.500</td></tr>
						<tr><th>Art Carton 310 gr - 2 sisi</th><td>Rp 25.000</td></tr>
						<tr><th>Cutting die cut</th><td>+ Rp 10.000</td></tr>
						<tr><th>Laminasi panas A3</th><td>+ Rp 5.000</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="paper">
					<h3>Fancy Paper</h3>
					<table><tbody>
						<tr><th>Concorde 80 gr</th><td>Rp 12.000</td></tr>
						<tr><th>Ivory 250 gr</th><td>Rp 17.500</td></tr>
						<tr><th>Linen 230 gr</th><td>Rp 18.500</td></tr>
						<tr><th>Jasmine White 80 gr</th><td>Rp 17.500</td></tr>
						<tr><th>Jasmine Natural 80 gr</th><td>Rp 17.500</td></tr>
						<tr><th>Brief Card (TIK) 200 gr</th><td>Rp 17.500</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="sticker">
					<h3>Sticker A3</h3>
					<table><tbody>
						<tr><th>Sticker Vinyl Glossy</th><td>Rp 17.500</td></tr>
						<tr><th>Sticker Vinyl Matte</th><td>Rp 17.500</td></tr>
						<tr><th>Sticker Chromo</th><td>Rp 15.000</td></tr>
						<tr><th>Sticker Transparan</th><td>Rp 17.500</td></tr>
						<tr><th>Sticker Hologram</th><td>Rp 17.500</td></tr>
						<tr><th>Cutting kiss cut</th><td>+ Rp 5.000</td></tr>
						<tr><th>Cutting die cut</th><td>+ Rp 10.000</td></tr>
						<tr><th>Laminasi panas A3</th><td>+ Rp 5.000</td></tr>
						<tr><th>Laminasi dingin A3</th><td>+ Rp 15.000</td></tr>
						<tr><th>Masking A3</th><td>+ Rp 15.000</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="banner">
					<h3>Spanduk &amp; Banner</h3>
					<table><tbody>
						<tr><th>Flexy Frontlite 280 gr</th><td>Rp 40.000/m</td></tr>
						<tr><th>Flexy Korcin 340 gr</th><td>Rp 50.000/m</td></tr>
						<tr><th>Flexy Korcin 440 gr</th><td>Rp 60.000/m</td></tr>
						<tr><th>Mata itik</th><td>+ Rp 1.000/pcs</td></tr>
						<tr><th>Finishing seaming</th><td>+ Rp 2.500</td></tr>
						<tr><th>Finishing selongsong</th><td>+ Rp 3.500</td></tr>
						<tr><th>Sambung</th><td>+ Rp 10.000</td></tr>
						<tr><th>Tambal/timpa</th><td>+ Rp 15.000</td></tr>
						<tr><th>X-Banner 60 x 160 cm</th><td>Rp 165.000</td></tr>
						<tr><th>Roll Up Banner 60 x 160 cm</th><td>Rp 350.000</td></tr>
						<tr><th>Roll Up Banner 80 x 200 cm</th><td>Rp 450.000</td></tr>
						<tr><th>Tripod Banner A2</th><td>Rp 185.000</td></tr>
						<tr><th>Tripod Banner A3</th><td>Rp 175.000</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="sticker">
					<h3>Indoor</h3>
					<table><tbody>
						<tr><th>Sticker Vinyl Supergloss</th><td>Rp 125.000/m</td></tr>
						<tr><th>Sticker One Way</th><td>Rp 135.000/m</td></tr>
						<tr><th>Sticker Transparan</th><td>Rp 125.000/m</td></tr>
						<tr><th>Albatros</th><td>Rp 125.000/m</td></tr>
						<tr><th>Luster</th><td>Rp 145.000/m</td></tr>
						<tr><th>Laminasi</th><td>+ Rp 45.000/m</td></tr>
						<tr><th>Cutting kiss cut</th><td>+ Rp 35.000/m</td></tr>
						<tr><th>Masking</th><td>+ Rp 35.000/m</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="sticker">
					<h3>Sticker Polyfoam / Inpraboard</h3>
					<table><tbody>
						<tr><th>A0 Polyfoam</th><td>Rp 175.000</td></tr>
						<tr><th>A1 Polyfoam</th><td>Rp 150.000</td></tr>
						<tr><th>A2 Polyfoam</th><td>Rp 115.000</td></tr>
						<tr><th>A3 Polyfoam</th><td>Rp 80.000</td></tr>
						<tr><th>A4 Polyfoam</th><td>Rp 45.000</td></tr>
						<tr><th>A0 Inpraboard</th><td>Rp 215.000</td></tr>
						<tr><th>A1 Inpraboard</th><td>Rp 190.000</td></tr>
						<tr><th>A2 Inpraboard</th><td>Rp 155.000</td></tr>
						<tr><th>A3 Inpraboard</th><td>Rp 120.000</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="dtf-uv">
					<h3>Direct to Film (DTF)</h3>
					<table><tbody>
						<tr><th>Print A3 - 29,7 x 42 cm</th><td>Rp 90.000</td></tr>
						<tr><th>Print A4 - 21 x 29,7 cm</th><td>Rp 50.000</td></tr>
						<tr><th>Print A5 - 14,8 x 21 cm</th><td>Rp 25.000</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="identity">
					<h3>ID Card &amp; E-Money</h3>
					<table><tbody>
						<tr><th>PVC - Print UV, 1 sisi</th><td>Rp 20.000</td></tr>
						<tr><th>PVC - Print UV, 2 sisi</th><td>Rp 35.000</td></tr>
						<tr><th>Mandiri - Print UV, 1 sisi</th><td>Rp 13.000</td></tr>
						<tr><th>Mandiri - Print UV, 2 sisi</th><td>Rp 15.000</td></tr>
						<tr><th>Mandiri - Print UV-2, 1 sisi</th><td>Rp 15.000</td></tr>
						<tr><th>Mandiri - Print UV-2, 2 sisi</th><td>Rp 18.000</td></tr>
						<tr><th>Flazz - Print UV</th><td>Konfirmasi admin</td></tr>
						<tr><th>Flazz - Print UV-2</th><td>Konfirmasi admin</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="dtf-uv">
					<h3>Ultra Violet (UV)</h3>
					<table><tbody>
						<tr><th>Print per cm</th><td>Rp 1.000</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="identity">
					<h3>Kartu Nama <span>(1 box / 100 pcs)</span></h3>
					<table><tbody>
						<tr><th>Linen 230 gr - 1 sisi</th><td>Rp 100.000</td></tr>
						<tr><th>Linen 230 gr - 2 sisi</th><td>Rp 150.000</td></tr>
						<tr><th>Art Carton 210 gr - 1 sisi</th><td>Rp 80.000</td></tr>
						<tr><th>Art Carton 210 gr - 2 sisi</th><td>Rp 140.000</td></tr>
						<tr><th>Art Carton 260 gr - 1 sisi</th><td>Rp 90.000</td></tr>
						<tr><th>Art Carton 260 gr - 2 sisi</th><td>Rp 145.000</td></tr>
						<tr><th>Laminasi panas 1 sisi</th><td>+ Rp 25.000</td></tr>
						<tr><th>Laminasi panas 2 sisi</th><td>+ Rp 50.000</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="paper">
					<h3>Brosur / Leaflet / Flyer</h3>
					<table><tbody>
						<tr><th>A4, Art Paper 150 gr - 1 sisi / 1 rim</th><td>Konfirmasi admin</td></tr>
						<tr><th>A4, Art Paper 150 gr - 2 sisi / 1 rim</th><td>Konfirmasi admin</td></tr>
						<tr><th>A5, Art Paper 150 gr - 1 sisi / 1 rim</th><td>Konfirmasi admin</td></tr>
						<tr><th>A5, Art Paper 150 gr - 2 sisi / 1 rim</th><td>Konfirmasi admin</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="merchandise">
					<h3>Mug Custom</h3>
					<table><tbody>
						<tr><th>Putih polos, bebas desain</th><td>Rp 35.000</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="merchandise">
					<h3>Lanyard Custom</h3>
					<table><tbody>
						<tr><th>Print lanyard 1 sisi</th><td>Rp 20.000</td></tr>
						<tr><th>Print lanyard 2 sisi</th><td>Rp 35.000</td></tr>
						<tr><th>Holder kartu / stopper</th><td>Konfirmasi admin</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="merchandise">
					<h3>Handuk Bordir</h3>
					<table><tbody>
						<tr><th>Ukuran 30 x 70 cm</th><td>Rp 100.000</td></tr>
						<tr><th>Ukuran 70 x 140 cm</th><td>Rp 200.000</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="merchandise">
					<h3>Kaos Polos <span>(termasuk print DTF A4)</span></h3>
					<table><tbody>
						<tr><th>30s L pendek - S / M / L / XL</th><td>Rp 115.000</td></tr>
						<tr><th>30s L pendek - 2XL</th><td>Rp 135.000</td></tr>
						<tr><th>30s L pendek - 3XL</th><td>Rp 155.000</td></tr>
						<tr><th>NSA L pendek - S / M / L / XL</th><td>Rp 115.000</td></tr>
						<tr><th>NSA L pendek - 2XL</th><td>Rp 135.000</td></tr>
						<tr><th>NSA L pendek - 3XL</th><td>Rp 155.000</td></tr>
						<tr><th>Lengan panjang - S</th><td>Rp 125.000</td></tr>
						<tr><th>Lengan panjang - M / L / XL</th><td>Rp 135.000</td></tr>
						<tr><th>Lengan panjang - 2XL</th><td>Rp 145.000</td></tr>
						<tr><th>Lengan panjang - 3XL</th><td>Rp 165.000</td></tr>
					</tbody></table>
				</article>

				<article class="price-list-card" data-price-category="merchandise">
					<h3>Paper Bag &amp; Gantungan Kunci</h3>
					<table><tbody>
						<tr><th>Paper bag custom</th><td>Mulai Rp 35.000</td></tr>
						<tr><th>Gantungan kunci custom</th><td>Mulai Rp 10.000</td></tr>
					</tbody></table>
					<p>Harga menyesuaikan ukuran dan jumlah pesanan.</p>
				</article>
				</div>
				<p class="price-list-empty" data-price-empty role="status" aria-live="polite" hidden>Tidak ada produk yang cocok.</p>
				</div>
			</div>

			<div class="price-list-contact">
				<div>
					<p class="eyebrow"><span></span> BUTUH HARGA KHUSUS?</p>
					<h2>Yuk, konsultasikan kebutuhan cetak Anda.</h2>
				</div>
				<a class="button" href="{{ route('contact') }}">Hubungi Kami <span class="button-arrow" aria-hidden="true">→</span></a>
			</div>
		</div>
	</section>
@endsection
