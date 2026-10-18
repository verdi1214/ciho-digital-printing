<?php

namespace Tests\Feature;

use Tests\TestCase;

class PriceListPageTest extends TestCase
{
    public function test_price_list_page_displays_categories_and_prices(): void
    {
        $response = $this->get('/price-list');

        $response->assertOk();
        $response->assertSeeText('CIHO JAKARTA DIGITAL PRINTING');
        $response->assertSeeText('Untuk pemesanan dan konfirmasi harga terbaru');
        $response->assertSee('class="price-list-stripe"', false);
        $response->assertSeeText('HVS');
        $response->assertSeeText('Rp 3.000');
        $response->assertSeeText('Direct to Film (DTF)');
    }

    public function test_price_list_page_marks_its_nav_link_active(): void
    {
        $response = $this->get('/price-list');

        $response->assertSee('href="'.route('price-list').'" class="is-active"', false);
    }

    public function test_price_list_page_renders_search_category_filters_and_empty_state(): void
    {
        $response = $this->get('/price-list');

        $response->assertSee('data-price-search', false);
        $response->assertSee('data-price-filter="paper"', false);
        $response->assertSee('data-price-filter="dtf-uv"', false);
        $response->assertSee('data-price-grid', false);
        $response->assertSee('data-price-empty', false);
        $response->assertSee('js/price-list.js', false);
    }
}
