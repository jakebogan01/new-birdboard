<x-app-layout>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg p-10">
        <div class="sm:max-w-7xl sm:mx-auto px-4">
        <div class="px-4 py-2 sm:px-6">
            <h1 class="font-bold text-3xl cursor-default leading-6">
                <span class="text-blue-400">Project</span> <span class="text-purple-400">Details</span>
            </h1>
            <p class="mt-1 max-w-2xl text-purple-600 font-bold text-sm">
                Detailed information regarding your project.
            </p>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                <div class="sm:col-span-1">
                    <dt class="text-sm text-purple-600 font-bold">
                        Title
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $project->title }}
                    </dd>
                </div>
                <div class="sm:col-span-2">
                    <dt class="text-sm text-purple-600 font-bold">
                        Description
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{ $project->description }}
                    </dd>
                </div>
                <div class="flex justify-start">
                    <a href="{{ route('projects.index') }}" class="flex items-center justify-center py-2 px-4 border border-transparent shadow-sm text-sm rounded-md text-white font-bold bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                        </svg>
                        Go Back
                    </a>
                </div>
            </dl>
        </div>
        </div>
    </div>

</x-app-layout>
