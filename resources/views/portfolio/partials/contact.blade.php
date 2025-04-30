<section id="contact" class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="container px-4 md:px-6 mx-auto">
        <div class="flex flex-col items-center text-center mb-12">
            <h2 class="text-3xl font-bold tracking-tight mb-4">Me Contacter</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl">
                Vous avez un projet en tête ou une question ? N'hésitez pas à me contacter.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                <div class="p-6 flex flex-col items-center text-center space-y-4">
                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-blue-600 dark:text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                    </div>
                    <h3 class="font-semibold text-lg">Email</h3>
                    <p class="text-gray-600 dark:text-gray-400">contact@example.com</p>
                    <a href="mailto:contact@example.com" class="text-blue-600 dark:text-blue-400 hover:underline">
                        Envoyer un email
                    </a>
                </div>
            </div>

            <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                <div class="p-6 flex flex-col items-center text-center space-y-4">
                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-blue-600 dark:text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    </div>
                    <h3 class="font-semibold text-lg">Téléphone</h3>
                    <p class="text-gray-600 dark:text-gray-400">+33 6 12 34 56 78</p>
                    <a href="tel:+33612345678" class="text-blue-600 dark:text-blue-400 hover:underline">
                        Appeler
                    </a>
                </div>
            </div>

            <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                <div class="p-6 flex flex-col items-center text-center space-y-4">
                    <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-blue-600 dark:text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <h3 class="font-semibold text-lg">Localisation</h3>
                    <p class="text-gray-600 dark:text-gray-400">Paris, France</p>
                    <a href="https://maps.google.com" target="_blank" class="text-blue-600 dark:text-blue-400 hover:underline">
                        Voir sur la carte
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-12 max-w-3xl mx-auto">
            <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                <div class="p-6">
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="name" class="text-sm font-medium">
                                    Nom complet
                                </label>
                                <input
                                    id="name"
                                    name="name"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                    placeholder="Votre nom"
                                    required
                                />
                            </div>
                            <div class="space-y-2">
                                <label for="email" class="text-sm font-medium">
                                    Email
                                </label>
                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                    placeholder="votre@email.com"
                                    required
                                />
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="subject" class="text-sm font-medium">
                                Sujet
                            </label>
                            <input
                                id="subject"
                                name="subject"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                placeholder="Sujet de votre message"
                                required
                            />
                        </div>

                        <div class="space-y-2">
                            <label for="message" class="text-sm font-medium">
                                Message
                            </label>
                            <textarea
                                id="message"
                                name="message"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                placeholder="Votre message..."
                                rows="6"
                                required
                            ></textarea>
                        </div>

                        <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4"><path d="m22 2-7 20-4-9-9-4Z"></path><path d="M22 2 11 13"></path></svg>
                            Envoyer le message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
