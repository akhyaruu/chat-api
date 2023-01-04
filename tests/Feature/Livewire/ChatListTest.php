<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ChatList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ChatListTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(ChatList::class);

        $component->assertStatus(200);
    }
}
