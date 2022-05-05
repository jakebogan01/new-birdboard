<x-app-layout>
    <div class="space-y-6 bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-10 sm:max-w-7xl sm:mx-auto">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="font-bold text-3xl cursor-default leading-6">
                        <span class="text-blue-400">Create</span> <span class="text-purple-400">Project</span>
                    </h3>

                    <p class="mt-1 text-purple-600 font-bold text-sm">
                        Fill out the form to create your very own project!
                    </p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <livewire:create-project />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
