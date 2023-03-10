<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Search extends Component
{
    public $query;

    protected $rules = [
        'query' => 'required',
    ];

    public function search()
    {
        $this->validate();
        $this->emit('search', $this->query);
    }

    public function startChat()
    {
        $this->validate();
        $user = User::where('phone_number', '=', $this->query)->first();
        if ($user && $user['id'] != Auth::id()) {
            $this->emit('conversation', $user);
            $this->reset('query');
        }
    }
}