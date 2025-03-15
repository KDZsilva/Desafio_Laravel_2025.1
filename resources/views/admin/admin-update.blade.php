<x-app-layout>
    @php
        if($admin->creator_id != Auth::guard('admin')->user()->id){
            return redirect()->route('admin.users');
        }
    @endphp
    <div class="flex flex-col gap-4">
        <div class="flex flex-col">
            <div class="flex flex-row items-center gap-1">
                <a href="{{ url()->previous() }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-arrow-left-short text-5xl font-black" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                </svg>
                </a>
                
                <h1 class="font-black text-3xl">Editar</h1>
            </div>
        </div>
        
        <div class="flex flex-col items-center self-center w-[90em] rounded-md gap-8 p-8">
            <div class="flex flex-col w-full gap-12 bg-[#546a7b] rounded-md p-4">
                @include('profile.partials.admins-update-profile-information-form')
                @include('profile.partials.delete-admin-form')
            </div>
        </div>

    </div>
</x-app-layout>
