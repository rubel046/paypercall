<!--HEADER-->
<header>
    <section class="container">
        <div class="phone">
            <img src="{{asset('assets/images/i1.png')}}" alt=""/>
            Call Now: <a href="tel:{{@$contact->title}}" target="_self"
                         style="text-decoration: none;color: inherit;">{{@$contact->title}}</a>
        </div>
        <a href="" class="logo">
            <img src="{{asset('assets/images/logo-white.png')}}" alt=""/> Appliance<strong>Repair</strong></a>

        <div class="mobtitle">
            <span class="fa fa-navicon"></span>
            <span class="fa fa-close" style="display:none;"></span>
        </div>

        <nav class="topmenu">
            <ul>
                <li @if(Route::currentRouteName() == "home") class="active" @endif><a href="{{route('home')}}">Home</a></li>
                <li @if(Route::currentRouteName() == "aboutUs") class="active" @endif><a href="{{route('aboutUs')}}">About Us</a></li>
                <li @if(in_array(Route::currentRouteName(), ["services.Laundry", "services.Kitchen", "services.Commercial", "services.Multi"])) class="hassubmenu active" @else class="hassubmenu" @endif>
                    <a href="">Our Services</a>
                    <ul class="submenu">
                        <li @if(Route::currentRouteName() == "services.Laundry") class="active" @endif><a href="{{route('services.Laundry')}}">Service Type 1</a></li>
                        <li @if(Route::currentRouteName() == "services.Kitchen") class="active" @endif><a href="{{route('services.Kitchen')}}">Service Type 2</a></li>
                        <li @if(Route::currentRouteName() == "services.Commercial") class="active" @endif><a href="{{route('services.Commercial')}}">Service Type 3</a></li>
                        <li @if(Route::currentRouteName() == "services.Multi") class="active" @endif><a href="{{route('services.Multi')}}">Service Type 4</a></li>
                    </ul>
                </li>
                <li @if(Route::currentRouteName() == "contactUs") class="active" @endif><a href="{{route('contactUs')}}">Contact Us</a></li>
            </ul>
        </nav>

    </section>
</header>
<!--/HEADER-->
