<?php

namespace Tests\Feature;

use Tests\TestCase;

class PriceListPageTest extends TestCase
{
    public function test_price_list_page_displays_categories_and_prices(): void
    {
        $response = $this->get('/price-list');

        $response->assertOk();
        $response->assertSeeText('HVS');
        $response->assertSeeText('Rp 3.000');
        $response->assertSeeText('Direct to Film (DTF)');
    }

    public function test_price_list_page_marks_its_nav_link_active(): void
    {
        $response = $this->get('/price-list');

        $response->assertSee('href="'.route('price-list').'" class="is-active"', false);
    }
}
