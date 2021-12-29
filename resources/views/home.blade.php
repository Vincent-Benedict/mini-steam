@extends('master.master')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')

<main>

    <aside>
        <img src="https://store.cloudflare.steamstatic.com/public/images//gift/steamcards_promo_02.png" alt="">
    
        <div class="discovery">
            <p>DISCOVERY QUEUES</p>
    
            <ul>
                <a><li>★ Recommend</li></a>
                <a><li>★ New Releases</li></a>
            </ul>
        </div>
    
        <div class="browse-category">
            <p>BROWSE CATEGORIES</p>
    
            <ul>
                <a><li>★ Top Sellers</li></a>
                <a><li>★ New Releases</li></a>
                <a><li>★ Community</li></a>
                <a><li>★ Specials</li></a>
                <a><li>★ Recommend</li></a>
            </ul>
        </div>
    
        <div class="browse-genre">
            <p>BROWSE BY GENRE</p>
    
            <ul>
                <a><li>★ Free to play</li></a>
                <a><li>★ Early Access</li></a>
                <a><li>★ Adventure</li></a>
                <a><li>★ Horror</li></a>
                <a><li>★ Dating Sim</li></a>
                <a><li>★ RPG</li></a>
                <a><li>★ Massively Multiplayer</li></a>
                <a><li>★ Futuristic</li></a>
                <a><li>★ Simulation</li></a>
                <a><li>★ Farming Sim</li></a>
                <a><li>★ Strategy</li></a>
            </ul>
        </div>
    
    </aside>

    <div class="container">

        <div class="container-header"></div>

        <div id="fr-section">
            <div class="container-title">
                <p>Featured & Recommended</p>
            </div>
    
            <div class="content-slide">
                @foreach ($featuredGames as $g)
                <a href="{{url('/detail/'.$g->id)}}">
                    <div class="imgslide fade clickable-game">
                        <div class="imgslide-container">
                            <div class="imgslide-cover">
                                <img src="{{url('/assets/'.$g->cover)}}" alt="">
                            </div>
                            <div class="imgslide-desc">
                                <p class="imgslide-desc-title">{{$g->title}}</p>
                                <p class="imgslide-desc-description">{{$g->description}}</p>
                                <p class="imgslide-desc-available">Now Available</p>

                                @if ($g->price == 0)
                                <div class="imgslide-desc-price">
                                    <p>Free Games</p>
                                </div>
                                @elseif ($g->discount == 0)
                                <div class="imgslide-desc-price">
                                    <p>Rp. {{number_format($g->price, 0, ",", ".")}},-</p>
                                </div>
                                    
                                @else
                                <div class="imgslide-desc-price">
                                    <p class="ori-price">Rp. {{number_format($g->price, 0, ",", ".")}},-</p>
                                    <p>Rp. {{number_format($g->price*$g->discount/100, 0, ",", ".")}},-</p>
                                </div>
                                    
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
                <div class="prev" onclick="nextSlide(-1)">&#10094;</div>
                <div class="next" onclick="nextSlide(1)">&#10095;</div>
            </div>
        </div>

        <div id="so-section">
            <div class="container-title">
                <p>Special Offers</p>
            </div>

            <div class="container-special-offer">
                @foreach ($specialGames as $g)
                <a href="{{url('/detail/'.$g->id)}}">
                    <div class="so-games clickable-game">
                        <img src="{{url('/assets/'.$g->cover)}}" alt="">
                        <div class="so-games-desc">
                            <div class="so-games-desc-content">
                                <div class="desc-content-disc">
                                    <p>{{$g->discount}}%</p>
                                </div>
                                <div class="desc-content-price">
                                    <p class="ori-price">Rp. {{number_format($g->price, 0, ",", ".")}},-</p>
                                    <p class="disc-price">Rp. {{number_format($g->price*$g->discount/100, 0, ",", ".")}},-</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                    
                @endforeach
            </div>
        </div>

        <div id="home-tab">
            
            <div class="tabs">
                <div class="tab active" data-tab-target="#new-and-trending"><p>New and Trending</p></div>
                <div class="tab" data-tab-target="#top-sellers"><p>Top Sellers</p></div>
                <div class="tab" data-tab-target="#free-games"><p>Free Games</p></div>
            </div>

            <div class="tab-container">
                <div class="tab-content">
                    <div class="active" id="new-and-trending" data-tab-content>
                        
                        @foreach ($newGames as $g)
                            @php
                                $allHoverTags = array();
                                foreach($tags as $t){
                                    if($t->game_id == $g->id){
                                        array_push($allHoverTags, $t->name);
                                    }   
                                }
                                $imageDetails = array();
                                $imageHidden = '';
                                foreach ($pictures as $img) {
                                    if($img->game_id == $g->id){
                                        array_push($imageDetails, $img->image);
                                        $imageHidden = $imageHidden . $img->image . ' ';
                                    }
                                }
                            @endphp
                            <a href="{{url('/detail/'.$g->id)}}">
                            <div class="tab-game-card new-games clickable-game" onmouseover="hoverGameCard(this, {{json_encode($g)}}, {{json_encode($allHoverTags)}}, {{json_encode($imageDetails)}})">
                                <div class="game-card-cover">
                                    <img src="{{url('/assets/'.$g->cover)}}" alt="">
                                </div>
                                <div class="game-card-desc">
                                    <div class="game-card-title">
                                        <p>{{$g->title}}</p>
                                    </div>

                                    <div class="hidden">
                                        <p>{{$imageHidden}}</p>
                                    </div>
                                    
                                    <div class="game-card-price">
                                        @if ($g->price == 0)
                                            <p class="disc-price">Free Games</p>
                                        @elseif ($g->discount == 0)
                                            <p class="disc-price">Rp. {{number_format($g->price, 0, ",", ".")}},-</p>
                                        @else
                                            <p class="ori-price">Rp. {{number_format($g->price, 0, ",", ".")}},-</p>
                                            <p class="disc-price">Rp. {{number_format($g->price*$g->discount/100, 0, ",", ".")}},-</p>
                                        @endif
                                    </div>
                                    <div class="game-card-category">
                                        @php
                                        $gameTag = "";
                                        foreach ($tags as $t){
                                            if($t->game_id == $g->id){
                                                $gameTag = $gameTag . $t->name . ' ';
                                                array_push($allHoverTags, $t->name);
                                            }   
                                        }     
                                        @endphp
                                        <p>{{$gameTag}}</p>
                                    </div>
                                </div>
                            </div>
                            </a>
                        @endforeach
                    </div>
                    <div id="top-sellers" data-tab-content>
                        @foreach ($topSellerGames as $g)
                            @php
                                $allHoverTags = array();
                                foreach($tags as $t){
                                    if($t->game_id == $g->id){
                                        array_push($allHoverTags, $t->name);
                                    }   
                                }

                                $imageDetails = array();
                                $imageHidden = '';
                                foreach ($pictures as $img) {
                                    if($img->game_id == $g->id){
                                        array_push($imageDetails, $img->image);
                                        $imageHidden = $imageHidden . $img->image . ' ';
                                    }
                                }
                            @endphp
                            <a href="{{url('/detail/'.$g->id)}}">
                            <div class="tab-game-card top-games clickable-game" onmouseover="hoverGameCard(this, {{json_encode($g)}}, {{json_encode($allHoverTags)}}, {{json_encode($imageDetails)}})">
                                <div class="game-card-cover">
                                    <img src="{{url('/assets/'.$g->cover)}}" alt="">
                                </div>
                                <div class="game-card-desc">
                                    <div class="game-card-title">
                                        <p>{{$g->title}}</p>
                                    </div>

                                    <div class="hidden">
                                        <p>{{$imageHidden}}</p>
                                    </div>
                                    
                                    <div class="game-card-price">
                                        @if ($g->price == 0)
                                            <p class="disc-price">Free Games</p>
                                        @elseif ($g->discount == 0)
                                            <p class="disc-price">Rp. {{number_format($g->price, 0, ",", ".")}},-</p>
                                        @else
                                            <p class="ori-price">Rp. {{number_format($g->price, 0, ",", ".")}},-</p>
                                            <p class="disc-price">Rp. {{number_format($g->price*$g->discount/100, 0, ",", ".")}},-</p>
                                        @endif
                                    </div>
                                    <div class="game-card-category">
                                        @php
                                        $gameTag = "";
                                        foreach ($tags as $t){
                                            if($t->game_id == $g->id){
                                                $gameTag = $gameTag . $t->name . ' ';
                                                array_push($allHoverTags, $t->name);
                                            }   
                                        }     
                                        @endphp
                                        <p>{{$gameTag}}</p>
                                    </div>
                                </div>
                            </div>
                            </a>
                        @endforeach
                    </div>
                    <div id="free-games" data-tab-content>
                        @foreach ($freeGames as $g)
                            @php
                                $allHoverTags = array();
                                foreach($tags as $t){
                                    if($t->game_id == $g->id){
                                        array_push($allHoverTags, $t->name);
                                    }   
                                }
                                $imageDetails = array();
                                $imageHidden = '';
                                foreach ($pictures as $img) {
                                    if($img->game_id == $g->id){
                                        array_push($imageDetails, $img->image);
                                        $imageHidden = $imageHidden . $img->image . ' ';
                                    }
                                }
                            @endphp
                            <a href="{{url('/detail/'.$g->id)}}">
                            <div class="tab-game-card free-games clickable-game" onmouseover="hoverGameCard(this, {{json_encode($g)}}, {{json_encode($allHoverTags)}}, {{json_encode($imageDetails)}})">
                                <div class="game-card-cover">
                                    <img src="{{url('/assets/'.$g->cover)}}" alt="">
                                </div>
                                <div class="game-card-desc">
                                    <div class="game-card-title">
                                        <p>{{$g->title}}</p>
                                    </div>

                                    <div class="hidden">
                                        <p>{{$imageHidden}}</p>
                                    </div>
                                    
                                    <div class="game-card-price">
                                        @if ($g->price == 0)
                                            <p class="disc-price">Free Games</p>
                                        @elseif ($g->discount == 0)
                                            <p class="disc-price">Rp. {{number_format($g->price, 0, ",", ".")}},-</p>
                                        @else
                                            <p class="ori-price">Rp. {{number_format($g->price, 0, ",", ".")}},-</p>
                                            <p class="disc-price">Rp. {{number_format($g->price*$g->discount/100, 0, ",", ".")}},-</p>
                                        @endif
                                    </div>
                                    <div class="game-card-category">
                                        @php
                                        $gameTag = "";
                                        foreach ($tags as $t){
                                            if($t->game_id == $g->id){
                                                $gameTag = $gameTag . $t->name . ' ';
                                                array_push($allHoverTags, $t->name);
                                            }   
                                        }     
                                        @endphp
                                        <p>{{$gameTag}}</p>
                                    </div>
                                </div>
                            </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="tab-content-detail">
                    <p class="detail-title">Cyberpunk 2077</p>

                    <div class="detail-square"></div>
                    <div class="detail-category-container">
                        <div class="category">
                            <p>Building</p>
                        </div>
                        <div class="category">
                            <p>Indie</p>
                        </div>
                        <div class="category">
                            <p>Strategy</p>
                        </div>
                    </div>

                    <div class="detail-game-picture-detail">
                        <div>
                            <img src="{{url('/assets/game1-detail1.jpg')}}" alt="">
                        </div>
                        <div>
                            <img src="{{url('/assets/game1-detail2.jpg')}}" alt="">
                        </div>
                        <div>
                            <img src="{{url('/assets/game1-detail3.jpg')}}" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </div>
