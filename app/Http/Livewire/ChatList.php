<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatList extends Component
{
    public $userAvailable;
    public $chatList;
    public $phoneNumber;

    protected $listeners = ['search', 'conversation', 'refreshComponentChatList' => '$refresh'];

    protected $rules = [
        'phoneNumber' => 'required',
    ];

    public function render()
    {
        $chatList = Chat::join('users', 'users.id', '=', 'chats.sender_id')
            ->select('*')
            ->where('sender_id', '!=', Auth::id())
            ->where('recipient_id', '=', Auth::id())
            ->latest('chats.created_at')->get()->toArray();

        $latestChatList = [];
        $groupedChatList = array_group_by($chatList, 'sender_id'); # composer require mcaskill/php-array-group-by
        $keyIteration = array_keys($groupedChatList);
        foreach ($keyIteration as $keyValue) {
            $latestChatList[] = $groupedChatList[$keyValue][0];
        }

        $this->chatList = $latestChatList;

        return view('livewire.chat-list');
    }

    public function search($query)
    {
        $user = User::where('phone_number', '=', $query)->first();
        if ($user && $user['id'] != Auth::id()) {
            $this->userAvailable = 'ada';
        } else {
            $this->userAvailable = 'tidak ada';
        }
    }

    # untuk me-reset user available
    public function conversation($user)
    {
        if ($user) {
            $this->userAvailable = '';
        }
    }

    public function chat($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        $this->validate();

        if (isset($this->phoneNumber)) {
            $user = User::where('phone_number', '=', $this->phoneNumber)->first(); # cari sender
            if ($user && $user['id'] != Auth::id()) {
                Chat::where('sender_id', $user['id'])->where('recipient_id', Auth::id())->update(['status' => 'read']);
                $this->emit('conversation', $user);
                $this->reset('phoneNumber');
            }
        }
    }
}