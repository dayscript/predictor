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
    <div class="padding-30">
        <div class="row">
            <div class="medium-8 columns">
                <div class="mensaje" v-html="__('predictions.predictions_help_message')"></div>
            </div>
            <div class="medium-4 columns">
                <div class="acumulado">
                    <div class="row">
                        <div class="small-3 columns">
                            <div class="puntos">0</div>
                        </div>
                        <div class="small-9 columns">
                            <strong>{{ __('predictions.total_points') }}:</strong>{{ __('predictions.win_in_these_phase') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <predictions-index :groups="{{ $groups }}"></predictions-index>
        <div class="text-center margin-30">
            <!-- <img src="/img/banners/MPI_320x50_Q20089_GM_99Coverage_ST.jpg" alt="" class="Add"> -->
        </div>
    </div>
</div>
@endsection
