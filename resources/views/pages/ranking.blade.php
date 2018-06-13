@extends('layouts.app')

@section('title')
    {{ __('menu.ranking') }} @parent
@endsection

@section('content')

<div class="page">
    <div class="section">
        <div class="row">
            <div class="medium-12 columns text-left">
                <div class="title-section">
                    {{ $store.getters.trans('menu.ranking') }}
                </div>
            </div>
        </div>
    </div>
    <div class="padding-30">
        <div class="row">
        @if($l)
            <ranking-index :rounds="{{ $rounds }}" :leagues="{{ $leagues }}" userid="{{ auth()->user()->id }}" :l="{{ $l }}"></ranking-index>
        @else
            <ranking-index :rounds="{{ $rounds }}" :leagues="{{ $leagues }}" userid="{{ auth()->user()->id }}" ></ranking-index>
        @endif
      </div>
    </div>
    <div class="medium-3 columns text-center banner">
        @include('ads.vertical')
    </div>
</div>
@endsection
