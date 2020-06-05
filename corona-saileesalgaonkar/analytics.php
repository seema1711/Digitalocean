<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">

    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />

<script src="//www.amcharts.com/lib/3/amcharts.js"></script>
<script src="//www.amcharts.com/lib/3/serial.js"></script>
<script src="//www.amcharts.com/lib/3/themes/light.js"></script>

  
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
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
       #mapContaineri{
        width: 30%;
        margin-top: 20px;
        float: right;
       }
         #analytics
          {
            width: 90vw;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;


          }
       #img1,#img2{
        width: 30%;
        height: 300px;
       }
       #img1{
        background: url('img/state.png');
        background-size: contain;
        margin-left: 20px;
        float: left;
        background-repeat: no-repeat;
       }
       #img2{
        background: url('img/district.png');
        background-size: contain;
        background-repeat: no-repeat;
      
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
         
          border-radius:0 0 15px 15px;
          background: #eaebec;
          box-shadow:  7px 7px 14px #b9baba, 
                     -7px -7px 14px #ffffff;
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
          #nav-links ul li a:hover, #nav-links ul li a:New{
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
          .H_ib_body
              {
                position: relative;
                top: -60px;
                color: white;
                font-size: 14px;
                background-color: rgba(0,0,0,0.8);
              }

          .H_ib_content
          {
                color:white;
              } 
        
          #mapContainer{
            margin-top: 40px;
            width: 70%;
            height: 75vh;
            border-radius: 5px;
              background: #ebebeb;
              box-shadow:  7px 7px 14px #cccccc, 
                       -7px -7px 14px #ffffff;
          }

        
         


          @media all and (max-width: 800px)
          {
              #analytics
            {
            width: 90vw;
            display: flex;
            flex-direction: column;
            }
            #mapContaineri{
              width: 90vw;

            }
            #img1,#img2{
              margin-top: 20px;
            }
              #mapContainer{
                width: 90vw;
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
    .toggle.New:before{
      content: '\f00d';
    font-family:fontAwesome;
      display: block; 
     
    }
    

  #nav-links.New ul{
    display: block;
        margin-left: 0%;
        padding: 2% 5%;
        width: 100%;

        transition: all .2s linear; 
    }
  #nav-links.New ul li{
      width: 100%;
    display: block;
     
    }
    #nav-links.New ul li a{
    color: black;
    font-size: 1em;
        text-align: center;
    }
    #nav-links.New ul li a:New,
    #nav-links.New ul li a:hover{
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
    <center>
    <div id="analytics">
     <div id="mapContainer"></div>
     <div id="mapContaineri">Tap on required region(state/district within INDIA) and get covid19 updates in region.
      <br>
      <div id="img1"></div>
      <div id="img2"></div>
     </div>

    </div>
  </center>





    <script>
      $('.toggle').click(function(){
      $('.toggle').toggleClass('New')
      $('nav').toggleClass('New')
    })
                      
                  

function addInfoBubble(map,zoom){
  var group = new H.map.Group();
  var corona = new H.map.Icon("img/covid.svg");
  map.addObject(group);
  
  map.addEventListener('tap', function (event) {
           var geocoderservice = platform.getGeocodingService();
         
           var position = map.screenToGeo(
            event.currentPointer.viewportX,
            event.currentPointer.viewportY,

            );
            
           map.removeObjects(map.getObjects());
           var marker = new H.map.Marker(position,{icon:corona});
           var a = [position];
           geocoderservice.reverseGeocode(
           {
            mode:"retrieveAddress",
            maxresults:1,
            prox:a[0].lat+","+a[0].lng+","+100,
           },
           success=>{
            
               var states = 'http://covid19-india-adhikansh.herokuapp.com/state/'+ success.Response.View[0].Result[0].Location.Address.AdditionalData[1].value;
               if(map.getZoom()<6)
               { 
               $.get(states,
                function(data)
                { 
                 var state = success.Response.View[0].Result[0].Location.Address.AdditionalData[1].value;  
                 var bubble =  new H.ui.InfoBubble(position,{
                
                  content : '<div style="border-bottom:1px solid white;">'+state+'</div>'+'<div style="color:skyblue;">Total:'+data['data'][0]['total']+'</div>'+'<div style="color:pink;">Active:'+data['data'][0]['active']+'</div>'+'<div style="color:lightgreen;">Cured:'+data['data'][0]['cured']+'</div>'+'<div style="color:orange;">Death:'+data['data'][0]['death']+'</div>'
                  
                });
              
                ui.getBubbles().forEach(bub=>ui.removeBubble(bub));

                ui.addBubble(bubble);
                map.addObjects([marker]);
                
               });
               }
               else{
                $.get('https://api.covid19india.org/state_district_wise.json',
                function(data)
                { 
                 var state =  success.Response.View[0].Result[0].Location.Address.AdditionalData[1].value;  
                 var district = success.Response.View[0].Result[0].Location.Address.AdditionalData[2].value;  
                 var bubble =  new H.ui.InfoBubble(position,{
                
                  content : '<div style="border-bottom:1px solid white;">'+district+'</div>'+'<div style="color:skyblue;">Total:'+data[state]['districtData'][district]['confirmed']+'</div>'+'<div style="color:pink;">Active:'+data[state]['districtData'][district]['active']+'</div>'+'<div style="color:lightgreen;">Cured:'+data[state]['districtData'][district]['recovered']+'</div>'+'<div style="color:orange;">Death:'+ data[state]['districtData'][district]['deceased']+'</div>'
                  
                });
              
                ui.getBubbles().forEach(bub=>ui.removeBubble(bub));

                ui.addBubble(bubble);
                map.addObjects([marker]);
                
               });


               }
               },
                       error=>{
                        console.log(error);

                       }

                        );

              
              });
             
            }
      
   
    var platform = new H.service.Platform({
      apikey: 'Vnr5WLzl1VoMTwtD4WUT-2B3S3dn4-t42cSqPVkk0i8'
    });
    var defaultLayers = platform.createDefaultLayers();

  
    var map = new H.Map(document.getElementById('mapContainer'),
      defaultLayers.vector.normal.map,{
      center: { lng: 78.96, lat: 20.59 },
      zoom: 4.9,
      pixelRatio: window.devicePixelRatio || 1
    });
   
    window.addEventListener('resize', () => map.getViewPort().resize());

    var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

    
    var ui = H.ui.UI.createDefault(map, defaultLayers);

    addInfoBubble(map);
                        



    </script>
  </body>
</html>










