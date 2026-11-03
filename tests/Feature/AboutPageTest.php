<?php

namespace Tests\Feature;

use Tests\TestCase;

class AboutPageTest extends TestCase
{
    public function test_about_page_loads_and_displays_story_section(): void
    {
        $response = $this->get(route('about'));

        $response->assertStatus(200);
        $response->assertSee('01 / MENGENAL CIHO');
        $response->assertSee('Partner cetak.');
        $response->assertSee('Teman bercerita.');
        $response->assertSee('Kami percaya perhatian pada hal kecil membuat perbedaan besar.');
        $response->assertSee('images/ciho-wordmark-about.png');
        $response->assertDontSee('IDE KAMU, KAMI CETAK JADI NYATA.');
        $response->assertSeeInOrder([
            'class="about-logo-panel"',
            '<h1 id="about-title">Di balik setiap cetakan, <span>ada cerita.</span></h1>',
        ], false);
        $response->assertSee('about-end-stripe');
        $response->assertSeeInOrder([
            '02 / SEJARAH CIHO',
            '03 / ARAH KAMI',
        ]);
        $response->assertSee('Tumbuh dari ide,');
        $response->assertSee('Perjalanan CIHO bermula di Sumedang pada 2005/2006.');
        $response->assertSee('Hendra Nugraha Diatmadja (Hendra Ciho)');
        $response->assertSee('One Stop Shopping');
        $response->assertSee('0813-9000-1217');
        $response->assertSee('official merchandiser');
        $response->assertSeeInOrder([
            'Menjadi partner digital printing yang tepercaya untuk setiap ide.',
            'Mendengarkan kebutuhan sebelum merekomendasikan solusi.',
        ]);
        $response->assertSee('Menjadi partner digital printing yang tepercaya untuk setiap ide.');
        $response->assertSee('Mendengarkan kebutuhan sebelum merekomendasikan solusi.');
        $response->assertDontSee('about-history-timeline');
        $response->assertDontSee('[Sejarah singkat CIHO:');
    }
}
