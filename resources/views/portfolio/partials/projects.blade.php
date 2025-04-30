<section id="projects" class="py-20 bg-white dark:bg-gray-900">
    <div class="container px-4 md:px-6 mx-auto">
        <div class="flex flex-col items-center text-center mb-12">
            <h2 class="text-3xl font-bold tracking-tight mb-4">Mes Projets</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl">
                Découvrez une sélection de mes projets récents réalisés avec Laravel et d'autres technologies modernes.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($projects as $project)
            <div class="overflow-hidden border border-gray-200 dark:border-gray-800 rounded-lg transition-all hover:shadow-md">
                <div class="aspect-video relative overflow-hidden">
                    <img 
                        src="{{ $project['image'] }}" 
                        alt="{{ $project['title'] }}" 
                        class="object-cover w-full h-full transition-transform hover:scale-105"
                    >
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">{{ $project['title'] }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $project['description'] }}</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach ($project['tags'] as $tag)
                        <span class="px-2 py-1 bg-gray-100 dark:bg-gray-800 text-xs rounded-full">
                            {{ $tag }}
                        </span>
                        @endforeach
                    </div>
                    <div class="pt-4 border-t">
                        <a 
                            href="{{ $project['link'] }}" 
                            class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 border border-gray-300 bg-white text-gray-700 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-gray-700 h-9 px-4 py-2"
                            target="_blank" 
                            rel="noopener noreferrer"
                        >
                            Voir le projet
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-4 w-4"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="flex justify-center mt-12">
            <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 border border-gray-300 bg-white text-gray-700 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-gray-700 h-9 px-4 py-2">
                Voir tous les projets
            </a>
        </div>
    </div>
</section>
