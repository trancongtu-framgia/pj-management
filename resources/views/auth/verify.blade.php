@extends('master')
@section('title', __('eng.verify'))
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('eng.verifyEmail') }}
                        </div>
                    @endif

                    {{ __('eng.verifyCheck') }}
                    {{ __('eng.notReceived') }}, <a href="{{ route('verification.resend') }}">{{ __('eng.resend') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
