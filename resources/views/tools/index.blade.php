<x-app-layout>
    <x-slot name="title">{{ __('Tools') }}</x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tools') }}
        </h2>
    </x-slot>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex space-x-6">
            <div class="w-1/4">
                <select name="category" id="category" class="w-full rounded-xl border border-gray-100 px-4 py-2 text-gray-700">
                    <option value="All tools">All tools</option>
                    <option value="Social media">Social media</option>
                    <option value="Scrappers">Scrappers</option>
                </select>
            </div>
            <div class="w-1/4">
                <select class="w-full rounded-xl border border-gray-100 px-4 py-2 text-gray-700">
                    <option value="Most popular">Most popular</option>
                    <option value="Newest first">Newest first</option>
                    <option value="Oldest first">Oldest first</option>
                </select>
            </div>
            <div class="w-2/4 relative">
                <input type="search" placeholder="Search tools..." class="w-full rounded-xl bg-white border border-gray-100 placeholder-gray-700 px-4 py-2 pl-10">
                <div class="absolute top-0 flex itmes-center h-full ml-3">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 text-gray-500">
                    <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                  </svg>
                </div>
            </div>
        </div>

        <div class="flex flex-col space-y-3 mt-6">
          @foreach ($tools as $tool)
            <div class="px-10 py-6 bg-white border border-gray-100 rounded-md hover:border-transparent hover:shadow">
              <div class="flex space-x-8">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center bg-gray-50 border border-gray-200 rounded-md w-20 h-20">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-gray-500">
                      <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
                <div class="flex-grow">
                  <h3 class="font-bold text-lg">
                    <a href="{{ route('tools.show', $tool) }}" class="hover:underline">{{ $tool->title }}</a>
                  </h3>
                  <p class="line-clamp-1 text-gray-700">{{ $tool->description }}</p>
                  <div class="flex items-center space-x-2.5 mt-2">
                    <div class="flex items-center space-x-1 px-1.5 py-0.5 bg-white border border-gray-200 rounded-md cursor-pointer hover:bg-gray-50">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 text-gray-500">
                        <path fill-rule="evenodd" d="M5.337 21.718a6.707 6.707 0 01-.533-.074.75.75 0 01-.44-1.223 3.73 3.73 0 00.814-1.686c.023-.115-.022-.317-.254-.543C3.274 16.587 2.25 14.41 2.25 12c0-5.03 4.428-9 9.75-9s9.75 3.97 9.75 9c0 5.03-4.428 9-9.75 9-.833 0-1.643-.097-2.417-.279a6.721 6.721 0 01-4.246.997z" clip-rule="evenodd" />
                      </svg>
                      <span class="font-bold text-xs text-gray-500">12</span>
                    </div>
                    <span class="text-xs text-gray-400">&bull;</span>
                    <div class="flex space-x-2">
                      <span class="px-3 py-0.5 bg-white border border-gray-200 rounded-full font-semibold text-xs text-gray-500 cursor-pointer hover:bg-gray-50">{{ $tool->topic->name }}</span>
                    </div>
                    <span class="text-xs text-gray-400">&bull;</span>
                    <p class="text-sm text-gray-500">{{ $tool->created_at->diffForHumans() }}</p>
                  </div>
                </div>
                <div class="self-center">
                  <div class="group flex flex-col justify-center items-center w-20 h-20 border border-gray-200 rounded-md cursor-pointer hover:bg-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-indigo-600 group-hover:hidden">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="hidden w-8 h-8 text-indigo-600 group-hover:block">
                      <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                    </svg>
                    <p class="mt-1 font-bold text-sm text-indigo-600">15</p>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <div class="mt-6">
          {{ $tools->links() }}
        </div>
      </div>
    </div>
</x-app-layout>
