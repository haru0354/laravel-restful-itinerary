<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            旅のしおりの追加
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-full mx-auto sm:px-6 lg:px-8 bg-white shadow-sm">
            <form method="post" action="{{ route('dashboard.trips.store') }}" class="w-full max-w-[480px] mx-auto p-6 border rounded border-gray-400 bg-white">
                    @csrf
                    <p class="text-center text-2xl sm:text-3xl font-semibold">旅のしおりの登録</p>
                    <div class="flex justify-center">
                        <div class="flex flex-col mr-4">
                            <label for="start_date">出発日</label>
                            <input class="w-[180px]" type="date" id="start_date" name="start_date" value="{{ old('start_date') }}" />
                        </div>
                        <div class="flex flex-col">
                            <label for="end_date">帰宅日</label>
                            <input class="w-[180px]" type="date" id="end_date" name="end_date" value="{{ old('end_date') }}" />
                        </div>
                    </div>
                    <label for="title">旅のしおりのタイトル</label>
                    <input class="w-full" type="text" id="title" name="title" value="{{ old('title') }}" />
                    <label for="destination">旅行先</label>
                    <input class="w-full" type="text" id="destination" name="destination" value="{{ old('destination') }}" />
                    <button class="block mx-auto bg-blue-500 my-4 py-2 px-4 rounded ">新規登録する</button>
                </form>
        </div>
    </div>
</x-app-layout>