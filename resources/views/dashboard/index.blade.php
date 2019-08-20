@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                @include('dashboard.profile')
                <div class="mt-4"></div>
                @include('dashboard.vehicle')
            </div>
        </div>
    </div>
@endsection
