<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $trip->title }}の詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-full mx-auto p-6 bg-white shadow-sm">

            <!-- 旅程の一覧表示のセクション -->
            <section>
                @foreach ($trip->itineraries as $itinerary)
                <div class="relative flex flex-col mb-8 p-6 border rounded-lg border-gray-300 bg-gray-50">
                    <h3 class="mb-2 text-xl font-bold">🗺 {{ $itinerary->title }}</h3>
                    <p class="mb-3">⌚️ {{ $itinerary->date_and_time }}</p>
                    <p class="mt-2">{{ $itinerary->content }}</p>
                    @if ($itinerary->hide_content)
                    <button onclick="toggleContent('{{ $itinerary->id }}')"  class="mt-4 hover:underline text-gray-500">
                        🔽 補足情報を表示 🔽
                    </button>
                    <div id="{{ $itinerary->id }}" class="hidden mt-4 p-4">
                        {{ $itinerary->hide_content }}
                    </div>
                    @endif
                    <x-ui.button-link
                        route="{{ route('dashboard.trips.itineraries.show', ['trip_id' => $itinerary->trip_id, 'itinerary_id' => $itinerary->id]) }}"
                        size="mini" color="gray"
                        class="absolute top-0 right-0 rounded">
                        📝詳細
                    </x-ui.button-link>
                </div>
                @endforeach
                <a href="{{ route('dashboard.trips.itineraries.create', ['trip_id' => $trip->id] ) }}" class="flex items-center justify-center min-h-[150px] mb-8 p-6 rounded-lg border border-blue-300 bg-white hover:bg-blue-200 transition cursor-pointer">
                    ➕
                </a>
                <x-ui.button-link route="{{ route('dashboard.trips.memos.index', ['trip_id' => $trip->id]) }}" size="normal" color="green" class="block mx-auto w-[180px] rounded">メモの一覧へ</x-ui.button-link>
            </section>

            <!-- 旅のしおりの詳細セクション -->
            <section>
                <div class="relative w-full max-w-[450px] mx-auto p-4 my-16 border border-dashed rounded border-gray-800 ">
                    <p>タイトル：{{ $trip->title }}</p>
                    <p>出発日：{{ $trip->start_date }}</p>
                    <p>帰宅日：{{ $trip->end_date }}</p>
                    <p>旅行先：{{ $trip->destination  }}</p>
                    <x-ui.button-link
                        route="{{ route('dashboard.trips.edit', ['trip_id' => $trip->id]) }}"
                        size="mini" color="gray"
                        class="absolute top-0 right-0 rounded">
                        📝編集
                    </x-ui.button-link>
                </div>
                <x-ui.button-link route="{{ route('dashboard.trips.index') }}" size="normal" color="gray" class="block mx-auto w-[180px] rounded">旅のしおりの一覧</x-ui.button-link>
            </section>

        </div>
    </div>
</x-app-layout>