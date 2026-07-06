<nav class="navbar navbar-expand-lg"> 
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="/logo_marcos/logo.png" alt="Logo do restaurante" style="height: 48px; width: auto; max-width: 180px; object-fit: contain;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
        <span class="ion-android-menu"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li>  <a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}">Começo</a> </li>
            <li>  <a href="{{ route('menu') }}" class="nav-link {{ Request::is('menu*') ? 'active' : '' }}">Menu</a> </li>
            <li>  <a href="{{ route('blogs') }}" class="nav-link {{ Request::is('blog*') ? 'active' : '' }}">Blogs</a> </li>
            <li>  <a href="{{ route('about') }}" class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}">Sobre Nós</a> </li>
            <li> <a href="{{ route('contact') }}" class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }}">Contato</a> </li>

        </ul>
        
    </div>
    <ul class="navbar-nav attr-nav align-items-center">
        <li>
            <a class="nav-link account_trigger" href="#"><i class="linearicons-user"></i></a>
        </li>

        @php
            $user = Auth::user();
            $showCart = !$user || $user->role === 'customer'; // show for guest or customer
        @endphp

        @if ($showCart)
            <li>
                <a class="nav-link {{ Request::routeIs('cart') ? 'active' : '' }}" href="{{ route('customer.cart') }}">
                    <i class="linearicons-cart"></i>
                    <span class="cart_count" id="cart_count">{{ $customer_total_cart_items ?? 0 }}</span>
                </a>
            </li>
        @endif
    </ul>


    @if($firstRestaurantPhoneNumber)  
    <div class="header_btn d-sm-block d-none">
        <a href="tel:{{ $firstRestaurantPhoneNumber->phone_number }}" class="btn btn-default rounded-0 ml-2 btn-sm"><i class="fa fa-phone"></i> CALL US</a>
    </div>  
    @endif

</nav>

