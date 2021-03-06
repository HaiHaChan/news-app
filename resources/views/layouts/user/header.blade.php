<header id="header">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_bottom">
                <div class="logo_area"><a href="#" class="logo"><img src="{{ asset('images/logo.jpg') }}" alt=""></a></div>
                <div class="add_banner"><a href="#"><img src="{{ asset('images/addbanner_728x90_V1.jpg') }}" alt=""></a></div>
            </div>
        </div>
    </div>
</header>

<section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav main_nav">
                <li class="active"><a href="#"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>

                @if (isset($categories) && !empty($categories))
                    @foreach ($categories as $category)
                        <li><a href="#" id="{{ $category->id }}">{{ $category->name }}</a></li>
                    @endforeach
                @endif

                <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</section>
<section id="newsSection">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="latest_newsarea"> <span>Latest News</span>
                <ul id="ticker01" class="news_sticker">
                    <li><a href="#"><img src="{{ asset('images/news_thumbnail3.jpg') }}" alt="">My First News Item</a></li>
                    <li><a href="#"><img src="{{ asset('images/news_thumbnail3.jpg') }}" alt="">My Second News Item</a></li>
                </ul>
                <div class="social_area">
                    <ul class="social_nav">
                        <li class="facebook"><a href="#"></a></li>
                        <li class="twitter"><a href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
