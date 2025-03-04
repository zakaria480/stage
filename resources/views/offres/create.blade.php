<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Créer une Offre') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('offres.store') }}">
                        @csrf

                        <!-- Ville de Départ -->
                        <div class="mt-4">
                            <x-input-label for="depart_ville" :value="__('Ville de Départ')" />
                            <x-text-input id="depart_ville" class="mt-1 block w-full" type="text" name="depart_ville" :value="old('depart_ville')" required />
                            <x-input-error :messages="$errors->get('depart_ville')" class="mt-2" />
                        </div>

                        <!-- Ville d'Arrivée -->
                        <div class="mt-4">
                            <x-input-label for="arrivee_ville" :value="__('Ville d\'Arrivée')" />
                            <x-text-input id="arrivee_ville" class="mt-1 block w-full" type="text" name="arrivee_ville" :value="old('arrivee_ville')" required />
                            <x-input-error :messages="$errors->get('arrivee_ville')" class="mt-2" />
                        </div>

                        <!-- Date et Heure de Départ -->
                        <div class="mt-4">
                            <x-input-label for="depart_time" :value="__('Date et Heure de Départ')" />
                            <x-text-input id="depart_time" class="mt-1 block w-full" type="datetime-local" name="depart_time" :value="old('depart_time')" required />
                            <x-input-error :messages="$errors->get('depart_time')" class="mt-2" />
                        </div>

                        <!-- Détails -->
                        <div class="mt-4">
                            <x-input-label for="details" :value="__('Détails')" />
                            <x-textarea id="details" class="mt-1 block w-full" name="details" :value="old('details')" />
                            <x-input-error :messages="$errors->get('details')" class="mt-2" />
                        </div>

                        <!-- Statut -->
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Statut')" />
                            <select id="status" name="status" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                <option value="disponible" {{ old('status') === 'disponible' ? 'selected' : '' }}>Disponible</option>
                                <option value="non disponible" {{ old('status') === 'non disponible' ? 'selected' : '' }}>Non Disponible</option>
                            </select>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Créer Offre') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>