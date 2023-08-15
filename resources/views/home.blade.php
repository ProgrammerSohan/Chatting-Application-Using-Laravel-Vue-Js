@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <notification-component></notification-component>
            <div class="card">
                <div class="card-header">{{ __('Welcome') }}</div>
                <div class="card-body">
                    You are logged in!

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
