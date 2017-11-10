<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Tests the home page
 */
class HomePageTest extends TestCase {
    /**
     * A logged in request should not be redirected and
     * should see the dashboard.
     */
    public function testLoggedinRequest() {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/');

        $response->assertSuccessful();
        $response->assertSee('href="/survey"');
    }
}
