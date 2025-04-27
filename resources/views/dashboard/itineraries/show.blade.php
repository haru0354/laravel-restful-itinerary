<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $trip_title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-full mx-auto p-6 bg-white shadow-sm">
            <section>
                <div class="relative flex flex-col mb-8 p-6 border rounded-lg border-gray-300 bg-gray-50">
                    <h3 class="mb-2 text-xl font-bold">🗺 {{ $itinerary->title }}</h3>
                    <p class="mb-3">⌚️ {{ $itinerary->date_and_time }}</p>
                    <p class="mt-2">{{ $itinerary->content }}</p>
                    @if ($itinerary->hide_content)
                    <button class="mt-4 hover:underline text-gray-500">
                        🔽 補足情報を表示 🔽
                    </button>
                    <div class="mt-4 p-4">
                        {{ $itinerary->hide_content }}
                    </div>
                    @endif
                </div>
                <x-ui.button-link route="{{ route('dashboard.trips.itineraries.edit', ['trip_id' => $itinerary->trip_id, 'itinerary_id' => $itinerary->id]) }}" size="normal" color="blue" class="block w-[180px] mx-auto rounded">
                    編集する
                </x-ui.button-link>
                <x-ui.button-link route="{{ route('dashboard.trips.show', ['trip_id' => $itinerary->trip_id]) }}" size="normal" color="gray" class="block w-[180px] mx-auto rounded">
                    旅程の一覧
                </x-ui.button-link>
            </section>
        </div>
    </div>
</x-app-layout>