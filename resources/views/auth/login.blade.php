<x-guest-layout>

    <x-auth-session-status
        class="mb-4"
        :status="session('status')" />

    <div class="text-center mb-8">

        <h1 class="text-3xl font-bold text-indigo-600">
            Gestor Financiero
        </h1>

        <p class="text-gray-500 mt-2">
            Sistema de administración de cuentas, ingresos y gastos.
        </p>

    </div>

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <div>

            <x-input-label
                for="email"
                value="Correo Electrónico" />

            <x-text-input
                id="email"
                class="block mt-1 w-full"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                autocomplete="username" />

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
                required
                autocomplete="current-password" />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2" />

        </div>

        <div class="block mt-4">

            <label
                for="remember_me"
                class="inline-flex items-center">

                <input
                    id="remember_me"
                    type="checkbox"
                    name="remember"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">

                <span class="ms-2 text-sm text-gray-600">
                    Recordarme
                </span>

            </label>

        </div>

        <div class="flex items-center justify-between mt-6">

            <div>

                <a href="{{ route('register') }}"
                   class="underline text-sm text-indigo-600 hover:text-indigo-800">

                    Registarse

                </a>

            </div>

            <x-primary-button>

                Ingresar

            </x-primary-button>

        </div>

        @if (Route::has('password.request'))

            <div class="mt-4 text-center">

                <a href="{{ route('password.request') }}"
                   class="text-sm text-gray-500 hover:text-gray-700">

                    ¿Olvidaste tu contraseña?

                </a>

            </div>

        @endif

    </form>

</x-guest-layout>