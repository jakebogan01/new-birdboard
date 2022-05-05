<x-app-layout>
    <div class="bg-white bg-white shadow sm:rounded-lg p-10">
        <div class="sm:max-w-7xl sm:mx-auto px-10">
            <div class="flex flex-col sm:flex-row justify-between">
                <h1 class="font-bold text-3xl cursor-default">
                    <span class="text-blue-400">New</span> <span class="text-purple-400">Birdboard</span>
                </h1>
                <a href="{{ route('projects.create') }}" class="flex text-blue-500 hover:underline hover:text-purple-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                    </svg>
                    Create Project
                </a>
            </div>

            <div>
                <ul class="text-purple-600 font-bold">
                    @forelse($projects as $key => $project)
                        @if($key % 2 === 0)
                            <li class="bg-blue-200 rounded my-2 hover:bg-blue-300 hover:text-white transition-colors cursor-pointer group">
                                <a href="{{ $project->path() }}" class="flex items-center justify-between inline-block p-2">
                                    {{ $project->title }}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-50 group-hover:opacity-100" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                            @continue
                        @endif
                        <li class="bg-blue-100 rounded hover:bg-blue-300 hover:text-white transition-colors cursor-pointer group">
                            <a href="{{ $project->path() }}" class="flex items-center justify-between inline-block p-2">
                                {{ $project->title }}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-50 group-hover:opacity-100" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    @empty
                        <li class="bg-blue-100 rounded p-2 cursor-default">
                            No projects yet.
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
