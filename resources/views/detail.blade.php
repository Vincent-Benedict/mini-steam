@extends('master.master')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
@endsection

@section('content')
<main>
    <div class="container">

        <div class="container-header"></div>

        <div class="content">
            <div class="content-title">
                <p>{{$game->title}}</p>
            </div>
            <div class="content-header">
                <div class="content-header-slides">

                    <div class="content-header-slides-main">
                        <img id="featured" src="{{url('/assets/'.$pictures[0]->image)}}" alt="">
                    </div>

                    <div class="content-header-slides-thumbnail">

                        <div id="slider">
                            
                            @foreach($pictures as $p)
                                <img class="thumbnail" src="{{url('/assets/'.$p->image)}}" alt="">
                            @endforeach
                        </div>

                    </div>

                </div>

                <div class="content-header-title">
                    <div class="cover">
                        <img class="thumbnail" src="{{url('/assets/'.$game->cover)}}" alt="">
                    </div>

                    <div class="type">
                        <p>{{$game->description}}</p>
                    </div>

                    <div class="game-others">
                        <div class="game-others-left">
                            <span>ALL REVIEWS</span>
                            <span>RELEASE DATE</span>
                            <span>DEVELOPER</span>
                            <span>PUBLISHER</span>
                        </div>
                        <div class="game-others-right">
                            <span>{{$game->review}}</span>
                            <span class="game-date">{{$game->release}}</span>
                            <span>{{$game->developer}}</span>
                            <span>{{$game->publisher}}</span>
                        </div>
                    </div>

                    <p class="tag-title">Popular user-defined tags for this product</p>

                    <div class="tags-container">
                        @foreach ($tags as $tag)
                            <div class="tag">
                                <p>{{$tag->name}}</p>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>

            <div class="content-divider"></div>

            <div class="content-system">
                <div class="system-left">
                    <div class="system-header">
                        <p>SYSTEM REQUIREMENTS</p>
                    </div>
                    <div class="system-content">
                        <div class="system-content-left">
                            <p>MINIMUM</p>
                            <p><span>OS: </span>{{$game->os}}</p>
                            <p><span>Processor: </span>{{$game->processor}}</p>
                            <p><span>Memory: </span>{{$game->memory}}</p>
                            <p><span>Graphics: </span>{{$game->graphics}}</p>
                            <p><span>DirectX: </span>{{$game->directx}}</p>
                            <p><span>Storage: </span>{{$game->storage}}</p>
                            <p><span>Network: </span>{{$game->network}}</p>
                        </div>
                        <div class="system-content-right">
                            <p>RECOMMENDED</p>
                            <p><span>OS: </span>{{$game->os}}</p>
                            <p><span>Processor: </span>{{$game->processor}}</p>
                            <p><span>Memory: </span>{{$game->memory}}</p>
                            <p><span>Graphics: </span>{{$game->graphics}}</p>
                            <p><span>DirectX: </span>{{$game->directx}}</p>
                            <p><span>Storage: </span>{{$game->storage}}</p>
                            <p><span>Network: </span>{{$game->network}}</p>
                        </div>
                    </div>
                </div>
                <div class="system-right">

                </div>
            </div>
        </div>
    </div>


</main>

<script>

    let thumbnails = document.getElementsByClassName('thumbnail')

    var initialImage = thumbnails[0];
    initialImage.classList.add('active');

    let activeImage = document.getElementsByClassName('active')

    for(let i = 0; i<thumbnails.length; i++){

        thumbnails[i].addEventListener('click', () => {

            if(activeImage.length > 0){
                activeImage[0].classList.remove('active')
            }

            thumbnails[i].classList.add('active')
            document.getElementById('featured').src = thumbnails[i].src
        })
    }

</script>
@endsection