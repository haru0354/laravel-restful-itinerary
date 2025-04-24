<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $trip->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-full mx-auto p-6 bg-white shadow-sm">
            <x-form.form-container method="POST" action="{{ route('dashboard.trips.update', [$trip->id]) }}"
                title="旅のしおりの編集" buttonTitle="編集する" backRoute="{{ route('dashboard.trips.show', ['trip_id' => $trip->id]) }}">
                @method('PUT')
                <div class="flex justify-center">
                    <div class="flex flex-col mr-8">
                        <x-form.input name="start_date" type="date" value="{{ $trip->start_date }}">出発日</x-form.input>
                    </div>
                    <div class="flex flex-col">
                        <x-form.input name="end_date" type="date" value="{{ $trip->end_date }}">帰宅日</x-form.input>
                    </div>
                </div>
                <x-form.input name="title" value="{{ $trip->title }}">旅のしおりのタイトル</x-form.input>
                <x-form.input name="destination" value="{{ $trip->destination }}">旅行先</x-form.input>
            </x-form.form-container>
            <form method="POST" action="{{ route('dashboard.trips.destroy', [ 'trip_id' => $trip->id ]) }}">
                @csrf
                @method('DELETE')
                <x-ui.button size="normal" color="red" class="mt-8 block mx-auto rounded">削除する</x-ui.button>
            </form>
        </div>
    </div>
</x-app-layout>