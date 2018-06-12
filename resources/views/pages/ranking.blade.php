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
@endsection
<div id='div-gpt-ad-1528227919403-0' style="width: 728px; height: 90px">
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1528227919403-0'); });
  </script>
</div>
