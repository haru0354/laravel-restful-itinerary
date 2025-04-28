@props(['buttonTitle' => null])

<!-- 使い方：ボタンを表示する親要素にはx-data="{ open: false }を指定 -->
<x-ui.button @click="open = true" size="normal" color="red" class="mt-8 block mx-auto rounded">
    {{ $buttonTitle }}
</x-ui.button>

<!-- モーダル本体 -->
<div x-show="open" x-cloak @click="open = false" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
    <div @click.stop class="bg-white p-8 rounded shadow-lg w-96">
        {{ $slot }}
    </div>
</div>