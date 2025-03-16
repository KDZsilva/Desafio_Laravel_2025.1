<x-app-layout>
    <div class="w-full h-screen flex flex-row justify-center items-start mt-40 gap-24">
        <div class="flex flex-col gap-16 align-start border-2 border-red-700">
            <div class="flex items-center justify-center p-2 bg-blue-900 hover:bg-blue-800 text-white rounded-md">
                <a href="{{route('user.compras')}}" class="font-black text-4xl">
                    Compras
                </a>
            </div>

            <div class="flex items-center justify-center p-2 bg-blue-900 hover:bg-blue-800 text-white rounded-md">
                <a href="{{route('profile.edit')}}" class="font-black text-4xl">
                    Perfil
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-16">
            <div class="flex items-center justify-center p-2 bg-blue-900 hover:bg-blue-800 text-white rounded-md">
                <a href="{{route('admin.products')}}" class="font-black text-4xl">
                    Produtos
                </a>
            </div>
    
            <div class="flex items-center justify-center p-2 bg-blue-900 hover:bg-blue-800 text-white rounded-md">
                <a href="{{route('user.sales')}}" class="font-black text-4xl">
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
