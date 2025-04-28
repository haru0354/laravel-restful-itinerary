@props(['title' => null , 'buttonTitle' => null, 'action' => null])

<div x-data="{ open: false }">
    <x-ui.button @click="open = true" size="normal" color="red" class="mt-8 block mx-auto rounded">
        {{ $buttonTitle }}
    </x-ui.button>

    <!-- モーダル -->
    <div x-show="open" x-cloak @click="open = false" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div @click.stop class="flex flex-col items-center justify-center w-[480px] p-8 shadow-lg rounded bg-white ">
            <h3 class="text-lg font-bold mb-4">「{{ $title }}」を削除しますか？</h3>
            <p>削除するとデータの復元はできなくなります。</p>
            <form method="POST" action="{{ $action }}">
                @csrf
                @method('DELETE')
                <x-ui.button size="normal" color="red" class="mt-8 rounded">削除</x-ui.button>
            </form>
            <x-ui.button @click="open = false" size="normal" color="gray" class="rounded">キャンセル</x-ui.button>
        </div>
    </div>
</div>