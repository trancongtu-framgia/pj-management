@extends('master')
@section('title', __('eng.sub'))
@section('content')
    <div class="row">
        <div class="col-2">
            {!! Form::open(['method' => 'GET', 'url' => 'exercise/' . $group->id . '/create']) !!}
            {!! Form::submit(__('eng.createEx'), ['class' => 'btn btn-gradient-success']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-2">
            <a href="{{ url('group/' . $group->id . '/exercise') }}" class="btn btn-gradient-info">{{ __('eng.exercise') }}</a>
        </div>
    </div>
    <div class="card">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-header border bottom">
            <h4 class="card-title">{{ __('eng.group') }}</h4>
        </div>
        <div class="card-body">
            <img class="card-img-top" src="{{ asset(config('app.group_image') . $group->group_image) }}" alt="#">
            <div class="card-text">
                <h1>{{ $group->name }}</h1>
            </div>
            <div class="content">
                <p>{{ $group->description }}</p>
            </div>
        </div>
    </div>
@endsection
