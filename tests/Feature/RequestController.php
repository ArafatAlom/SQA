<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\RequestMake;

class RequestControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_addData()
    {
        // Create a mock request with sample data
        $requestData = [
            'gmail' => 'test@gmail.com',
            'private_or_batch' => 'private',
            'subject' => 'Mathematics',
            'no_of_student' => 10,
            'address' => '123 Test St',
            'phone_no' => '1234567890',
            'teacher_id' => 1,
            'opinion' => 'good',
        ];
        $request = new Illuminate\Http\Request($requestData);

        // Call the controller method
        $controller = new App\Http\Controllers\RequestController;
        $response = $controller->addData($request);

        // Assert that the data is saved to the database
        $this->assertDatabaseHas('request_makes', $requestData);

        // Assert that the response is a view for the index page
        $response->assertViewIs('index');
    }
}
