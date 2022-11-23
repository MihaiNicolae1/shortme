<div>
    <form wire:submit.prevent="saveLink">
        <div class="mb-4">
            <label for="url">URL</label>
                <input wire:model.lazy="url" id="url" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text" placeholder="https://google.ca" required autofocus />
            <div> @error('url') <span class="text-red-500">{{ $message }}</span> @enderror </div>
        </div>

        <div class="mb-4">
            <label for="slug">Slug</label>
                <input wire:model.lazy="slug" id="slug" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text" placeholder="my-new-link" />
            <div> @error('slug') <span class="text-red-500">{{ $message }}</span> @enderror </div>
        </div>

        <div class="flex justify-end">
            <button
                wire:click="resetForm"
                type="button"
                class="inline-flex items-center px-4 py-2 bg-gray-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-400 active:bg-gray-500 focus:outline-none focus:border-gray-500 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-100 mr-2"
            >
                Reset
            </button>
            <button
                type="submit"
                class="inline-flex items-center px-4 py-2 bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-100"
            >
                Create
            </button>
        </div>
    </form>
</div>
