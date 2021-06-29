<?php include 'head.php'; ?>

<body>

  <video autoplay="autoplay" loop="true" mute="true" preload="auto" id="video_bg_index">
    <source src="video/video4.mp4" type="video/mp4">
  </video>

  <?php include 'preloader.php'; ?>
  <?php include 'mouse.php'; ?>

  <?php include 'nav_main.php'; ?>

  <main style="padding-top: 30px;">
    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
        <div class="wrapper_main_text" id="main_text">
          <a href="intro.php" class="btn btn-lg main_btn" onmouseover="ropeTextVideo();" onmouseout="undoRope();">aestethik</a>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
        <div class="main_video" id="main_video">
          <video autoplay="autoplay" loop="true" mute="true" preload="auto" id="video_main_index">
            <source src="video/video2.mp4" type="video/mp4">
          </video>
        </div>
      </div>

    </div>
  </main>

  <?php include 'script-end-page.php' ?>

</body>

</html>