@extends('layouts.app')

@section('title')
    {{ __('menu.my_predictions') }} @parent
@endsection

@section('content')
    <predictions-index :groups="{{ $groups }}"></predictions-index>
    <div class="medium-3 columns text-center banner">
        @include('ads.horizontal')
    </div>
@endsection
