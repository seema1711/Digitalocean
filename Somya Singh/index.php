<!DOCTYPE html>
<html lang="en">

<head>
    <title>Covid-19 Tracker</title>
    <?php include 'link/link.php'; ?>
    <?php include 'css/style.php'; ?>
    
</head>

<body >
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="./image/icon3.png" class="navbar-brand" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
            </ul>

            <ul class="navbar-nav">
    <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutid">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sympid">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#preventid">Prevention</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#analyid">Analytics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactid">Contact</a>
                </li>
            </ul>
  </div>
</nav>
<!--  -->
<div class="class_alert container-fluid text-center p-4">
  <p class="">COVID-19 Tracker</p>
</div>

<!--..............................................................main-head.........................................................  -->


    <div class="main_header">
        <div class="row w-100 h-100">
            <div class="col-lg-5 col-mid-5 col-12 order-lg-1 order-2">
                <div class="leftside  w-100 h-100 d-flex justify-content-center align-items-center ">
                    <img src="image/unity3.png" width="300" height="300">
                </div>
            </div>
            <div class="col-lg-7 col-mid-7 col-12 order-lg-2 order-1">
                <div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center  ">
                    <h1 class="first_head">Let's Stay Safe & Fight Together Against cor<span class="corona_rot"><img src="image/c4.png "
                                width="10%"></span>na Virus</h1>
                </div>
            </div>
        </div>
    </div>
    <!--........CORONA LATEST UPDATES......................................................................................... -->
     <section class="corona_update" id="analyid">
     
        <div class="mb-3">
            <h3 class="text-uppercase text-center">covid-19 updates</h3>
            <div class="container my-5  ">
                 <div class="row text-center">
         <div class="col-sm-3 text-warning ">
              <h5 >Confirmed</h5>
               <p class="count" id="confirmed"></p> 
            </div>
        <div class="col-sm-3 text-info ">
                  <h5 >Active</h5> 
                  <p  class="count"  id="active"></p>
         </div>
        <div class="col-sm-3 text-success "> 
        <h5 >Recovered</h5> 
        <p  class="count" id="recovered"></p> 
       </div>
        <div class="col-sm-3 text-danger">
             <h5 >Deceased</h5> 
             <p   class="count" id="deaths"></p>
             </div> 
            </div> 
        </div> 
        <div class="container bg-light p-3 my-5 text-center"> 
            <h5 class="text-info">"Prevention is better than Cure."</h5>
             <p class="text-muted">Stay Indoors Stay Safe.</p> 
             <h6 class="text-info "> Click on the Confirmed/Recovered/Deaths buttons to see the chart individually. </h6> 
            </div>
           
            <div class="chart" > 
            <canvas id="myChart"   ></canvas>
            </div>
            
           
            </script>
            <!-- <div class="container text-center my-5 ">
                  </div> -->

    <!-- ******************************About Section ************************************************************************** -->
    <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
        <div class="section_header text-center">
            <h1>About COVID-19</h1>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12 p-5 ">
                <img src="image/about1.jfif " width="500" height="800" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pl-5 pt-4">
                <h2> What Is COVID-19? </h2>
                <p>The new coronavirus, now known as Covid-19, was first encountered in November 2019, and has gone on
                    to affect over 425,000 people in over 150 countries around the globe, causing more than 18,000
                    deaths. </p>
                <p> The virus can cause pneumonia-like symptoms. Those who have fallen ill are reported to suffer
                    coughs, fever and breathing difficulties. In severe cases there can be organ failure. As this is
                    viral pneumonia, antibiotics are of no use. The antiviral drugs we have against flu will not work.
                    If people are admitted to hospital, they may get support for their lungs and other organs, as well
                    as fluids. Recovery will depend on the strength of their immune system. Many of those who have died
                    were vulnerable because of existing underlying health conditions. </p>


            </div>
        </div>
    </div>
    <div class="container">
    <iframe width="100%" height="576" src="https://app.developer.here.com/coronavirus/" frameborder="0"></iframe>
