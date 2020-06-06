<!DOCTYPE html>
<html>
<head>
	<title>DeCOVID</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=ABeeZee&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
    	*{
	line-height: 1.8;
	
	margin:0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'ABeeZee', sans-serif;
}
.sailee1{
	stroke: #000;
	fill-opacity:0;
	stroke-width:20px;
	stroke-dasharray: 20000;
	stroke-dashoffset:0;
}
.sailee1{
	animation: whitechange 10s ease-in-out;

}
@keyframes whitechange{
	0%{
		stroke-dashoffset:20000;

	}
	100%{
		stroke-dashoffset:0;
	}
}
body{
	width: 100vw;
	background: #aab7ea;
    background: #eaebec;
    margin: 0;
    padding: 0;
    font-size: 16px;
    overflow-x: hidden;

}
header{
	width: 100vw;
	height: 100%;
	border-radius:0 0 15px 15px;
    background: #eaebec;
    box-shadow:  7px 7px 14px #b9baba, 
             -7px -7px 14px #ffffff;
}
#nav-links{
	float: right;
	position: relative;
	
}
#aboutme{
	display: flex;
	justify-content: center;
	align-items: center;
}
#logo{
	float:left;

}
#nav-links ul{
	display: flex;
	right: 5%;

	position: relative;

}
#nav-links ul li{
	padding:10px 15px;
	list-style: none;

	font-size: 1em;
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
#about{
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}
.page{
	width: 80vw;
	margin-top: 20px;
	margin-bottom: 20px;
	padding: 10px;
	font-size: 16px;
	border-radius: 5px;
background: #ebebeb;

box-shadow:  7px 7px 14px #cccccc, 
             -7px -7px 14px #ffffff;


}
li{
	list-style: '>';
	padding-left: 10px;
}
.caption{
	background:#000000d1;
	color: white;
	padding-left: 10px;
}

