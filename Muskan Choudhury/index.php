<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include 'links/link.php'; ?>
    <?php include 'css/style.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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








<!-- 
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="index.php">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="main-nav animated slideInDown"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="main-nav animated slideInDown" id="check-class">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#preventid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">indiacoronalive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#contactid">contact</a>
      </li>
    </ul>
    <a href="#" class="mobile-icon" onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
  </div>
</nav> -->
<div class="main_header">
    <div class="row w-100 h-100">
       <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="images/corona unity.png" width="300" height="300">
</div>
</div>
<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
    <div class ="rightside w-100 h-100 d-flex justify-content-center align-items-center">
        <h4>Let's Stay Safe & Fight Together Against Cor <span class="corona_rot"><img src="images/corona green.png" width="50" height="50"></span> na Virus</h4>
</div>
</div>
</div>
</div>
<div class="container">
<iframe width="1024" height="576" src="https://app.developer.here.com/coronavirus/" frameborder="0"></iframe>
</div>
<script type ="text/javascript">
function slideshow(){
        var x=document.getElementById('check-class');
        if(x.style.display = "none"){
            x.style.display="block";
        }else{
            x.style.display="none";
        }
        }
    </script>
<!-- ************************corona latest updates ***************************-->
<section class="corona_update container ">
    <div class="mb-3 mt-5">
        <h3 class="text-center text-uppercase ">covid-19 LIVE UPDATES OF THE WORLD</h3>
</div>
<div class="table-responsive-sm">

<table class="table table-bordered table-striped text-center" id="tbval">
<tr>
<th>Country</th>
<th>Total confirmed</th>
<th>TotalRecovered</th>
<th>TotalDeath</th>
<th>TotalDeath</th>
<th>NewRecovered</th>
<th>NewDeaths</th>
</tr>
</table>
</div>

</div>
</section>
<!-- ******************* about section ******************** -->
<div class="container sub_section pt-5 pb-5" id="aboutid" >
<div class="section_header text-center pb-3 ">
    <h1> About COVID-19 </h1>
</div>
<div class ="row">
    <div class ="col-lg-5 col-md-6 col-sm-12 p-5">
        <img src="images/corona red.png" width="800" height="1000 " class="img-fluid">    
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
    <h2>What is COVID-19 (Corona-Virus) </h2>
    <p>COVID-19 is the infectious disease caused by the most recently discovered coronavirus. This new virus and disease were known  efore the outbreak began in Wuhan, China, in December 2019.</p>
    <p>Coronaviruses are a large family of viruses which may cause illness in animals or humans. In humans, several coronaviruses are known to cause respiratory infections ranging from the common cold to more several diseases sucha as Middle East Respiratory Syncdrome (MERS) ans Severe Acute Respiratory Syndrome (SARS). The most recently recently discovered coronavirus cause coronavirus disease COVID-19. </p>
</div>
</div>
</div>

<!-- /////////////// corona symptoms ///////////////-->
<div class="container-fluid pt-5 pb-5" id="sympid" >
<div class="section_header text-center mb-5 mt-4">
    <h1>Coronavirus Symptoms</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 mt-5">
            <figure class="text-center">
                <img src="images/cough.jpg" class="img-fluid" width="100" height="100"  >
                <figcaption>cough</figcaption>
</figure>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 mt-5">
            <figure class="text-center">
                <img src="images/runnynose.jpg" class="img-fluid" width="80" height="80" >
                <figcaption>runny nose</figcaption>
</figure>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 mt-5">
            <figure class="text-center">
                <img src="images/fever.jpg" class="img-fluid" width="90" height="100"  >
                <figcaption>fever</figcaption>
</figure>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 mt-5">
            <figure class="text-center">
                <img src="images/cold.jpg" class="img-fluid" width="100" height="100" >
                <figcaption>cold</figcaption>
</figure>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 mt-5">
            <figure class="text-center">
                <img src="images/tired (2).png" class="img-fluid" width="120" height="120" >
                <figcaption>tiredness</figcaption>
</figure>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 mt-5">
            <figure class="text-center">
                <img src="images/breathe.jpg" class="img-fluid" width="120" height="120" >
                <figcaption>difficulty breathing (severe cases)</figcaption>
</figure>
</div>
</div>
</div>
</div>
<!-- ////////////////// Prevention against coronavirus ///////////////////-->

<div class="container-fluid pt-5 pb-5" id="preventid">
<div class="section_header text-center mb-5 mt-4">
    <h1> 6 Steps Prevention Against Coronavirus</h1>
