<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$trip_title}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-full mx-auto p-6 bg-white shadow-sm">
            <x-form.form-container method="POST" action="{{ route('dashboard.trips.memos.store', ['trip_id' => $trip_id]) }}"
                title="メモの登録" buttonTitle="新規登録する" backRoute="{{ route('dashboard.trips.memos.index', ['trip_id' => $trip_id]) }}">
                <x-form.input name="title">メモのタイトル</x-form.input>
                <x-form.textarea name="content">メモする内容</x-form.textarea>
            </x-form.form-container>
        </div>
    </div>

</x-app-layout>