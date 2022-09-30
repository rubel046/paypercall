<!--HEADER-->
<header>
    <section class="container">
        <div class="phone">
            <img src="{{asset('assets/images/i1.png')}}" alt=""/>
            Call Now: <a href="tel:{{@$contact->title}}" target="_self"
                         style="text-decoration: none;color: inherit;">{{@$contact->title}}</a>
        </div>
        <a href="" class="logo"><img src="{{asset('assets/images/logo-white.png')}}" alt=""/> Appliance
            <strong>Repair</strong></a>

        <div class="mobtitle">
            <span class="fa fa-navicon"></span>
            <span class="fa fa-close" style="display:none;"></span>
        </div>
        <nav class="topmenu">
            <ul>
                <li class="active"><a href="">Home</a></li>
                <li><a href="">About Us</a></li>
                <li class="hassubmenu">
                    <a href="">Our Services</a>
                    <ul class="submenu">
                        <li><a href="">Service Type 1</a></li>
                        <li><a href="">Service Type 2</a></li>
                        <li><a href="">Service Type 3</a></li>
                        <li><a href="">Service Type 4</a></li>
                    </ul>
                </li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </nav>

    </section>
</header>
<!--/HEADER-->
