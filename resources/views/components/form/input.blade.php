@props(['type' => 'text', 'name' => null, 'value' => null])

<div class="w-full my-2">
    <label for="{{ $name }}" class="w-full leading-7 text-sm text-gray-600">{{ $slot }}</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
        value="{{ old($name, $value) }}"
        {{ $attributes->merge(['class' => "w-full py-2 border rounded border-gray-300 bg-gray-50 focus:bg-white transition-colors duration-200 ease-in-out"]) }}>
</div>