</div>
    <!--*************************Symptoms**********************************************************************************  -->
    <div class="container-fluid  pt-5 pb-5" id="sympid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>Coronovirus Symtoms</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-m-4 col-12  mt-5">
                    <figure class="text-center">
                        <img src="image/cough.jpg" alt="loading error" class="img-fluid" width="120" height="120">
                        <figcaption>Cough</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-m-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="image/headache.jpg" alt="loading error" class="img-fluid" width="120" height="120">
                        <figcaption>Headache</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-m-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="image/fever.jpg" alt="loading error" class="img-fluid" width="120" height="120">
                        <figcaption>Fever</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-m-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="image/cold3.jfif" alt="loading error" class="img-fluid" width="120" height="120">
                        <figcaption>Cold</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-m-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="image/weakness.jfif" alt="loading error" class="img-fluid" width="120" height="120">
                        <figcaption>Tiredness</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-m-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="image/bp2.jpg" alt="loading error" class="img-fluid" width="120" height="120">
                        <figcaption>Breathing problems</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--*************************Prevention Against Corona Virus****************************************************************  -->
    <div class="container-fluid sub_section  pt-5 pb-5" id="preventid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>Prevention Against Coronavirus</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-mid-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-mid-4 col-12">
                        <figure class="text-center">
                                <img src="image/wash.jfif" alt="loading error" class="img-fluid" width="100" height="100">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-mid-8 col-12">
                            <p>Use warm water and soap and rub your hands for at least 20 seconds. Work the lather to
                                your wrists, between your fingers, and under your fingernails. </p>
                        </div>
                    </div>
                </div>
            
        
        <div class="col-lg-4 col-mid-4 col-12 mt-5">
            <div class="row">
                <div class="col-lg-4 col-mid-4 col-12">
                <figure class="text-center">
                        <img src="image/mask.jfif" alt="loading error" class="img-fluid" width="100" height="100">
                    </figure>
                </div>
                <div class="col-lg-8 col-mid-8 col-12">
                    <p>Cover your nose and mouth with a disposable tissuse or fixed elbow when you cough or sneeze </p>
                </div>
            </div>
        </div>
    
    <div class="col-lg-4 col-mid-4 col-12 mt-5">
        <div class="row">
            <div class="col-lg-4 col-mid-4 col-12">
                <figure class="text-center">
                    <img src="image/close.jfif" alt="loading error" class="img-fluid" width="100" height="150">
                </figure>
            </div>
            <div class="col-lg-8 col-mid-8 col-12">
                <p>Avoid close contact(1 meter or 3 meter) with people who are unwell. </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-mid-4 col-12 mt-5">
        <div class="row">
            <div class="col-lg-4 col-mid-4 col-12">
            <figure class="text-center">
                    <img src="image/home2.jfif" alt="loading error" class="img-fluid" width="100" height="100">
                </figure>
            </div>
            <div class="col-lg-8 col-mid-8 col-12">
                <p>Stay home and self-isolate from others in the household if you feel unwell. </p>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-mid-4 col-12 mt-5">
        <div class="row">
            <div class="col-lg-4 col-mid-4 col-12">
            <figure class="text-center">
                    <img src="image/tv4.jfif" alt="loading error" class="img-fluid" width="100" height="100">
                </figure>
            </div>
            <div class="col-lg-8 col-mid-8 col-12">
                <p>Stay informed by watching news & follows the recommended practices </p>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-mid-4 col-12 mt-5">
        <div class="row">
            <div class="col-lg-4 col-mid-4 col-12">
            <figure class="text-center">
                    <img src="image/fever.jpg" alt="loading error" class="img-fluid" width="100" height="100">
                </figure>
            </div>
            <div class="col-lg-8 col-mid-8 col-12">
                <p>If you have fever.Cough and breathing problem seek medical core early. </p>
            </div>
        </div>
    </div>
     </div>
    </div>
    </div>
  <!-- *************************Contact**********************************************************************************  -->
  <div class="container-fluid  pt-5 pb-5" id="contactid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>Contact Us ASAP</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8  offset-lg-2 col-12">
                <form action="" method="GET">
    <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="text" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>
  <label>Select Symptoms</label><br>
   <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="customcheckbox1" name="coronasym[]" value="cold">
  <label class="form-check-label" for="customcheckbox1">cold</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="customcheckbox2" name="coronasym[]" value="fever">
  <label class="form-check-label" for="customcheckbox2">fever</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="customCheckbox3" name="coronasym[]" value="breath">
  <label class="form-check-label" for="customcheckbox3">breath</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="customCheckbox4" name="coronasym[]" value="tired">
  <label class="form-check-label" for="customcheckbox4">tired</label>
</div>
 <div class="form-group mt-2">
    <label>Describe how you are feeling</label>
    <textarea class="form-control" name="message"  rows="3"></textarea>
  </div>
   <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

                </div>
             </div>
        </div>
</div>
<!-- ************************************Top Cursor***(fa=fontawesome)************************************************************ -->
<!-- <div class="container scrolltop float-right pr-5">
  <i class="fas fa-arrow-up" onclick="topfunction()"> </i>
  </div> -->

 <div class="container scrolltop float-right pr-5">
  <i class="fas fa-arrow-up" id="myBtnn" onClick="topFunction()"> </i>
  </div>



<!-- ********************** ////////////////////   *  Footer    /////////////////////////////////////////////////////////////  -->
<footer >
    <div class="footer-container ">
        <div class="copyright">
     
         <p>
              Copyright © <a class="footer_link" href="https://github.com/somyaBIT">SOMYA SINGH</a> </p>
          </div>
      </div>
 </footer> 
 <!-- //////////////////////////////////////////topfunction()////////////////////////////////////////////// -->
  <script type="text/javascript">



//Get the button
var mybutton = document.getElementById("myBtnn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
  // live data animation

window.onload = function () {
       
$('.count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        
        });       

}
</script>
 <?php  
 include'dbcon.php';

if (isset($_GET['submit'])){

    $username=$_GET['username'];
    $email=$_GET['email'];
    $mobile=$_GET['mobile'];
    $symp=$_GET['coronasym'];
    $message=$_GET['message'];

    // for checking user choose which symp as it is in array form

      $chk="";

    foreach($symp as $chk1){
        //concatinate
        $chk .= $chk1.",";
    }
    
    $insertquery="insert into corona_cases(username,email,mobile,symp,message) value('$username','$email',' $mobile','$chk',' $message')";

    $query=mysqli_query($con,$insertquery);

    if($query){
        header("Location:index.php");
        exit();
    }
      
      
  }


mysqli_close($con);

?>
 

</body>
</html>