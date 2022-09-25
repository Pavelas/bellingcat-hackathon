<x-jet-form-section submit="createTool">
    <x-slot name="title">
        {{ __('Tool Details') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Please provide as much details as possible, so that other researchers would be able to easily find and use the tool.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6">
            <x-jet-label for="title" value="{{ __('Title') }}" />
            <x-jet-input id="title" type="text" class="mt-1 block w-full" wire:model.defer="title" placeholder="Tool name" autofocus />
            <x-jet-input-error for="title" class="mt-2" />
        </div>

        <div class="col-span-6">
            <x-jet-label for="url" value="{{ __('URL') }}" />
            <x-jet-input id="url" type="text" class="mt-1 block w-full" wire:model.defer="url" placeholder="App link" autofocus />
            <x-jet-input-error for="url" class="mt-2" />
        </div>

        <div class="col-span-6">
            <x-jet-label for="topic" value="{{ __('Select topic') }}" />
            <select wire:model.defer="topic" name="topic_add" id="topic_add" class="w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                @foreach ($topics as $topic)
                    <option value="{{ $topic->id }}">{{ $topic->icon }} {{ $topic->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-span-6">
            <x-jet-label for="description" value="{{ __('Description') }}" />
            <textarea wire:model.defer="description" name="description" id="description" cols="30" rows="4" class="w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Describe the tool"></textarea>
            <x-jet-input-error for="description" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-button>
            {{ __('Create') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
