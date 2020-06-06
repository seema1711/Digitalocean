<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>DeCOVID</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
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

</head>
<body>
<header>
	<div id="logo"></div>
	<div class="toggle"></div>
	<nav id="nav-links">
		<ul>
			<li><a href="#home">HOME</a></li>
			<li><a href="precautions.php">ABOUT COVID19</a></li>
			<li><a href="analytics.php">ANALYTICS</a></li>
			<li><a href="about.php">ABOUT WEBSITE</a></li>
		</ul>
	</nav>
	<div id="clearfix"></div>
</header>
<div id="home">

	<div id="news">
		<p class="caption"><i class="fa fa-newspaper-o" style="color: black; margin-right: 10px;"></i>Top <span class="red blink">Live</span> COVID19 News<i class="fa fa-chevron-down" style="color: black; margin-left: 10px;font-size: 0.8em;cursor: pointer;" id="shownews"></i></p>
		<div id="newssection">
    <div id="newssection1" class="newspart active">
		
		</div>
    <div id="newssection2" class="newspart">
    
    </div>
    <div id="newssection3" class="newspart">
    
    </div>
  </div>

    <div id="viewsections">
      <center>
      <span id="pre" class="circle selectedcircle">&#9679;</span>
      <span id="next" class="circle">&#9679;</span>
       <span id="3rdnext" class="circle">&#9679;</span>
    </center>
    </div>
    
   
	</div>
	<div id="activecases">
		<center>
		<span class="case">
			<img src="img/covid191.svg" class="caseimg">
			<span id="confirmedcase" class="casesreport" style="color:#8a479b ;">Confirmed </span>
		</span>
		<span  class="case">
			<img src="img/covid193.svg" class="caseimg">
			<span id="activecase" class="casesreport" style="color:#4d4dc3 ;">New Cases </span>
		</span>
		<span class="case">
			<img src="img/covid192.svg" class="caseimg">
			<span  id="recoveredcase" class="casesreport" style="color:#4c9d70 ;">Recovered </span>
		</span>
		<sapn class="case">
			<img src="img/covid195.svg" class="caseimg">
			<span  id="deathcase" class="casesreport" style="color: #b42323;">Deaths </span>
		</span>
	    </center>
	</div>
	<div id="statestatics">
		<table id="stateswisecases">
			<tr>
				<th>State</th>
				<th>Confirmed</th>
				<th>Active</th>
				<th>Recovered</th>
				<th>Death</th>
			</tr>
		</table>
	</div>
	<div id="statesinformation">
		<p>Quick District Information</p>
		<br>
		<div id="inputstate">
			<select id="inputstatettext"  class="selectplace" name="state">
      <option selected disabled hidden>State</option>
				
			</select>
			<select id="inputdistricttext" class="selectplace" name="district">
      <option selected disabled hidden>District</option>   
      </select>
			<button id="showdistrictinfo"><i class="fa fa-search"></i></button>
		</div>
    <div id="staticsdistrict">
      
		 <div id="inputstateinformation">
      <div id="chartdiv"></div>
     </div>
    </div>
	</div>

</div>


