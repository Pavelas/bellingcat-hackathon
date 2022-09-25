<x-app-layout>
    <x-slot name="title">{{ $tool->title }}</x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $tool->title }}
        </h2>
        <div class="flex items-center space-x-3 mt-1.5 text-sm text-gray-700">
            <a href="{{ route('tools.index') }}" class="hover:underline">Tools</a>
            <span>/</span>
            <p>{{ $tool->title }}</p>
        </div>
    </x-slot>

    <div class="py-12">
        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @livewire('tool-card', ['tool' => $tool, 'favoritesCount' => $favoritesCount, 'commentsCount' => $commentsCount])
            </div>
        </div>

        <div class="mt-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h3 class="font-bold text-xl text-gray-700">Description</h3>
                <div class="mt-3 px-10 py-6 bg-white border border-gray-100 rounded-md text-gray-700">
                    <p class="font-bold">App link:
                        <a href="{{ $tool->url }}" class="ml-1.5 font-normal text-indigo-600 hover:underline" target="_blank">
                            {{ $tool->url }}
                        </a>
                    </p>
                    <p class="mt-3">{{ $tool->description }}</p>
                </div>
            </div>
        </div>

        <div class="mt-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h3 class="font-bold text-xl text-gray-700">Comments ({{ $commentsCount }})</h3>
                @livewire('tool-comments', ['tool' => $tool])
            </div>
        </div>

        <div class="mt-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h3 class="font-bold text-xl text-gray-700">Leave a Comment</h3>
                @livewire('tool-comment-create', ['tool' => $tool])
            </div>
        </div>
    </div>
</x-app-layout>
