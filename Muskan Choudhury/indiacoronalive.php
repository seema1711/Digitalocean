<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include 'links/link.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg navbar-dark  nav_style p-3">
  <a class="navbar-brand" href="index.php">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">India corona live</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#contactid">Contact Us</a>
      </li>
     
    </ul>
   
  </div>
</nav>


<section class="corona_update container fluid">
    <div class="my-5">
        <h3 class="text-center text-uppercase ">covid-19 LIVE UPDATES OF INDIA</h3>
</div>
<div class="table-responsive-sm">

<table class="table table-bordered table-striped text-center" id="tbval">
<tr>
<th class ="text-capitalize">last updated time</th>
<th class ="text-capitalize">state</th>
<th class ="text-capitalize">confirmed</th>
<th class ="text-capitalize">active</th>
<th class ="text-capitalize">recovered</th>
<th class ="text-capitalize">deaths</th>
</tr>

<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data, true);

$statecount = count( $coronalive['statewise']);

 $i=1;
 while($i < $statecount ){

    ?>

    <tr>
    <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
    <td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
    <td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
    <td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
    <td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
    <td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
    </tr>
     <!-- echo $coronalive['statewise'][$i]['lastupdatedtime'] . "<br>";
      echo $coronalive['statewise'][$i]['state'] . "<br>";
      echo $coronalive['statewise'][$i]['confirmed'] . "<br>";
      echo $coronalive['statewise'][$i]['active'] . "<br>";
      echo $coronalive['statewise'][$i]['recovered'] . "<br>";
      echo $coronalive['statewise'][$i]['deaths'] . "<br>"; -->

      <?php
      $i++;

 }
 

?>


</table>
</div>

</div>
</section>

<div class="container scrolltop float-right pr-5">
<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>


<!-- //////////////////////   footer       /////////////////////-->
<footer >
<div class="footer_style text-white text-center container-fluid pt-3 pb-3">
<p>copyright by <a class="footer_data" href="https://github.com/Muskan0705"> Muskan</a></p>
</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajas/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajas/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>


mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};
function scrollFunction(){
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }
    function topFunction(){
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

</script>
</body>
</html>