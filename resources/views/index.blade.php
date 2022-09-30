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
                        <a href="" class="button">Read More &nbsp; <span class="fa fa-angle-right"></span></a>
                    </div>

                    <div class="item">
                        <div class="thumb">
                            <a href="{{asset('assets/images/gr2.jpg')}}" class="overlay fancybox"
                               data-fancybox-group="gallery" title="Title-2"><span class="fa fa-expand"></span></a>
                            <img src="{{asset('assets/images/gr2.jpg')}}" alt="">
                        </div>
                        <h4>This area is for title it can be gallery, blog or anything!</h4>
                        <a href="" class="button">Read More &nbsp; <span class="fa fa-angle-right"></span></a>
                    </div>


                    <div class="item">
                        <div class="thumb">
                            <a href="{{asset('assets/images/gr1.jpg')}}" class="overlay fancybox"
                               data-fancybox-group="gallery" title="Title-2"><span class="fa fa-expand"></span></a>
                            <img src="{{asset('assets/images/gr1.jpg')}}" alt="">
                        </div>
                        <h4>This area is for title it can be gallery, blog or anything!</h4>
                        <a href="" class="button">Read More &nbsp; <span class="fa fa-angle-right"></span></a>
                    </div>


                    <div class="item">
                        <div class="thumb">
                            <a href="{{asset('assets/images/gr2.jpg')}}" class="overlay fancybox"
                               data-fancybox-group="gallery" title="Title-2"><span class="fa fa-expand"></span></a>
                            <img src="{{asset('assets/images/gr2.jpg')}}" alt="">
                        </div>
                        <h4>This area is for title it can be gallery, blog or anything!</h4>
                        <a href="" class="button">Read More &nbsp; <span class="fa fa-angle-right"></span></a>
                    </div>


                    <div class="item">
                        <div class="thumb">
                            <a href="{{asset('assets/images/gr1.jpg')}}" class="overlay fancybox"
                               data-fancybox-group="gallery" title="Title-2"><span class="fa fa-expand"></span></a>
                            <img src="{{asset('assets/images/gr1.jpg')}}" alt="">
                        </div>
                        <h4>This area is for title it can be gallery, blog or anything!</h4>
                        <a href="" class="button">Read More &nbsp; <span class="fa fa-angle-right"></span></a>
                    </div>


                </div>
            </div>

            <div class="contentsection-3">
                <img src="{{asset('assets/images/ft1.jpg')}}" alt="" class="featured"/>
                <div class="details">
                    <h2>Another Content Section</h2>
                    <p>
                        Nullam id auctor elit. Donec non eros ultricies, porta neque at, malesuada nibh. Duis efficitur,
                        tortor sit amet sodales egestas, libero elit laoreet nunc, ut euismod nunc mauris sed risus. Sed
                        feugiat velit massa.
                    </p>
                    <ul>
                        <li>Donec at felis vulputate, lacinia orci eget, porttitor velit.</li>
                        <li>Etiam sed enim non lectus posuere lacinia.</li>
                        <li>Curabitur eu leo pulvinar, condimentum massa sed, cursus ligula.</li>
                    </ul>
                    <a href="" class="button">Read More &nbsp; <span class="fa fa-angle-right"></span></a>
                </div>
            </div>
        </section>
    </section>
    <!--PAGE ENDS-->
@endsection
