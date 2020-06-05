<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>DeCOVID</title>
	
	<meta charset="utf-8">
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/material.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

 

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
	<link href="https://fonts.googleapis.com/css?family=ABeeZee&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
    	  *{
         margin:0;
         padding: 0;
         line-height: 1.8;
         box-sizing: border-box;
         font-family: 'ABeeZee', sans-serif;
       }
       .precautionsbutton{
        outline: none;
        border: none;
        cursor: pointer;
        padding:0 5px;
       }
      body{
        width: 100vw;
        background: #aab7ea;
        background: #eaebec;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 16px;
        overflow-x: hidden;

        }
        
        .borderbottom{
          transition: all 0.4s linear;
          border-bottom: 1.5px solid  #88a1b9;
        }

        header{
          width: 100vw;
         
          border-radius:0 0 15px 15px;
          background: #eaebec;
          box-shadow:  7px 7px 14px #b9baba, 
                     -7px -7px 14px #ffffff;
        }
        .newsservice{
          width: 100%;
          margin-bottom: 20px;
          border-radius: 5px;
          padding:10px;
          background: #eaebec;
          box-shadow:  7px 7px 14px #b9baba, 
                     -7px -7px 14px #ffffff;


        }
        #optionspi{
          width: 90vw;
          min-height: 200px;
          display: flex;
        }
        #coronaimg{
          width: 20%;
    background-image: url(img/c.png);
    background-size: contain;
    background-repeat: no-repeat;
        }
          #nav-links{
            float: right;
            position: relative;
            font-size: 1em;
          }
          #logo{
            float:left;

          }
          #nav-links ul{
            display: flex;
            right: 0%;

            position: relative;

          }
          #nav-links ul li{
            padding:10px 15px;
            list-style: none;
          }
          #nav-links ul li a{
            color: black;
            padding:5px;
            cursor: pointer;
            text-decoration: none;

          }
          #nav-links ul li a:hover, #nav-links ul li a:active{
            background: white;
            cursor: pointer;
              text-decoration: none;
              border-radius: 5px;
          background: #ebebeb;
          box-shadow:  7px 7px 14px #cccccc, 
                       -7px -7px 14px #ffffff;
          }
          #clearfix{
            clear: both;
          }
          .dialog .share-actions{
          	display: none;

          }
          .logo{
          	display: none;
          }
          #header{
         	display: none;
         }
         #coronavirusprecautions{
         	display: flex;
          flex-direction: column;
         	justify-content: center;
         	align-items: center;
        
         	width: 90vw;
         	margin-top: 40px;
          

         }
         #covidinfo{
          padding:10px 5px;
          margin-bottom: 10px;
          background-image: linear-gradient(-90deg,#ebebeb,#f1f1f1);
          box-shadow: 7px 7px 14px #cccccc, 
             -7px -7px 14px #ffffff, inset 3px 3px 7px #e3e4e4, inset -3px -3px 7px #e8e8e8;
    
         }
         #precautions{
          margin-bottom: 40px;
         	width: 50vw;
          margin-left: 40px;
          transition: all 0.4s linear;
         	outline: none;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
           border-radius: 5px;
          background: #ebebeb;
          box-shadow:  7px 7px 14px #cccccc, 
                       -7px -7px 14px #ffffff;
          padding: 20px 0px;
        
         }
        
         #updatescovid{
          width: 100%;
         }
	    #showresult{
	    border-radius: 50%;
		background-image: linear-gradient(-90deg,#ebebeb,#f1f1f1);
	    box-shadow: 7px 7px 14px #cccccc, 
	             -7px -7px 14px #ffffff, inset 5px 5px 10px #e3e4e4, inset -5px -5px 10px #e8e8e8;
	    padding: 5px;
	    border: 0px;
	    width: 36px;
	    height: 36px;
	    outline: none;
	    cursor: pointer;
         }
       
         #coronavirusprecautions li ,#symptoms li{
          list-style-image: url('img/3.png');
         
         }
         .ptag{
          margin-bottom: 40px;

          width: 100%;
          float: left;
          padding: 10px;
          text-align: justify;

         }
          .aside{
          width: 25%;
          margin-left: 10px;
          float: right;
         }
         .showservices{
          padding: 10px 20px;
          font-weight: 900;
          border: 0px;
          border-radius: 50%;
          margin-right: 20px;
          outline: none;
          background-image: linear-gradient(-90deg,#ebebeb,#f1f1f1);
          box-shadow: 7px 7px 14px #cccccc, 
                   -7px -7px 14px #ffffff, inset 5px 5px 10px #e3e4e4, inset -5px -5px 10px #e8e8e8;

         }
         .selectservice{
          padding: 10px 20px;    
          border: 0px;
          margin-right: 20px;
          outline: none;
          width: 40%;
          border-radius: 5px;
          background-image: linear-gradient(-90deg,#ebebeb,#f1f1f1);
          box-shadow: 7px 7px 14px #cccccc, 
                   -7px -7px 14px #ffffff, inset 5px 5px 10px #e3e4e4, inset -5px -5px 10px #e8e8e8;

         }
         #showinfo{
          width: 100%;
          padding:20px;
          display: block;
         }
         #precautionsoptions{
          display: flex;
          padding: 10px;
         }

	  @media all and (max-width: 800px)
	  {
      #precautions{
        position: relative;
        width: 100%;
        margin-left: 0;
      }
      #optionspi{
        position: relative;
        width: 90vw;
        display: flex;
        flex-direction: column;
      }
      .selectservice{
        width: 80%;
        margin-bottom: 10px;
      }
      .aside{
        width: 50%;
        margin-left: 10px;
      }
	  .toggle{
	    position: absolute;
	    cursor: pointer;
	    
	        opacity: 1;
	       
	        margin-left: 20px;
	        color: rgb(81,112,84);
	        font-size: 20px;
	        z-index: 99;
	        transition: all .5s linear;
	        }

	    .toggle:before{
	      content: '\f0c9';
	    font-family:fontAwesome;
	      display: block; 
	       
	    }
	    .toggle.active:before{
	      content: '\f00d';
	    font-family:fontAwesome;
	      display: block; 
	     
	    }
	  #nav-links.active ul{
	    display: block;
	        margin-left: 0%;
	        padding: 2% 5%;
	        width: 100%;

	        transition: all .2s linear; 
	    }
	  #nav-links.active ul li{
	      width: 100%;
	    display: block;
	     
	    }
	    #nav-links.active ul li a{
	    color: black;
	    font-size: 1em;
	        text-align: center;
	    }
	    #nav-links.active ul li a:active,
	    #nav-links.active ul li a:hover{
	      background: white;
	    cursor: pointer;
	      text-decoration: none;
	      border-radius: 5px;
	    background: #ebebeb;
	    box-shadow:  7px 7px 14px #cccccc, 
	               -7px -7px 14px #ffffff;

	    
	    }
      #coronaimg{
     background-position: center;
    width: 100%;
    
    height: 40vh;
}
    
      
	    #coronavirusprecautions{
	    	flex-direction: column;
	    }
	   
	    #nav-links{
	      float: left;
	      width: 100%;
	      padding:20px 10px;
	        }
	  #nav-links ul li{
	    display: none;
	  }
	          }
    </style>
