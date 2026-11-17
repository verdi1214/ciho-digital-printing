<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProjectGalleryTest extends TestCase
{
    public function test_project_page_renders_25_local_gallery_photos(): void
    {
        $response = $this->get(route('project'));

        $response->assertOk();
        $response->assertDontSee('images.unsplash.com');
        $response->assertSee('data-count="100000"', false);
        $response->assertSee('100.000', false);
        $this->assertSame(25, substr_count($response->getContent(), 'class="project-card-v2'));
    }
}
