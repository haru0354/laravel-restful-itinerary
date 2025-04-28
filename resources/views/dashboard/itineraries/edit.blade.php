<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$trip_title}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-full mx-auto p-6 bg-white shadow-sm">
            <section>
                <x-form.form-container method="POST" action="{{ route('dashboard.trips.itineraries.update', ['trip_id' => $itinerary->trip_id, 'itinerary_id' =>$itinerary->id]) }}"
                    title="旅程の編集" buttonTitle="編集する" backRoute="{{ route('dashboard.trips.show', ['trip_id' => $itinerary->trip_id]) }}">
                    @method('PUT')
                    <x-form.input type="datetime-local" name="date_and_time" value="{{ $itinerary->date_and_time }}">日時</x-form.input>
                    <x-form.input name="title" value="{{ $itinerary->title }}">旅程の目的</x-form.input>
                    <x-form.textarea name="content" value="{{ $itinerary->content }}">
                        旅程の詳細
                    </x-form.textarea>
                    <x-form.textarea name="hide_content" value="{{ $itinerary->hide_content }}">
                        追加情報
                    </x-form.textarea>
                </x-form.form-container>
                <x-ui.delete-modal title="{{ $itinerary->title }}" buttonTitle="削除する"
                    action="{{ route('dashboard.trips.itineraries.destroy', ['trip_id' => $itinerary->trip_id, 'itinerary_id' => $itinerary->id]) }}" />
            </section>
        </div>
    </div>
</x-app-layout>