<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public $query;

    public function search()
    {
        $this->emit('search', $this->query);
    }

    public function chat()
    {
        $user = User::where('phone_number', '=', $this->query)->first();
        if ($user) {
            $this->emit('conversation', $user);
        }
    }
}