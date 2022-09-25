<x-app-layout>
    <x-slot name="title">{{ __('Tools') }}</x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tools') }}
        </h2>
    </x-slot>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center space-x-6">
            <div class="w-3/12">
                <select name="category" id="category" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="All tools">All tools</option>
                    <option value="Social media">Social media</option>
                    <option value="Scrappers">Scrappers</option>
                </select>
            </div>
            <div class="w-3/12">
                <select class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="Most popular">Most popular</option>
                    <option value="Newest first">Newest first</option>
                    <option value="Oldest first">Oldest first</option>
                </select>
            </div>
            <div class="flex-grow relative">
                <input type="search" placeholder="Search tools..." class="w-full pl-10 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <div class="absolute top-0 flex itmes-center h-full ml-3">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 text-gray-500">
                    <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                  </svg>
                </div>
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
          @foreach ($tools as $tool)
            @livewire('tool-card', ['tool' => $tool, 'favoritesCount' => $tool->favorites_count])
          @endforeach
        </div>

        <div class="mt-6">
          {{ $tools->links() }}
        </div>
      </div>
    </div>
</x-app-layout>
