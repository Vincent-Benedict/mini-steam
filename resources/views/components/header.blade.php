<header>
    
    <div class="header-container">
        <div class="container-logo">
            <a href="{{url('/home')}}">
                <img id="logo" src="{{url('/assets/logo-steam.png')}}" alt="">
            </a>
            
        </div>
        
        <div class="container-menu">
            <div id="store-menu" class="menu-item">
                <p class="title-menu">STORE</p>

                <div id="store-menu-hidden">
                    <a href="{{url('/home')}}">
                        <div class="hidden-menu-items">
                            <p>HOME</p>
                        </div>
                    </a>
                    <div class="hidden-menu-items">
                        <p>DISCOVERY QUEUE</p>
                    </div>
                    <div class="hidden-menu-items">
                        <p>WISHLIST</p>
                    </div>
                    <a href="{{url('/point-shop')}}">
                        <div class="hidden-menu-items">
                            <p>POINT SHOP</p>
                        </div>
                    </a>
                    <div class="hidden-menu-items">
                        <p>NEWS</p>
                    </div>
                    <div class="hidden-menu-items">
                        <p>STATS</p>
                    </div>
                </div>
            </div>
            <div id="community-menu" class="menu-item">
                <p class="title-menu">COMMUNITY</p>

                <div id="community-menu-hidden">
                    <a href="{{url('/home')}}">
                        <div class="hidden-menu-items">
                            <p>HOME</p>
                        </div>
                    </a>
                    <div class="hidden-menu-items">
                        <p>DISCUSSION</p>
                    </div>
                    <div class="hidden-menu-items">
                        <p>WORKSHOP</p>
                    </div>
                    <div class="hidden-menu-items">
                        <p>MARKET</p>
                    </div>
                    <div class="hidden-menu-items">
                        <p>BROADCAST</p>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <p class="title-menu">ABOUT</p>
            </div>
            <div class="menu-item">
                <p class="title-menu">SUPPORT</p>
            </div>
        </div>

        <div class="container-login-menu">
            <div class="button-install">
                <p>Install Steam</p>
            </div>
            <div class="mini-menu">
                <p class="mini-menu-items">login</p>
                <p>|</p>
                <p class="mini-menu-items">language</p>
            </div>
        </div>

    </div>

</header>