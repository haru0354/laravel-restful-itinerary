<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $trip_title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-full mx-auto p-6 bg-white shadow-sm">
            <x-form.form-container method="POST" action="{{ route('dashboard.trips.memos.update', ['trip_id' => $memo->trip_id, 'memo_id' =>$memo->id]) }}"
                title="メモの編集" buttonTitle="編集する" backRoute="{{ route('dashboard.trips.memos.show', ['trip_id' => $memo->trip_id, 'memo_id' =>$memo->id]) }}">
                @method('PUT')
                <x-form.input name="title" value="{{ $memo->title }}">メモタイトル</x-form.input>
                <x-form.textarea name="content" value="{{ $memo->content }}">メモの内容</x-form.textarea>
            </x-form.form-container>
            <x-ui.delete-modal title="{{ $memo->title }}" buttonTitle="削除する"
                action="{{ route('dashboard.trips.memos.destroy', ['trip_id' => $memo->trip_id, 'memo_id' => $memo->id]) }}" />
        </div>
    </div>
</x-app-layout>