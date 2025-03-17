<x-app-layout>
    <div class="bg-gray-200 flex justify-center items-center w-screen h-screen">
        <div class="bg-slate-300 flex w-[40%] h-[50%] justify-between items-center p-8 rounded-md">
            <div class="h-fullflex items-center">
                <h1>Saldo Atual</h1>
                <p>R$ {{number_format($user->saldo / 100, 2, ',', '.')}}</p>
            </div>
            <div class="h-full flex flex-col justify-center">
                <h1>Saque</h1>
                <form action="{{route('user.saques.saque')}}" method="POST">
                    @csrf
                    @method('put')
                    <input hidden type="number" id="saldo" name="saldo" value="{{$user->saldo}}">
                    <input type="number" id="saque" name="saque">
                    <button type="submit" class="bg-blue-800 p-4 rounded-lg text-white">SACAR</button>
                </form>
                <p class="text-sm">Só é possivel sacar usando reais inteiros</p>
            </div>
        </div>
        
    </div>
</x-app-layout>
