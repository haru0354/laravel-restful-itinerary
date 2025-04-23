@props(['method' => 'POST', 'action' => 'null'])

<form method="{{ $method }}" action="{{ $action }}"
    {{ $attributes->merge(['class' => 'w-full max-w-[480px] mx-auto p-6 border rounded border-gray-300 bg-white']) }}>
    {{ $slot }}
</form>