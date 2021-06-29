<?php include 'head.php'; ?>

<body style="background-color: #d3b79c; overflow: auto; height: 100%;">

  <?php include 'preloader.php'; ?>

  <!-- background text -->
  <p class=" focus-in-contract-bck" id="bg-text-fig">aestethik</p>
  <p class="tracking-in-expand-pro" id="bg-text2-fig">aestethik</p>
  <p class="cssanimation leSpinInLeft sequence" id="bg-text1-fig">aestethik</p>

  <main>
    <div class="row">

      <!--  navbar text and gallery -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

        <div class="col-xs-12">
          <?php include 'nav_fig.php'; ?>
        </div>

        <div class="row">

          <div class="col-xs-12 col_fig_text">
            <!-- Text -->
            <div class="wrapper_text_fig">
              <h1 class="unselectable">Aestethik</h1>
              <h4 class="unselectable">Brand your world best</h4>
              <p class="unselectable">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor hic consequuntur
                iusto ratione voluptatibus nesciunt delectus maxime, molestias id error aperiam exercitationem ab modi
                unde dicta, harum alias, voluptates corporis ut? Voluptatum et, deserunt quae veritatis quibusdam
                dignissimos ipsam officia maiores minus, possimus incidunt harum iste officiis nemo laboriosam?
                Consequatur porro commodi sapiente facilis earum deleniti veniam dolores impedit qui consectetur tempora
                vel reiciendis magnam repellendus fugit, voluptas aliquam eveniet odio mollitia harum natus. Magni quos
                dignissimos veritatis non explicabo ipsam, harum dicta soluta odit laudantium minima natus eveniet
                voluptates ab aliquid, nulla maiores unde accusamus eius magnam optio quibusdam!</p>
            </div>
          </div>

          <div class="col-xs-12 swiper_gallery">
            <!-- gallery -->
            <?php include 'swiper.php' ?>
          </div>

        </div>

      </div>

      <!-- col form and contact -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

        <div class="row">

          <div class="col-12 col_fig_text">

            <!-- form -->
            <div class="wrapper">
              <div class="contact-form">

                <div class="input-fields">
                  <legend>Contact Us</legend>
                  <form action="" method="post" id="form" onsubmit="return false;">

                    <input type="text" class="input" name="nome" id="nome" placeholder="Name" onKeyup="checknome()">
                    <div class="error" id="errornome">Only letters are allowed</div>

                    <input type="email" class="input" email="email" id="email" placeholder="Email" required onKeyup="checkmail()">
                    <div class="error" id="errormail">Please, check your email</div>

                    <div class="privacy">
                      <div class="check_div">
                        <div class="form-check chickyboxes">
                          <input type="checkbox" id="box-1" name="checkbox" required onChange="checkprivacy()">
                          <label for="box-1">I accept Privacy Terms</label>
                          <div class="error" id="errorprivacy">Please, accept privacy</div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="msg">
                  <textarea placeholder="Message" id="messaggio" name="messaggio" onKeyup="checkmessaggio()"></textarea>
                  <div class="error" id="errormessaggio">No special characters allowed</div>

                  <button class="btn btn_form" name="submit" id="send" value="Contattaci" disabled="disabled" onclick="sweetalert();">Send</button>
                </div>
             
              </div>
            </div>
         
          </div>

        </div>

        <div class="row">

          <div class="col-12 col_fig_text">
            <!-- contacts -->
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="address">
                    <h2>Aestethik Ltd.</h2>
                    <p>Brentwood, UK</p>
                    <p>Email: <i>aestethik@agency.com</i></p>
                    <p>Phone: +0658 47 85 555</p>
                    <p><i>chiaralyn&copy;&nbsp;webdesign</i></p>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding-right: 10px;">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d79249.75125721775!2d0.2357887102653875!3d51.63136532287177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x47d895f09b17f6c1%3A0x8587606559e92a59!2sBrentwood%2C%20Regno%20Unito!3m2!1d51.620475!2d0.3071749!5e0!3m2!1sit!2sit!4v1586101209285!5m2!1sit!2sit" width="280" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </main>

  <!-- Swiper JS -->
  <script src="js/swiper.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".swiper-container", {
      effect: "coverflow",
      grabCursor: true,
      loop: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        //change this values if you need a different perspective
        rotate: 80,
        stretch: 0,
        //depth of gallery, if 100 it seems more linear, eg. if 500 show only one card
        depth: 500,
        //if modifier 5 you can see one at time, if 1 you'll see entire gallery
        modifier: 1,
        slideShadows: true
      },
      //add autoplay 
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      //add pagination
      pagination: {
        el: ".swiper-pagination"
      }
    });
  </script>

  <?php include 'script-end-page.php' ?>

</body>

</html>