<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">


<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="{{asset('images/02.jpg')}}">

        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item {{ request()->is('product*') ? 'active' : '' }}">
                    <a href="{{ route('products.index') }}">
                        <i class="fas fa-tshirt"></i>
                        <span class="menu-title" data-i18n="">Products</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('category*') ? 'active' : '' }}">
                    <a href="{{ route('categories.index') }}">
                        <i class="fas fa-gift"></i>
                        <span class="menu-title" data-i18n="">Categories</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('commandes*') ? 'active' : '' }}">
                    <a href="{{ route('commandes.index') }}">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="menu-title" data-i18n="">Commandes</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('message*') ? 'active' : '' }}">
                    <a href="{{ route('messages.index') }}">
                        <i class="fas fa-envelope"></i>
                        <span class="menu-title" data-i18n="">Messages</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('employee*') ? 'active' : '' }}">
                    <a href="{{ route('employe.index') }}">
                        <i class="fas fa-user-tag"></i>
                        <span class="menu-title" data-i18n="">Employees</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('color*') ? 'active' : '' }}">
                    <a href="{{ route('colors.index') }}">
                        <i class="fas fa-palette"></i>
                        <span class="menu-title" data-i18n="">Colors</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('size*') ? 'active' : '' }}">
                    <a href="{{ route('sizes.index') }}">
                        <i class="fas fa-ruler"></i>
                        <span class="menu-title" data-i18n="">Sizes</span>
                    </a>
                </li>



            </ul>
        </div><a href="#" target="_blank"></a>
        <div class="navigation-background">
             <img class="brand-logo" src="{{asset('images/logo2.png')}}" height="50px" />
        </div>
    </div>

</html>