@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                @include('components.sidebar') <!-- Include the sidebar -->
            </div>
            <div class="col-6">
                <h1>Main Content Area</h1>
                 @include('components.posts')
            </div>
        </div>
    </div>
@endsection
