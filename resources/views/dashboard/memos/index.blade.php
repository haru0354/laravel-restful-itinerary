<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            「{{ $trip->title  }}」のメモ一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-full mx-auto p-6 bg-white shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                @foreach ($memos as $memo)
                <div class="p-6 border rounded-lg shadow-lg hover:shadow-2xl transition-shadow border-gray-300 bg-gray-50">
                    <h3 class="pb-1 mt-2 mb-4 text-xl text-center font-bold border-b border-dashed border-gray-700">{{ $memo->title }}</h3>
                    <p>{{ $memo->content }}</p>
                </div>
                @endforeach
                <a href="{{ route('dashboard.trips.create') }}" class="flex items-center justify-center min-h-[130px] p-6 rounded-lg shadow-md hover:shadow-lg border border-blue-300 bg-white hover:bg-blue-200 transition cursor-pointer">
                    ➕
                </a>
            </div>
            <div class="my-8">
                {{ $memos->links() }}
            </div>
            <x-ui.button-link route="{{ route('dashboard.trips.show', ['trip_id' => $memo->trip_id]) }}" size="normal" color="green" class="block mx-auto w-[180px] rounded">旅程へ</x-ui.button-link>
        </div>
    </div>
    </div>
</x-app-layout>