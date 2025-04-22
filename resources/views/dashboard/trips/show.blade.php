<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $trip->title }}の詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-full mx-auto sm:px-6 lg:px-8 bg-white shadow-sm">
            <div class="p-6">
                <div class="w-full mx-auto p-4 my-8 border border-gray-800 border-dashed">
                    <p>タイトル：{{ $trip->title }}</p>
                    <p>出発日：{{ $trip->start_date }}</p>
                    <p>帰宅日：{{ $trip->end_date }}</p>
                    <p>旅行先：{{ $trip->destination  }}</p>
                </div>
                <a href="{{ route('dashboard.trips.edit', ['trip_id' => $trip->id]) }}" class="block mx-auto w-[180px] my-4 py-2 px-4 text-center rounded bg-blue-500">編集する</a>
                <a href="{{ route('dashboard.trips.index') }}" class="block mx-auto w-[180px] my-4 py-2 px-4 text-center rounded bg-green-500">旅のしおりの一覧へ</a>
            </div>
        </div>
    </div>
</x-app-layout>