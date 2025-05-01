<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $trip_title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-full mx-auto p-6 bg-white shadow-sm">
            <section>
                <div class="w-full max-w-[600px] mx-auto mb-8 p-6 border rounded-lg shadow-lg hover:shadow-2xl transition-shadow border-gray-300 bg-gray-50">
                    <h3 class="pb-1 mt-2 mb-4 text-xl text-center font-bold border-b border-dashed border-gray-700">{{ $memo->title }}</h3>
                    <p>{{ $memo->content }}</p>
                </div>
                <x-ui.button-link route="{{ route('dashboard.trips.memos.edit', ['trip_id' => $memo->trip_id, 'memo_id' => $memo->id]) }}" size="normal" color="blue" class="block w-[180px] mx-auto rounded">
                    編集する
                </x-ui.button-link>
                <x-ui.button-link route="{{ route('dashboard.trips.memos.index', ['trip_id' => $memo->trip_id]) }}" size="normal" color="gray" class="block w-[180px] mx-auto rounded">
                    メモの一覧
                </x-ui.button-link>
            </section>
        </div>
    </div>
</x-app-layout>