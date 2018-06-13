@extends('layouts.app')

@section('title')
    {{ __('menu.my_predictions') }} @parent
@endsection

@section('content')
<div class="page">
  <predictions-index :groups="{{ $groups }}"></predictions-index>
</div>
@endsection
