<?php
    include ("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Drag & Drop Sliders</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- insert jQuery sortScroll after jQuery core -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="http://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="js/sortable.js"></script>

 

</head>
<body style="margin:0px">
<div>
         <h1> Drag & Drop Sliders </h1>
</div>
<div>
<ul id="sirala">
  <?php
      $sorgu = mysqli_query($baglanti,"Select * from sliders ORDER BY sira");
      while($sonuc = mysqli_fetch_assoc($sorgu)){
          echo "<li id = 'slider-$sonuc[id]' class='list-group-item'>
          <div  class = 'slider_css' style='background-image:url(images/$sonuc[resim]);'>
              <h1>Slider $sonuc[id]</h1>
          </div>
          
          </li>";
      }
  ?>
  

</ul>
<span></span>
    
</div>



</body>
</html>