    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">



        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        @foreach ($usefullinks as $usl)
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{$usl->links }}">{{$usl->title}}</a></li>

                        </ul>
                        @endforeach

                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">

                        <h4>Our Services</h4>
                        <ul>
                            @foreach ($servicesLists as $slss)
                            <li><i class="bx bx-chevron-right"></i> <a href="{{$slss->service_link }}">{{$slss->service_title}}</a></li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            @foreach ($contactInfo as $con)
                            {{$con->address_line1}}<br>
                            {{$con->address_line2}}<br>
                            {{$con->address_line3}}<br>
                            <strong>Phone : </strong>{{$con->phone }}<br>
                            <strong>Email : </strong>{{$con->email }}<br>
                            @endforeach

                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        @foreach ($footer_about as $fa)
                        <h3>{{$fa->title}}</h3>
                        <p style="text-align: justify;">{{$fa->footer_about_text}}</p>
                        @endforeach

                        <div class="social-links mt-3">
                            @foreach ($socialLinks as $sl)
                            <a href="{{$sl->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="{{$sl->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="{{$sl->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="{{$sl->linkedin }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                @foreach ($copys as $cp)
                <p><span>{{$cp->copyright}}</span></p>
                @endforeach

            </div>
        </div>
    </footer><!-- End Footer -->