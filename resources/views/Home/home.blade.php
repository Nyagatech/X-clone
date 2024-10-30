@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Sidebar on Small and Medium Screens -->
            <div class="col-12 col-md-2 d-md-block d-none">
                @include('components.sidebar') <!-- Include the sidebar -->
            </div>

            <!-- Main Content Area -->
            <div class="col-12 col-md-7">
                @include('components.posts') <!-- Include posts component -->
            </div>

            <!-- Second Sidebar on Medium and Larger Screens -->
            <div class="col-12 col-md-3 d-md-block d-none">
                @include('components.sidebar2') <!-- Include the second sidebar -->
            </div>
        </div>
    </div>
@endsection
