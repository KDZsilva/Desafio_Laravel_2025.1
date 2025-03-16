<x-app-layout>
    <div class="h-fit flex flex-row gap-8">
        {{-- Coluna de filtros --}}
        <div class="flex flex-col w-[20%] h-fit">
            <form action="{{route('home')}}" method="GET" class="w-full justify-center">

                <x-text-input id="search" name="search" type="text" class="mt-5 block w-[100%] border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-black" :value="request('search')" />
                <x-input-error class="mt-2" :messages="$errors->get('search')" />

                <x-input-label for="category_id" :value="__('Categoria')" />
                <select id="category_id" name="category_id" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-black">
                    <option value="">{{ ('Todas as Categorias') }}</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }} class="text-black">{{ $category->categoria }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('category_id')" />
        
                <x-primary-button class="mt-4 items-center">{{ ('Filtrar') }}</x-primary-button>
            </form>
            
        </div>
        <div class="flex flex-col w-[80%] gap-8"> 
            {{-- Produtos --}}
            <div class="flex flex-wrap w-[100%] h-fit mt-4 justify-center items center justify-self-center gap-24 p-2">
                @foreach ($products as $product)
                    {{-- Card de produto --}}
                    <div class="flex flex-col w-40 h-fit gap-4 overflow-hidden items-center justify-between">
                        {{-- Foto do produto --}}
                        <div class="flex w-40 h-40">
                            <img src="{{asset("storage/{$product->thumbnail}")}}" alt="" class="h-full aspect-square object-cover">
                        </div>
                        
                        {{-- Nome --}}
                        <p class="text-black h-10 text-ellipsis">{{$product->name}}</p>
                        {{-- Preço --}}
                        <p class="text-black"> R$ {{($product->preco - $product->desconto) / 100}} </p>
                        <div class="flex items-center justify-center p-2 rounded-md bg-blue-600">
                            <a href="{{route('home.products.view', $product->id)}}" class="text-white">
                                COMPRAR
                            </a>
                        </div>
                        
                    </div>
                @endforeach
                <div class="items-center mb-8">
                    {{$products->links()}}
                </div>
            </div>
        </div>
        
    </div>
</x-app-layout>
