<div>
    <div class="flex items-center space-x-6">
        <div class="flex-grow relative">
            <input wire:model="search" type="search" placeholder="Search tools..." class="w-full pl-10 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <div class="absolute top-0 flex itmes-center h-full ml-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 text-gray-500">
                    <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
        <div class="w-3/12">
            <select wire:model="topic" name="topic" id="topic" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <option value="All Topics">{{ __('All Topics') }}</option>
                @foreach ($topics as $topic)
                    <option value="{{ $topic->name }}">{{ $topic->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="w-2/12">
            <select wire:model="sort" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <option value="Most Popular">{{ __('Most Popular') }}</option>
                <option value="Approved First">{{ __('Approved First') }}</option>
                <option value="Newest First">{{ __('Newest First') }}</option>
                <option value="Oldest First">{{ __('Oldest First') }}</option>
            </select>
        </div>
        <div>
            <a href="{{ route('tools.create') }}">
            <x-jet-button type="button" class="py-3">
                {{ __('Submit tool') }}
            </x-jet-button>
            </a>
        </div>
    </div>

    <div class="flex flex-col space-y-3 mt-6">
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