</head>
<body>
<header>
	<div id="logo"></div>
	<div class="toggle"></div>
	<nav id="nav-links">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="precautions.php">ABOUT COVID19</a></li>
			<li><a href="analytics.php">ANALYTICS</a></li>
			<li><a href="about.php">ABOUT WEBSITE</a></li>
		</ul>
	</nav>
	<div id="clearfix"></div>
</header>
<!--
<div class="tenor-gif-embed" data-postid="16705111" data-share-method="host" data-width="100%" data-aspect-ratio="1.0"><a href="https://tenor.com/view/covid19-coronavirus-corona-virus-kill-virus-gif-16705111">Covid19 Coronavirus GIF</a> from <a href="https://tenor.com/search/covid19-gifs">Covid19 GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script>
<div class="tenor-gif-embed" data-postid="16660839" data-share-method="host" data-width="100%" data-aspect-ratio="1.5809523809523809"><a href="https://tenor.com/view/coronavirus-pandemic-virus-germs-gif-16660839">Coronavirus Pandemic GIF</a> from <a href="https://tenor.com/search/coronavirus-gifs">Coronavirus GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script>-->
<div id="coronavirusprecautions">
  <div id="updatescovid">
  <div id="covidinfo"><button class="precautionsbutton borderbottom" id="about">About COVID19</button><button class="precautionsbutton" id="precautionsb">Precautions</button><button id="symptomsb" class="precautionsbutton">Symptoms</button></div>
  <hr>
  <div id="aboutcovid19">

    
    <div class="ptag"> <div class="aside"><div class="tenor-gif-embed" data-postid="16705111" data-share-method="host" data-width="100%" data-aspect-ratio="1.0"><a href="https://tenor.com/view/covid19-coronavirus-corona-virus-kill-virus-gif-16705111">Covid19 Coronavirus GIF</a> from <a href="https://tenor.com/search/covid19-gifs">Covid19 GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script></div>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

    Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.

    The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 

    The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).

    At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.</div>
  
    
  </div>
  <div id="precautionscovid" style="display: none;">
    <div class="ptag">

       <div class="aside"><div class="tenor-gif-embed" data-postid="16678450" data-share-method="host" data-width="100%" data-aspect-ratio="0.9518072289156626"><a href="https://tenor.com/view/coronavirus-covid19-covid-do-the5-do-the-five-gif-16678450">Coronavirus Covid19 GIF</a> from <a href="https://tenor.com/search/coronavirus-gifs">Coronavirus GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script></div>To prevent infection and to slow transmission of COVID-19, do the following:
    
    <li>Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.</li>
    <li>Maintain at least 1 metre distance between you and people coughing or sneezing.</li>
    <li>Avoid touching your face.</li>
    <li>Cover your mouth and nose when coughing or sneezing.</li>
    <li>Stay home if you feel unwell.</li>
    <li>Refrain from smoking and other activities that weaken the lungs.</li>
    <li>Practice physical distancing by avoiding unnecessary travel and staying away from large groups of people.</li></div>
   

  </div>
  <div id="symptoms" style="display: none;">
    <div class="ptag">
       <div class="aside"><div class="tenor-gif-embed" data-postid="16671843" data-share-method="host" data-width="100%" data-aspect-ratio="1.0"><a href="https://tenor.com/view/march-for-our-lives-our-power-gun-violence-gun-violence-prevention-well-get-through-this-gif-16671843">March For Our Lives Our Power GIF</a> from <a href="https://tenor.com/search/marchforourlives-gifs">Marchforourlives GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script></div>COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.

    <ul>Most common symptoms:

    <li>fever,dry cough,tiredness.</li>
    <ul>Less common symptoms:

    <li>aches and pains, sore throat, diarrhoea.</li>
    <li>conjunctivitis, headache, loss of taste or smell.</li>
    <li>a rash on skin, or discolouration of fingers or toes.</li></ul>
    <ul>Serious symptoms:

    <li>difficulty breathing or shortness of breath.</li>
    <li>chest pain or pressure.</li>
    <li>loss of speech or movement.</li>
    <li>Seek immediate medical attention if you have serious symptoms.  Always call before visiting your doctor or health facility. </li>

    <li>People with mild symptoms who are otherwise healthy should manage their symptoms at home.</li>

    <li>On average it takes 5–6 days from when someone is infected with the virus for symptoms to show, however it can take up to 14 days.</li> </ul></p>
    
  </div>
 
  </div>
