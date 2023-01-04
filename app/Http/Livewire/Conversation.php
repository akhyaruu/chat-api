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

    protected $listeners = ['conversation', 'refreshComponent' => '$refresh'];

    protected $rules = [
        'messageText' => 'required',
    ];

    public function render()
    {
        $user = $this->user;

        if ($user) {
            $chat = Chat::where(function ($query) use ($user) {
                $query->where('sender_id', Auth::id())->where('recipient_id', $user['id']);
            })->orWhere(function ($query) use ($user) {
                $query->where('sender_id', $user['id'])->where('recipient_id', Auth::id());
            })->get();

            $this->chat = $chat;
        }

        if ($this->chat) {
            $this->chat = $chat;
        }

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
        $this->dispatchBrowserEvent('scrollDown');
    }

    public function submit()
    {
        $this->validate(); # apabila gagal maka kode di bawah tidak akan di eksekusi

        Chat::create([
            'sender_id' => Auth::id(),
            'recipient_id' => $this->user['id'],
            'content' => $this->messageText,
            'status' => 'unread',
        ]);

        $this->reset('messageText');
        $this->dispatchBrowserEvent('scrollDown');
        $this->emit('refreshComponent');
    }
}