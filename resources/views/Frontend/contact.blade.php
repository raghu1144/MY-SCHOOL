<section>
    @include('Layouts.header')
</section>

{{-- <section class="contact-first">
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</section> --}}

<section class="contact-sec sec-pad contact-first">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-detail">
                    <h1 class="section-title">Contact us</h1>

                    <ul class="contact-ul">
                        <li><i class="fa fa-location-dot"></i>Vill- Jinda Niwada Post- Kahinjhari Dist-Kanpur Dehat</li>

                        <li>
                            <i class="fa fa-phone"></i>
                            <a href="tel:8299649465"><b>8299649465</b></a>,
                            <a href="tel:08510005495"><b>6392387019</b></a>
                        </li>

                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:pardeepkumar4bjp@gmail.com"><b>raghvendra.pal.0308@gmail.com</b></a>
                        </li>
                    </ul>

                    <span>
                        <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="insta"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    </span>
                </div>
            </div>

            <div class="col-md-6">
                <form action="#" class="contFrm" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your Name" class="inptFld" required />
                        </div>

                        <div class="col-sm-6">
                            <input type="email" name="email" placeholder="Email Address" class="inptFld" required />
                        </div>

                        <div class="col-sm-6">
                            <input type="tel" name="phone" placeholder="Phone Number" class="inptFld" required />
                        </div>

                        <div class="col-sm-6">
                            <input type="text" name="sub" placeholder="Subject" class="inptFld" required />
                        </div>

                        <div class="col-12">
                            <textarea class="inptFld" rows="" cols="" placeholder="Your Message..." required></textarea>
                        </div>

                        <div class="col-12">
                            <input type="submit" name="submit" value="SUBMIT" class="inptBtn" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section>
    {{-- <iframe class="contact-map" id="gmap_canvas" src="https://maps.google.com/maps?q=london&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" scrolling="no" marginheight="0" marginwidth="0"></iframe> --}}
    <iframe class="contact-map" id="gmap_canvas"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14268.77013320608!2d79.88006818896432!3d26.610274714146648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399dc53a28349283%3A0x778875c51bf99012!2sKahinjhari%2C%20Uttar%20Pradesh%20209306!5e0!3m2!1sen!2sin!4v1687600040899!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="bg-dark p-5">
    @include('Layouts.footer')
</section>
