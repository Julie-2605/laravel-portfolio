<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirection | Portfolio Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta http-equiv="refresh" content="2;url={{ route('admin.dashboard') }}">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-6">
        <div class="text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-blue-600 text-white mb-6">
                <i class="fas fa-check text-3xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-gray-900 mb-2">Connexion réussie!</h2>
            <p class="text-gray-600 mb-6">Vous allez être redirigé vers le tableau de bord...</p>
            
            <div class="relative pt-1">
                <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200">
                    <div class="animate-pulse w-full h-full bg-blue-600 rounded"></div>
                </div>
            </div>
            
            <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-500">
                Cliquez ici si vous n'êtes pas redirigé automatiquement
                <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>
    </div>
</body>
</html>