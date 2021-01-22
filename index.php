<?php
include_once './include/head.php';
?>

<section class="home main__content" id="section1">
    <div class="container c-home">
        <div class="home-info">
            <h1>Do you have a dream?</h1>
            <div class="home-btns">
                <!-- redirect to form -->
                <a href="form.php" class="home-btn btnYes">Yes</a>
                <!--  redirect to about us section  -->
                <a href="#section2" class="home-btn btnNo">No</a>
            </div>
        </div>
    </div>
</section>

<section class="about__us main__content" id="section2">
    <div class="container c-about__us">
        <div class="about__us--left">
            <article class="info--ar1">
                <h3 class="info-h">Who are IAmDreamer?</h3>
                <p class="info-p">
                    IAmDreamer is a company created to help people to find and go
                    towards their dreams.
                </p>
            </article>

            <article class="info--ar2">
                <h3 class="info-h">What we do</h3>
                <p class="info-p">
                    Our company provide individual and group seminars which are also
                    available as online courses. Quality content, which is creating
                    alongside the professionals in the field of psychology, is
                    presented by the top motivational speakers such as Bernard Sheper,
                    Suzen Mc'Enal and others.
                </p>
                <p class="info-p">Every season, IAmDreamer provide
                    one-week corporate tours for our students and employees. On the
                    corporate tours, our team gathers together in this adventure to
                    explore your desires. As well as, helps each other to make the
                    first step in achieving your dream.</p>
            </article>
        </div>

        <div class="about__us--right">
            <article class="info--ar3">
                <h3 class="info-h">What IAmDreamer can do for YOU?</h3>
                <h3 class="info-h info-ar3__text-block__center">IAmDreamer can:</h3>
                <ul class="info-ar__ul-block">
                    <li class="info-p">
                        Help people in realising their dreams, as well as what person
                        desire is for life.
                    </li>
                    <li class="info-p">
                        Create a monthly/yearly plan based on a person's ambitions and
                        assign a mentor to ensure that person will make his or her plan.
                    </li>
                    <li class="info-p">
                        Provide seminars, where people will hear not only successful
                        people's stories but also motivational and scientific speeches.
                    </li>
                    <li class="info-p">
                        Connect people by providing seasonal corporate tours for our
                        students and employees.
                    </li>
                </ul>
            </article>
        </div>
    </div>
</section>

<section class="contacts main__content" id="section3">
    <div class="container c-contacts">
        <div class="contacts-info--left">
            <article class="contacts_info--ar1">
                <h3 class="contacts-h">Contact us:</h3>
                <p class="contacts-info">Adress: <br />
                    <span class="contacts-link">PC NewWorld, Vilnius, Lithuania</span>
                </p>
                <p class="contacts-info">Email: <br />
                    <a class="contacts-link" href="mailto:iamdreamer@info.com">iamdreamer@info.com</a>
                </p>
                <p class="contacts-info">Tel.: <br />
                    <a class="contacts-link" href="tel:+3706111444">+3706111444</a>
                </p>
            </article>

            <article class="contacts_info--ar2">
                <h5 class="contacts-h">Or send in form:</h5>
                <button id="btnRedForm" onclick='redirect' class="submit btnRedForm">
                    <span class="submitColor">Become a member!</span>
                </button>
            </article>
        </div>

        <div class="contacts-info--right">
            <!-- itraukti google maps su zemelapiu -->
            <!-- https://www.embedgooglemap.net/ -->
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="500" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=Vilnius%2C%20Lithuanian&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
            </div>
            <div class="mapouter--desc">
                <div class="gmap_canvas"><iframe width="600" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Vilnius%2C%20Lithuanian&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
            </div>
        </div>
    </div>
</section>

<script src="main.js"></script>
<?php
include_once './include/footer.php';
?>
</body>

</html>