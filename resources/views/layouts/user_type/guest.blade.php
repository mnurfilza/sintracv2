@extends('layouts.app-dashboard')

@section('guest')
    @if(\Request::is('login/forgot-password')) 
        @yield('content') 
    @else
        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
                <div class="col-12">
                    {{-- @include('layouts.navbars.guest.nav') --}}
                </div>
            </div>
        </div>
        @yield('content')        
    @endif
@endsection