@props(['value', 'fontcolor' => 'text-white'])

<label {{ $attributes->merge(['class' => "block font-medium text-sm $fontcolor"]) }}>
    {{ $value ?? $slot }}
</label>
