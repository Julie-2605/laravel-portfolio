<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="text-xl font-bold text-gray-900">
                        {{ config('app.name', 'Mon Portfolio') }}
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#accueil" class="text-gray-700 hover:text-gray-900">Accueil</a>
                    <a href="#a-propos" class="text-gray-700 hover:text-gray-900">À propos</a>
                    <a href="#competences" class="text-gray-700 hover:text-gray-900">Compétences</a>
                    <a href="#projets" class="text-gray-700 hover:text-gray-900">Projets</a>
                    <a href="#contact" class="text-gray-700 hover:text-gray-900">Contact</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-gray-900 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-sm">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#accueil" class="block px-3 py-2 text-gray-700 hover:text-gray-900 hover:bg-gray-100 rounded-md">Accueil</a>
                <a href="#a-propos" class="block px-3 py-2 text-gray-700 hover:text-gray-900 hover:bg-gray-100 rounded-md">À propos</a>
                <a href="#competences" class="block px-3 py-2 text-gray-700 hover:text-gray-900 hover:bg-gray-100 rounded-md">Compétences</a>
                <a href="#projets" class="block px-3 py-2 text-gray-700 hover:text-gray-900 hover:bg-gray-100 rounded-md">Projets</a>
                <a href="#contact" class="block px-3 py-2 text-gray-700 hover:text-gray-900 hover:bg-gray-100 rounded-md">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="accueil" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">
                        Bonjour, je suis <span class="text-blue-600">Julie Cariou</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-8">
                        Développeuse Web Full Stack passionnée par la création d'expériences numériques modernes et intuitives.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#contact" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300">
                            Me contacter
                        </a>
                        <a href="#projets" class="px-6 py-3 border border-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-50 transition duration-300">
                            Voir mes projets
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Photo de profil" class="rounded-lg shadow-xl mx-auto" onerror="this.src='https://via.placeholder.com/500x500?text=Votre+Photo'">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="a-propos" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">À propos de moi</h2>
                <div class="w-16 h-1 bg-blue-600 mx-auto"></div>
            </div>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3 mb-10 md:mb-0">
                    <img src="{{ asset('images/about.jpg') }}" alt="À propos" class="rounded-lg shadow-lg mx-auto" onerror="this.src='https://via.placeholder.com/400x500?text=À+Propos'">
                </div>
                <div class="md:w-2/3 md:pl-12">
                    <p class="text-lg text-gray-600 mb-6">
                        Je suis un développeur web passionné avec plus de 2 années d'expérience dans la création d'applications web modernes et performantes. J'aime résoudre des problèmes complexes et transformer des idées en produits numériques.
                    </p>
                    <p class="text-lg text-gray-600 mb-6">
                        Mon parcours m'a permis d'acquérir une solide expertise en développement front-end et back-end, avec une spécialisation en Javascript.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-gray-200 text-gray-800 rounded-full">Laravel</span>
                        <span class="px-4 py-2 bg-gray-200 text-gray-800 rounded-full">Symfony</span>
                        <span class="px-4 py-2 bg-gray-200 text-gray-800 rounded-full">PHP</span>
                        <span class="px-4 py-2 bg-gray-200 text-gray-800 rounded-full">JavaScript</span>
                        <span class="px-4 py-2 bg-gray-200 text-gray-800 rounded-full">React</span>
                        <span class="px-4 py-2 bg-gray-200 text-gray-800 rounded-full">MySQL</span>
                        <span class="px-4 py-2 bg-gray-200 text-gray-800 rounded-full">Tailwind CSS</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="competences" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Mes compétences</h2>
                <div class="w-16 h-1 bg-blue-600 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-code text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Développement Back-end</h3>
                    <p class="text-gray-600">
                        Expertise en PHP, Laravel, API RESTful, bases de données relationnelles et architecture MVC.
                    </p>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-laptop-code text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Développement Front-end</h3>
                    <p class="text-gray-600">
                        Maîtrise de HTML5, CSS3, JavaScript, Angular.js, React.js et des frameworks CSS comme Tailwind et Bootstrap.
                    </p>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-database text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Bases de données</h3>
                    <p class="text-gray-600">
                        Conception et optimisation de bases de données MySQL et MongoDB.
                    </p>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-mobile-alt text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Responsive Design</h3>
                    <p class="text-gray-600">
                        Création d'interfaces adaptatives offrant une expérience utilisateur optimale sur tous les appareils.
                    </p>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-server text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">DevOps</h3>
                    <p class="text-gray-600">
                        Déploiement et gestion de serveurs, CI/CD, Docker.
                    </p>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-paint-brush text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">UI/UX Design</h3>
                    <p class="text-gray-600">
                        Conception d'interfaces utilisateur intuitives et esthétiques avec Figma.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projets" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Mes projets récents</h2>
                <div class="w-16 h-1 bg-blue-600 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($projects as $project)
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="{{ $project->image }}" alt="Projet {{ $project->title }}" class="w-full h-48 object-cover" onerror="this.src='https://via.placeholder.com/600x400?text=Projet+{{ $project->id }}'">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ $project->title }}</h3>
                        <p class="text-gray-600 mb-4">
                            {{ $project->description }}
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach ($project->technologies ?? [] as $tech)
                            <span class="px-3 py-1 bg-gray-200 text-gray-800 text-sm rounded-full">{{ $tech }}</span>
                            @endforeach
                        </div>
                        <div class="flex space-x-3">
                            @if (!empty($project->link))
                            <a href="{{ $project->link }}" class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-link"></i> Demo
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Me contacter</h2>
                <div class="w-16 h-1 bg-blue-600 mx-auto"></div>
            </div>
            <div class="flex flex-col md:flex-row gap-10">
                <div class="md:w-1/2">
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-gray-700 mb-2">Nom</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" required>
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 mb-2">Sujet</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" required>
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" required></textarea>
                        </div>
                        <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300">
                            Envoyer le message
                        </button>
                    </form>
                </div>
                <div class="md:w-1/2">
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-6">Informations de contact</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <i class="fas fa-map-marker-alt text-blue-600"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-gray-700">07 Avenue de la Paix, Plescop, 56890, France</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <i class="fas fa-envelope text-blue-600"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-gray-700">julie.cariou2605@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <i class="fas fa-phone text-blue-600"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-gray-700">07 61 43 28 19</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <h4 class="text-lg font-medium mb-4">Suivez-moi</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-700 hover:bg-blue-600 hover:text-white transition duration-300">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-700 hover:bg-blue-600 hover:text-white transition duration-300">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-700 hover:bg-blue-600 hover:text-white transition duration-300">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-700 hover:bg-blue-600 hover:text-white transition duration-300">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <h2 class="text-2xl font-bold">Julie Carioou</h2>
                    <p class="text-gray-400 mt-2">Développeuse Web Full Stack</p>
                </div>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="#accueil" class="text-gray-300 hover:text-white">Accueil</a>
                    <a href="#a-propos" class="text-gray-300 hover:text-white">À propos</a>
                    <a href="#competences" class="text-gray-300 hover:text-white">Compétences</a>
                    <a href="#projets" class="text-gray-300 hover:text-white">Projets</a>
                    <a href="#contact" class="text-gray-300 hover:text-white">Contact</a>
                    <a href="{{route('login')}}" class="text-gray-300 hover:text-white">Se connecter</a>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">
                    &copy; {{ date('Y') }} Julie Cariou. Tous droits réservés.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: 'smooth'
                    });
                }
                
                // Close mobile menu if open
                const mobileMenu = document.getElementById('mobile-menu');
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>