<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            旅のしおりの追加
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-full mx-auto p-6 bg-white shadow-sm">
            <x-form.form-container method="POST" action="{{ route('dashboard.trips.store') }}" title="旅のしおりの登録" buttonTitle="新規登録する" backRoute="{{ route('dashboard.trips.index') }}">
                @csrf
                <div class="flex justify-center">
                    <div class="flex flex-col mr-8">
                        <x-form.input name="start_date" type="date">出発日</x-form.input>
                    </div>
                    <div class="flex flex-col">
                        <x-form.input name="end_date" type="date">帰宅日</x-form.input>
                    </div>
                </div>
                <x-form.input name="title">旅のしおりのタイトル</x-form.input>
                <x-form.input name="destination">旅行先</x-form.input>
            </x-form.form-container>
        </div>
    </div>
</x-app-layout>