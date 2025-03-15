<section>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{route('admin.products.update', $product->id)}}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="thumbnail" :value="__('Thumbnail')" />
            <input id="thumbnail" name="thumbnail" type="file" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" autofocus>
            </input>
            <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
        </div>

        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('nome', $product->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="preco" :value="__('Preço')" />
            <x-text-input id="preco" name="preco" type="int" class="mt-1 block w-full" :value="old('preço', $product->preco)" required autocomplete="off" />
            <x-input-error class="mt-2" :messages="$errors->get('preco')" />
        </div>

        <div>
            <x-input-label for="desconto" :value="__('Desconto')" />
            <x-text-input id="desconto" name="desconto" type="int" class="mt-1 block w-full" :value="old('desconto', $product->desconto)" required autofocus autocomplete="off" />
            <x-input-error class="mt-2" :messages="$errors->get('desconto')" />
        </div>

        <div>
            <x-input-label for="descricao" :value="__('Descrição')" />
            <x-text-input id="descricao" name="descricao" type="text" class="mt-1 block w-full" :value="old('descrição', $product->descricao)" required autofocus autocomplete="off" />
            <x-input-error class="mt-2" :messages="$errors->get('descricao')" />
        </div>

        <div>
            <x-input-label for="category_id" :value="__('Categoria')" />
            <select id="category_id" name="category_id" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-black">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }} class="text-black">{{ $category->categoria }}</option>
                @endforeach
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('category_id')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-white">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-white"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
