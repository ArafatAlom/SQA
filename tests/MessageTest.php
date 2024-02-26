<?php

namespace Tests\Feature;

use App\Models\Message;
use App\Models\Participant;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MessagesControllerTest extends TestCase
{
    use DatabaseMigrations;
    use RefreshDatabase;

    public function testIndex()
    {
        // Test index method of MessagesController
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('messages'));
        $response->assertStatus(200);
        $response->assertViewIs('messenger.index');
        $response->assertViewHas('threads');
    }

    public function testShow()
    {
        // Test show method of MessagesController
        $user = User::factory()->create();
        $this->actingAs($user);

        $thread = Thread::factory()->create();
        $participant = Participant::factory()->create(['thread_id' => $thread->id]);
        $thread->participants()->attach($participant->user_id);

        $response = $this->get(route('messages.show', $thread->id));
        $response->assertStatus(200);
        $response->assertViewIs('messenger.show');
        $response->assertViewHas('thread');
        $response->assertViewHas('users');
    }

    public function testCreate()
    {
        // Test create method of MessagesController
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('messages.create'));
        $response->assertStatus(200);
        $response->assertViewIs('messenger.create');
        $response->assertViewHas('users');
    }

    public function testStore()
    {
        // Test store method of MessagesController
        $user = User::factory()->create();
        $this->actingAs($user);

        $data = [
            'subject' => 'Test Subject',
            'message' => 'Test Message',
        ];

        $response = $this->post(route('messages.store'), $data);
        $response->assertRedirect(route('messages'));

        $this->assertDatabaseHas('threads', [
            'subject' => $data['subject'],
        ]);

        $this->assertDatabaseHas('messages', [
            'body' => $data['message'],
        ]);
    }

    public function testUpdate()
    {
        // Test update method of MessagesController
        $user = User::factory()->create();
        $this->actingAs($user);

        $thread = Thread::factory()->create();
        $participant = Participant::factory()->create(['thread_id' => $thread->id]);
        $thread->participants()->attach($participant->user_id);

        $data = [
            'message' => 'Test Message',
        ];

        $response = $this->put(route('messages.update', $thread->id), $data);
        $response->assertRedirect(route('messages.show', $thread->id));

        $this->assertDatabaseHas('messages', [
            'body' => $data['message'],
        ]);
    }
}
