<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KairosTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_requires_login()
    {
        $response = $this->get('/dashboard');
        $response->assertRedirect('/login');
    }

    public function test_grades_page_requires_login()
    {
        $response = $this->get('/grades');
        $response->assertRedirect('/login');
    }

    public function test_groups_page_requires_login()
    {
        $response = $this->get('/groups');
        $response->assertRedirect('/login');
    }
}