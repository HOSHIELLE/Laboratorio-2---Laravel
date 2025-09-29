@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(to right, #1e3c72, #2a5298);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .home-card {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        padding: 2rem;
        width: 450px;
        margin-top: 3rem;
        text-align: center;
    }

    .home-card h2 {
        color: #1e3c72;
        font-size: 2rem;
        margin-bottom: 1.5rem;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    }

    .home-card .alert {
        font-weight: bold;
        font-size: 1.1rem;
        border-radius: 8px;
        margin-top: 1rem;
    }
</style>

<div class="home-card">
    <h2>Bienvenido {{ Auth::user()->name }}</h2>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
@endsection
