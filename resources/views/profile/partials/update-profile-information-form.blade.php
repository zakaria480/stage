@props(['user'])

<form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('patch')

    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="mt-1 block w-full" type="text" name="name" :value="old('name', $user->name)" required autofocus autocomplete="name" />
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>

    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email', $user->email)" required autocomplete="username" />
        <x-input-error class="mt-2" :messages="$errors->get('email')" />
    </div>

    <!-- Telephone -->
    <div class="mt-4">
        <x-input-label for="telephone" :value="__('Numéro de Téléphone')" />
        <x-text-input id="telephone" class="mt-1 block w-full" type="tel" name="telephone" :value="old('telephone', $user->telephone)" required autocomplete="tel" />
        <x-input-error class="mt-2" :messages="$errors->get('telephone')" />
    </div>

    <!-- SIRET -->
    <div class="mt-4">
        <x-input-label for="siret" :value="__('Numéro SIRET')" />
        <x-text-input id="siret" class="mt-1 block w-full" type="text" name="siret" :value="old('siret', $user->siret)" required autocomplete="siret" />
        <x-input-error class="mt-2" :messages="$errors->get('siret')" />
    </div>

    <!-- TVA -->
    <div class="mt-4">
        <x-input-label for="tva" :value="__('Numéro TVA')" />
        <x-text-input id="tva" class="mt-1 block w-full" type="text" name="tva" :value="old('tva', $user->tva)" required autocomplete="tva" />
        <x-input-error class="mt-2" :messages="$errors->get('tva')" />
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>{{ __('Save') }}</x-primary-button>

        @if (session('status') === 'profile-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ __('Saved.') }}</p>
        @endif
    </div>
</form>