@php
    $tripId = request()->route('trip_id');
@endphp

@if($tripId)
<div class="footer-menu fixed bottom-0 w-full bg-white  border-gray-400 border-t">
    <div class="flex justify-around py-2">
        <a href="{{ route('dashboard.trips.index') }}"
            class="text-gray-700 hover:bg-gray-200">旅のしおり</a>
        <a href="{{ route('dashboard.trips.show', ['trip_id' =>$tripId ]) }}"
            class="text-gray-700 hover:bg-gray-200">旅程表</a>
        <a href="{{ route('dashboard.trips.memos.index', ['trip_id' =>$tripId ]) }}"
            class="text-gray-700 hover:bg-gray-200">メモ一覧</a>
    </div>
</div>
@endif