<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            旅のしおり一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white shadow-sm">
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-gray-900">
                @foreach ($trips as $trip)
                <div class="p-6 rounded-lg shadow-md hover:shadow-lg border border-gray-300 bg-white">
                    <div class="flex">
                        <span class="mr-1 text-xl">🗺</span>
                        <h3 class="text-xl font-semibold">{{ $trip->title }}</h3>
                    </div>
                    <p class="py-2">{{ $trip->destination }}</p>
                    <div class="pt-2 pb-4">
                        <p>✈️ {{ $trip->start_date }}</p>
                        <p>🏠 {{ $trip->end_date }}</p>
                    </div>
                    <a href="{{ route('dashboard.trips.show', ['trip_id' => $trip->id]) }}" class="font-medium text-sky-500 hover:text-sky-600 transition">詳細を見る →</a>
                </div>
                @endforeach
                <a href="{{ route('dashboard.trips.create') }}" class="flex items-center justify-center min-h-[210px] p-6 rounded-lg shadow-md hover:shadow-lg border border-blue-300 bg-white hover:bg-blue-200 transition cursor-pointer ">
                    ➕
                </a>
            </div>
        </div>
    </div>
</x-app-layout>