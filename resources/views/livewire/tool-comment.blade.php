<div class="px-10 py-6 bg-white border border-gray-100 rounded-md">
    <div class="flex justify-between">
        <p class="font-bold text-gray-700">{{ $comment->user->name }}</h3>
        <p class="text-sm text-gray-400">{{ $comment->created_at->diffForHumans() }}</h3>
    </div>
    <p class="mt-3 text-gray-700">{{ $comment->message }}</p>
</div>
