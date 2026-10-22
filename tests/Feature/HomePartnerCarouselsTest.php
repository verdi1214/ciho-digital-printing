<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePartnerCarouselsTest extends TestCase
{
    public function test_homepage_shows_machine_and_client_carousels_in_opposite_directions(): void
    {
        $response = $this->get(route('home'));

        $response->assertSee([
            'Mesin &amp; klien kami',
            'Didukung mesin cetak',
            'Mesin cetak bergerak ke kiri',
            'Dipercaya oleh',
            'Klien bergerak ke kanan',
            'alt="Epson"',
            'src="'.asset('images/machine-logos/hinode.svg').'"',
            'src="'.asset('images/machine-logos/epson.svg').'"',
            'src="'.asset('images/machine-logos/nocai.svg').'"',
            'Printer Outdoor &amp; DTF',
            'alt="Pertamina"',
            'src="'.asset('images/client-logos/bfi.png').'"',
            'alt="Bumi Langit"',
            'alt="Kepolisian"',
            'src="'.asset('images/client-logos/kepolisian-ri.svg').'"',
            'alt="AQUA"',
            'src="'.asset('images/client-logos/aqua.png').'"',
        ], false);

        $response->assertDontSee('credibility-toggle');
    }
}
