<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tool;

class ToolCard extends Component
{
    public $tool;
    public $favoritesCount;

    public function mount(Tool $tool, $favoritesCount)
    {
        $this->tool = $tool;
        $this->favoritesCount = $favoritesCount;
        $this->hasFavorited = $tool->isFavoritedByUser(auth()->user());
    }

    public function favorite()
    {
        if ($this->hasFavorited) {
            $this->tool->removeFromFavorites(auth()->user());
            $this->favoritesCount--;
            $this->hasFavorited = false;
        } else {
            $this->tool->addToFavorites(auth()->user());
            $this->favoritesCount++;
            $this->hasFavorited = true;
        }
    }

    public function render()
    {
        return view('livewire.tool-card');
    }
}
