@extends('master')
@section('title', __('eng.sub'))
@section('content')
    {!! Form::open(['method' => 'GET', 'url' => 'subject/create']) !!}
        {!! Form::submit(__('eng.create_sub'), ['class' => 'btn btn-gradient-success']) !!}
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
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">{{ __('eng.id') }}</th>
                    <th scope="col">{{ __('eng.name') }}</th>
                    <th scope="col">{{ __('eng.action') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($subject as $sub)
                    <tr>
                        <th scope="row">{{ $sub->id }}</th>
                        <td>{{ $sub->name }}</td>
                        <td><a href="{{ url('subject/' . $sub->id . '/delete') }}" onclick="return confirm({{ __('eng.del_confirm') }})">{{ __('eng.del') }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
