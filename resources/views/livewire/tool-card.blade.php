<div class="px-10 py-6 bg-white border border-gray-100 rounded-md hover:border-transparent hover:shadow">
    <div class="flex space-x-8">
        <div class="flex-shrink-0">
            <div class="flex items-center justify-center bg-gray-50 border border-gray-200 rounded-md w-20 h-20">
                @if ($tool->topic->icon)
                    <span class="text-2xl">{{ $tool->topic->icon }}</span>
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-gray-500">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                    </svg>
                @endif
            </div>
        </div>
        <div class="flex-grow">
            <h3 class="flex items-center space-x-3 font-bold text-lg">
                <a href="{{ route('tools.show', $tool) }}" class="hover:underline">{{ $tool->title }}</a>
                @if ($tool->is_approved)
                    <div class="flex space-x-0.5 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-green-600">
                            <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                        </svg>
                        <p class="font-semibold text-sm text-green-700">Approved</p>
                    </div>
                @endif
            </h3>
            <p class="line-clamp-1 text-gray-700">{{ $tool->description }}</p>
            <div class="flex items-center space-x-2.5 mt-2">
            <div class="flex items-center space-x-1 px-1.5 py-0.5 bg-white border border-gray-200 rounded-md cursor-pointer hover:bg-gray-50">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 text-gray-500">
                <path fill-rule="evenodd" d="M5.337 21.718a6.707 6.707 0 01-.533-.074.75.75 0 01-.44-1.223 3.73 3.73 0 00.814-1.686c.023-.115-.022-.317-.254-.543C3.274 16.587 2.25 14.41 2.25 12c0-5.03 4.428-9 9.75-9s9.75 3.97 9.75 9c0 5.03-4.428 9-9.75 9-.833 0-1.643-.097-2.417-.279a6.721 6.721 0 01-4.246.997z" clip-rule="evenodd" />
                </svg>
                <span class="font-bold text-xs text-gray-500">{{ $commentsCount }}</span>
            </div>
            <span class="text-xs text-gray-400">&bull;</span>
            <div class="flex space-x-2">
                <a href="{{ route('tools.index', ['topic' => $tool->topic->name]) }}" class="leading-none">
                    <span class="px-3 py-0.5 bg-white border border-gray-200 rounded-full font-semibold text-xs text-gray-500 cursor-pointer hover:bg-gray-50">{{ $tool->topic->icon }} {{ $tool->topic->name }}</span>
                </a>
            </div>
            <span class="text-xs text-gray-400">&bull;</span>
            <p class="text-sm text-gray-500">{{ $tool->created_at->diffForHumans() }}</p>
            </div>
        </div>
        <div class="self-center">
            @if ($hasFavorited)
                <div wire:click.prevent="favorite" class="flex flex-col justify-center items-center w-20 h-20 bg-indigo-50 border border-indigo-200 rounded-md cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-indigo-600">
                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                    </svg>
                    <p class="mt-1 font-bold text-sm text-indigo-700">{{ $favoritesCount }}</p>
                </div>
            @else
                <div wire:click.prevent="favorite" class="group flex flex-col justify-center items-center w-20 h-20 border border-gray-200 rounded-md cursor-pointer hover:bg-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-indigo-600 group-hover:hidden">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="hidden w-8 h-8 text-indigo-600 group-hover:block">
                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                    </svg>
                    <p class="mt-1 font-bold text-sm text-gray-700">{{ $favoritesCount }}</p>
                </div>
            @endif
        </div>
    </div>
</div>
