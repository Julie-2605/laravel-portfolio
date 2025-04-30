<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Portfolio Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Header avec lien de retour -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('portfolio') }}" class="flex items-center text-gray-700 hover:text-gray-900">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Retour au portfolio
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="flex-grow flex items-center justify-center p-6">
        <div class="max-w-md w-full">
            <!-- Logo ou image -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-blue-600 text-white mb-4">
                    <i class="fas fa-user-lock text-3xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-900">Connexion</h2>
                <p class="text-gray-600 mt-2">Accédez à votre espace d'administration</p>
            </div>

            <!-- Alerte d'erreur (conditionnelle) -->
            @if(session('error'))
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                <p>{{ session('error') }}</p>
            </div>
            @endif

            <!-- Alerte de succès (conditionnelle) -->
            @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                <p>{{ session('success') }}</p>
            </div>
            @endif

            <!-- Formulaire de connexion -->
            <div class="bg-white py-8 px-6 shadow rounded-lg">
                <form action="{{ route('login.attempt') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Adresse email</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                                class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent @error('email') border-red-500 @enderror"
                                placeholder="votre@email.com">
                        </div>
                        @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="password" name="password" required
                                class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent @error('password') border-red-500 @enderror"
                                placeholder="••••••••">
                        </div>
                        @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                                Se souvenir de moi
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="{{ route('password.request') }}" class="font-medium text-blue-600 hover:text-blue-500">
                                Mot de passe oublié?
                            </a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Se connecter
                        </button>
                    </div>
                </form>
            </div>

            <!-- Lien d'aide -->
            <div class="text-center mt-6">
                <p class="text-sm text-gray-600">
                    Besoin d'aide? <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Contactez l'administrateur</a>
                </p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white py-4 shadow-inner">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-sm text-gray-500">
                &copy; {{ date('Y') }} Votre Nom. Tous droits réservés.
            </p>
        </div>
    </footer>

    <!-- Script pour afficher/masquer le mot de passe (optionnel) -->
    <script>
        // Vous pouvez ajouter un script pour afficher/masquer le mot de passe si nécessaire
    </script>
</body>
</html>