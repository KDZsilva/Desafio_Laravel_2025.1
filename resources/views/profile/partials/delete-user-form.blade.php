<section class="space-y-6">
    @php
        $route = '';
        $parameters =[];
        if(Auth::guard('web')->check()){
            $route = route('profile.destroy');
            $id = Auth::guard('web')->user()->id;
        }
            
        if(Auth::guard('admin')->check()){
            $id = $user->id;
            $route = 'admin.users.destroy';
            $parameters = ['user' => $user->id];
            $route = route('admin.users.destroy', $user->id);
        }
            
    @endphp
    
    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion{{$id}}')"
    >{{ __('Deletar Conta') }}</x-danger-button>

    <x-modal name="confirm-user-deletion{{$id}}" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ $route }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 text-left">
                {{ __('Tem certeza que deseja deletar essa conta?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-800 text-left">
                {{ __('Uma vez que uma conta for deleta, ela e todos os seus dados relacionados vão ser permanentemente deletado. Por favor digite sua senha para confirmar que gostaria de deletar permanentemente essa conta.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Deletar Conta') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
