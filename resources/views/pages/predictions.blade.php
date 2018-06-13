@extends('layouts.app')

@section('title')
    {{ __('menu.my_predictions') }} @parent
@endsection

@section('content')
<div class="page">
  <div class="section">
      <div class="row">
          <div class="medium-8 columns text-left">
              <div class="title-section">
                  {{ __('menu.my_predictions') }}
              </div>
          </div>
          <div class="medium-4 columns">
              <div class="alerta" v-if="updated">
                  {{ __('predictions.predictions_updated') }}
              </div>
          </div>
      </div>
  </div>
  <predictions-index :groups="{{ $groups }}"></predictions-index>
</div>
@endsection
