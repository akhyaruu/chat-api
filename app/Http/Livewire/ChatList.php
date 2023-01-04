<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ChatList extends Component
{
    public $userAvailable;

    protected $listeners = ['search'];

    public function render()
    {
        return view('livewire.chat-list');
    }

    public function search($query)
    {
        $user = User::where('phone_number', '=', $query)->first();
        if ($user) {
            $this->userAvailable = 'ada';
        } else {
            $this->userAvailable = 'tidak ada';
        }
    }
}