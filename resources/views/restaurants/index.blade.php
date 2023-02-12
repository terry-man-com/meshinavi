@extends('layouts.main') {{-- layoutsの画面を表示 --}}

@section('title', '一覧画面')

@section('content') {{-- main.blade.phpの@yeild('context')に挿入--}}
    @if (!empty($restaurants))
        <ul>
            @foreach ($restaurants as $restaurant)
                <li class="list-unstyled border mb-5 pl-3 shadow">
                    <a class="text-decoration-none" href="{{ route('restaurants.show', $restaurant) }}">{{ $restaurant->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection