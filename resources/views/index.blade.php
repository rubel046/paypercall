@extends('layouts.layout')

@section('page')
    <!--BANNER-->
    <section class="banner">
        <section class="overlay mobilewrap">
            <section class="container">
                <h1><strong>Appliance</strong> Repair</h1>
                <h2><strong>Appliance Repair</strong> at Discounted Prices</h2>
                <h3><strong>Call Us Below</strong> to Get Started!</h3>
                <div class="calloption">
                    <div class="borderside"></div>
                    <img src="{{asset('assets/images/i2.png')}}" alt=""/>
                    <a href="tel:{{@$contact->title}}" target="_self"
                       style="text-decoration: none;color: inherit;">{{@$contact->title}}</a>
                </div>
            </section>
        </section>
    </section>
    <!--/BANNER-->

    <!--PAGE-->
    <section class="page mobilewrap">
        <section class="container">
            <div class="contentsection">
                <h2>
                    Applying online for your <strong>FREE quotes.</strong>
                </h2>
                <p>
                    In malesuada viverra elit non varius. Pellentesque maximus justo libero, commodo consectetur nulla
                    ultrices vitae. Nullam tortor dui, facilisis ut arcu ac, laoreet semper ex. Integer luctus libero ut
                    dictum facilisis.
                </p>

                <div class="items-wrap">
                    <div class="item">
                        <div class="icon"><span class="fa fa-history"></span></div>
                        <h3>It only takes 3 minutes to <br> Get a Quote</h3>
                    </div>

                    <div class="item">
                        <div class="icon"><span class="fa fa-money"></span></div>
                        <h3>Quotes are Easy and Free!</h3>
                    </div>

                    <div class="item">
                        <div class="icon"><span class="fa fa-thumbs-up"></span></div>
                        <h3>There is no Obligation to Buy</h3>
                    </div>
                </div>
            </div>

            <div class="contentsection-2">
                <h2>Generic Gallery</h2>
                <div id="owl-demo" class="owl-carousel">
                    <div class="item">
                        <div class="thumb">
                            <a href="{{asset('assets/images/gr1.jpg')}}" class="overlay fancybox"
                               data-fancybox-group="gallery" title="Title-1"><span class="fa fa-expand"></span></a>
                            <img src="{{asset('assets/images/gr1.jpg')}}" alt="">
                        </div>
                        <h4>This area is for title it can be gallery, blog or anything!</h4>
{{--                        <a href="" class="button">Read More &nbsp; <span class="fa fa-angle-right"></span></a>--}}
                    </div>

                    <div class="item">
                        <div class="thumb">
                            <a href="{{asset('assets/images/gr2.jpg')}}" class="overlay fancybox"
                               data-fancybox-group="gallery" title="Title-2"><span class="fa fa-expand"></span></a>
                            <img src="{{asset('assets/images/gr2.jpg')}}" alt="">
                        </div>
                        <h4>This area is for title it can be gallery, blog or anything!</h4>
{{--                        <a href="" class="button">Read More &nbsp; <span class="fa fa-angle-right"></span></a>--}}
                    </div>


                    <div class="item">
                        <div class="thumb">
                            <a href="{{asset('assets/images/gr1.jpg')}}" class="overlay fancybox"
                               data-fancybox-group="gallery" title="Title-2"><span class="fa fa-expand"></span></a>
                            <img src="{{asset('assets/images/gr1.jpg')}}" alt="">
                        </div>
                        <h4>This area is for title it can be gallery, blog or anything!</h4>
{{--                        <a href="" class="button">Read More &nbsp; <span class="fa fa-angle-right"></span></a>--}}
                    </div>


                    <div class="item">
                        <div class="thumb">
                            <a href="{{asset('assets/images/gr2.jpg')}}" class="overlay fancybox"
                               data-fancybox-group="gallery" title="Title-2"><span class="fa fa-expand"></span></a>
                            <img src="{{asset('assets/images/gr2.jpg')}}" alt="">
                        </div>
                        <h4>This area is for title it can be gallery, blog or anything!</h4>
{{--                        <a href="" class="button">Read More &nbsp; <span class="fa fa-angle-right"></span></a>--}}
                    </div>


                    <div class="item">
                        <div class="thumb">
                            <a href="{{asset('assets/images/gr1.jpg')}}" class="overlay fancybox"
                               data-fancybox-group="gallery" title="Title-2"><span class="fa fa-expand"></span></a>
                            <img src="{{asset('assets/images/gr1.jpg')}}" alt="">
                        </div>
                        <h4>This area is for title it can be gallery, blog or anything!</h4>
{{--                        <a href="" class="button">Read More &nbsp; <span class="fa fa-angle-right"></span></a>--}}
                    </div>
                </div>
            </div>

            <div class="contentsection-3">
                <img src="{{asset('assets/images/ft1.jpg')}}" alt="" class="featured"/>
                <div class="details">
                    <h2>LAUNDRY SERVICES</h2>
                    <p>
                        Cloth Washers and Cloth Dryers .
                        With more than 10 years of experience, our talented and personable team of technicians works to
                        offer best in class service to each customer.
                    </p>
                    <b>Why You Should Consider a Laundry Service for Your Needs?</b>

                    <ul>
                        <li>Laundry services save money.</li>
                        <li>Laundry services save time.</li>
                        <li>Laundry services use high quality cleaning materials.</li>
                    </ul>
                    <a href="" class="button">Read More &nbsp; <span class="fa fa-angle-right"></span></a>
                </div>
            </div>

            <div class="contentsection-3"
                 style="width: 100%; margin: 50px 0 0 0; padding: 50px 0 50px 0; border-top: 1px solid #ccc;">
                <img src="{{asset('assets/images/kitchen-service.jpg')}}" alt="" class="featured"/>
                <div class="details">
                    <h2>KITCHEN SERVICES</h2>
                    <p>
                        Refrigerators, Freegers, Ice Machines, Cooker Stoves, Ovens, Microwaves, Vent hoods,
                        Dishwashers,
                        Garbage Disposals. If you are looking for a reliable refrigerator repair service, look no
                        further.
                        We provide our customers with fast, reliable and affordable refrigerator repair for residential
                        home repair.
                    </p>
                    <b>Why You Should Consider a Kitchen Service for Your Needs?</b>

                    <ul>
                        <li>Coming Up With a Workable Design</li>
                        <li>Tackling Unexpected Issues</li>
                        <li>Getting Any Necessary Permits</li>
                    </ul>
                    <a href="" class="button">Read More &nbsp; <span class="fa fa-angle-right"></span></a>
                </div>
            </div>

            <div class="contentsection-3"
                 style="width: 100%; margin: 50px 0 0 0; padding: 50px 0 50px 0; border-top: 1px solid #ccc;">
                <img src="{{asset('assets/images/commercial-service.jpg')}}" alt="" class="featured"/>
                <div class="details">
                    <h2>COMMERCIAL SERVICES</h2>
                    <p>
                        We serve and repair most makes and models of  Refrigerators, Freegers, Salad Bars, Sandwich coolers, wine coolers, Ice machines, coin operated washers, Dryers, Beer cooler, Kegerators, Water Heater.
                        Our customer base is over expanding due to the numerous customer referals and our team is strategically placed throught the greater Los Angeles.
                    </p>

                    <a href="" class="button">Read More &nbsp; <span class="fa fa-angle-right"></span></a>
                </div>
            </div>

            <div class="contentsection-3"
                 style="width: 100%; margin: 50px 0 0 0; padding: 50px 0 50px 0; border-top: 1px solid #ccc;">
                <img src="{{asset('assets/images/multi-service.webp')}}" alt="" class="featured" style="max-height: 350px"/>
                <div class="details">
                    <h2>MULTI SERVICES</h2>
                    <p>
                        At Multi Appliance Repair, we are dedicated to getting your home appliances back and running
                        within the shortest time possible. We provide the best customer service and appliance repair all
                        over USA. Your home or commercial unit is complete and comfortable only when all your appliances
                        are in their best condition or are working as you would want them.
                    </p>

                    <a href="" class="button">Read More &nbsp; <span class="fa fa-angle-right"></span></a>
                </div>
            </div>
        </section>
    </section>
    <!--PAGE ENDS-->
@endsection
