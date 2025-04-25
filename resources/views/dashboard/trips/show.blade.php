<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $trip->title }}の詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-full mx-auto p-6 bg-white shadow-sm">
            <div class="w-full mx-auto p-4 mb-8 border border-dashed rounded border-gray-800 ">
                <p>タイトル：{{ $trip->title }}</p>
                <p>出発日：{{ $trip->start_date }}</p>
                <p>帰宅日：{{ $trip->end_date }}</p>
                <p>旅行先：{{ $trip->destination  }}</p>
            </div>
            <x-ui.button-link route="{{ route('dashboard.trips.memos.index', ['trip_id' => $trip->id]) }}" size="normal" color="green" class="block mx-auto w-[180px] rounded">メモの一覧へ</x-ui.button-link>

            <x-ui.button-link route="{{ route('dashboard.trips.edit', ['trip_id' => $trip->id]) }}" size="normal" class="block mx-auto w-[180px] rounded">編集する</x-ui.button-link>
            <x-ui.button-link route="{{ route('dashboard.trips.index') }}" size="normal" color="gray" class="block mx-auto w-[180px] rounded">旅のしおりの一覧</x-ui.button-link>
        </div>
    </div>
</x-app-layout>