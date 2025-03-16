<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="flex flex-col w-full h-full p-40">
            <h1 class="justify-self-center">Relatório de {{$data['tipoRelatorio']}}</h1>

            <div class="flex flex-col">
                {{-- Tabela de Produtos --}}
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-4">
                    <table class="w-full max-h-screen text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <tbody>
                            @foreach ($data['sales'] as $sale)
                                <tr class="mb-4 bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    
                                    <td class="px-3 py-2 text-base">
                                        {{$sale->created_it}}
                                    </td>

                                    <td class="px-3 py-2 text-base ml-8">
                                        R$ {{ $sale->valor }}
                                    </td>

                                    <td class="px-3 py-2 text-base">
                                         {{$sale->product_id->category_id->category}}
                                    </td>

                                    <td class="px-3 py-2 text-base">
                                        {{$sale->user_id->name}}
                                    </td>

                                    <td class="px-3 py-2 text-base">
                                        {{$sale->product_id->user_id->name}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
