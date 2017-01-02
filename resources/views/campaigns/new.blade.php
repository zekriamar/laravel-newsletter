@extends('layouts.app')

@section('title', 'New campaign')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                @yield('title')
                <div class="pull-right">
                    <div class="btn-group btn-group-xs">
                        <a href="{{ route('campaigns.index') }}" type="button" class="btn btn-default">Back to overview</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                {!! Form::model((request()->is('campaigns/clone*')) ? $campaign : 'null', ['route' => ['campaigns.create']]) !!}

                @include('forms.campaigns')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection