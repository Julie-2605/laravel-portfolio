<section id="skills" class="py-20 bg-white dark:bg-gray-900">
    <div class="container px-4 md:px-6 mx-auto">
        <div class="flex flex-col items-center text-center mb-12">
            <h2 class="text-3xl font-bold tracking-tight mb-4">Compétences</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl">
                Les technologies et outils que j'utilise quotidiennement pour créer des applications web performantes.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($skillCategories as $category)
            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg border border-gray-200 dark:border-gray-700">
                <h3 class="text-xl font-semibold mb-6 text-center">{{ $category['title'] }}</h3>
                <div class="space-y-6">
                    @foreach ($category['skills'] as $skill)
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="font-medium">{{ $skill['name'] }}</span>
                            <span class="text-sm text-gray-500">{{ $skill['level'] }}%</span>
                        </div>
                        <div class="w-full h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                            <div class="h-full bg-blue-600 rounded-full" ></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
