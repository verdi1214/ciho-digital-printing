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

    public function test_price_list_page_renders_product_cards_directly_without_search_and_filters(): void
    {
        $response = $this->get('/price-list');

        $response->assertSee('data-price-grid', false);
        $response->assertSee('data-price-category="paper"', false);
        $response->assertSee('data-price-category="dtf-uv"', false);
        $response->assertDontSee('data-price-search', false);
        $response->assertDontSee('data-price-filter="paper"', false);
        $response->assertDontSee('data-price-empty', false);
        $response->assertDontSee('js/price-list.js', false);
    }
}
