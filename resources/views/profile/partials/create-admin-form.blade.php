<section>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{route('admin.admins.store')}}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf

        <header>
            <h2 class="text-lg font-medium text-white">
                {{ __('Editar Perfil') }}
            </h2>

            <p class="mt-1 text-sm text-white">
                {{ __("Atualizar as informações da conta") }}
            </p>
        </header>

        <div>
            <x-input-label for="foto" :value="__('Foto')" />
            <input id="foto" name="foto" type="file" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" autofocus>
            </input>
            <x-input-error class="mt-2" :messages="$errors->get('foto')" />
        </div>

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="endereco" :value="__('Endereço(s)')" />
            <x-text-input id="endereco" name="endereco" type="text" class="mt-1 block w-full" required autofocus autocomplete="endereço" />
            <x-input-error class="mt-2" :messages="$errors->get('endereco')" />
        </div>

        <div>
            <x-input-label for="telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" name="telefone" type="text" class="mt-1 block w-full" required autofocus autocomplete="telefone" />
            <x-input-error class="mt-2" :messages="$errors->get('telefone')" />
        </div>

        <div>
            <x-input-label for="cpf" :value="__('CPF')" />
            <x-text-input id="cpf" name="cpf" type="text" class="mt-1 block w-full" required autofocus autocomplete="cpf" />
            <x-input-error class="mt-2" :messages="$errors->get('cpf')" />
        </div>

        <div>
            <x-input-label for="data_de_nascimento" :value="__('Data de Nascimento')" />
            <input id="data_de_nascimento" name="data_de_nascimento" type="date" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required autofocus autocomplete="data_de_nascimento" />
            <x-input-error class="mt-2" :messages="$errors->get('data_de_nascimento')" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Senha')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-white">{{ __('Create') }}</x-primary-button>
        </div>
    </form>
</section>
