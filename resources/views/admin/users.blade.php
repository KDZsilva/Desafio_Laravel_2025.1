<x-app-layout>
    {{-- Usuários --}}
    <div class="flex flex-row items-center gap-1">
        <a href="{{route('admin.dashboard')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-arrow-left-short text-5xl font-black" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
        </svg>
        </a>
        
        <h1 class="text-3xl font-black">Usuários</h1>
    </div>
    
    {{-- Tabela de Usuários --}}
    <div class="flex flex-row-reverse mb-4">
        <div class="flex w-fit bg-blue-900 p-2 rounded-md">
            <a href="{{route('admin.users.createpage')}}" class="font-medium text-white">Criar Usuário</a>
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-4">
        <table class="w-full max-h-screen text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Data de Criação
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Foto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Editar</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="mb-4 bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $user->id }}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $user->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->created_at }}
                        </td>
                        <td class="px-6 py-4">
                            <div class=" flex w-12 h-12 rounded-full items-center overflow-hidden border border-white">
                                <img src="{{ asset("storage/{$user->foto}") }}" alt="" class="aspect-square object-cover">
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right flex justify-between">
                            <div class="flex p-1 rounded-md bg-green-500">
                                <a href="{{route('admin.users.view', $user->id)}}" class="font-medium text-black ">Visualizar</a>
                            </div>
                            <div class="flex p-1 rounded-md bg-yellow-400">
                                <a href="{{route('admin.users.editpage', $user->id)}}" class="font-medium bg-yellow-400 text-black">Editar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- Paginação --}}
    {{ $users->links() }}
</x-app-layout>
