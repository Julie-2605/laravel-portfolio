<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion du Portfolio | Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar (même code que dans dashboard.blade.php) -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-gray-800">
                <div class="flex items-center justify-center h-16 bg-gray-900">
                    <span class="text-white font-bold text-lg">Administration</span>
                </div>
                <div class="flex flex-col flex-grow overflow-y-auto">
                    <nav class="flex-1 px-2 py-4 space-y-1">
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            Tableau de bord
                        </a>
                        <a href="{{ route('admin.portfolio') }}" class="flex items-center px-4 py-3 text-white bg-gray-700 rounded-md">
                            <i class="fas fa-briefcase mr-3"></i>
                            Portfolio
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-chart-line mr-3"></i>
                            Statistiques
                        </a>
                        <a href="{{ route('admin.services') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-box mr-3"></i>
                            Services
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-user mr-3"></i>
                            Profil
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-cog mr-3"></i>
                            Paramètres
                        </a>
                    </nav>
                    <div class="px-4 py-6">
                        <a href="{{ route('portfolio') }}" class="flex items-center text-gray-300 hover:text-white">
                            <i class="fas fa-sign-out-alt mr-3"></i>
                            Déconnexion
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Top navbar -->
            <header class="flex items-center justify-between px-6 py-4 bg-white border-b">
                <div class="flex items-center">
                    <button class="text-gray-500 focus:outline-none md:hidden">
                        <i class="fas fa-bars"></i>
                    </button>
                    <form method="GET" action="{{ route('admin.portfolio') }}" class="relative mx-4 lg:mx-0">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-search text-gray-500"></i>
                        </span>
                        <input
                            name="search"
                            type="text"
                            placeholder="Rechercher un projet"
                            value="{{ request('search') }}"
                            class="w-32 sm:w-64 pl-10 pr-4 py-2 text-sm text-gray-700 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </form>
                </div>
                <div class="flex items-center">
                    <div class="relative">
                        <button class="flex mx-4 text-gray-600 focus:outline-none">
                            <i class="fas fa-bell text-lg"></i>
                        </button>
                        <div class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></div>
                    </div>
                    <div class="relative">
                        <button class="flex items-center text-gray-700 focus:outline-none">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('images/admin-avatar.jpg') }}" alt="Avatar" onerror="this.src='/asset/project-dev-1.png'">
                            <span class="mx-2">Admin</span>
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main content -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-semibold text-gray-800">Gestion des Services</h1>
                    <a href="{{ route('services.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 flex items-center">
                        <i class="fas fa-plus mr-2"></i> Ajouter un service
                    </a>
                </div>

                <!-- Filters -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                        <div class="flex flex-col md:flex-row md:items-center space-y-4 md:space-y-0 md:space-x-4">
                            <div>
                                <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Catégorie</label>
                                <select id="category" class="w-full md:w-48 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                                    <option value="">Toutes les catégories</option>
                                    <option value="web">Web Development</option>
                                    <option value="mobile">Mobile Apps</option>
                                    <option value="design">UI/UX Design</option>
                                    <option value="branding">Branding</option>
                                </select>
                            </div>
                            <div>
                                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                                <select id="status" class="w-full md:w-48 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                                    <option value="">Tous les statuts</option>
                                    <option value="completed">Terminé</option>
                                    <option value="in-progress">En cours</option>
                                    <option value="planned">Planifié</option>
                                </select>
                            </div>
                            <div>
                                <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                                <select id="date" class="w-full md:w-48 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                                    <option value="">Toutes les dates</option>
                                    <option value="this-month">Ce mois-ci</option>
                                    <option value="last-month">Le mois dernier</option>
                                    <option value="this-year">Cette année</option>
                                    <option value="last-year">L'année dernière</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">
                                <i class="fas fa-filter mr-2"></i> Filtrer
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Projects Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">

                    <!-- Project Card -->
                    @foreach ($services as $service)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">{{ $service->name }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-2">{{ $service->price }} €</p>

                            <div class="flex justify-between items-center">
                                <div class="flex space-x-2">
                                    <a href="{{ route('services.edit', $service->id) }}" class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Supprimer ce service ?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </main>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.querySelector('button.md\\:hidden').addEventListener('click', function() {
            const sidebar = document.querySelector('.md\\:flex.md\\:flex-shrink-0');
            sidebar.classList.toggle('hidden');
        });
    </script>
</body>

</html>