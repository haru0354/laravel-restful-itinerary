@php
$tripId = request()->route('trip_id');
$currentRoute = Route::currentRouteName();
@endphp

@if($tripId)
<nav class="fixed w-full bottom-0 border-t border-gray-300 bg-white z-50">
    <ul class="flex justify-around items-center text-center h-[64px]">
        <li class="w-full hover:bg-sky-200 transition-all duration-200">
            <a href="{{ route('dashboard.trips.index') }}"
                class="flex flex-col justify-center items-center w-full h-full py-1">
                <span>🗺</span>
                <span class="mt-1 text-sm">旅のしおり</span>
            </a>
        </li>
        <li class="w-full hover:bg-sky-200 transition-all duration-200">
            <a href="{{ route('dashboard.trips.show', ['trip_id' => $tripId]) }}"
                class="flex flex-col justify-center items-center w-full h-full py-1">
                <span>📅</span>
                <span class="mt-1 text-sm">旅程表</span>
            </a>
        </li>
        <li class="w-full hover:bg-sky-200 transition-all duration-200">
            <a href="{{ route('dashboard.trips.memos.index', ['trip_id' => $tripId]) }}"
                class="flex flex-col justify-center items-center w-full h-full py-1">
                <span>📝</span>
                <span class="mt-1 text-sm">メモ一覧</span>
            </a>
        </li>

        <!-- ➕ボタンはルート切り替え -->
        <li class="w-full hover:bg-sky-200 transition-all duration-200">
            @if ($currentRoute === 'dashboard.trips.show' || $currentRoute === 'dashboard.trips.itineraries.create')
            <a href="{{ route('dashboard.trips.itineraries.create', ['trip_id' => $tripId]) }}"
                class="flex flex-col justify-center items-center w-full h-full py-1">
                <span>➕</span>
                <span class="mt-1 text-sm">新規作成</span>
            </a>
            @elseif ($currentRoute === 'dashboard.trips.memos.index' || $currentRoute === 'dashboard.trips.memos.create')
            <a href="{{ route('dashboard.trips.memos.create', ['trip_id' => $tripId]) }}"
                class="flex flex-col justify-center items-center w-full h-full py-1">
                <span>➕</span>
                <span class="mt-1 text-sm">新規作成</span>
            </a>
            @endif
        </li>
    </ul>
</ｎ>
@endif