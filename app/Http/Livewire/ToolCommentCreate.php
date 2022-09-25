<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tool;
use App\Models\Comment;

class ToolCommentCreate extends Component
{
    public $tool;
    public $comment;

    protected $rules = [
        'comment' => 'required|min:4',
    ];

    public function mount(Tool $tool)
    {
        $this->tool = $tool;
    }

    public function storeComment()
    {
        $this->validate();

        Comment::create([
            'user_id' => auth()->id(),
            'tool_id' => $this->tool->id,
            'message' => $this->comment,
        ]);

        $this->reset('comment');

        $this->emit('commentWasCreated', 'Thank you! Your comment was succesfully posted.');
    }

    public function render()
    {
        return view('livewire.tool-comment-create');
    }
}
