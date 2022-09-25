<div class="mt-3 bg-white border border-gray-100 rounded-md hover:border-transparent">
    <form wire:submit.prevent="storeComment" action="#">
        <div class="px-10 py-6">
            <x-jet-label for="comment" value="{{ __('Comment') }}" />
            <textarea wire:model="comment" name="comment" id="comment" cols="30" rows="4" class="w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Leave a comment..." required></textarea>
            <x-jet-input-error for="comment" />
        </div>

        <div class="flex items-center justify-end px-10 py-3 bg-gray-50 text-right rounded-bl-md rounded-br-md">
            <x-jet-button type="submit">
                {{ __('Comment on this tool') }}
            </x-jet-button>
        </div>
    </form>
</div>
