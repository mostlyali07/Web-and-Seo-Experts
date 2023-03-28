<Footer class="Main-Footer">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center my-5">
                <div>
                    <h2 class="fw-bold">Interested in Collaboration?</h2>
                    <h6 class="lh-lg">Challenge us. We want to work with you to create <br>
                        the realty cool stuff.</h6>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
                <button class="btns-six" type="submit">Contant Us <i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
        <hr style="color: #fff;" />
        <div class="row mt-5">
            <div class="col-md-5">
                <a class="navbar-brand" href="#">
                    <img src="./Assets/images/main-logo.png" alt="Web and SEO Experts" width="240">
                </a>
                <p class="mt-4">Lorem Ipsum is simply dummy text of the printing <br />
                    and typesetting industry. Lorem Ipsum has been the <br />
                    standard dumnv text ever <br />
                    since the 1500s.</p>
                <h6 class="fw-bold">Trusted By:</h6>
                <img src="./Assets/images/Footer-trusted-img.png" alt="">
            </div>
            <div class="col-md-2 lh-lg">
                <h6 class="fw-bold mb-4">About Us</h6>
                <li>Home</li>
                <li>About Us</li>
                <li>Services</li>
                <li>Pricing</li>
                <li>Portfolio</li>
                <li>Contatc Us</li>

            </div>
            <div class="col-md-2 lh-lg">
                <h6 class="fw-bold mb-4">Services</h6>
                <li>Custom Illustration</li>
                <li>Logo Illustration</li>
                <li>2D Illustration</li>
                <li>3D Illustration</li>
            </div>
            <div class="col-md-3 lh-lg">
                <h6 class="fw-bold mb-4">Contact Us</h6>
                <li> <i class="fa-solid fa-location-dot"> &nbsp;</i> 17595 Harvard Ave Ste C-641
                    Irvine, CA 92614 United States</li>
                <li><i class="fa-solid fa-envelope"></i> info@webandseoexperts.com</li>
                <li><i class="fa-solid fa-phone"></i> 1-844-716-8111</li>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mt-5">
                <h6 class="lh-lg">Copyright &copy; 2023 webandseoexperts.com | All rights
                    reserved. Terms And
                    Conditions | Privacy
                    Policy
                </h6>
            </div>
        </div>
    </div>
</Footer>

<script src="https://kit.fontawesome.com/b1e4efcbad.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $('.count,.count-2').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

    // script for tab steps
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {

        var href = $(e.target).attr('href');
        var $curr = $(".process-model  a[href='" + href + "']").parent();

        $('.process-model li').removeClass();

        $curr.addClass("active");
        $curr.prevAll().addClass("visited");
    });
    // end  script for tab steps
</script>