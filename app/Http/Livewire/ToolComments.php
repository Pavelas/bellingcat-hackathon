<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tool;

class ToolComments extends Component
{
    public $tool;

    protected $listeners = ['commentWasCreated'];

    public function commentWasCreated()
    {
        $this->tool->refresh();
    }

    public function mount(Tool $tool)
    {
        $this->tool = $tool;
    }

    public function render()
    {
        return view('livewire.tool-comments', [
            'comments' => $this->tool->comments,
        ]);
    }
}
