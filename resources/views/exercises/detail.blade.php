@extends('master')
@section('title', __('eng.sub'))
@section('content')
    {!! Form::open(['method' => 'GET', 'url' => 'task/' . $exercise->id . '/create']) !!}
        {!! Form::submit(__('eng.submit'), ['class' => 'btn btn-gradient-success']) !!}
    {!! Form::close() !!}
    <div class="card">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-header border bottom">
            <h4 class="card-title">{{ __('eng.sub') }}</h4>
        </div>
        <div class="card-body">
            <div class="form-control">
                <h1>{{ $exercise->name }}</h1>
                <div class="content"><p>{{ $exercise->description }}</p></div>
            </div>
        </div>
    </div>
@endsection
