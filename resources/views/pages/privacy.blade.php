@extends('layouts.app')

@section('title')
    {{ __('footer.privacy_policy') }} @parent
@endsection

@section('content')
<div class="page">
    <div class="section">
        <div class="row">
            <div class="medium-12 columns text-left">
                <div class="title-section">
                    @{{ $store.getters.trans('footer.privacy_policy') }}
                </div>
            </div>
        </div>
    </div>
    <div class="padding-30">
        <div class="row">
            <div class="medium-9 columns">
                <div class="info">
                    @include('pages.privacy.doc1')
                    @include('pages.privacy.doc2')
                </div>
            </div>
            <div class="medium-3 columns text-center banner">
                @include('ads.vertical')
            </div>
        </div>
    </div>
</div>
@endsection