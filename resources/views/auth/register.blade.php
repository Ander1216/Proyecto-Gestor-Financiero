<x-guest-layout>

    <div class="text-center mb-8">

        <h1 class="text-3xl font-bold text-indigo-600">
            Gestor Financiero
        </h1>

        <p class="text-gray-500 mt-2">
            Registro de nuevos usuarios del sistema.
        </p>

    </div>

    <form method="POST" action="{{ route('register') }}">

        @csrf

        <div>

            <x-input-label
                for="name"
                value="Nombre Completo" />

            <x-text-input
                id="name"
                class="block mt-1 w-full"
                type="text"
                name="name"
                :value="old('name')"
                required
                autofocus />

            <x-input-error
                :messages="$errors->get('name')"
                class="mt-2" />

        </div>

        <div class="mt-4">

            <x-input-label
                for="email"
                value="Correo Electrónico" />

            <x-text-input
                id="email"
                class="block mt-1 w-full"
                type="email"
                name="email"
                :value="old('email')"
                required />

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2" />

        </div>

        <div class="mt-4">

            <x-input-label
                for="password"
                value="Contraseña" />

            <x-text-input
                id="password"
                class="block mt-1 w-full"
                type="password"
                name="password"
                required />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2" />

        </div>

        <div class="mt-4">

            <x-input-label
                for="password_confirmation"
                value="Confirmar Contraseña" />

            <x-text-input
                id="password_confirmation"
                class="block mt-1 w-full"
                type="password"
                name="password_confirmation"
                required />

            <x-input-error
                :messages="$errors->get('password_confirmation')"
                class="mt-2" />

        </div>

        <div class="flex items-center justify-between mt-6">

            <a href="{{ route('login') }}"
               class="underline text-sm text-gray-600 hover:text-gray-900">

                ¿Ya tienes una cuenta?

            </a>

            <x-primary-button>

                Registrarse

            </x-primary-button>

        </div>

    </form>

</x-guest-layout>