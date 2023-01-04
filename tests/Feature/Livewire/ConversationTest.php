<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Conversation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ConversationTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Conversation::class);

        $component->assertStatus(200);
    }
}