<div id="optionspi">
  <div id="coronaimg"></div>

<div id="precautions">
  <p>Services available in your city.</p>
<div id="precautionsoptions">  

	<select class="selectservice" id="service">
   <option selcted hidden>Service</option>
   <option>CoVID-19 Testing Lab</option>
   <option>Free Food</option> 
   <option>Delivery [Vegetables, Fruits, Groceries, Medicines, etc.]</option> 
   <option>Government Helpline</option> 
   <option>Fundraisers</option>
   <option>Senior Citizen Support</option>
   <option>Community Kitchen</option>
   <option>Ambulance</option>
   <option>Transportation</option>
   <option>Quarantine Facility</option>
   <option>Hospitals and Centers</option> 
   <option>Police</option> 
   <option>Helpline for Cyclone Amphan</option>
  </select>
  <select class="selectservice" id="inputstatettext">
    <option selected hidden>state</option>
  </select>  
  
  <button onclick="serviceinfo()" class="showservices">></button>
</div>
  <div id="showinfo">

    
  </div>
</div>
</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
   $('#inputstatettext').on("click",function(){
      $.get('https://api.covid19india.org/data.json',
    function(data)
    {
      for(var i = 1; i<data['statewise'].length;i++)
      {
        var option = document.createElement('OPTION');
        option.innerHTML = data['statewise'][i]['state'];
        document.getElementById('inputstatettext').appendChild(option);
        }
    })
    })    


})


