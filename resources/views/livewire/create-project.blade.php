<form wire:submit.prevent="submit">
    @csrf
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-4">
            <label for="title" class="block text-sm text-purple-600 font-bold">
                Title
            </label>
            <input wire:model="title" type="text" name="title" id="title" autocomplete="title" class="mt-1 focus:ring-blue-300 focus:border-blue-300 block w-full shadow-sm sm:text-sm border-purple-400 rounded-md" placeholder="Project title">
            @error('title') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-6 sm:col-span-4">
            <label for="description" class="block text-sm text-purple-600 font-bold">
                Description
            </label>
            <div class="mt-1">
                <textarea wire:model="description" id="description" name="description" rows="3" class="shadow-sm focus:ring-blue-300 focus:border-blue-300 block w-full sm:text-sm border border-purple-400 rounded-md" placeholder="Brief description of your project"></textarea>
                @error('description') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <div class="flex justify-start mt-8">
        <a href="{{ route('projects.index') }}" class="flex items-center justify-between bg-white py-2 px-4 border border-purple-400 hover:border-blue-300 rounded-md shadow-sm text-sm font-bold text-purple-400 hover:text-blue-300 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
            </svg>
            Back
        </a>
        <button type="submit" class="ml-3 inline-flex items-center justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-bold rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
            </svg>
            Add
        </button>
    </div>
</form>
