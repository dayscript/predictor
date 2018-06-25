@extends('layouts.app')

@section('title')
    {{ __('menu.my_predictions') }} @parent
@endsection

@section('content')
    <div class="page">
        <predictions-index active="{{ $active }}" :groups="{{ $groups }}" :total="{{ auth()->user()->points }}"></predictions-index>
        <div class="row" style="text-align: center;padding-bottom: 15px">
            @include('ads.horizontal')
        </div>
    </div>
@endsection
