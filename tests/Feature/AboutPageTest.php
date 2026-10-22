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
        $response->assertSee('about-end-stripe');
        $response->assertSee('02 / SEJARAH CIHO');
        $response->assertSee('Setiap perjalanan punya cerita.');
        $response->assertSee('[Sejarah singkat CIHO: awal berdiri dan perjalanan usaha hingga saat ini. Materi resmi akan ditambahkan di sini.]');
    }
}
