<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Foto -->
        <div>
            <x-input-label for="foto" :value="__('Foto')" />
            <x-text-input id="foto" class="block mt-1 w-full" type="text" name="foto" :value="old('foto')" autofocus autocomplete="off" />
            <x-input-error :messages="$errors->get('foto')" class="mt-2" />
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- CPF -->
        <div>
            <x-input-label for="cpf" :value="__('   CPF')" />
            <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')" required autofocus autocomplete="on" />
            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
        </div>

        <!-- Data_de_nascimento -->
        <div>
            <x-input-label for="data_de_nascimento" :value="__('   Data de nascimento')" />
            <x-text-input id="data_de_nascimento" class="block mt-1 w-full" type="date" name="data_de_nascimento" :value="old('data_de_nascimento')" required autofocus autocomplete="bday" />
            <x-input-error :messages="$errors->get('date')" class="mt-2" />
        </div>

        <!-- Telefone -->
        <div>
            <x-input-label for="telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" class="block mt-1 w-full" type="text" name="telefone" placeholder="+XX (XX) XXXXXXXXX" :value="old('telefone')" required autofocus autocomplete="tel" />
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

         <!-- Confirm Email Address -->
         <div class="mt-4">
            <x-input-label for="email_confirmation" :value="__('Confirm Email')" />
            <x-text-input id="email_confirmation" class="block mt-1 w-full" 
                            type="email" 
                            name="email_confirmation" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email_confirmation')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
