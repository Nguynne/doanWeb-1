<?php
require "inc/init.php";
require "inc/header.php"; ?>

    <!--================ Start banner Area =================-->
    <section class="banner-area relative">
      <div class="overlay overlay-bg"></div>
      <div class="banner-content text-center">
        <h1>Contact Us</h1>
        <p>
          Elementum libero hac leo integer. Risus hac parturient feugiat litora
          <br />
          cursus hendrerit bibendum per
        </p>
      </div>
    </section>
    <!--================ End banner Area =================-->

    <!-- Start contact-page Area -->
    <section class="contact-page-area section-gap">
      <div class="container">
        <div class="row">
          <div class="map-wrap" id="contactMap"></div>
          <div class="col-lg-4 d-flex flex-column address-wrap">
            <div class="single-contact-address d-flex flex-row">
              <div class="icon"><span class="lnr lnr-home"></span></div>
              <div class="contact-details">
                <h5>Binghamton, New York</h5>
                <p>4343 Hinkle Deegan Lake Road</p>
              </div>
            </div>
            <div class="single-contact-address d-flex flex-row">
              <div class="icon">
                <span class="lnr lnr-phone-handset"></span>
              </div>
              <div class="contact-details">
                <h5>00 (958) 9865 562</h5>
                <p>Mon to Fri 9am to 6 pm</p>
              </div>
            </div>
            <div class="single-contact-address d-flex flex-row">
              <div class="icon"><span class="lnr lnr-envelope"></span></div>
              <div class="contact-details">
                <h5>support@colorlib.com</h5>
                <p>Send us your query anytime!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <form
              class="form-area contact-form text-right"
              id="myForm"
              action="mail.php"
              method="post"
            >
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input
                    name="name"
                    placeholder="Enter your name"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'"
                    class="common-input mb-20 form-control"
                    required=""
                    type="text"
                  />

                  <input
                    name="email"
                    placeholder="Enter email address"
                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'"
                    class="common-input mb-20 form-control"
                    required=""
                    type="email"
                  />

                  <input
                    name="subject"
                    placeholder="Enter subject"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter subject'"
                    class="common-input mb-20 form-control"
                    required=""
                    type="text"
                  />
                </div>
                <div class="col-lg-6 form-group">
                  <textarea
                    class="common-textarea form-control"
                    name="message"
                    placeholder="Enter Messege"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Messege'"
                    required=""
                  ></textarea>
                </div>
                <div class="col-lg-12">
                  <div class="alert-msg" style="text-align: left;"></div>
                  <button
                    class="primary-btn text-uppercase"
                    style="float: right;"
                  >
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End contact-page Area -->

    <?php require "inc/footer.php"; ?>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.tabs.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script
      type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"
    ></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
