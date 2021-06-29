<?php include 'head.php'; ?>

<body style="background-color: black; overflow: auto; height: 100%;">

  <?php include 'preloader.php'; ?>

  <!-- background writing -->
  <p class="focus-in-contract-bck" id="bg-text">aestethik</p>
  <p class="tracking-in-expand-pro" id="bg-text2">aestethik</p>
  <p class="cssanimation leSpinInLeft sequence" id="bg-text1">aestethik</p>
  <p class="cssanimation leSpinInRight sequence" id="bg-text3">aestethik</p>

  <!-- First Row -->
  <div class="row">

    <div class="col-xs-12 col-lg-2">
      <nav class="projects_nav">
        <a class="nav-link focus-in-contract active" href="projects.php">projects</a>
        <a class="nav-link focus-in-contract" href="intro.php">intro</a>
        <a class="nav-link focus-in-contract" href="index.php">aestethik</a>
        <a class="nav-link focus-in-contract" href="figures.php">figures</a>
      </nav>
    </div>

    <div class="col-xs-12 col-lg-10">
      <div class="container">
        <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="container first_block" id="first_block" onclick="showHide();">
              <div id="img1" class="projects_img1"></div>
              <h3 id="first_block_h3">Urban Collection</h3>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="container first_block_text" id="first_block_text">
              <p id="first_text" style="display: none;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil modi explicabo excepturi deleniti laborum soluta porro illum sapiente dolores aliquid?</p>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

  <div class="divider_row100"></div>

  <!-- Second Row -->
  <div class="row">
    <div class="col-xs-12 col-lg-2"></div>

    <div class="col-xs-12 col-lg-10">
      <div class="container">
        <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="container second_block_text" id="second_block_text">
              <p id="second_text" style="display: none;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quisquam deleniti delectus unde nesciunt, eos harum sapiente repellendus dolores laborum.</p>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="container second_block" id="second_block" onclick="showHide2();">
              <h3 id="second_block_h3">Locker Campaign</h3>
              <div id="img2" class="projects_img2"></div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

  <div class="divider_row100"></div>

  <!-- Third Row -->
  <div class="row">

    <div class="col-xs-12 col-lg-2"></div>

    <div class="col-xs-12 col-lg-10">
      <div class="container">
        <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="container third_block" id="third_block" onclick="showHide3();">
              <div id="img3" class="projects_img3"></div>
              <h3 id="third_block_h3">Jeans MessAround</h3>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="container third_block_text" id="third_block_text">
              <article>
                <p id="third_text" style="display: none;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil modi explicabo excepturi deleniti laborum soluta porro illum sapiente dolores aliquid?</p>
              </article>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

  <div class="divider_row100"></div>

  <!-- Fourth Row -->
  <div class="row">
    <div class="col-xs-12 col-lg-2"></div>

    <div class="col-xs-12 col-lg-10">
      <div class="container">
        <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="container fourth_block_text" id="fourth_block_text">
              <p id="fourth_text" style="display: none;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quisquam deleniti delectus unde nesciunt, eos harum sapiente repellendus dolores laborum.</p>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="container fourth_block" id="fourth_block" onclick="showHide4();">
              <h3 id="fourth_block_h3">Street Viewers</h3>
              <div id="img4" class="projects_img4"></div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

  <?php include 'script-end-page.php' ?>

</body>

</html>