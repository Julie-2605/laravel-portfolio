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
                        <a href="/portfolio" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-arrow mr-3"></i>
                            Retour au Portfolio
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            Tableau de bord
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-white bg-gray-700 rounded-md">
                            <i class="fas fa-briefcase mr-3"></i>
                            Portfolio
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-chart-line mr-3"></i>
                            Statistiques
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            <i class="fas fa-box mr-3"></i>
                            Produits
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
                        <a href="#" class="flex items-center text-gray-300 hover:text-white">
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
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('images/admin-avatar.jpg') }}" alt="Avatar" onerror="this.src='https://via.placeholder.com/32x32?text=Admin'">
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
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 flex items-center">
                        <i class="fas fa-plus mr-2"></i> Ajouter un projet
                    </button>
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
                    <!-- Project Card 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="relative">
                            <img src="https://via.placeholder.com/600x400?text=Projet+1" alt="Projet 1" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Terminé</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Site E-commerce</h3>
                            <p class="text-gray-600 mb-4 line-clamp-2">Un site e-commerce complet avec panier, paiement et gestion des commandes.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">Laravel</span>
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">Vue.js</span>
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">MySQL</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">12/04/2023</span>
                                <div class="flex space-x-2">
                                    <button class="p-2 text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="p-2 text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="relative">
                            <img src="https://via.placeholder.com/600x400?text=Projet+2" alt="Projet 2" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">En cours</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Application Mobile</h3>
                            <p class="text-gray-600 mb-4 line-clamp-2">Une application mobile de suivi de fitness avec synchronisation cloud.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">React Native</span>
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">Firebase</span>
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">Node.js</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">25/05/2023</span>
                                <div class="flex space-x-2">
                                    <button class="p-2 text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="p-2 text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="relative">
                            <img src="https://via.placeholder.com/600x400?text=Projet+3" alt="Projet 3" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Planifié</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Refonte UI/UX</h3>
                            <p class="text-gray-600 mb-4 line-clamp-2">Refonte complète de l'interface utilisateur d'une application web existante.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">Figma</span>
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">Adobe XD</span>
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">Tailwind CSS</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">10/06/2023</span>
                                <div class="flex space-x-2">
                                    <button class="p-2 text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="p-2 text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 4 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="relative">
                            <img src="https://via.placeholder.com/600x400?text=Projet+4" alt="Projet 4" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Terminé</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Système de Gestion</h3>
                            <p class="text-gray-600 mb-4 line-clamp-2">Système de gestion d'entreprise avec modules RH, comptabilité et CRM.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">Laravel</span>
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">Alpine.js</span>
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">PostgreSQL</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">05/03/2023</span>
                                <div class="flex space-x-2">
                                    <button class="p-2 text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="p-2 text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 5 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="relative">
                            <img src="https://via.placeholder.com/600x400?text=Projet+5" alt="Projet 5" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Terminé</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Site Vitrine</h3>
                            <p class="text-gray-600 mb-4 line-clamp-2">Site vitrine pour une agence immobilière avec recherche de propriétés.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">WordPress</span>
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">PHP</span>
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">MySQL</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">18/02/2023</span>
                                <div class="flex space-x-2">
                                    <button class="p-2 text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="p-2 text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 6 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="relative">
                            <img src="https://via.placeholder.com/600x400?text=Projet+6" alt="Projet 6" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">En cours</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">API RESTful</h3>
                            <p class="text-gray-600 mb-4 line-clamp-2">API RESTful pour une application de gestion de tâches avec authentification JWT.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">Node.js</span>
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">Express</span>
                                <span class="px-2 py-1 bg-gray-200 text-gray-800 text-xs rounded-full">MongoDB</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">30/04/2023</span>
                                <div class="flex space-x-2">
                                    <button class="p-2 text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="p-2 text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center">
                    <nav class="flex items-center space-x-2">
                        <a href="#" class="px-3 py-2 rounded-md bg-white border text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-left text-xs"></i>
                        </a>
                        <a href="#" class="px-3 py-2 rounded-md bg-blue-600 text-white">1</a>
                        <a href="#" class="px-3 py-2 rounded-md bg-white border text-gray-700 hover:bg-gray-50">2</a>
                        <a href="#" class="px-3 py-2 rounded-md bg-white border text-gray-700 hover:bg-gray-50">3</a>
                        <span class="px-3 py-2 text-gray-600">...</span>
                        <a href="#" class="px-3 py-2 rounded-md bg-white border text-gray-700 hover:bg-gray-50">8</a>
                        <a href="#" class="px-3 py-2 rounded-md bg-white border text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-right text-xs"></i>
                        </a>
                    </nav>
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