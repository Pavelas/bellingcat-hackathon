<div>
    @if ($comments->isNotEmpty())
        <div class="flex flex-col space-y-3 mt-3">
            @foreach ($comments as $comment)
                @livewire('tool-comment', ['comment' => $comment], key($comment->id))
            @endforeach
        </div>
    @else
        <div class="mt-3 px-10 py-6 bg-white border border-gray-100 rounded-md">
            <p class="text-gray-700">Unfortunately, there are no comments yet...</p>
        </div>
    @endif
</div>
