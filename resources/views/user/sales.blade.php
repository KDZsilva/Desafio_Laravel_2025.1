<x-app-layout>
    {{-- Products --}}
    <div class="flex flex-row items-center gap-1">
        <a href="{{route('dashboard')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-arrow-left-short text-5xl font-black" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
        </svg>
        </a>
        
        <h1 class="text-3xl font-black">Vendas</h1>
    </div>
    
    <div class="flex w-full justify-end">
        <div class="flex p-2">
            <form action="{{route('sales.pdf')}}" method="get" target="_blank">
                <input id='inicio' name='inicio' type="date">
                <input id="final" name="final" type="date">
                <x-primary-button class="h-full">Gerar Relatório</x-primary-button>
            </form>
        </div>
    </div>
    {{-- Tabela de Produtos --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-4">
        <table class="w-full max-h-screen text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Foto do Produto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Produtos
                    </th>
                    <th>
                        Valor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Data da Compra
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Editar</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($sales != [])
                    @foreach ($sales as $sale)
                        <tr class="mb-4 bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                <div class="flex w-24 rounded-[100%]">
                                    <img src="{{asset("storage/{$sale->thumbnail}")}}" alt="" class="aspect-square object-cover">
                                </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $sale->product_id->name }}
                            </th>
                            <td class="px-6 py-4">
                                R$ {{ $sale->valor }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $sale->created_at }}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    {{-- Paginação --}}
    {{ $sales->links() }}
</x-app-layout>
