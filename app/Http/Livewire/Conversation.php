<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Conversation extends Component
{
    public $chat;
    public $user;
    public $messageText;

    protected $listeners = ['conversation'];

    protected $rules = [
        'messageText' => 'required',
    ];

    public function render()
    {
        return view('livewire.conversation');
    }

    public function conversation($user)
    {
        $this->user = $user;

        $chat = Chat::where(function ($query) use ($user) {
            $query->where('sender_id', Auth::id())->where('recipient_id', $user['id']);
        })->orWhere(function ($query) use ($user) {
            $query->where('sender_id', $user['id'])->where('recipient_id', Auth::id());
        })->get();

        $this->chat = $chat;
    }

    public function submit()
    {
        $this->validate();
        // Execution doesn't reach here if validation fails.

        $user = $this->user;
        Chat::create([
            'sender_id' => Auth::id(),
            'recipient_id' => $user['id'],
            'content' => $this->messageText,
            'status' => 'unread'
        ]);

        $this->reset('messageText');

        $chat = Chat::where(function ($query) use ($user) {
            $query->where('sender_id', Auth::id())->where('recipient_id', $user['id']);
        })->orWhere(function ($query) use ($user) {
            $query->where('sender_id', $user['id'])->where('recipient_id', Auth::id());
        })->get();

        $this->chat = $chat;
    }
}