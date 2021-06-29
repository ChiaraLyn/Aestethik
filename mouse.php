<div id="pointer"></div>
<script>

  var cursor = document.getElementById('pointer');
  document.addEventListener('mousemove', function(e){
    var x = e.clientX;
    var y = e.clientY;
    cursor.style.left = x + 'px';
    cursor.style.top = y + 'px';
  });

</script>