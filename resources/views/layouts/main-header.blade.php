<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{url('/')}}" class="logo d-flex align-items-center justify-content-center" >
          
            <h1 style="color: #a3cef1 ;">E-Book </h1>
            <img src="{{URL::asset('assets/img/online-book.png')}}" style="width:20px;height:30px;margin-left:10px">
        </a>


        <nav id="navbar" class="navbar">
            <pre></pre><pre></pre>
            <ul >

                <li><a href="{{url('/')}}">Home</a></li>

                <li><a href="{{url('/Books/ShowAll')}}">Books</a></li>

                <li class="dropdown"><a >  <img src="{{asset('assets/img/user.PNG')}}" alt="" style="width: 20px;height:20px"></a>
                    <ul>
                        @guest
                        @else
                        <a href="{{url('/dash')}}">Dashboard</a>
                        @endguest
                        @guest
                            <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <a href="/Profile/index">{{Auth::user()->name}}</a>
                            <a href="{{ route('logout') }}"
                               class="no-underline hover:underline"
                               onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest

                    </ul>
                </li>


            </ul>
        </nav><!-- .navbar -->

        <div class="position-relative">
            <a href="https://www.facebook.com/profile.php?id=100026431260579" class="mx-2"><span class="bi-facebook"></span></a>
            <a href="https://twitter.com/Saraahmedhassn" class="mx-2"><span class="bi-twitter"></span></a>
            <a href="https://www.instagram.com/sara.ahmed93/" class="mx-2"><span class="bi-instagram"></span></a>

            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </div>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="" class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="text" placeholder="Search" class="form-control">
                    <button class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div><!-- End Search Form -->


    </div>

</header>
