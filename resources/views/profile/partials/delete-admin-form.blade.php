@php
    if($admin->creator_id != Auth::guard('admin')->user()->id){
        return redirect()->route('admin.users');
    }
@endphp
<section class="space-y-6">

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-admin-deletion{{$admin->id}}')"
    >{{ __('Deletar') }}</x-danger-button>

    <x-modal name="confirm-admin-deletion{{$admin->id}}" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('admin.admins.destroy', $admin->id) }}" class="p-6">
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
