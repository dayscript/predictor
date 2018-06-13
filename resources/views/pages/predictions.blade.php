@extends('layouts.app')

@section('title')
    {{ __('menu.my_predictions') }} @parent
@endsection

@section('content')
<div class="page">
  <predictions-index :groups="{{ $groups }}"></predictions-index>
  <div class="row" style="text-align: center;padding-bottom: 15px">
      <img src="/img/banners/MPI_320x50_Q20089_GM_99Coverage_ST.jpg" alt="" class="Add">
  </div>
</div>
@endsection
