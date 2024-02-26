<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\RequestMake;

class RequestControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_add_data_to_database()
    {
        $requestData = [
            'gmail' => 'test@gmail.com',
            'private_or_batch' => 'private',
            'subject' => 'Maths',
            'no_of_student' => 10,
            'address' => '123 Test St',
            'phone_no' => '1234567890',
            'teacher_id' => 1,
            'opinion' => 'Good'
        ];

        $response = $this->post('/add-data', $requestData);

        $response->assertStatus(200);

        // Assert data is stored in the database
        $this->assertDatabaseHas('request_makes', $requestData);
    }
}
