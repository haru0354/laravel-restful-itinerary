@props(['route' => null, 'color' => 'blue', 'size' => 'normal'])

@php
    $colors = [
        'blue' => 'bg-blue-500 hover:bg-blue-700',
        'red' => 'bg-red-500 hover:bg-red-700',
        'green' => 'bg-green-500 hover:bg-green-700',
        'gray' => 'bg-gray-500 hover:bg-gray-700',
    ];

    $sizes = [
        'full' => 'w-full m-2 px-6 py-3',
        'normal' => 'min-w-[180px] m-2 px-8 py-3',
        'small' => 'min-w-[110px] m-2 px-4 py-3',
        'mini' => 'px-1 py-0',
    ];

    $colorClass = $colors[$color] ?? $colors['blue'];
    $sizeClass = $sizes[$size] ?? $sizes['normal'];

@endphp

<a href="{{ $route }}"
    {{ $attributes->merge(['class' => "$colorClass $sizeClass text-white font-bold shadow-md transition duration-200"]) }} >
    {{ $slot }}
</a>
