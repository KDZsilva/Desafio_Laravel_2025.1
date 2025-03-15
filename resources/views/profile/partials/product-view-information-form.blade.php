@php
    $preco = ($product->preco - $product->desconto) / 100;
@endphp
<section class="py-8 mb-8 self-center bg-white md:py-16 dark:bg-gray-900 antialiased">
    <div class="max-w-screen-xl mx-auto 2xl:px-0">
      <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
        <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
          <img class="w-full" src="{{asset("storage/{$product->thumbnail}")}}" alt="" />
        </div>

        <div class="mt-6 pr-6 sm:mt-8 lg:mt-0">
          <h1
            class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white"
          >
            {{ $product->name }}
          </h1>
          <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
            <p
              class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white"
            >
              R$ {{ number_format($preco, 2, ',', '.') }}
            </p>

          </div>

          <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

          <p class="mb-6 text-gray-500 dark:text-gray-400">
            Studio quality three mic array for crystal clear calls and voice
            recordings. Six-speaker sound system for a remarkably robust and
            high-quality audio experience. Up to 256GB of ultrafast SSD storage.
          </p>

          <p class="text-gray-500 dark:text-gray-400">
            Two Thunderbolt USB 4 ports and up to two USB 3 ports. Ultrafast
            Wi-Fi 6 and Bluetooth 5.0 wireless. Color matched Magic Mouse with
            Magic Keyboard or Magic Keyboard with Touch ID.
          </p>
        </div>
      </div>
    </div>
</section>