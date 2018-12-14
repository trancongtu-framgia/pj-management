@extends('master')
@section('title', 'Groups')
@section('content')
    <div class="row">
        @foreach($group as $group)
            <div class="col-md-4">
                <div class="card">
                    <a href="{{ url('group/' . $group->id . '/detail') }}"><img class="card-img-top" src="{{ asset(config('app.group_image') . $group->group_image) }}" alt="#"></a>
                    <div class="card-body">
                        <h4 class="card-title m-t-10"><a href="{{ url('group/' . $group->id . '/detail') }}">{{ $group->name }}</a></h4>
                        <p class="card-text">{{ $group->description }}</p>
                        <p class="card-text">{{ $group->subject_id }}</p>
                        <p class="card-text">{{ $group->group_image }}</p>
                        <div class="m-t-20">
                            <a href="#" class="btn btn-gradient-success">Join group</a>
                            <a href="{{ url('group/' . $group->id . '/delete') }}" class="btn btn-gradient-warning">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop
