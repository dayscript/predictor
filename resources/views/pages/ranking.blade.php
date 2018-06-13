@extends('layouts.app')

@section('title')
    {{ __('menu.ranking') }} @parent
@endsection

@section('content')
    @if($l)
        <ranking-index :rounds="{{ $rounds }}" :leagues="{{ $leagues }}" userid="{{ auth()->user()->id }}" :l="{{ $l }}"></ranking-index>
    @else
        <ranking-index :rounds="{{ $rounds }}" :leagues="{{ $leagues }}" userid="{{ auth()->user()->id }}" ></ranking-index>
    @endif
    <div class="medium-3 columns text-center banner">
        @include('ads.vertical')
    </div>
@endsection
