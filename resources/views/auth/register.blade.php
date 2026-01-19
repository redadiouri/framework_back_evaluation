<x-guest-layout>
    <div class="mb-6 text-center">
        <h1 class="text-4xl font-bold text-gray-900 mb-2">Créer un compte</h1>
        <p class="text-gray-600">Rejoignez-nous aujourd'hui</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Nom et Prenom en deux colonnes -->
        <div class="grid grid-cols-2 gap-4">
            <!-- Nom -->
            <div>
                <x-input-label for="nom" :value="__('Nom')" />
                <x-text-input id="nom" class="block mt-2 w-full border-2 border-gray-200 rounded-lg px-4 py-2 focus:border-indigo-500 focus:ring-indigo-500 transition" type="text" name="nom" :value="old('nom')" placeholder="Ex: Diouri" required autofocus autocomplete="family-name" />
                <x-input-error :messages="$errors->get('nom')" class="mt-2" />
            </div>

            <!-- Prenom -->
            <div>
                <x-input-label for="prenom" :value="__('Prenom')" />
                <x-text-input id="prenom" class="block mt-2 w-full border-2 border-gray-200 rounded-lg px-4 py-2 focus:border-indigo-500 focus:ring-indigo-500 transition" type="text" name="prenom" :value="old('prenom')" placeholder="Ex: Reda" required autocomplete="given-name" />
                <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
            </div>
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Adresse Email')" />
            <x-text-input id="email" class="block mt-2 w-full border-2 border-gray-200 rounded-lg px-4 py-2 focus:border-indigo-500 focus:ring-indigo-500 transition" type="email" name="email" :value="old('email')" placeholder="exemple@email.com" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-2 w-full border-2 border-gray-200 rounded-lg px-4 py-2 focus:border-indigo-500 focus:ring-indigo-500 transition"
                            type="password"
                            name="password"
                            placeholder="Minimum 8 caractères"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <p class="text-xs text-gray-500 mt-2">Doit contenir au moins 8 caractères</p>
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />

            <x-text-input id="password_confirmation" class="block mt-2 w-full border-2 border-gray-200 rounded-lg px-4 py-2 focus:border-indigo-500 focus:ring-indigo-500 transition"
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirmer votre mot de passe"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <!-- Buttons -->
        <div class="flex items-center justify-between mt-8 pt-6 border-t border-gray-200">
            <a class="text-sm text-indigo-600 hover:text-indigo-900 font-medium" href="{{ route('login') }}">
                {{ __('Vous avez déjà un compte? Se connecter') }}
            </a>

            <x-primary-button class="ms-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded-lg transition">
                {{ __('S\'inscrire') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
