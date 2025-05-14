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
                    <div class="relative mx-4 lg:mx-0">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-search text-gray-500"></i>
                        </span>
                        <input class="w-32 pl-10 pr-4 py-2 text-sm text-gray-700 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 sm:w-64" type="text" placeholder="Rechercher un projet">
                    </div>
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
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('asset/project-dev.png') }}" alt="Avatar">
                            <span class="mx-2">Admin</span>
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main content -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-semibold text-gray-800">Gestion du Portfolio</h1>
                </div>

                <!-- Projects Grid -->
                <div class=" justify-center grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow">
                        @csrf
                        @method('POST')

                        <div class="mb-4">
                            <label for="title" class="block text-gray-700">Titre</label>
                            <input type="text" name="title" id="title" placeholder="Titre" class="w-full border p-2 rounded" required>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-gray-700">Description</label>
                            <textarea name="description" id="description" placeholder="Description" class="w-full border p-2 rounded" required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="image" class="block text-gray-700">Image</label>
                            <input type="file" name="image" id="image" accept="image/*" class="w-full border p-2 rounded">
                        </div>

                        <div class="mb-4">
                            <label for="technologies" class="block text-gray-700">Technologies</label>
                            <input type="text" name="technologies" id="technologies" placeholder="Liste Technologies" class="w-full border p-2 rounded">
                        </div>

                        <div class="mb-4">
                            <label for="status" class="block text-gray-700">Statut</label>
                            <select name="status" class="w-full border p-2 rounded">
                                <option value="planned">Planned</option>
                                <option value="in_progress">In Progress</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="date" class="block text-gray-700">Date</label>
                            <input type="date" name="date" id="date" class="w-full border p-2 rounded">
                        </div>

                        <div class="text-right">
                            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ajouter</button>
                        </div>
                    </form>
                </div>
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