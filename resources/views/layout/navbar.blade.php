<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">{{__('navbar.sitename')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span>{{__('navbar.menu')}}
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/" class="nav-link">{{__('navbar.home')}}</a></li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('navbar.catalog')}}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="/shop">{{__('navbar.shop')}}</a>
                        <a class="dropdown-item" href="/product-single">{{__('navbar.single_product')}}</a>
                        <a class="dropdown-item" href="/cart">{{__('navbar.cart')}}</a>
                        <a class="dropdown-item" href="/checkout">{{__('navbar.checkout')}}</a>
                    </div>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('navbar.language')}}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="{{ route('lang', ['lang' => 'vi']) }}"><img src="{{ asset('images/flags/16x16/vi.png')}}" title="{{__(trans('navbar.vi')) }}" alt="{{__(trans('navbar.vi')) }}"/></a>
                        <a class="dropdown-item" href="{{ route('lang', ['lang' => 'en']) }}"><img src="{{ asset('images/flags/16x16/en.png')}}" title="{{__(trans('navbar.en')) }}" alt="{{__(trans('navbar.en')) }}"/></a>
                    </div>
                </li>
                <li class="nav-item"><a href="/about" class="nav-link">{{__('navbar.about')}}</a></li>
                <li class="nav-item"><a href="/blog" class="nav-link">{{__('navbar.blog')}}</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">{{__('navbar.contact')}}</a></li>
                <li class="nav-item cta cta-colored"><a href="/cart" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

            </ul>
        </div>
    </div>
</nav>
