<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_whatsapp_float_button_links_to_admin_number(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('https://wa.me/6281390001217', false);
    }

    public function test_contact_page_links_to_admin_whatsapp(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('https://wa.me/6281390001217', false);
        $response->assertSee('0813-9000-1217');
    }

    public function test_materials_page_loads_successfully(): void
    {
        $response = $this->get('/materials');

        $response->assertStatus(200);
        $response->assertSee('Flexi Frontlite');
        $response->assertSee('Flexi Frontlite 280gr');
        $response->assertSee('Flexi Korcin 340gr');
        $response->assertSee('Flexi Korcin 440gr');
        $response->assertSee('X-Banner 60x160cm');
        $response->assertSee('Roll Up Banner 60x160cm');
        $response->assertSee('Roll Up Banner 80x200cm');
        $response->assertSee('Tripod Banner A2');
        $response->assertSee('Tripod Banner A3');
        $response->assertSee('HVS 80gr B&W 1 sisi');
        $response->assertSee('images/material-hvs-80gr-bw-1-side.png');
        $response->assertSee('HVS 80gr B&W 2 sisi');
        $response->assertSee('images/material-hvs-80gr-bw-2-side.png');
        $response->assertSee('HVS 80gr Warna 1 sisi');
        $response->assertSee('images/material-hvs-80gr-color-1-side.png');
        $response->assertSee('HVS 80gr Warna 2 sisi');
        $response->assertSee('images/material-hvs-80gr-color-2-side.png');
        $response->assertSee('Art Papper 150gr');
        $response->assertSee('images/material-art-papper-150gr.png');
        $response->assertSee('Art Carton');
        $response->assertSee('images/material-art-carton.png');
        $response->assertSee('Art Papper 150gr 1 sisi');
        $response->assertSee('Art Papper 150gr 2 sisi');
        $response->assertSee('Art Carton 210gr 1 sisi');
        $response->assertSee('Art Carton 210gr 2 sisi');
        $response->assertSee('Art Carton 260gr 1 sisi');
        $response->assertSee('Art Carton 260gr 2 sisi');
        $response->assertSee('Art Carton 310gr 1 sisi');
        $response->assertSee('Concorde 80gr');
        $response->assertSee('images/material-concorde-80gr.png');
        $response->assertSee('Ivory 250gr');
        $response->assertSee('images/material-ivory-250gr.png');
        $response->assertSee('Linen 230gr');
        $response->assertSee('images/material-linen-230gr.png');
        $response->assertSee('Jasmine White 80gr');
        $response->assertSee('images/material-jasmine-white-80gr.png');
        $response->assertSee('Jasmine Natural 80gr');
        $response->assertSee('images/material-jasmine-natural-80gr.png');
        $response->assertSee('Brief Card (TIK) 200gr');
        $response->assertSee('images/material-brief-card-200gr.png');
        $response->assertSee('Stiker Vinyl Glossy');
        $response->assertSee('images/material-vinyl-glossy.png');
        $response->assertSee('Ilustrasi umum lembar stiker vinyl glossy', false);
        $response->assertSee('Stiker Vinyl Matte');
        $response->assertSee('images/material-vinyl-matte.png');
        $response->assertSee('Ilustrasi umum lembar stiker vinyl matte', false);
        $response->assertSee('Stiker Chromo');
        $response->assertSee('images/material-sticker-chromo.png');
        $response->assertSee('Ilustrasi umum lembar stiker Chromo', false);
        $response->assertSee('Sticker Vinyl Supergloss');
        $response->assertSee('Sticker One Way');
        $response->assertSee('Sticker Transparan');
        $response->assertSee('Albatros');
        $response->assertSee('Luster');
        $response->assertSee('A0 Polyfoam');
        $response->assertSee('A1 Polyfoam');
        $response->assertSee('A2 Polyfoam');
        $response->assertSee('A3 Polyfoam');
        $response->assertSee('A4 Polyfoam');
        $response->assertSee('A0 Inpraboard');
        $response->assertSee('A1 Inpraboard');
        $response->assertSee('A2 Inpraboard');
        $response->assertSee('A3 Inpraboard');
        $response->assertSee('Print A3 - 29,7x42cm');
        $response->assertSee('Print A4 - 21x29,7cm');
        $response->assertSee('Print A5 - 14,8x21cm');
        $response->assertSee('PVC - Print UV - 1 Sisi');
        $response->assertSee('PVC - Print UV - 2 Sisi');
        $response->assertSee('Mandiri - Print UV - 1 Sisi');
        $response->assertSee('Mandiri - Print UV - 2 Sisi');
        $response->assertSee('Flazz - Print UV - 1 Sisi');
        $response->assertSee('Flazz - Print UV - 2 Sisi');
        $response->assertSee('Print / 1cm');
        $response->assertSee('Linen 230gr - 1 sisi');
        $response->assertSee('Linen 230gr - 2 sisi');
        $response->assertSee('Art Carton 210gr - 1 sisi');
        $response->assertSee('Art Carton 210gr - 2 sisi');
        $response->assertSee('Art Carton 260gr - 2 sisi');
        $response->assertSee('Kartu Nama (1 Box: 100pcs)');
        $response->assertSee('(A4) AP 150gr - 1 sisi - 1rim');
        $response->assertSee('(A4) AP 150gr - 2 sisi - 1rim');
        $response->assertSee('(A5) AP 150gr - 1 sisi - 1rim');
        $response->assertSee('(A5) AP 150gr - 2 sisi - 1rim');
        $response->assertSee('Print Lanyard 1 sisi');
        $response->assertSee('Print Lanyard 2 sisi');
        $response->assertSee('Putih polos (bebas didesain)');
        $response->assertSee('Ukuran 30x70');
        $response->assertSee('Ukuran 70x140');
        $response->assertSee('20s L Pendek');
        $response->assertSee('24s L Pendek');
        $response->assertSee('30s L Pendek');
        $response->assertSee('NSA L Pendek');
        $response->assertSee('Lengan Panjang');
        $response->assertSee('Ukuran Custom');
        $response->assertSee('Paper Bag ukuran custom, mulai Rp 35.000.');
        $response->assertSee('Semua Kategori <span class="filter-count">74</span>', false);
        $response->assertSee('HVS 80gr & Pilihan Cetak <span class="filter-count">4</span>', false);
        $response->assertSee('class="material-grid material-grid-four"', false);
        $response->assertSee('class="material-category-section" data-category="hvs"', false);
        $response->assertSee('Art Paper & Carton', false);
        $response->assertSee('Art Paper & Carton <span class="filter-count">7</span>', false);
        $response->assertSee('data-filter="art-paper-carton"', false);
        $response->assertSee('data-category="art-paper-carton" data-section-order="2"', false);
        $response->assertSee('Spanduk & Banner <span class="filter-count">8</span>', false);
        $response->assertSee('<h2>Spanduk & Banner</h2>', false);
        $response->assertSee('Sticker A3 <span class="filter-count">5</span>', false);
        $response->assertSee('<h2>Sticker A3</h2>', false);
        $response->assertSee('Fancy Paper <span class="filter-count">6</span>', false);
        $response->assertSee('<h2>Fancy Paper</h2>', false);
        $response->assertSee('data-filter="fancy-paper"', false);
        $response->assertSee('data-category="fancy-paper" data-section-order="3"', false);
        $response->assertSee('Indoor <span class="filter-count">5</span>', false);
        $response->assertSee('<h2>Indoor</h2>', false);
        $response->assertSee('data-filter="indoor"', false);
        $response->assertSee('data-category="indoor" data-section-order="6"', false);
        $response->assertSee('Sticker Polyfoam/Inpraboard <span class="filter-count">9</span>', false);
        $response->assertSee('<h2>Sticker Polyfoam/Inpraboard</h2>', false);
        $response->assertSee('data-filter="polyfoam-inpraboard"', false);
        $response->assertSee('data-category="polyfoam-inpraboard" data-section-order="7"', false);
        $response->assertSee('Direct To Film (DTF) <span class="filter-count">3</span>', false);
        $response->assertSee('<h2>Direct To Film (DTF)</h2>', false);
        $response->assertSee('data-filter="dtf"', false);
        $response->assertSee('data-category="dtf" data-section-order="8"', false);
        $response->assertSee('ID Card & E-Money <span class="filter-count">6</span>', false);
        $response->assertSee('<h2>ID Card & E-Money</h2>', false);
        $response->assertSee('data-filter="id-card-e-money"', false);
        $response->assertSee('data-category="id-card-e-money" data-section-order="9"', false);
        $response->assertSee('Ultra Violet (UV) <span class="filter-count">1</span>', false);
        $response->assertSee('<h2>Ultra Violet (UV)</h2>', false);
        $response->assertSee('data-filter="ultra-violet"', false);
        $response->assertSee('data-category="ultra-violet" data-section-order="10"', false);
        $response->assertSee('Kartu Nama <span class="filter-count">5</span>', false);
        $response->assertSee('<h2>Kartu Nama (1 Box: 100pcs)</h2>', false);
        $response->assertSee('data-filter="kartu-nama"', false);
        $response->assertSee('data-category="kartu-nama" data-section-order="11"', false);
        $response->assertSee('Brosur/Leaflet/Flyer <span class="filter-count">4</span>', false);
        $response->assertSee('<h2>Brosur/Leaflet/Flyer</h2>', false);
        $response->assertSee('data-filter="brosur-leaflet-flyer"', false);
        $response->assertSee('data-category="brosur-leaflet-flyer" data-section-order="12"', false);
        $response->assertSee('Lanyard Custom <span class="filter-count">2</span>', false);
        $response->assertSee('<h2>Lanyard Custom</h2>', false);
        $response->assertSee('data-filter="lanyard-custom"', false);
        $response->assertSee('data-category="lanyard-custom" data-section-order="13"', false);
        $response->assertSee('Mug Custom <span class="filter-count">1</span>', false);
        $response->assertSee('<h2>Mug Custom</h2>', false);
        $response->assertSee('data-filter="mug-custom"', false);
        $response->assertSee('data-category="mug-custom" data-section-order="14"', false);
        $response->assertSee('Handuk Bordir <span class="filter-count">2</span>', false);
        $response->assertSee('<h2>Handuk Bordir</h2>', false);
        $response->assertSee('data-filter="handuk-bordir"', false);
        $response->assertSee('data-category="handuk-bordir" data-section-order="15"', false);
        $response->assertSee('Kaos Polos <span class="filter-count">5</span>', false);
        $response->assertSee('<h2>Kaos Polos (Include Print DTF A4)</h2>', false);
        $response->assertSee('data-filter="kaos-polos-dtf"', false);
        $response->assertSee('data-category="kaos-polos-dtf" data-section-order="16"', false);
        $response->assertSee('Paper Bag <span class="filter-count">1</span>', false);
        $response->assertSee('<h2>Paper Bag</h2>', false);
        $response->assertSee('data-filter="paper-bag"', false);
        $response->assertSee('data-category="paper-bag" data-section-order="17"', false);
        $response->assertSee('data-category="stiker-label" data-section-order="4"', false);
        $response->assertSee('data-category="format-besar" data-section-order="5"', false);
    }

    public function test_location_page_loads_and_contains_google_maps(): void
    {
        $response = $this->get('/location');

        $response->assertStatus(200);
        $response->assertSee('google-map-iframe', false);
        $response->assertSee('maps.google.com', false);
    }

    public function test_navbar_contains_bahan_and_lokasi_links(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee(route('materials'), false);
        $response->assertSee(route('location'), false);
    }
}
