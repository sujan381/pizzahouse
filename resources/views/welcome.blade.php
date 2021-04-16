@extends('layouts.layout')

@section('content')
<a href="pizzas/create"><img src="/img/icon.jpg" style="float:left;margin-left:20px;border-radius:45px;height:75px;margin-top:5px;"/></a>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}" style="color:black;">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" style="color:black;">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="content">
        <img src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">
            The India's Best Pizzas
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="/pizzas/create" style="text-decoration:none;"><input type="button" value="Order a Pizza" style="background-color:orange;color:#fff;padding:5px;border-radius:10px;"/></a>
        <a href="/pizzas" style="text-decoration:none;"><input type="button" value="Pizza Orders" style="background-color:orange;color:#fff;padding:5px;border-radius:10px;"/></a>
    </div>
</div>
@endsection