<x-app-layout>
    <x-slot name="title">{{ __('My Tools') }}</x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Tools') }}
        </h2>
    </x-slot>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col space-y-3">
            @forelse ($tools as $tool)
                @livewire('tool-card', ['tool' => $tool, 'favoritesCount' => $tool->favorites_count, 'commentsCount' => $tool->comments_count], key($tool->id))
            @empty
                <p class="text-gray-700">{{ __('Unfortunately, based on your search query there are no results...') }}</p>
            @endforelse
        </div>

        <div class="mt-6">
            {{ $tools->links() }}
        </div>
      </div>
    </div>
</x-app-layout>
