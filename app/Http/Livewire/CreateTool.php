<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tool;
use App\Models\Topic;

class CreateTool extends Component
{
    public $title;
    public $url;
    public $topic = 1;
    public $description;

    protected $rules = [
        'title' => 'required|min:4',
        'url' => 'required|url',
        'topic' => 'required|integer',
        'description' => 'required|min:32',
    ];

    public function createTool()
    {
        $this->validate();

        Tool::create([
            'user_id' => auth()->id(),
            'topic_id' => $this->topic,
            'title' => $this->title,
            'url' => $this->url,
            'description' => $this->description,
        ]);

        session()->flash('flash.banner', 'Thank you! Your tool was successfully submitted!');
        session()->flash('flash.bannerStyle', 'success');

        $this->reset();

        return redirect()->route('tools.index');
    }

    public function render()
    {
        return view('livewire.create-tool', [
            'topics' => Topic::all(),
        ]);
    }
}
