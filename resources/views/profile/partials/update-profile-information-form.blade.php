<section>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    @php
        $route = '';
        $parameters =[];
        if(Auth::guard('web')->check())
            $route = 'profile.update';
            $route = route('profile.update');
        if(Auth::guard('admin')->check())
            $route = 'admin.users.update';
            $parameters = ['user' => $user->id];
            $route = route('admin.users.update', $user->id);
    @endphp
    <form method="post" action="{{$route}}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div class="flex flex-col">
            {{-- Imagem --}}
            <div class="flex justify-center w-100% pt-4">
                <div class="w-48 rounded-[100%] overflow-hidden border border-black flex items-center">
                    <img src="{{$user->foto}}" alt="" class="aspect-square object-cover">
                </div>
            </div>
            
        </div>

        <header>
            <h2 class="text-lg font-medium text-white">
                {{ __('Editar Perfil') }}
            </h2>

            <p class="mt-1 text-sm text-white">
                {{ __("Atualizar as informações da conta") }}
            </p>
        </header>

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
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
            <x-text-input id="endereco" name="endereco" type="text" class="mt-1 block w-full" :value="old('endereco', $user->endereco)" required autofocus autocomplete="endereço" />
            <x-input-error class="mt-2" :messages="$errors->get('endereco')" />
        </div>

        <div>
            <x-input-label for="telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" name="telefone" type="text" class="mt-1 block w-full" :value="old('telefone', $user->telefone)" required autofocus autocomplete="telefone" />
            <x-input-error class="mt-2" :messages="$errors->get('telefone')" />
        </div>

        <div>
            <x-input-label for="cpf" :value="__('CPF')" />
            <x-text-input id="cpf" name="cpf" type="text" class="mt-1 block w-full" :value="old('cpf', $user->cpf)" required autofocus autocomplete="cpf" />
            <x-input-error class="mt-2" :messages="$errors->get('cpf')" />
        </div>

        <div>
            <x-input-label for="data_de_nascimento" :value="__('Data de Nascimento')" />
            <x-text-input id="data_de_nascimento" name="data_de_nascimento" type="text" class="mt-1 block w-full" :value="old('data_de_nascimento', $user->data_de_nascimento)" required autofocus autocomplete="data_de_nascimento" />
            <x-input-error class="mt-2" :messages="$errors->get('data_de_nascimento')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-white">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-white"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
