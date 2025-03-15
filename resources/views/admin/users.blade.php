<x-app-layout>
    {{-- Usuários --}}
    <h1 class="text-3xl text-bold">Usuários</h1>
    {{-- Tabela de Usuários --}}
    <div class="flex flex-row-reverse">
        <a href="{{route('admin.users.createpage')}}" class="font-medium text-black hover:underline">Criar Usuário</a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                            <div class="w-12 h-12 rounded-[100%] overflow-hidden border border-white">
                                <img src="{{ asset("storage/{$user->foto}") }}" alt="" class="object-cover">
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{route('admin.users.view', $user->id)}}" class="font-medium bg-blue-600 text-black hover:underline">View</a>
                            <a href="{{route('admin.users.editpage', $user->id)}}" class="font-medium bg-yellow-400 text-black hover:underline">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- Paginação --}}
    {{ $users->links() }}
</x-app-layout>
