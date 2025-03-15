<x-app-layout>
    <div class="w-full h-screen flex flex-row justify-center items-center gap-24">
        <div class="flex flex-col gap-16">
            <div class="flex items-center justify-center p-2 bg-blue-900 hover:bg-blue-800 text-white rounded-md">
                <a href="{{route('admin.users')}}" class="font-black text-4xl">
                    Usuários
                </a>
            </div>
    
            <div class="flex items-center justify-center p-2 bg-blue-900 hover:bg-blue-800 text-white rounded-md">
                <a href="{{route('admin.admins')}}" class="font-black text-4xl">
                    Admins
                </a>
            </div>

            <div class="flex items-center justify-center p-2 bg-blue-900 hover:bg-blue-800 text-white rounded-md">
                <a href="#" class="font-black text-4xl">
                    Perfil
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-16">
            <div class="flex items-center justify-center p-2 bg-blue-900 hover:bg-blue-800 text-white rounded-md">
                <a href="#" class="font-black text-4xl">
                    Produtos
                </a>
            </div>
    
            <div class="flex items-center justify-center p-2 bg-blue-900 hover:bg-blue-800 text-white rounded-md">
                <a href="#" class="font-black text-4xl">
                    Vendas
                </a>
            </div>

            <div class="flex items-center justify-center p-2 bg-red-900 hover:bg-red-700 text-white rounded-md">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
    
                    <button :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();" class="font-black text-4xl">
                    {{ __('Log Out') }}
                </button>
                </form>
            </div>

            
        </div>
    </div>
</x-app-layout>
