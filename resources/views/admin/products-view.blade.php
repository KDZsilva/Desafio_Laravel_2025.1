<x-app-layout>
    
    <div class="flex flex-col gap-4">
        <div class="flex flex-col">
            <div class="flex flex-row items-center gap-1">
                <a href="{{ url()->previous() }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-arrow-left-short text-5xl font-black" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                </svg>
                </a>
                
                <h1 class="font-black text-3xl">Visualizar</h1>
            </div>
        </div>
        <div class="flex flex-row justify-center">
            @include('profile.partials.product-view-information-form')
        </div>
        

    </div>
</x-app-layout>
