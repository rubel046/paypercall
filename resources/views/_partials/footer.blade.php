<!--FOOTER-->
<footer class="mobilewrap">
    <section class="container">
        <div class="widgets-wrap">
            <div class="widget logowidget">
                <a href="" class="footerlogo"><img src="{{asset('assets/images/logo.png')}}" alt=""/> Appliance <strong>Repair</strong></a>
            </div>

            <div class="widget links">
                <ul>
                    <li><a href=""></a></li>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href=""></a></li>
                    <li><a href="{{route('aboutUs')}}">About Us</a></li>
                    <li><a href=""></a></li>
                    <li><a href="{{route('contactUs')}}">Contact Us</a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>

            <div class="widget">
                <p>Contact Us:</p>
                <p><span class="fa fa-phone"></span> Phone: &nbsp;
                    <a href="tel:{{@$contact->title}}" target="_self" style="text-decoration: none;color: inherit;">{{@$contact->title}}</a>
                </p>
                <p><span class="fa fa-envelope"></span> Email: &nbsp; info@yourwebsite.com</p>
            </div>
        </div>

        <div class="footerbottom">
            <div class="copyright">Copyright &copy; 2016 Appliance Repair. All Rights Reserved - Powered by: <a
                    href="https://www.ringba.com">Ringba</a> - Powered by: <a href="https://www.ringba.com">Ringba</a>
            </div>
            <div class="socialmedia">
                <p>Stay Connected:</p>
                <a href="" class="facebook"><span class="fa fa-facebook"></span></a>
                <a href="" class="twitter"><span class="fa fa-twitter"></span></a>
                <a href="" class="linkedin"><span class="fa fa-linkedin"></span></a>
                <a href="" class="gplus"><span class="fa fa-google-plus"></span></a>
            </div>
        </div>
    </section>
</footer>
<!--/FOOTER-->
