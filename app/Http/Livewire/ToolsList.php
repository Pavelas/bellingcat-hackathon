<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Tool;
use App\Models\Topic;
use App\Models\Favorite;

class ToolsList extends Component
{
    use WithPagination;

    public $topic;
    public $search;
    public $sort;

    protected $queryString = [
        'topic',
        'search',
        'sort',
    ];

    public function updatingTopic()
    {
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingSort()
    {
        $this->resetPage();
    }

    public function render()
    {
        $topics = Topic::all();

        return view('livewire.tools-list', [
            'tools' => Tool::with('topic')
                ->when($this->topic && $this->topic !== 'All Topics', function ($query) use ($topics) {
                    return $query->where('topic_id', $topics->pluck('id', 'name')->get($this->topic));
                })
                ->when(strlen($this->search) >= 3, function ($query) {
                    return $query->where('title', 'like', '%'.$this->search.'%');
                })
                ->addSelect(['favorited_by_user' => Favorite::select('id')
                    ->where('user_id', auth()->id())
                    ->whereColumn('tool_id', 'tools.id')
                ])
                ->withCount('favorites')
                ->when(!$this->sort || $this->sort === 'Most Popular', function ($query) {
                    return $query->orderBy('favorites_count', 'desc');
                })
                ->when($this->sort && $this->sort === 'Newest First', function ($query) {
                    return $query->orderBy('created_at', 'desc');
                })
                ->when($this->sort && $this->sort === 'Oldest First', function ($query) {
                    return $query->orderBy('created_at', 'asc');
                })
                ->paginate(Tool::TOOLS_PER_PAGE),
            'topics' => $topics,
        ]);
    }
}