function serviceinfo(){
  var category = $('#service').val();
  var inputstatettext = $('#inputstatettext').val();
  var k = 0;
  
var x=document.getElementById("showinfo");


                    $.get('https://api.covid19india.org/resources/resources.json',
                      function(data)
                      {
                        $('.newsservice').remove();
                        for(var i =0;i<data['resources'].length;i++)
                        {

                          if(data['resources'][i]['state']== inputstatettext && data['resources'][i]['category']== category)
                          {
                            k++;

                            console.log(data['resources'][i]['category']);
                             var newsservice = document.createElement("DIV");
                             var name = data["resources"][i]["nameoftheorganisation"];
                             var city = data["resources"][i]["city"];

                             var phonenumber = data["resources"][i]["phonenumber"];
                             var link = data["resources"][i]["contact"];
                             newsservice.innerHTML = '<p><i>Name of organisation:</i> '+name+'</p>';
                              newsservice.innerHTML += '<p><i>City: </i>'+city+'</p>';
                             newsservice.innerHTML += '<p><i>Contact: </i>'+phonenumber+'</p>';
                             newsservice.innerHTML += '<a href="'+link+'">Read more</a>';
                             newsservice.className = 'newsservice';
                            

                             x.appendChild(newsservice);

                          }

                         
                        }
                         if(k==0)
                          {
                           var newsservice = document.createElement("DIV");
                           newsservice.innerHTML = '<p>No data available for selected options</p>';
                           newsservice.className = 'newsservice';
                            

                           x.appendChild(newsservice);



                          }
                       })
                       }; 
                

 




		$('.toggle').click(function(){
   		$('.toggle').toggleClass('active')
   		$('nav').toggleClass('active')
   	})
    $('#about').on("click",function(){
     
      $('#aboutcovid19').css("display","block");
      $('#precautionscovid').css("display","none");
      $('#symptoms').css("display","none");
      $('#about').addClass('borderbottom');
      $('#precautionsb').removeClass('borderbottom');
      $('#symptomsb').removeClass('borderbottom');

    })
     $('#precautionsb').on("click",function(){
      
      $('#precautionscovid').css("display","block");
      $('#aboutcovid19').css("display","none");
      $('#symptoms').css("display","none");
      $('#precautionsb').addClass('borderbottom');
      $('#symptomsb').removeClass('borderbottom');
      $('#about').removeClass('borderbottom');

    })
      $('#symptomsb').on("click",function(){
     
      $('#symptoms').css("display","block");
      $('#precautionscovid').css("display","none");
      $('#aboutcovid19').css("display","none");
      $('#symptomsb').addClass('borderbottom');
      $('#precautionsb').removeClass('borderbottom');
      $('#about').removeClass('borderbottom');


    })

   
   
</script>
</body>
</html>