@media all and (max-width: 800px)
{
	#aboutme{
		flex-direction: column;
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
    <div id="aboutme">

    	   <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="91.44mm" height="91.44mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 9144 9144"
 xmlns:xlink="http://www.w3.org/1999/xlink">
 <defs>
  <style type="text/css">
   <![CDATA[
    .str2 {stroke:black;stroke-width:33.87;stroke-miterlimit:22.9256}
    .str5 {stroke:black;stroke-width:105.83;stroke-miterlimit:22.9256}
    .str0 {stroke:black;stroke-width:67.73;stroke-miterlimit:22.9256}
    .str4 {stroke:#2B2A29;stroke-width:20;stroke-miterlimit:22.9256}
    .str3 {stroke:black;stroke-width:20;stroke-miterlimit:22.9256}
    .str1 {stroke:black;stroke-width:135.47;stroke-miterlimit:22.9256}
    .fil0 {fill:none}
    .fil1 {fill:#1F1B20}
    .fil2 {fill:black}
   ]]>
  </style>
 </defs>
 <g id="Layer_x0020_1">
  <metadata id="CorelCorpID_0Corel-Layer"/>
  <g class="sailee1" id="_2124325958688">
   <g>
    <path class="sailee1" class="fil0 str0" d="M3457.37 3539.6l608.1 0c206.01,0 374.56,168.55 374.56,374.56l0 438.64c0,206.01 -168.55,374.56 -374.56,374.56l-504.8 0c-262.83,0 -477.86,-215.03 -477.86,-477.86l0 -335.34c0,-206.01 168.55,-374.56 374.56,-374.56z"/>
    <path class="sailee1" class="fil0 str0" d="M6047.6 3539.6l-608.1 0c-206.01,0 -374.56,168.55 -374.56,374.56l0 438.64c0,206.01 168.55,374.56 374.56,374.56l504.8 0c262.83,0 477.86,-215.03 477.86,-477.86l0 -335.34c0,-206.01 -168.55,-374.56 -374.56,-374.56z"/>
    <path class="sailee1" class="fil0 str1" d="M4438.9 4070.81c107.21,-32.85 214.41,-65.71 319.3,-65.5 104.89,0.21 207.48,33.47 261.08,47.6 53.6,14.12 58.23,9.11 62.85,4.09"/>
   </g>
   <path class="sailee1" class="fil0 str2" d="M3971.51 1840.18c-642.53,499.56 -553.57,288.47 -715.34,1002.55 -87.93,388.16 -620.41,382.22 -464.92,1491.94 91.75,654.8 240.6,1022.01 679.96,1461.36 392.59,392.59 595.81,576.87 979.54,627.25 418.96,55.01 772.42,145.37 1434.61,-372.9 181.16,-141.79 695.83,-547 862.41,-2126.03 91.82,-870.31 -297.4,-1143.67 -600.51,-1638.43 -81.06,-132.31 -154.13,-344.78 -594.44,-450.94 -352.89,-85.07 -1089.13,-170.18 -1581.31,5.2z"/>
   <path class="sailee1" class="fil0 str2" d="M2775.26 3796.75c-530.28,-163.86 -2.08,964.18 -2.08,1088.4 0,253.83 169.94,262.24 236.55,151.03"/>
   <path class="sailee1" class="fil0 str2" d="M6762.99 3786.19c258.46,0.18 132.05,114.65 145.77,618.6 0.56,20.6 -64.13,688.32 -230.85,688.32 -28.19,0 -61.7,-1.47 -81.51,5.43"/>
   <path class="sailee1" class="fil0 str2" d="M2617.38 3719.15c25.37,55.98 28.73,137.7 0,0 -38.82,-24.52 -86.51,-745.68 -86.69,-830.13 -0.75,-364.22 358.52,-788.48 542.74,-1251.32 107.14,-269.17 523.42,-574.63 966.06,-709.76 170.56,-52.07 503.28,-201.64 729.76,-201.64 13.44,-17.81 638.45,136.97 672.08,138.75 461.33,24.38 463.84,194.69 747.21,529.07 403.3,475.91 226.76,339.51 574.45,1137.78 280.85,12.11 56.91,448.9 148.74,611.53 95.37,168.9 -4.34,477.01 -11.51,675.13"/>
   <g class="sailee1">
    <line class="sailee1" class="fil0 str3" x1="5168.3" y1="3496" x2="5211.66" y2= "3292.64" />
    <g class="sailee1">
     <path class="sailee1" class="fil0 str3" d="M5155.91 3453.93c25.93,-49.66 69.62,-191.29 123.91,-210.37"/>
     <polyline class="sailee1" class="fil0 str3" points="5335.58,3278.62 5174.49,3460.93 5334.98,3238.08 "/>
     <path class="sailee1" class="fil0 str3" d="M5174.49 3460.93c53.71,-61 25.38,-196.19 152.35,-232.06 11.56,-3.28 22.28,-2.53 33.51,0.66"/>
     <path class="sailee1" class="fil0 str3" d="M5205.47 3439.9c16.89,-131.73 25.61,-185.48 163.77,-206.2 2.75,-0.41 30.88,-2.52 34.48,-4.17"/>
     <path class="sailee1" class="fil0 str3" d="M5230.25 3425.87c89.74,-187.76 143.21,-141.21 278.79,-154.27"/>
     <polyline class="sailee1" class="fil0 str3" points="5279.82,3383.8 5500.76,3240.37 5521.44,3236.54 "/>
     <line class="sailee1" class="fil0 str3" x1="5358.51" y1="3332.72" x2="5386.53" y2= "3232.04" />
     <path class="sailee1" class="fil0 str3" d="M5298.4 3369.78c76.11,-86.39 59.95,-98.57 198.48,-124.08l14.22 -7.24"/>
     <path class="sailee1" class="fil0 str3" d="M5310.79 3397.82c76.74,-77.4 160.42,-135.82 266.4,-119.2"/>
     <polyline class="sailee1" class="fil0 str3" points="5366.55,3348.74 5613.99,3256.39 5676.31,3243.56 "/>
     <path class="sailee1" class="fil0 str3" d="M5261.23 3418.86c38.86,-121.38 119.63,-123.53 198.25,-161.28"/>
     <path class="sailee1" class="sailee1" class="fil0 str3" d="M5279.82 3432.88l18.77 -34.61 12.2 -0.45c30.44,-76.5 196.96,-76.98 282.98,-102.53"/>
     <path class="sailee1" class="fil0 str3" d="M5347.96 3404.84c42.41,-88.75 178.57,-125.7 259.73,-152.38 13.99,-4.6 24.04,-9.61 37.46,-2.48"/>
     <path class="sailee1" class="fil0 str3" d="M5444 3336.8c10.43,-22.34 15.23,-48.56 29.44,-33.33"/>
     <path class="sailee1" class="fil0 str3" d="M5382.88 3403.7c44.1,-84.44 157,-117.78 237.68,-139.11"/>
     <path class="sailee1" class="fil0 str3" d="M5422.31 3390.82c66.61,-37.17 210.14,-109.03 295,-133.56l14.76 0.32"/>
     <path class="sailee1" class="fil0 str3" d="M5453.28 3390.82c59.7,-89.34 82.29,-79.59 167.75,-114.42 30.44,-12.41 84.57,-22.68 118.53,-16.97l-0.77 -9.45"/>
     <path class="sailee1" class="fil0 str3" d="M5496.65 3369.78l254.97 -87.54c143.6,-49.31 105.97,-19.38 104.36,-24.66"/>
     <path class="sailee1" class="fil0 str3" d="M5546.21 3383.8c65.85,-89.84 39.21,-82.63 163.32,-120.09 31.71,-9.57 170.81,-33.9 199.64,-6.13"/>
     <path class="sailee1" class="fil0 str3" d="M5595.78 3369.78c14.91,-63 175.26,-72.51 235.05,-88.75 16.04,-4.35 108.79,-29.21 122.81,-23.45"/>
     <path class="sailee1" class="fil0 str3" d="M5620.56 3362.76c56.28,-53.1 348.56,-110.45 396.5,-84.14"/>
     <path class="sailee1" class="fil0 str3" d="M5663.93 3362.76c28.71,-29.09 264.74,-69.7 311.31,-67.27 17.01,0.88 111.62,17.14 122.36,32.22"/>
     <path class="sailee1" class="fil0 str3" d="M5738.27 3355.75c70.02,-52.97 237.76,-98.15 322.42,-95.1l12.13 3.94"/>
     <polyline class="sailee1" class="fil0 str3" points="5763.05,3362.76 6076.93,3313 6191.51,3301.48 6171.95,3306.67 "/>
     <line class="sailee1" class="fil0 str3" x1="5806.77" y1="3355.83" x2="6088.46" y2= "3282.29" />
     <path class="sailee1" class="fil0 str3" d="M5849.79 3348.74c83.91,-29.72 78.43,-43.6 181.55,-44.68 41.34,-0.44 68.66,2.53 106.86,4.85l-3.97 -1.67"/>
     <path class="sailee1" class="fil0 str3" d="M5849.79 3369.78c116.59,-55.41 179.35,-49.52 293.94,-54.37l-5.53 -6.5"/>
     <path class="sailee1" class="fil0 str3" d="M5911.74 3362.76c126.65,-113.53 198.96,-33.1 290.58,-47.35"/>
     <path class="sailee1" class="fil0 str3" d="M5942.72 3362.76c25.09,-8.68 232.64,-90.51 247.81,-49.08"/>
     <line class="sailee1" class="fil0 str3" x1="5998.47" y1="3362.76" x2="6283.46" y2= "3320.69" />
     <path class="sailee1" class="fil0 str3" d="M6029.45 3369.78c111.07,-93.34 102.27,-65.99 210.64,-70.13"/>
     <path class="sailee1" class="fil0 str3" d="M6091.4 3369.78c47.16,-78.99 190.21,-69.08 196.73,-54.37"/>
     <path class="sailee1" class="fil0 str3" d="M6122.39 3362.76c67.91,-3.17 111.96,-40.84 200.08,-6.99 4.74,1.82 6.04,1.67 10.55,-0.02"/>
     <path class="sailee1" class="fil0 str3" d="M6169.14 3355.75c19.34,-1.14 192.11,-21.31 213.44,0"/>
     <path class="sailee1" class="fil0 str3" d="M6202.92 3369.78c59.01,-61.11 66.13,-29.52 132.85,-26.69l3.92 3.34"/>
     <path class="sailee1" class="fil0 str3" d="M5378.94 3362.76c111.84,-91.19 99.89,-109.88 259.31,-98.17"/>
     <path class="sailee1" class="fil0 str3" d="M5595.78 3369.78c36.11,-95.59 73.86,-142.06 175.9,-156.48 6.1,-0.86 6.78,-2.21 9.96,2.21"/>
     <path class="sailee1" class="fil0 str3" d="M5806.77 3355.83c18.84,-14.06 187.17,-120.53 222.68,-70.2"/>
     <path class="sailee1" class="fil0 str3" d="M5696.86 3324.43c60.99,-60.66 120.21,-80.14 200.42,-66.12l7.06 4.74"/>
     <line class="sailee1" class="fil0 str3" x1="5645.34" y1="3299.65" x2="5767.6" y2= "3276.83" />
     <path class="sailee1" class="fil0 str3" d="M5422.31 3390.82c43.58,-75.12 97.27,-131.83 179.78,-146.46 4.42,-0.79 39.92,-1.24 43.06,5.62"/>
     <path class="sailee1" class="fil0 str3" d="M5261.23 3418.86l99.35 -141.35c48.57,-62.01 25.73,-41.44 74.78,-37.41l5.53 3.46"/>
     <path class="sailee1" class="fil0 str3" d="M5994 3326.37c44.6,-38.66 137.23,-90.39 196.53,-61.78"/>
     <path class="sailee1" class="fil0 str3" d="M6048.03 3355.75c29.6,-94.69 120.52,-83.45 188.6,-60.83l18.26 4.73"/>
     <path class="sailee1" class="fil0 str3" d="M6202.92 3369.78c55.17,-11.94 30.39,-31.65 128.16,-31.01 7.09,0.05 33.24,-2.92 38.79,2.58"/>
     <path class="sailee1" class="fil0 str3" d="M6252.48 3348.74c15.93,1 202.98,1.37 109.56,12.91 -4.32,0.54 -3.22,0.98 -6.06,-5.9"/>
     <path class="sailee1" class="fil0 str3" d="M6109.99 3376.79c48.2,-13.79 262.56,-47.97 297.98,7.68"/>
     <path class="sailee1" class="fil0 str3" d="M6421.71 3369.78c0.06,-0.03 8.54,-19.76 9.96,12.52l0.48 8.52"/>
     <path class="sailee1" class="fil0 str3" d="M6244.59 3385.37c44.55,-36.8 136.24,-4.67 174.43,32.19 0.46,0.45 -28.67,-52.48 -139.31,-52.48 -31.36,0 -124.89,3.8 -11.8,-19.37 31.53,-6.46 254.02,22.58 87.53,-11.22 -57.56,-11.69 -146.38,-28.77 -195.89,14.25"/>
     <path class="sailee1" class="fil0 str3" d="M6269.52 3372.64c15.38,10.75 160.68,74.22 162.63,102.32"/>
    </g>
   </g>
   <g class="sailee1">
    <line class="sailee1" class="fil0 str3" x1="4328.34" y1="3517.03" x2="4284.98" y2= "3313.67" />
    <g>
     <path class="sailee1" class="fil0 str3" d="M4340.74 3474.96c-25.94,-49.66 -69.63,-191.29 -123.92,-210.37"/>
     <polyline class="sailee1" class="fil0 str3" points="4161.07,3299.65 4322.15,3481.96 4161.66,3259.11 "/>
     <path class="sailee1" class="fil0 str3" d="M4322.15 3481.96c-53.71,-61 -25.38,-196.19 -152.35,-232.07 -11.56,-3.27 -22.28,-2.52 -33.51,0.67"/>
     <path class="sailee1" class="fil0 str3" d="M4291.17 3460.93c-16.89,-131.73 -25.61,-185.49 -163.76,-206.2 -2.76,-0.41 -30.89,-2.53 -34.49,-4.17"/>
     <path class="sailee1" class="fil0 str3" d="M4266.39 3446.9c-89.74,-187.76 -143.21,-141.21 -278.79,-154.27"/>
     <polyline class="sailee1" class="fil0 str3" points="4216.82,3404.83 3995.88,3261.4 3975.21,3257.57 "/>
     <line class="sailee1" class="fil0 str3" x1="4138.13" y1="3353.74" x2="4110.11" y2= "3253.07" />
     <path class="sailee1" class="fil0 str3" d="M4198.24 3390.81c-76.11,-86.39 -59.95,-98.57 -198.48,-124.08l-14.22 -7.25"/>
     <path class="sailee1" class="fil0 str3" d="M4185.85 3418.85c-76.74,-77.4 -160.42,-135.82 -266.4,-119.2"/>
     <polyline class="sailee1" class="fil0 str3" points="4130.09,3369.77 3882.66,3277.42 3820.33,3264.59 "/>
     <path class="sailee1" class="fil0 str3" d="M4235.41 3439.89c-38.86,-121.38 -119.63,-123.53 -198.25,-161.28"/>
     <path class="sailee1" class="fil0 str3" d="M4216.82 3453.91l-18.77 -34.61 -12.2 -0.45c-30.44,-76.5 -196.95,-76.98 -282.98,-102.53"/>
     <path class="sailee1" class="fil0 str3" d="M4148.68 3425.87c-42.41,-88.75 -178.57,-125.7 -259.73,-152.38 -13.98,-4.6 -24.04,-9.62 -37.46,-2.48"/>
     <path class="sailee1" class="fil0 str3" d="M4052.64 3357.83c-10.43,-22.34 -15.22,-48.56 -29.44,-33.33"/>
     <path class="sailee1" class="fil0 str3" d="M4113.76 3424.73c-44.1,-84.44 -156.99,-117.78 -237.67,-139.11"/>
     <path class="sailee1" class="fil0 str3" d="M4074.33 3411.84c-66.61,-37.16 -210.14,-109.02 -295,-133.55l-14.76 0.32"/>
     <path class="sailee1" class="fil0 str3" d="M4043.36 3411.84c-59.7,-89.34 -82.28,-79.58 -167.75,-114.41 -30.44,-12.41 -84.57,-22.68 -118.53,-16.97l0.77 -9.45"/>
     <path class="sailee1" class="fil0 str3" d="M3999.99 3390.81l-254.97 -87.55c-143.6,-49.3 -105.97,-19.37 -104.36,-24.65"/>
     <path class="sailee1" class="fil0 str3" d="M3950.43 3404.83c-65.85,-89.84 -39.21,-82.63 -163.32,-120.09 -31.71,-9.57 -170.8,-33.9 -199.63,-6.13"/>
     <path class="sailee1" class="fil0 str3" d="M3900.86 3390.81c-14.91,-63 -175.26,-72.51 -235.05,-88.75 -16.04,-4.35 -108.79,-29.21 -122.81,-23.45"/>
     <path class="sailee1" class="fil0 str3" d="M3876.09 3383.79c-56.29,-53.1 -348.57,-110.45 -396.51,-84.14"/>
     <path class="sailee1" class="fil0 str3" d="M3832.72 3383.79c-28.72,-29.09 -264.75,-69.7 -311.32,-67.27 -17.01,0.88 -111.62,17.14 -122.36,32.21"/>
     <path class="sailee1" class="fil0 str3" d="M3758.37 3376.78c-70.02,-52.98 -237.76,-98.16 -322.42,-95.1l-12.13 3.94"/>
     <polyline class="sailee1" class="fil0 str3" points="3733.59,3383.79 3419.71,3334.03 3305.13,3322.5 3324.7,3327.7 "/>
     <line class="sailee1" class="fil0 str3" x1="3689.87" y1="3376.86" x2="3408.19" y2= "3303.32" />
     <path class="sailee1" class="fil0 str3" d="M3646.86 3369.77c-83.92,-29.72 -78.44,-43.6 -181.55,-44.68 -41.35,-0.44 -68.67,2.52 -106.87,4.85l3.98 -1.67"/>
     <path class="sailee1" class="fil0 str3" d="M3646.86 3390.81c-116.6,-55.41 -179.36,-49.52 -293.95,-54.38l5.53 -6.49"/>
     <path class="sailee1" class="fil0 str3" d="M3584.9 3383.79c-126.65,-113.53 -198.96,-33.1 -290.58,-47.36"/>
     <path class="sailee1" class="fil0 str3" d="M3553.93 3383.79c-25.1,-8.68 -232.64,-90.51 -247.82,-49.09"/>
     <line class="sailee1" class="sailee1" class="fil0 str3" x1="3498.17" y1="3383.79" x2="3213.18" y2= "3341.72" />
     <path class="sailee1" class="fil0 str3" d="M3467.19 3390.81c-111.07,-93.34 -102.26,-65.99 -210.64,-70.13"/>
     <path class="sailee1" class="fil0 str3" d="M3405.24 3390.81c-47.16,-78.99 -190.21,-69.08 -196.73,-54.38"/>
     <path class="sailee1" class="fil0 str3" d="M3374.26 3383.79c-67.92,-3.17 -111.97,-40.84 -200.09,-7 -4.73,1.83 -6.04,1.68 -10.55,-0.01"/>
     <path class="sailee1" class="fil0 str3" d="M3327.5 3376.78c-19.34,-1.14 -192.11,-21.31 -213.44,0"/>
     <path class="sailee1" class="fil0 str3" d="M3293.72 3390.81c-59.01,-61.11 -66.13,-29.52 -132.84,-26.7l-3.93 3.35"/>
     <path class="sailee1" class="fil0 str3" d="M4117.7 3383.79c-111.84,-91.19 -99.89,-109.89 -259.31,-98.17"/>
     <path class="sailee1" class="fil0 str3" d="M3900.86 3390.81c-36.11,-95.59 -73.86,-142.06 -175.9,-156.48 -6.1,-0.86 -6.78,-2.21 -9.96,2.2"/>
     <path class="sailee1" class="fil0 str3" d="M3689.87 3376.86c-18.84,-14.06 -187.17,-120.53 -222.68,-70.2"/>
     <path class="sailee1" class="fil0 str3" d="M3799.78 3345.46c-60.99,-60.66 -120.21,-80.14 -200.41,-66.12l-7.07 4.73"/>
     <line class="sailee1" class="fil0 str3" x1="3851.3" y1="3320.68" x2="3729.04" y2= "3297.86" />
     <path class="sailee1" class="fil0 str3" d="M4074.33 3411.84c-43.58,-75.11 -97.27,-131.82 -179.78,-146.45 -4.42,-0.79 -39.92,-1.24 -43.06,5.62"/>
     <path class="sailee1" class="fil0 str3" d="M4235.41 3439.89l-99.35 -141.35c-48.57,-62.01 -25.73,-41.44 -74.78,-37.42l-5.53 3.47"/>
     <path class="sailee1" class="fil0 str3" d="M3502.65 3347.4c-44.6,-38.66 -137.23,-90.39 -196.54,-61.78"/>
     <path class="sailee1" class="fil0 str3" d="M3448.61 3376.78c-29.59,-94.69 -120.52,-83.45 -188.6,-60.84l-18.26 4.74"/>
     <path class="sailee1" class="fil0 str3" d="M3293.72 3390.81c-55.17,-11.95 -30.39,-31.65 -128.15,-31.01 -7.09,0.05 -33.25,-2.92 -38.8,2.57"/>
     <path class="sailee1" class="fil0 str3" d="M3244.16 3369.77c-15.93,0.99 -202.98,1.37 -109.56,12.91 4.32,0.54 3.23,0.98 6.06,-5.9"/>
     <path class="sailee1" class="fil0 str3" d="M3386.65 3397.81c-48.2,-13.78 -262.56,-47.97 -297.97,7.69"/>
     <path class="sailee1" class="fil0 str3" d="M3074.93 3390.81c-0.06,-0.03 -8.54,-19.76 -9.96,12.52l-0.48 8.51"/>
     <path class="sailee1" class="fil0 str3" d="M3252.05 3406.4c-44.55,-36.8 -136.23,-4.67 -174.43,32.19 -0.46,0.45 28.68,-52.48 139.31,-52.48 31.36,0 124.89,3.8 11.8,-19.37 -31.52,-6.46 -254.01,22.58 -87.53,-11.22 57.56,-11.69 146.38,-28.77 195.89,14.25"/>
     <path class="sailee1" class="fil0 str3" d="M3227.12 3393.67c-15.38,10.75 -160.67,74.22 -162.63,102.32"/>
    </g>
   </g>
   <g>
    <path class="sailee1" class="fil0 str3" d="M6136.3 3836.66c3.79,-13.03 -119.53,-75.17 -130.07,-80.48 -260.94,-131.45 -589.52,-25.05 -763.74,244.55 7.13,2.4 78.02,45.96 158.41,76.16 94.78,35.6 202.8,58.63 235.16,60.58 193.13,11.65 418.02,-79.44 509.83,-279.39 3.53,-7.68 2.14,-14.82 2.14,-24"/>
    <path class="sailee1" class="fil0 str3" d="M6147.29 3780.26c-40.65,-136.12 -401.51,-148.36 -522.22,-94"/>
    <path class="sailee1" class="fil0 str3" d="M5463.27 3768.55c-25.11,55.57 -29.75,269.37 151.39,334.34 131.35,47.11 362.22,-97.03 275.52,-371.69 -2.02,-6.41 0.73,-5.82 -2,-15.3"/>
    <path class="sailee1" class="fil0 str3" d="M5724.02 4187.6c107.68,-4.55 270.38,-77.23 323.32,-135.38 22.07,-24.24 103.75,-140.19 103.75,-123.07"/>
    <path class="sailee1" class="fil1 str4" d="M5614.66 4102.89c131.35,47.11 362.22,-97.03 275.52,-371.69 -2,-6.32 0.65,-5.84 -1.89,-14.9 -136.16,-27.06 -294.42,-1.87 -430.95,69.93 -18.6,73.61 -8.22,257.28 157.32,316.66z"/>
    <path class="sailee1" class="fil0 str3" d="M5888.18 3715.9c39.95,12.17 285.1,86.33 275.6,133.29"/>
    <path class="sailee1" class="fil0 str3" d="M6136.3 3836.66c3.79,-13.03 -119.53,-75.17 -130.07,-80.48 -260.94,-131.45 -589.52,-25.05 -763.74,244.55 7.13,2.4 78.02,45.96 158.41,76.16 94.78,35.6 202.8,58.63 235.16,60.58 193.13,11.65 418.02,-79.44 509.83,-279.39 3.53,-7.68 2.14,-14.82 2.14,-24"/>
    <path class="sailee1" class="fil0 str3" d="M6147.29 3780.26c-40.65,-136.12 -401.51,-148.36 -522.22,-94"/>
    <path class="sailee1" class="fil0 str3" d="M5463.27 3768.55c-25.11,55.57 -29.75,269.37 151.39,334.34 131.35,47.11 362.22,-97.03 275.52,-371.69 -2.02,-6.41 0.73,-5.82 -2,-15.3"/>
    <path class="sailee1" class="fil0 str3" d="M5724.02 4187.6c107.68,-4.55 270.38,-77.23 323.32,-135.38 22.07,-24.24 103.75,-140.19 103.75,-123.07"/>
    <path class="sailee1" class="fil1 str4" d="M5614.66 4102.89c131.35,47.11 362.22,-97.03 275.52,-371.69 -2,-6.32 0.65,-5.84 -1.89,-14.9 -136.16,-27.06 -294.42,-1.87 -430.95,69.93 -18.6,73.61 -8.22,257.28 157.32,316.66z"/>
    <path class="sailee1" class="fil0 str3" d="M5888.18 3715.9c39.95,12.17 285.1,86.33 275.6,133.29"/>
   </g>
   <g>
    <path class="sailee1" class="fil0 str3" d="M3386.76 3806.03c-3.79,-13.04 119.53,-75.18 130.07,-80.49 260.94,-131.45 589.53,-25.05 763.74,244.55 -7.13,2.4 -78.02,45.97 -158.41,76.16 -94.77,35.6 -202.8,58.64 -235.16,60.58 -193.13,11.65 -418.02,-79.43 -509.83,-279.39 -3.52,-7.68 -2.14,-14.82 -2.14,-24"/>
    <path class="sailee1" class="fil0 str3" d="M3375.77 3749.63c40.65,-136.13 401.51,-148.37 522.22,-94.01"/>
    <path class="sailee1" class="fil0 str3" d="M4059.8 3737.92c25.1,55.57 29.74,269.36 -151.4,334.33 -131.35,47.11 -362.22,-97.03 -275.52,-371.68 2.02,-6.41 -0.73,-5.83 2,-15.3"/>
    <path class="sailee1" class="fil0 str3" d="M3799.04 4156.96c-107.68,-4.55 -270.38,-77.22 -323.32,-135.37 -22.07,-24.24 -103.74,-140.2 -103.74,-123.08"/>
    <path class="sailee1" class="fil1 str4" d="M3908.4 4072.25c-131.35,47.11 -362.22,-97.03 -275.52,-371.68 2,-6.32 -0.65,-5.84 1.89,-14.91 136.16,-27.05 294.43,-1.87 430.95,69.93 18.6,73.61 8.22,257.29 -157.32,316.66z"/>
    <path class="sailee1" class="fil0 str3" d="M3634.88 3685.27c-39.95,12.17 -285.1,86.32 -275.6,133.29"/>
    <path class="sailee1" class="fil0 str3" d="M3386.76 3806.03c-3.79,-13.04 119.53,-75.18 130.07,-80.49 260.94,-131.45 589.53,-25.05 763.74,244.55 -7.13,2.4 -78.02,45.97 -158.41,76.16 -94.77,35.6 -202.8,58.64 -235.16,60.58 -193.13,11.65 -418.02,-79.43 -509.83,-279.39 -3.52,-7.68 -2.14,-14.82 -2.14,-24"/>
    <path class="sailee1" class="fil0 str3" d="M3375.77 3749.63c40.65,-136.13 401.51,-148.37 522.22,-94.01"/>
    <path class="sailee1" class="fil0 str3" d="M4059.8 3737.92c25.1,55.57 29.74,269.36 -151.4,334.33 -131.35,47.11 -362.22,-97.03 -275.52,-371.68 2.02,-6.41 -0.73,-5.83 2,-15.3"/>
    <path class="sailee1" class="fil0 str3" d="M3799.04 4156.96c-107.68,-4.55 -270.38,-77.22 -323.32,-135.37 -22.07,-24.24 -103.74,-140.2 -103.74,-123.08"/>
    <path class="sailee1" class="fil1 str4" d="M3908.4 4072.25c-131.35,47.11 -362.22,-97.03 -275.52,-371.68 2,-6.32 -0.65,-5.84 1.89,-14.91 136.16,-27.05 294.43,-1.87 430.95,69.93 18.6,73.61 8.22,257.29 -157.32,316.66z"/>
    <path class="sailee1" class="fil0 str3" d="M3634.88 3685.27c-39.95,12.17 -285.1,86.32 -275.6,133.29"/>
   </g>
   <g>
    <g>
     <path  class="sailee1" class="fil0 str3" d="M4095.19 5550.45c136.68,104.99 361.85,218.9 605.28,217.47 100.25,-0.58 403.73,-19.08 529.94,-142.51 8.89,-8.7 169.44,-115.22 177.84,-108.71 -13.39,-0.52 -36.75,-6.46 -43.78,-14.52 -149.58,-171.41 -1035.55,-199.42 -1269.28,48.27z"/>
     <path class="sailee1" class="fil0 str3" d="M4095.19 5550.45c36.93,-70.7 293.78,-292.93 530.99,-261.83 120.88,15.85 72.06,-6.26 268.17,-13.8 145.37,-5.58 450.85,154.12 524.55,237.28l-10.65 4.6c0.36,19.08 7.06,27.16 -5.7,42.04 -128.41,149.72 -475.1,299.17 -665.99,294.95 -130.69,-2.89 -570.59,-136.39 -641.37,-303.24z"/>
     <path class="sailee1" class="fil0 str3" d="M4097.25 5548.29c132.18,-22.21 400.43,-73.32 545.35,-73.32 203.81,0 504.85,-21.16 691.61,36.53 10.5,3.25 23.65,-2.07 36.08,-4.85"/>
     <path class="sailee1" class="fil0 str3" d="M4403.08 5696.4c318.15,-27.16 -64,4.24 439.15,-36.06 29.16,-1.6 314.82,9.76 329.58,8.79"/>
     <path class="sailee1" class="sailee1" class="fil0 str3" d="M4319.73 5511.08c1.81,-31.38 -2.44,-51.26 -13.91,-78.26"/>
     <path class="sailee1" class="fil0 str3" d="M4455.28 5490.45c48.13,-17.71 18.65,-75.48 20.65,-82.48"/>
     <path class="sailee1" class="fil2 str3" d="M4482.97 5453.01c14.45,23.28 32.26,51.98 0,0z"/>
     <path class="sailee1" class="fil0 str3" d="M4666.3 5372.35c0.64,34.26 0.13,68.32 0.47,102.53"/>
     <path class="sailee1" class="fil0 str3" d="M4807.86 5471.71c39.45,-29.63 72.56,-59.06 53.83,-101.08"/>
     <path class="sailee1" class="fil0 str3" d="M4861.55 5471.71c0.1,-6.08 -1.24,-69.44 5.47,-75.35"/>
     <path class="sailee1" class="fil0 str3" d="M5032.4 5471.71c59.31,-29.72 54.69,-28.44 68.67,-75.99"/>
     <path class="sailee1" class="fil2 str3" d="M5276.44 5444.83c-22.86,34.31 -5.91,8.86 0,0z"/>
     <path class="sailee1" class="fil2 str3" d="M4471.74 5690.51c-134.63,20.8 -8.95,1.38 0,0z"/>
     <path class="sailee1" class="fil0 str3" d="M4645.49 5676.04c-22.91,1.81 -45.09,15.02 -28,88.13 10.63,-31.5 -16.88,-58.41 -37.63,-82.95"/>
     <path class="sailee1" class="fil0 str3" d="M4793.21 5764.17c11.72,-48.49 -11.53,-32.12 28.83,-89.62 5.62,-8 8.95,-16.3 20.19,-14.21"/>
     <path class="sailee1" class="fil0 str3" d="M4370.98 5704.18c7.08,-1.76 48.28,-15.03 54.85,-9.73"/>
     <path class="sailee1" class="fil0 str3" d="M4746.84 5668.56c23.87,4.7 39.5,22.12 50.87,36.62"/>
     <path class="sailee1" class="fil0 str3" d="M4937.21 5662.94c21.34,20.97 36.65,52.47 28.94,77.72"/>
     <path class="sailee1" class="sailee1" class="fil0 str3" d="M4956.74 5687.31c3.42,-18.2 0.73,-19.13 19.41,-26.6l0.92 2.65"/>
     <path class="sailee1" class="fil2 str3" d="M5078.94 5666.69c0.91,76.06 0.16,13.08 0,0z"/>
    </g>
    <path class="sailee1" class="fil0 str3" d="M4536.41 5917.62c97.36,-39.28 452.37,-67.48 528.06,-14.02"/>
    <path class="sailee1" class="fil0 str3" d="M4739.77 5903.6c25.87,-18.39 83.55,-13.48 112.19,0"/>
   </g>
   <path class="sailee1" class="fil0 str3" d="M4456.25 4636.08c-141.13,60.8 -248.99,131.38 -178.85,283.98 38.28,83.28 123.43,79 206.89,73.65"/>
   <path class="sailee1" class="fil0 str3" d="M4465.77 4972.17c108.25,-93.69 210.12,149.93 477.24,-12.18 10.04,-6.08 67,-6.45 69.72,-1.84"/>
   <path class="sailee1" class="fil0 str3" d="M4998.03 4636.51c141.13,60.8 248.99,131.38 178.85,283.98 -38.28,83.28 -123.43,79 -206.89,73.65"/>
   <path class="sailee1" class="fil0 str3" d="M3918.84 5297c11.94,49.38 8.13,253.96 -28.05,266.46"/>
   <path class="sailee1" class="fil0 str3" d="M5570.04 5202.53c-57.99,121.99 -93.88,303.96 14.03,413.72"/>
   <path class="sailee1" class="fil0 str3" d="M3471.21 5796.03c18.09,171.18 64.66,928.8 -133.24,967.7"/>
   <path class="sailee1" class="fil0 str3" d="M5897.47 6062.49c-50.86,43.51 -82.06,473.69 48.34,613.19 12.79,13.68 24.65,37.98 42.81,52.99"/>
   <path class="sailee1" class="fil0 str3" d="M2580.64 4260.34c30.48,631.14 -401.21,545.87 157.84,1174.87 133.29,149.98 117.82,271.3 115.64,458.99"/>
   <path class="sailee1" class="fil0 str3" d="M2615.98 5288.75c-612.8,1097.6 -50.26,510.54 118.33,1263.3 42.34,189 -128.29,493.56 -104.58,604.36"/>
   <path class="sailee1" class="fil0 str3" d="M3485.23 6020.42c54.04,47.24 194.52,830.28 195.99,946.51 1.75,138.75 -32.31,297.6 -132.88,399.85"/>
   <path class="sailee1" class="fil0 str3" d="M3674.56 7072.26c291.4,718.51 -322.73,925.98 -673.18,1248.2"/>
   <path class="sailee1" class="fil0 str3" d="M2435.46 5992.88c-569.4,1723.98 31.14,853.93 61.73,1880.37 4.22,141.63 -110,423.9 -187.96,545.88"/>
   <line class="sailee1" class="fil0 str5" x1="6410.82" y1="3822.78" x2="6758.84" y2= "3782.05" />
   <line class="sailee1" class="fil0 str5" x1="3092.23" y1="3830.77" x2="2770.37" y2= "3801.64" />
  </g>
 </g>
</svg>
<span style="padding: 10px;">Hey!! 
	       Sailee Salgaonkar here! I hope that you and your family are safe.
    	   Thank you,
    	   Sailee Salgaonkar</span>
    </div>
    <div id="about">
    	<div class="page">
    		<p class="caption">HOME</p> 
    		<p>
    			<ul>
    				<li>TOP LIVE COVID19 NEWS(Using API)</li>
    				<li>COVID19 CASES IN INDIA AND ITS STATE(Using API)</li>
    				<li>COVID19 CASES IN DISTRICTS(Using API)</li>
    			</ul>
    		</p>
    	</div>
    	<div class="page">
    		<p class="caption">ABOUT COVID19</p>
    		<ul>
    			<li>COVID19</li>
    			<li>PRECAUTIONS</li>
    			<li>Symptoms</li>
    		</ul>
    		Get updates of available services provided by government and non-government bodies in specific region. 
    	</div>
    	<div class="page">
    		<p class="caption">ANALYTICS</p>
    		HERE MAPS IS used to get INDIA MAP.
    		
    		<ul>
    			JQUERY IMPLEMENTED:
    		  <li>Converted screen X,Y coordinates into latitude,longitude</li>
    		  <li>Get City, State name depending upon latitude,longitude</li>
    		  <li>Depending upon zoom level and city/state selected get covid19 cases report</li>
    		</ul>
    	</div>

    </div>
</body>
</html>