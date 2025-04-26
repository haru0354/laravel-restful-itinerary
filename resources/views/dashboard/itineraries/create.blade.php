<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$trip_title}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-full mx-auto p-6 bg-white shadow-sm">
            <section>
                <x-form.form-container
                    title="旅程の追加" buttonTitle="旅程を追加する" backRoute="{{ route('dashboard.trips.show', ['trip_id' => $trip_id]) }}">
                    <x-form.input type="datetime-local" name="date_and_time">旅程の目的</x-form.input>
                    <x-form.input name="title">旅程の目的</x-form.input>
                    <x-form.textarea name="content">旅程の詳細</x-form.textarea>
                    <x-form.textarea name="hide_content">追加情報</x-form.textarea>
                </x-form.form-container>
            </section>
        </div>
    </div>
</x-app-layout>