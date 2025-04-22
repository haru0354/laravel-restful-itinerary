<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $trip->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-full mx-auto sm:px-6 lg:px-8 bg-white shadow-sm">
            <form class="w-full max-w-[480px] mx-auto p-6 border rounded border-gray-400 bg-white">
                <p class="text-center text-2xl sm:text-3xl font-semibold">旅のしおりの編集</p>
                <div class="flex justify-center">
                    <div class="flex flex-col mr-4">
                        <label for="start_date">出発日</label>
                        <input class="w-[180px]" type="date" id="start_date" name="start_date" value="{{ $trip->start_date }}" />
                    </div>
                    <div class="flex flex-col">
                        <label for="end_date">帰宅日</label>
                        <input class="w-[180px]" type="date" id="end_date" name="end_date" value="{{ $trip->end_date }}" />
                    </div>
                </div>
                <label for="title">旅のしおりのタイトル</label>
                <input class="w-full" type="text" id="title" name="title" value="{{ $trip->title }}" />
                <label for="destination">旅行先</label>
                <input class="w-full" type="text" id="destination" name="destination" value="{{ $trip->destination }}" />
                <button class="block mx-auto w-[150px] my-4 py-2 px-4 text-center rounded bg-blue-500">編集</button>
                <a href="{{ route('dashboard.trips.show', ['trip_id' => $trip->id]) }}" class="block mx-auto w-[150px] my-4 py-2 px-4 text-center rounded bg-gray-500">キャンセル</a>
            </form>
        </div>
    </div>
</x-app-layout>