
<section>
    <div class="flex flex-col">
        {{-- Imagem --}}
        <div class="flex justify-center w-100% pt-4">
            <div class="w-48 rounded-[100%] overflow-hidden border border-black flex items-center">
                <img src="{{asset("storage/{$admin->foto}")}}" alt="" class="aspect-square object-cover">
            </div>
        </div>
        
    </div>

    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Perfil') }}
        </h2>
    </header>

    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $admin->name)" required autofocus autocomplete="name" readonly />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $admin->email)" required autocomplete="username" readonly />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($admin instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $admin->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-white">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="endereco" :value="__('Endereço(s)')" />
            <x-text-input id="endereco" name="endereco" type="text" class="mt-1 block w-full" :value="old('endereco', $admin->endereco)" required autofocus autocomplete="endereço" readonly />
            <x-input-error class="mt-2" :messages="$errors->get('endereco')" />
        </div>

        <div>
            <x-input-label for="telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" name="telefone" type="text" class="mt-1 block w-full" :value="old('telefone', $admin->telefone)" required autofocus autocomplete="telefone" readonly />
            <x-input-error class="mt-2" :messages="$errors->get('telefone')" />
        </div>

        <div>
            <x-input-label for="cpf" :value="__('CPF')" />
            <x-text-input id="cpf" name="cpf" type="text" class="mt-1 block w-full" :value="old('cpf', $admin->cpf)" required autofocus autocomplete="cpf" readonly />
            <x-input-error class="mt-2" :messages="$errors->get('cpf')" />
        </div>

        <div>
            <x-input-label for="data_de_nascimento" :value="__('Data de Nascimento')" />
            <x-text-input id="data_de_nascimento" name="data_de_nascimento" type="text" class="mt-1 block w-full" :value="old('data_de_nascimento', $admin->data_de_nascimento)" required autofocus autocomplete="data_de_nascimento" readonly />
            <x-input-error class="mt-2" :messages="$errors->get('data_de_nascimento')" />
        </div>
    </div>
</section>
