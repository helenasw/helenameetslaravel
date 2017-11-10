<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RequireLoginTest extends TestCase {
    /**
     * A logged out request should be redirected to login.
     *
     * @dataProvider getURLsRequiringLogin
     * @param string $url
     */
    public function testLoggedOutGetRequest(string $url) {
        $response = $this->get($url);

        $response->assertRedirect('/login');
    }

    public function getURLsRequiringLogin() {
        return [
            ['/'],
            ['/survey'],
        ];
    }

    /**
     * A logged out request should fail.
     *
     * @dataProvider postURLsRequiringLogin
     * @param string $url
     */
    public function testLoggedOutPostRequest(string $url) {
        $response = $this->post('/');

        $response->assertStatus(405);
    }

    public function postURLsRequiringLogin() {
        return [
            ['/'],
        ];
    }
}
