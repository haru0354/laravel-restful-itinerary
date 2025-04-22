@props(['name' => null, 'value' => null])

<div class="w-full my-2">
    <label for="{{ $name }}" class="leading-7 text-sm text-gray-600">{{ $slot }}</label>
    <textarea id="{{ $name }}" name="{{ $name }}"
        {{ $attributes->merge(['class' => "w-full h-32 py-2 border rounded border-gray-300 bg-gray-50 focus:bg-white transition-colors duration-200 ease-in-out"]) }}
        >{{ old($name, $value) }}</textarea>
</div>