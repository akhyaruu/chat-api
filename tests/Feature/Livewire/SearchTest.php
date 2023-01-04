<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Search;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SearchTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Search::class);

        $component->assertStatus(200);
    }
}