</div>
<div class="container">
<div class="row ">
<div class="col-lg-4 col-md-4 col-sm-12 mt-5">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12">
<figure class="text-center">
<img src="images/11.jpg" class="img-fluid" width="150" height="150">
</figure>
</div>
<div class="col-lg-8 col-md-8 col-sm-12">
<p>Wash your hands regularly for 20 seconds with soap and water or alcohol-based handrub</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 mt-5">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
<figure class="text-center">
<img src="images/12.jpg" class="img-fluid" width="100" height="100">
</figure>
</div>
<div class="col-lg-8 col-md-8 col-sm-12">
<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 mt-5">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
<figure class="text-center">
<img src="images/clos.jpg" class="img-fluid" width="120" height="120">
</figure>
</div>
<div class="col-lg-8 col-md-8 col-sm-12">
<p>Avoid close contact (1 meter or 3 feet) with people who are unwell</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 mt-5">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12">
<figure class="text-center">
<img src="images/stay.png" class="img-fluid" width="90" height="90">
</figure>
</div>
<div class="col-lg-8 col-md-8 col-sm-12">
<p>Stay home and self-isolate from others in the household if you feel unwell</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 mt-5">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12">
<figure class="text-center">
<img src="images/tv.png" class="img-fluid" width="90" height="90">
</figure>
</div>
<div class="col-lg-8 col-md-8 col-sm-12">
<p>Stay informed by watching news & follow the recommended practise</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 mt-5">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12">
<figure class="text-center">
<img src="images/doc.png" class="img-fluid" width="90" height="90">
</figure>
</div>
<div class="col-lg-8 col-md-8 col-sm-12">
<p>if you have fever, cough and difficulty breathing. seek medical care early </p>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
<!-- ////////////////// contact asap ///////////////////-->

<div class="container-fluid pt-5 pb-5" id="contactid" >
<div class="section_header text-center mb-5 mt-4">
    <h1> Contact Us ASAP </h1>
</div>
<div class="container">
<div class="row">
<div class="col-lg-8 offset-lg-2 col-12">
<form action="" method="POST">

<div class="form-group">
    <label>username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
  </div>

  <div class="form-group">
    <label>mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>
<div class="form-group">
<label>Select Symptoms</label><br>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
<label class="custom-control-label" for="customcheckbox1">Cold</label>
</div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
<label class="custom-control-label" for="customcheckbox2">fever</label>
</div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
<label class="custom-control-label" for="customcheckbox3">Difficulty in breath</label>
</div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
<label class="custom-control-label" for="customcheckbox4">feeling weak</label>
</div>
</div>

<div class="form-group">
<label for="exampleFormControlTextareal">More Info</label>
<textarea class="form-control" id="exampleFormControlTextareal" rows="3" name="msg"></textarea>
</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</div>
</div>
</div>
<!--//////////////////// top cursor /////////////////--->


<div class="container scrolltop float-right pr-5">
<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>


<!-- //////////////////////   footer       /////////////////////-->
<footer >
<div class="footer_style text-white text-center container-fluid pt-3 pb-3">
<p>copyright by <a class="footer_data" href="https://github.com/Muskan0705"> Muskan</a></p>
</div>
</footer>

<script type="text/javascript">


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

    function fetch(){
        $.get("https://api.covid19api.com/summary",

          function (data){
              //console.log(data['Countries'].length);
              var tbval = document.getElementById('tbval');
              for(var i=1; i<(data['Countries'].length); i++){
                  var x = tbval.insertRow();
                  x.insertCell(0);
                 
                 tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                 tbval.rows[i].cells[0].style.background = 'black';
                 tbval.rows[i].cells[0].style.color = '#fff';
                
                 x.insertCell(1);
                 tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                 tbval.rows[i].cells[1].style.background = '#4b4b4b';
                 tbval.rows[i].cells[1].style.color = '#fff';


                 x.insertCell(2);
                 tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                 tbval.rows[i].cells[2].style.background = 'black';
                 tbval.rows[i].cells[2].style.color = '#fff';


                 x.insertCell(3);
                 tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                 tbval.rows[i].cells[3].style.background = '#4b4b4b';
                 tbval.rows[i].cells[3].style.color = '#fff';


                 x.insertCell(4);
                 tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                 tbval.rows[i].cells[4].style.background = 'black';
                 tbval.rows[i].cells[4].style.color = '#fff';


                 x.insertCell(5);
                 tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                 tbval.rows[i].cells[5].style.background = '#4b4b4b';
                 tbval.rows[i].cells[5].style.color = '#fff';


                 x.insertCell(6);
                 tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                 tbval.rows[i].cells[6].style.background = 'black';
                 tbval.rows[i].cells[6].style.color = '#fff';

              }
          }        
        );
    }
</script>
</body>
</html>

<?php
 include 'dbcon.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $msg = $_POST['msg'];

$chk = "";
foreach($symp as $chk1){
    $chk .= $chk1.",";
}
$insertquery = "insert into coronacase(username, email, mobile, symp, message) values('$username', '$email', '$mobile', '$chk', '$msg')";
$query = mysqli_query($con, $insertquery);

if($query){
   
   
}
}
?>
