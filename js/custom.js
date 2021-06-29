
//typed.js
$(".intro_title_p").typed({

  strings: ["Glamour", "Fashion", "Mania", "Urban"],
  stringsElement: null,

  // typing speed
  typeSpeed: 200,

  // time before typing starts
  startDelay: 300,

  // backspacing speed
  backSpeed: 200,

  // shuffle the strings
  shuffle: true,

  // time before backspacing
  backDelay: 500,

  // Fade out instead of backspace
  fadeOut: true,
  fadeOutClass: 'typed-fade-out',
  fadeOutDelay: 500, // milliseconds

  // loop
  loop: true,

  // false = infinite
  loopCount: false,

  // show cursor
  showCursor: false,

  // character for cursor
  cursorChar: "|",

  // attribute to type (null == text)
  attr: null,

  // either html or text
  contentType: 'html'

});

//add and remove a class to an element in index.php
var mainText = document.getElementById('main_text');

var containerVideo = document.getElementById('main_video');
var mainVideo = document.getElementById('video_main_index');


function ropeTextVideo() {
  containerVideo.classList.add('hoverVideo');
  mainVideo.classList.add('hoverVideo');
}

function undoRope() {
  containerVideo.classList.remove('hoverVideo');
  mainVideo.classList.remove('hoverVideo');
}

//change images in projects.php
var img = $('#img1');
var c = 1;
function changeImg() {
  img.css('background-image', 'url("img/woman' + c + '.jpg")');
  myVar = setTimeout(changeImg, 5000);
  c++;
  if (c > 2) {
    c = 1;
  }
}

var img2 = $('#img2');
var d = 3;
function changeImg2() {
  img2.css('background-image', 'url("img/woman' + d + '.jpg")');
  myVar2 = setTimeout(changeImg2, 5000);
  d++;
  if (d > 4) {
    d = 3;
  }
}
var img3 = $('#img3');
var e = 5;
function changeImg3() {
  img3.css('background-image', 'url("img/woman' + e + '.jpg")');
  myVar3 = setTimeout(changeImg3, 5000);
  e++;
  if (e > 6) {
    e = 5;
  }
}
var img4 = $('#img4');
var f = 7;
function changeImg4() {
  img4.css('background-image', 'url("img/woman' + f + '.jpg")');
  myVar4 = setTimeout(changeImg4, 5000);
  f++;
  if (f > 8) {
    f = 7;
  }
}

document.body.onload = changeImg();
document.body.onload = changeImg2();
document.body.onload = changeImg3();
document.body.onload = changeImg4();




//add and remove class on hover in projects.php to text h3
$('#first_block').hover(
  function () { $('#first_block_h3').addClass('grow_first_block_h3') },
  function () { $('#first_block_h3').removeClass('grow_first_block_h3') }
);

$('#second_block').hover(
  function () { $('#second_block_h3').addClass('grow_second_block_h3') },
  function () { $('#second_block_h3').removeClass('grow_second_block_h3') }
);

$('#third_block').hover(
  function () { $('#third_block_h3').addClass('grow_third_block_h3') },
  function () { $('#third_block_h3').removeClass('grow_third_block_h3') }
);
$('#fourth_block').hover(
  function () { $('#fourth_block_h3').addClass('grow_fourth_block_h3') },
  function () { $('#fourth_block_h3').removeClass('grow_fourth_block_h3') }
);

//add and remove p in project.php on click
function showHide() {
  let first = document.getElementById("first_text");
  let firstContainer = document.getElementById("first_block_text");

  if (first.style.display === "none") {
    first.style.display = "block";
    first.classList.add("scale-up-ver-center");
    firstContainer.classList.add('height_block');

  } else {
    first.style.display = "none";
    firstContainer.classList.remove('height_block');
  }
}

function showHide2() {
  let second = document.getElementById("second_text");
  let secondContainer = document.getElementById("second_block_text");

  if (second.style.display === "none") {
    second.style.display = "block";
    second.classList.add("scale-up-ver-center");
    secondContainer.classList.add('height_block');
  } else {
    second.style.display = "none";
    secondContainer.classList.remove('height_block');
  }
}

function showHide3() {
  let third = document.getElementById("third_text");
  let thirdContainer = document.getElementById("third_block_text");
  if (third.style.display === "none") {
    third.style.display = "block";
    third.classList.add("scale-up-ver-center");
    thirdContainer.classList.add('height_block');
  } else {
    third.style.display = "none";
    thirdContainer.classList.remove('height_block');

  }
}

function showHide4() {
  let fourth = document.getElementById("fourth_text");
  let fourthContainer = document.getElementById("fourth_block_text");
  if (fourth.style.display === "none") {
    fourth.style.display = "block";
    fourth.classList.add("scale-up-ver-center");
    fourthContainer.classList.add('height_block');
  } else {
    fourth.style.display = "none";
    fourthContainer.classList.remove('height_block');

  }
}