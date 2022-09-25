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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('tool-card', ['tool' => $tool, 'favoritesCount' => $favoritesCount])
        </div>
    </div>
</x-app-layout>
