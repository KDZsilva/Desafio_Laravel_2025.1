@php
    $preco = ($product->preco - $product->desconto) / 100;
@endphp
<section class="py-8 mb-8 self-center md:py-1 antialiased">
    <div class="max-w-screen-xl mx-auto 2xl:px-0">
      <div class="lg:grid lg:grid-cols-3 lg:gap-8 xl:gap-16">
        <div class="shrink-0 max-w-md lg:max-w-lg mx-auto ml-4">
            <p class="text-black">{{$product->category->categoria}}</p>
          <img class="w-full" src="{{asset("storage/{$product->thumbnail}")}}" alt="" />
        </div>

        <div class="mt-6 pr-6 sm:mt-8 lg:mt-0">
          <h1
            class="text-xl font-semibold text-gray-900 sm:text-2xl"
          >
            {{ $product->name }}
          </h1>
          <p class="text-gray-700 text-sm">{{ $product->user->name}} - {{ $product->user->telefone}}</p>

          <hr class="mb-2 border-black"/>
          <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
            <p
              class="text-2xl font-extrabold text-black sm:text-3xl"
            >
              R$ {{ number_format($preco, 2, ',', '.') }}
            </p>

          </div>

          <hr class="mt-2 border-black"/>
          <div>
            <h2 class="text-black mt-4">Sobre o produto</h2>
            <p class="mb-6 text-gray-900">
              {{$product->descricao}}
            </p>
          </div>
          

        </div>
        @if(Auth::guard('web')->check())
          <div class="mt-6 pr-6 sm:mt-8 lg:mt-0 px-2 w-fit h-full justify-self-end mr-4 text-black">
            <form action="{{route('home.products.chart', $product)}}" method="POST">
              @csrf

              <p>R$ {{ number_format($preco, 2, ',', '.') }}</p>
              <x-input-label for="quantity" :value="__('Quantidade')" />
              <select id="quantity" name="quantity" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-black">
                @for ($i = 1; $i <= 10; $i++)
                  <option value="{{ $i }}" class="text-black">{{ $i }}</option>
                @endfor
              </select>
              <x-primary-button class="mt-4 items-center">{{ ('Comprar') }}</x-primary-button>
            </form>
          </div>
        @elseif(!Auth::guard('admin')->check())
          <div class="flex items-center justify-center bg-blue-700">
            <a href="{{route('login')}}" class="text-black">Login</a>
          </div>
        @endif
      </div>
    </div>
</section>