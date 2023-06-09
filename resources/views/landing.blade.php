@extends('layouts.landing')
@section('content')
<div class="content">
    <div class="title m-b-md">
        Sistem Pendukung Keputusan Penerima BLT-DD Ekstrem
    </div>

    <div class="links">
        @auth
        @if (auth()->user()->role->name == 'admin')
        <a href="{{ route('home') }}">{{__("Beranda")}}</a>
        {{-- @else --}}
        {{-- <a href="{{ route('holtikultura.dashboard') }}"> {{__("Beranda")}}</a> --}}
        @endif
        @else
        <a href="{{ route('login') }}"> {{__("Login")}}</a>
        @endauth
    </div>
</div>
@endsection

@push('styles')
<style>
    /* html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    } */

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
@endpush
