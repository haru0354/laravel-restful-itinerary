@props(['method' => 'POST', 'action' => 'null', 'title' => null, 'buttonTitle' => null, 'backRoute' => null])

<form method="{{ $method }}" action="{{ $action }}"
    {{ $attributes->merge(['class' => 'w-full max-w-[480px] mx-auto p-6 border rounded border-gray-300 bg-white']) }}>
    @if ($title) <p class="text-center my-2 pb-2 text-xl sm:text-2xl font-semibold border-b text-gray-500 border-gray-300">{{ $title }}</p>@endif
    @csrf
    {{ $slot }}
    <x-ui.button size="normal" color="blue" class="mt-8 block mx-auto rounded">{{ $buttonTitle }}</x-ui.button>
    <x-ui.button-link size="normal" color="gray" route="{{ $backRoute }}" class="mt-4 w-[180px] block mx-auto rounded">キャンセル</x-ui.button-link>
</form>