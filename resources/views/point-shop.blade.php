@extends('master.master')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('css/point-shop.css')}}">
@endsection

@section('content')

<main>

    <div class="main-header">
        <p>THE POINTS SHOP</p>
    </div>
    
    <div class="container">

        <div class="container-section">
            <div class="section-header">
                <p>ALL ANIMATED AVATAR</p>
            </div>
            <div class="section-content">
                @foreach ($avatars as $i)
                <div class="card">
                    <div class="card-cover">
                        <img src="{{url('/assets/point-shop/'.$i->image)}}" alt="">
                    </div>
                    <div class="card-desc">
                        <p class="card-name">{{$i->name}}</p>
                        <p class="card-category">{{$i->category}}</p>
                        <p class="card-points">{{$i->points}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="container-section">
            <div class="section-header">
                <p>ALL AVATAR FRAMES</p>
            </div>
            <div class="section-content">
                @foreach ($frames as $i)
                <div class="card">
                    <div class="card-cover">
                        <img src="{{url('/assets/point-shop/'.$i->image)}}" alt="">
                    </div>
                    <div class="card-desc">
                        <p class="card-name">{{$i->name}}</p>
                        <p class="card-category">{{$i->category}}</p>
                        <p class="card-points">{{$i->points}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="container-section">
            <div class="section-header">
                <p>ALL MINI PROFILES</p>
            </div>
            <div class="section-content">
                @foreach ($profiles as $i)
                <div class="card">
                    <div class="card-cover">
                        <img src="{{url('/assets/point-shop/'.$i->image)}}" alt="">
                    </div>
                    <div class="card-desc">
                        <p class="card-name">{{$i->name}}</p>
                        <p class="card-category">{{$i->category}}</p>
                        <p class="card-points">{{$i->points}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="container-section">
            <div class="section-header">
                <p>ALL SEASONAL BADGES</p>
            </div>
            <div class="section-content">
                @foreach ($badges as $i)
                <div class="card">
                    <div class="card-cover">
                        <img src="{{url('/assets/point-shop/'.$i->image)}}" alt="">
                    </div>
                    <div class="card-desc">
                        <p class="card-name">{{$i->name}}</p>
                        <p class="card-category">{{$i->category}}</p>
                        <p class="card-points">{{$i->points}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="container-section">
            <div class="section-header">
                <p>ALL CHAT STICKERS</p>
            </div>
            <div class="section-content">
                @foreach ($stickers as $i)
                <div class="card">
                    <div class="card-cover">
                        <img src="{{url('/assets/point-shop/'.$i->image)}}" alt="">
                    </div>
                    <div class="card-desc">
                        <p class="card-name">{{$i->name}}</p>
                        <p class="card-category">{{$i->category}}</p>
                        <p class="card-points">{{$i->points}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

</main>

@endsection