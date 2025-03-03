<x-app-layout>
    {{-- principal --}}
    <div class="w-full h-screen py-12 grid grid-cols-3 grid-rows-5 gap-4">
        {{-- Saldo --}}
        <div class="row-span-1 col-span-1 rounded-md text-white bg-[#000027] flex flex-col gap-10 p-2">
            <div class="flex items-center w-full justify-between">
                <svg width="1em" height="1em" class="text-xl text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                    <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                    <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                </svg>
                <div class="flex w-fit items-center gap-1">
                    <p>This Week</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                    </svg>
                </div>
            </div>
            <div class="w-full pr-12 flex justify-between">
                <div>
                    <p>Saldo</p>
                    R$ 
                </div>
                <div>
                    <p>Número de Vendas</p>
                    
                </div>
            </div>
        </div>
        {{-- Total de entradas --}}
        <div class="row-span-1 col-span-1 rounded-md text-white bg-[#000027] flex flex-col gap-10 p-2">
            <div class="flex items-center w-full justify-between">
                <svg width="1em" height="1em" class="shrink-0 text-xl text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <div class="flex w-fit items-center gap-1">
                    <p>This Week</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                    </svg>
                </div>
            </div>
            <div class="w-full pr-12 flex justify-between">
                <div>
                    <p>Saldo</p>
                    R$ 
                </div>
                <div>
                    <p>Total de entradas</p>
                    
                </div>
            </div>
        </div>
        {{-- Pedidos --}}
        <div class="row-span-1 col-span-1 rounded-md text-white bg-[#000027] flex flex-col gap-10 p-2">
            <div class="w-full rounded-md h-fit text-white bg-[#000027] flex flex-col gap-10 p-2">
                <div class="flex items-center w-full justify-between">
                    <svg width="1em" height="1em" class="shrink-0 text-xl text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                     </svg>
                    <div class="flex w-fit items-center gap-1">
                        <p>This Week</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </div>
                </div>
                <div class="w-full pr-12 flex justify-between">
                    <div>
                        <p>Pedidos</p>
                        
                    </div>
                    <div>
                        <p>Pendentes</p>
                        
                    </div>
                    <div>
                        <p>Concluídos</p>
                        
                    </div>
                </div>
            </div>
        </div>
        {{-- Gráfico de categorias --}}
        <div class="row-span-2 col-span-1 rounded-md text-white bg-[#000027] flex flex-col gap-10 p-2">
            <div class="flex items-center w-full justify-between">
                <h1 class="text-xl">Categorias</h1>
                <div class="flex w-fit items-center gap-1">
                    <p>This Week</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                    </svg>
                </div>
            </div>
            <div class="w-full flex gap-40">
                Gráfico
            </div>
        </div>
        {{-- Ainda não decidi --}}
        <div class="row-span-1 col-span-1 rounded-md text-white bg-[#000027] flex flex-col gap-10 p-2">
            <div class="flex items-center w-full justify-between">
                <svg width="1em" height="1em" class="shrink-0 text-xl text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <div class="flex w-fit items-center gap-1">
                    <p>This Week</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                    </svg>
                </div>
            </div>
            <div class="w-full pr-12 flex justify-between">
                <div>
                    <p>Saldo</p>
                    R$ 
                </div>
                <div>
                    <p>Total de entradas</p>
                    
                </div>
            </div>
        </div>
        {{-- Pedidos recentes --}}
        <div class="row-span-4 col-span-1 rounded-md text-white bg-[#000027] flex flex-col gap-10 p-2">
            <div class="flex items-center w-full justify-between">
                <svg width="1em" height="1em" class="shrink-0 text-xl text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <div class="flex w-fit items-center gap-1">
                    <p>This Week</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                    </svg>
                </div>
            </div>
            <div class="w-full pr-12 flex justify-between">
                <div>
                    <p>Saldo</p>
                    R$ 
                </div>
                <div>
                    <p>Total de entradas</p>
                    
                </div>
            </div>
        </div>
        {{-- Ainda não decidi --}}
        <div class="row-span-1 col-span-1 rounded-md text-white bg-[#000027] flex flex-col gap-10 p-2">
            <div class="flex items-center w-full justify-between">
                <svg width="1em" height="1em" class="shrink-0 text-xl text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <div class="flex w-fit items-center gap-1">
                    <p>This Week</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                    </svg>
                </div>
            </div>
            <div class="w-full pr-12 flex justify-between">
                <div>
                    <p>Saldo</p>
                    R$ 
                </div>
                <div>
                    <p>Total de entradas</p>
                    
                </div>
            </div>
        </div>
        {{-- Entradas por dia (período de tempo) --}}
        <div class="row-span-2 col-span-2 rounded-md text-white bg-[#000027] flex flex-col gap-10 p-2">
            <div class="flex items-center w-full justify-between">
                <svg width="1em" height="1em" class="shrink-0 text-xl text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <div class="flex w-fit items-center gap-1">
                    <p>This Week</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                    </svg>
                </div>
            </div>
            <div class="w-full pr-12 flex justify-between">
                <div>
                    <p>Saldo</p>
                    R$ 
                </div>
                <div>
                    <p>Total de entradas</p>
                    
                </div>
            </div>
        </div>
        {{-- <div class="flex flex-col w-full gap-4">
            <div class="flex flex-col border-dashed border-2 border-green-700 gap-4">
                <div class="w-full rounded-md h-fit text-white bg-[#000027] flex flex-col gap-10 p-2">
                    <div class="flex items-center w-full justify-between">
                        <svg width="1em" height="1em" class="text-xl text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                        </svg>
                        <div class="flex w-fit items-center gap-1">
                            <p>This Week</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full flex gap-40">
                        <div>
                            <p>Saldo</p>
                            R$ {{(Auth::user()->saldo)}}
                        </div>
                        <div>
                            <p>Número de Vendas</p>
                            {{($quantd_sales)}}
                        </div>
                    </div>
                </div>
                <div class="w-full rounded-md h-fit text-white bg-[#000027] flex flex-col gap-10 p-2">
                    <div class="flex items-center w-full justify-between">
                        <svg width="1em" height="1em" class="shrink-0 text-xl text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                        </svg>
                        <div class="flex w-fit items-center gap-1">
                            <p>This Week</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full flex gap-40">
                        <div>
                            <p>Saldo</p>
                            R$ {{(Auth::user()->saldo)}}
                        </div>
                        <div>
                            <p>Total de entradas</p>
                            {{($quantd_sales)}}
                        </div>
                    </div>
                </div>
                <div class="w-full rounded-md h-fit text-white bg-[#000027] flex flex-col gap-10 p-2 border-2 border-[#7518ff]">
                    <div class="w-full rounded-md h-fit text-white bg-[#000027] flex flex-col gap-10 p-2">
                        <div class="flex items-center w-full justify-between">
                            <svg width="1em" height="1em" class="shrink-0 text-xl text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                             </svg>
                            <div class="flex w-fit items-center gap-1">
                                <p>This Week</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </div>
                        </div>
                        <div class="w-full flex gap-40">
                            <div>
                                <p>Pedidos</p>
                                {{(Auth::user()->saldo)}}
                            </div>
                            <div>
                                <p>Pendentes</p>
                                {{($quantd_sales)}}
                            </div>
                            <div>
                                <p>Concluídos</p>
                                {{($quantd_sales)}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row gap-4 border-dashed border-2 border-green-700">
                <div class="w-full rounded-md h-fit text-white bg-[#000027] flex flex-col gap-10 p-2">
                    <div class="flex items-center w-full justify-between">
                        <h1 class="text-xl">Categorias</h1>
                        <div class="flex w-fit items-center gap-1">
                            <p>This Week</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full flex gap-40">
                        Gráfico
                    </div>
                </div>
                <div class="w-full rounded-md h-fit text-white bg-[#000027] flex flex-col gap-10 p-2">
                    <div class="flex items-center w-full justify-between">
                        <svg width="1em" height="1em" class="shrink-0 text-xl text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                        </svg>
                        <div class="flex w-fit items-center gap-1">
                            <p>This Week</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full flex gap-40">
                        <div>
                            <p>Saldo</p>
                            R$ {{(Auth::user()->saldo)}}
                        </div>
                        <div>
                            <p>Total de entradas</p>
                            {{($quantd_sales)}}
                        </div>
                    </div>
                </div>
                <div class="w-full rounded-md h-fit text-white bg-[#000027] flex flex-col gap-10 p-2">
                    <div class="flex items-center w-full justify-between">
                        <svg width="1em" height="1em" class="shrink-0 text-xl text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                         </svg>
                        <div class="flex w-fit items-center gap-1">
                            <p>This Week</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full flex gap-40">
                        <div>
                            <p>Pedidos</p>
                            {{(Auth::user()->saldo)}}
                        </div>
                        <div>
                            <p>Pendentes</p>
                            {{($quantd_sales)}}
                        </div>
                        <div>
                            <p>Concluídos</p>
                            {{($quantd_sales)}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
