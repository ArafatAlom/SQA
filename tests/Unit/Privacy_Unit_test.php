<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class PrivacyPolicyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPrivacyPolicyPageLoads()
    {
        $response = $this->get('/privacy-policy');

        $response->assertStatus(200)
                 ->assertSee('Privacy Policy')
                 ->assertSee('The privacy of our visitors is of extreme importance to us.')
                 ->assertSee('How You Can Manage and Control Your Personal & Directory Information');
                 // Add more assertions to validate the presence of specific elements or text
    }
}