</main>

<script>

    var cardHover = document.getElementsByClassName('tab-game-card');
    cardHover[0].classList.add('active-game-card')
    
    function hoverGameCard(element, g, tags, images){
        console.log(images)

        for(x of cardHover){
            x.classList.remove('active-game-card')
        }

        element.classList.add('active-game-card')

        var title = document.getElementsByClassName('detail-title')[0]
        title.innerText = g.title

        var category = document.getElementsByClassName('detail-category-container')[0]
        category.innerHTML = ''

        for(tag of tags){
            category.innerHTML += `
            <div class="category">
                <p>${tag}</p>
            </div>
            `
        }

        var detailImage = document.getElementsByClassName('detail-game-picture-detail')[0];
        detailImage.innerHTML = ''

        for(img of images){
            detailImage.innerHTML += `
                <div>
                    <img src="{{url('/assets/${img}')}}" alt="">
                </div>
            `
        }
    }

    var slideIndex = 1;
    showSlide(slideIndex);

    function nextSlide(n){
        showSlide(slideIndex += n);
    }

    function showSlide(n){
        var i;
        var slides = document.getElementsByClassName("imgslide");

        if(n > slides.length){
            slideIndex = 1
        }

        if(n < 1){
            slideIndex = slides.length
        }

        for(i = 0; i<slides.length; i++){
            slides[i].style.display = "none"
        }

        slides[slideIndex-1].style.display = "block"
    }

    const tabs = document.querySelectorAll('[data-tab-target]')
    const tabContents = document.querySelectorAll('[data-tab-content]')

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = document.querySelector(tab.dataset.tabTarget)
            
            tabContents.forEach(tabContent => {
                tabContent.classList.remove('active')
            })

            tabs.forEach(tab => {
                tab.classList.remove('active')
            })

            for(x of cardHover){
                x.classList.remove('active-game-card')
            }

            let firstGameInTabs;
            if(target.id == 'top-sellers'){
                firstGameInTabs = document.getElementsByClassName('top-games')[0] 
            } else if(target.id == 'free-games'){
                firstGameInTabs = document.getElementsByClassName('free-games')[0]
            } else{
                firstGameInTabs = document.getElementsByClassName('tab-game-card')[0];
            }

            var firstGameTitle = firstGameInTabs.getElementsByClassName('game-card-title')[0].getElementsByTagName("p")[0].innerText;
            var firstGameCategory = firstGameInTabs.getElementsByClassName('game-card-category')[0].getElementsByTagName("p")[0].innerText.trim().split(' ');

            var title = document.getElementsByClassName('detail-title')[0]
            title.innerText = firstGameTitle

            var category = document.getElementsByClassName('detail-category-container')[0]
            category.innerHTML = ''

            for(tag of firstGameCategory){
                category.innerHTML += `
                <div class="category">
                    <p>${tag}</p>
                </div>
                `
            }

            var images = firstGameInTabs.getElementsByClassName('hidden')[0].getElementsByTagName('p')[0].innerText.trim().split(' ')

            var detailImage = document.getElementsByClassName('detail-game-picture-detail')[0];
            detailImage.innerHTML = ''

            for(img of images){
                detailImage.innerHTML += `
                    <div>
                        <img src="{{url('/assets/${img}')}}" alt="">
                    </div>
                `
            }

            firstGameInTabs.classList.add('active-game-card')

            tab.classList.add('active')
            target.classList.add('active')
        })
    });    

</script>

@endsection