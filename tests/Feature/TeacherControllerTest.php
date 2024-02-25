<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Teacher;

class TeacherControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test index method.
     *
     * @return void
     */
    public function testIndex()
    {
        // Create test data
        Teacher::factory()->count(3)->create();

        // Hit the index endpoint
        $response = $this->get('/teachers');

        // Assert successful response
        $response->assertStatus(200);

        // Assert that the response contains the teachers
        $response->assertViewHas('teachers');
    }

    /**
     * Test create method.
     *
     * @return void
     */
    public function testCreate()
    {
        // Hit the create endpoint
        $response = $this->get('/teachers/create');

        // Assert successful response
        $response->assertStatus(200);
    }

    /**
     * Test store method with valid data.
     *
     * @return void
     */
    public function testStoreWithValidData()
    {
        // Prepare valid data
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ];

        // Hit the store endpoint with valid data
        $response = $this->post('/teachers', $data);

        // Assert redirect
        $response->assertRedirect('/teachers');

        // Assert that teacher is created in the database
        $this->assertDatabaseHas('teachers', $data);
    }

    /**
     * Test store method with invalid data.
     *
     * @return void
     */
    public function testStoreWithInvalidData()
    {
        // Prepare invalid data
        $data = [
            'name' => '', // Name is required
            'email' => 'invalid_email', // Invalid email format
        ];

        // Hit the store endpoint with invalid data
        $response = $this->post('/teachers', $data);

        // Assert redirect back
        $response->assertSessionHasErrors(['name', 'email']);
    }

    /**
     * Test show method.
     *
     * @return void
     */
    public function testShow()
    {
        // Create a teacher
        $teacher = Teacher::factory()->create();

        // Hit the show endpoint
        $response = $this->get('/teachers/' . $teacher->id);

        // Assert successful response
        $response->assertStatus(200);

        // Assert that the response contains the teacher
        $response->assertViewHas('teacher', $teacher);
    }

    /**
 * Test edit method.
 *
 * @return void
 */
public function testEdit()
{
    // Create a teacher
    $teacher = Teacher::factory()->create();

    // Hit the edit endpoint
    $response = $this->get('/teachers/' . $teacher->id . '/edit');

    // Assert successful response
    $response->assertStatus(200);

    // Assert that the response contains the teacher
    $response->assertViewHas('teacher', $teacher);
}

/**
 * Test update method with valid data.
 *
 * @return void
 */
public function testUpdateWithValidData()
{
    // Create a teacher
    $teacher = Teacher::factory()->create();

    // Prepare valid data
    $data = [
        'name' => 'Updated Name',
        'email' => 'updated@example.com',
    ];

    // Hit the update endpoint with valid data
    $response = $this->put('/teachers/' . $teacher->id, $data);

    // Assert redirect
    $response->assertRedirect('/teachers');

    // Refresh the teacher model from the database
    $teacher->refresh();

    // Assert that the teacher has been updated
    $this->assertEquals('Updated Name', $teacher->name);
    $this->assertEquals('updated@example.com', $teacher->email);
}

/**
 * Test update method with invalid data.
 *
 * @return void
 */
public function testUpdateWithInvalidData()
{
    // Create a teacher
    $teacher = Teacher::factory()->create();

    // Prepare invalid data
    $data = [
        'name' => '', // Name is required
        'email' => 'invalid_email', // Invalid email format
    ];

    // Hit the update endpoint with invalid data
    $response = $this->put('/teachers/' . $teacher->id, $data);

    // Assert redirect back
    $response->assertSessionHasErrors(['name', 'email']);
}

/**
 * Test destroy method.
 *
 * @return void
 */
public function testDestroy()
{
    // Create a teacher
    $teacher = Teacher::factory()->create();

    // Hit the destroy endpoint
    $response = $this->delete('/teachers/' . $teacher->id);

    // Assert redirect
    $response->assertRedirect('/teachers');

    // Assert that the teacher has been deleted from the database
    $this->assertDeleted($teacher);
}

}
