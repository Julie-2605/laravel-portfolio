<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration | Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Chart.js pour les graphiques -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
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
                        <a href="{{ route('admin.statistiques') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
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
            <header class="flex items-center justify-end px-6 py-4 bg-white border-b">
                <div class="flex items-center">
                    <div class="relative">
                        <button class="flex mx-4 text-gray-600 focus:outline-none">
                            <i class="fas fa-bell text-lg"></i>
                        </button>
                        <div class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></div>
                    </div>
                    <div x-data="{ dropdownOpen: false }" class="relative">
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
                <h1 class="text-2xl font-semibold text-gray-800 mb-6">Tableau de bord</h1>

                <!-- Stats cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                                <i class="fas fa-eye text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 text-sm">Visites totales</p>
                                <p class="text-2xl font-semibold text-gray-800">12,345</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-green-500 mr-2">
                                <i class="fas fa-arrow-up"></i> 12%
                            </span>
                            <span class="text-gray-500">Depuis le mois dernier</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 text-green-600">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 text-sm">Messages reçus</p>
                                <p class="text-2xl font-semibold text-gray-800">48</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-green-500 mr-2">
                                <i class="fas fa-arrow-up"></i> 8%
                            </span>
                            <span class="text-gray-500">Depuis le mois dernier</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                                <i class="fas fa-briefcase text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 text-sm">Projets</p>
                                <p class="text-2xl font-semibold text-gray-800">16</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-green-500 mr-2">
                                <i class="fas fa-arrow-up"></i> 2
                            </span>
                            <span class="text-gray-500">Nouveaux ce mois-ci</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-red-100 text-red-600">
                                <i class="fas fa-box text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 text-sm">Produits</p>
                                <p class="text-2xl font-semibold text-gray-800">24</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-red-500 mr-2">
                                <i class="fas fa-arrow-down"></i> 3
                            </span>
                            <span class="text-gray-500">En rupture de stock</span>
                        </div>
                    </div>
                </div>

                <!-- Charts -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-semibold text-gray-800 mb-4">Visites mensuelles</h2>
                        <div class="h-64">
                            <canvas id="visitorsChart"></canvas>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-semibold text-gray-800 mb-4">Répartition des projets</h2>
                        <div class="h-64">
                            <canvas id="projectsChart"></canvas>
                        </div>
                    </div>
                </div>
                
            </main>
        </div>
    </div>

    <script>
        // Visitors Chart
        const visitorsCtx = document.getElementById('visitorsChart').getContext('2d');
        const visitorsChart = new Chart(visitorsCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
                datasets: [{
                    label: 'Visites 2023',
                    data: [1200, 1900, 2300, 2800, 2400, 2700, 3000, 3200, 3500, 3700, 4000, 4200],
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 2,
                    tension: 0.3,
                    pointBackgroundColor: 'rgba(59, 130, 246, 1)',
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            color: 'rgba(0, 0, 0, 0.05)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Projects Chart
        const projectsCtx = document.getElementById('projectsChart').getContext('2d');
        const projectsChart = new Chart(projectsCtx, {
            type: 'doughnut',
            data: {
                labels: ['Web Development', 'Mobile Apps', 'UI/UX Design', 'Branding'],
                datasets: [{
                    data: [8, 4, 3, 1],
                    backgroundColor: [
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(16, 185, 129, 0.8)',
                        'rgba(245, 158, 11, 0.8)',
                        'rgba(239, 68, 68, 0.8)'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                },
                cutout: '70%'
            }
        });

        // Mobile menu toggle
        document.querySelector('button.md\\:hidden').addEventListener('click', function() {
            const sidebar = document.querySelector('.md\\:flex.md\\:flex-shrink-0');
            sidebar.classList.toggle('hidden');
        });
    </script>
</body>

</html>