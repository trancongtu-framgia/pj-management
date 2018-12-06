@extends('master')
@section('title', 'Create group')
@section('content')
    <div class="card">
        <div class="card-header border bottom">
            <h4 class="card-title">{{ __('eng.create_sub') }}</h4>
        </div>
        <div class="card-body">
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row">
                <div class="col-sm-8">
                    {!! Form::open(['id' => 'form-validation', 'method' => 'POST', 'routes' => 'subject.create']) !!}
                        @csrf
                        <div class="form-group row">
                            {!! Form::label('name', __('eng.sub_name'), ['class' => 'col-sm-3 col-form-label control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('name', __('eng.label_desc'), ['class' => 'col-sm-3 col-form-label control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('description', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        {!! Form::submit(__('eng.btn_submit'), ['class' => 'btn btn-gradient-success']) !!}
                        {!! Form::reset(__('eng.btn_reset'), ['class' => 'btn']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
