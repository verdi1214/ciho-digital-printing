<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeHeroSlidesTest extends TestCase
{
    public function test_home_hero_uses_printing_machine_flatbed_and_shirt_photos(): void
    {
        $response = $this->get(route('home'));

        $response->assertSeeInOrder([
            'src="'.asset('images/ciho-printing-machine.jpg').'"',
            'data-machine-image="'.asset('images/mesin-nocai-flatbed.png').'"',
            'data-shirt-image="'.asset('images/hero-produk-kaos.png').'"',
        ], false);
        $response->assertSee('class="hero"', false);
    }
}