<script type="text/javascript">
   $(document).ready(function(){


 
   	$.get('https://cryptic-ravine-96718.herokuapp.com',
   		function(data){
   			var newssection1 = document.getElementById('newssection1');
        var newssection2 = document.getElementById('newssection2');
        var newssection3 = document.getElementById('newssection3');

   			for(var i=0;i<3;i++)
   			{
   				var newssecchild = document.createElement("DIV");
          var imgc = data["news"][i]["img"];
          var newss = data["news"][i]["title"].substring(0,60) + '...';
          newssecchild.innerHTML = '<img src="'+imgc+'">';
          newssecchild.innerHTML += newss;
            newssecchild.innerHTML += '<a href="'+data["news"][i]["link"]+'">Read more</a>';
        
   				newssecchild.className = 'newsitems';
   				newssection1.appendChild(newssecchild);


   			}
        for(var i=3;i<6;i++)
        {
          var newssecchild = document.createElement("DIV");
          var imgc = data["news"][i]["img"];
          var newss = data["news"][i]["title"].substring(0,60) + '...';
          newssecchild.innerHTML = '<img src="'+imgc+'">';
          newssecchild.innerHTML += newss;
            newssecchild.innerHTML += '<a href="'+data["news"][i]["link"]+'">Read more</a>';
          newssecchild.className = 'newsitems';

          newssection2.appendChild(newssecchild);


        }
        for(var i=6;i<9;i++)
        {
          var newssecchild = document.createElement("DIV");
          var imgc = data["news"][i]["img"];
          var newss = data["news"][i]["title"].substring(0,60) + '...';
          newssecchild.innerHTML = '<img src="'+imgc+'">';
          newssecchild.innerHTML += newss;
          newssecchild.innerHTML += '<a href="'+data["news"][i]["link"]+'">Read more</a>';
          newssecchild.className = 'newsitems';
          newssection3.appendChild(newssecchild);


        }

   		}
   		)
    $('#pre').on("click",function(){
      $('#newssection1').addClass('active');
      $('#newssection2').removeClass('active');
      $('#newssection3').removeClass('active');
      $("#pre").addClass('selectedcircle');
      $("#next").removeClass('selectedcircle');
      $("#3rdnext").removeClass('selectedcircle');

    })
    $('#next').on("click",function(){
      $('#newssection2').addClass('active');
      $('#newssection1').removeClass('active');
      $('#newssection3').removeClass('active');
       $("#next").addClass('selectedcircle');
       $("#pre").removeClass('selectedcircle');
       $("#3rdnext").removeClass('selectedcircle');
      
    })
      $('#3rdnext').on("click",function(){
       
      $('#newssection3').addClass('active');
      $('#newssection1').removeClass('active');
      $('#newssection2').removeClass('active');
      $("#3rdnext").addClass('selectedcircle');
      $("#pre").removeClass('selectedcircle');
      $("#next").removeClass('selectedcircle');
      
    })
   	$.get('https://api.covid19api.com/summary',
   	function(data)
   	{
   		var confirmedcase = data['Countries'][76]['TotalConfirmed'];
   		var activecase = data['Countries'][76]['NewConfirmed'];
   		var recoveredcase = data['Countries'][76]['TotalRecovered'];
   		var death = data['Countries'][76]['TotalDeaths'];
   		document.getElementById('confirmedcase').innerHTML += confirmedcase;
   		
   		document.getElementById('activecase').innerHTML += activecase;
   		
   		document.getElementById('recoveredcase').innerHTML += recoveredcase;
   		document.getElementById('deathcase').innerHTML += death;
   	})
    $.get('https://api.covid19india.org/data.json',
    function(data)
    {
    	var statetable = document.getElementById('stateswisecases');
    	for(var i = 1; i<data['statewise'].length;i++)
    	{
    		var row = statetable.insertRow(i);
    		row.insertCell(0);
    		statetable.rows[i].cells[0].innerHTML = data['statewise'][i]['state'];
    		row.insertCell(1);
    		statetable.rows[i].cells[1].innerHTML = data['statewise'][i]['confirmed'];
    		row.insertCell(2);
    		statetable.rows[i].cells[2].innerHTML = data['statewise'][i]['active'];
    		row.insertCell(3);
    		statetable.rows[i].cells[3].innerHTML = data['statewise'][i]['recovered'];
    		row.insertCell(4);
    		statetable.rows[i].cells[4].innerHTML = data['statewise'][i]['deaths'];


    	}
    	
    })

    $('#shownews').click(function(){
   		$('#newssection').toggleClass('active');
      $('#viewsections').toggleClass('active');
   	})


   	$('.toggle').click(function(){
   		$('.toggle').toggleClass('active')
   		$('nav').toggleClass('active')
   	})
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
      


   
   	$('#inputstatettext').on("change",function()
    {
      $('.options').remove();
   		$.get('https://api.covid19india.org/state_district_wise.json',
      function(data)
      {
    	  var inputstatettext = $('#inputstatettext').val();
        for(var district in data[inputstatettext]['districtData'])
        { 
    		 var option = document.createElement('OPTION');
    		 option.innerHTML = district;
    		 document.getElementById('inputdistricttext').append(option);
         option.className='options'; 
         var confirmedd = data[inputstatettext]['districtData'][district]['confirmed'];
         var actived = data[inputstatettext]['districtData'][district]['active'];
         var recoveredd = data[inputstatettext]['districtData'][district]['recovered'];
         var deceasedd = data[inputstatettext]['districtData'][district]['deceased'];
         
        }
   	  })
      
    })
   

  $('#showdistrictinfo').on("click",function()
    {
      $('#staticsdistrict').toggleClass('active');
      $('#chartdiv').css("display","block");
      var inputstatettext = $('#inputstatettext').val();
      var inputdistricttext = $('#inputdistricttext').val();
      var confirmedd = '';
      var actived = '';
      var recoveredd = '';
      var deceasedd = '';
      $.get('https://api.covid19india.org/state_district_wise.json',
      function(data)
      {
      if(inputdistricttext!='' && inputstatettext!='')
      {
        am4core.ready(function() {
       
// Themes begin
am4core.useTheme(am4themes_material);
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv", am4charts.PieChart3D);
chart.hiddenState.properties.opacity = 0; 
// this creates initial fade-in
chart.responsive.enabled = true;
chart.responsive.rules.push({
  relevant: function(target) {
    if (target.pixelWidth <= 600) {
      return true;
    }
    return false;
  },
  state: function(target, stateId) {
    if (target instanceof am4charts.PieSeries) {
      var state = target.states.create(stateId);

      var labelState = target.labels.template.states.create(stateId);
      labelState.properties.disabled = true;

      var tickState = target.ticks.template.states.create(stateId);
      tickState.properties.disabled = true;
      return state;
    }

    return null;
  }
});         
chart.legend = new am4charts.Legend();

chart.data = [
  
  {
    state: "Active",
    litres: data[inputstatettext]['districtData'][inputdistricttext]['active']
  },
  {
    state: "Confirmed",
    litres: data[inputstatettext]['districtData'][inputdistricttext]['confirmed']
  },
 
  {
    state:"Recovered",
    litres:data[inputstatettext]['districtData'][inputdistricttext]['recovered']
  },
  
  {
    state: "Death",
    litres: data[inputstatettext]['districtData'][inputdistricttext]['deceased']
  },
  
];

chart.innerRadius = 60;

var series = chart.series.push(new am4charts.PieSeries3D());
series.dataFields.value = "litres";
series.dataFields.category = "state";


});
      }})
       
    })

    
   
   })
    
    

   
   
</script>
</body>
</html>