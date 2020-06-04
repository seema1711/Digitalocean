<style type="text/css">
html{
    scroll-behavior: smooth;
}
*{
    margin:0px;
    padding:0px;
    box-sizing:border-box;
    /* font-family: 'Muli', sans-serif;s */
}
body {
    margin: 0;
     /* background-color:#00ccff; */
     width: 100%; 
     background-image: linear-gradient(rgba(0,0,0,0.9), rgba(0,0,0,0.9)) ,url('image/main.jpg'); 
     background-size: cover;
       color:#fff;                     
  
}
.row{
    margin-left:0!important;
    margin-right:0!important;
}


.class_alert{
    background-color: #a29bfe;
    font-weight:bolder;
    font-size:2rem;
}
.nav_style a{
    color:white;
}
/*......main header......*/
.main_header{
    height:450px;
    width:100%;
}
.rightside h1{
    font-size:3rem;
}
.corona_rot img{
    animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
    0%{transform:rotate(0);}
    100%{transform:rotate(360deg);}    
}
.leftside img{ 
    animation:heartbeat 5s linear infinite; }
    @keyframes heartbeat{
    0%{transform:scale(.75);}
    20%{transform:scale(1);} 
    40%{transform:scale(.75);}
    60%{transform:scale(1);}
    80%{transform:scale(.75);}
    100%{transform:scale(.75);}   
} 
  /*.....Corona Updates  */
.corona_update{
      margin: 0 0 30px 0;
  }
.corona_update h3{
      color:#ff7675
  }
  /* .corona_update h1{ 
      font-size:2rem;
      text-align:center;
  }
  
/* ------footer---- */
footer{
    position: fixed;
   /* left: 0; */
   bottom: 0;
   width: 100%;
   padding:10px 10px 0px 10px;
  
   height:40px;
   background-color:#6a149b;
}
.footer-container{
    height:100%;
    display: flex;
    justify-content:center;
}
.copyright{
    height:100%;
    display:flex;
    flex-direction:column;
    justify-content:center;
}
.copyright p{
    color:#FFF;
}

/* ------top scroll------ */
#myBtnn {
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtnn:hover {
  background-color: #555;
}
.footer_link
{
    color:white;
    text-decoration:none;
    }
@media screen and (max-width: 768px){
     .main_header{
         height:700px;
         text-align:center;
     }
     .first_head{
         font-size:1rem;
     }
     .main_header h1{
         text-align:center;
         padding:0;
         width:100%;}
        
        p {
            font-size:1.5rem;

     }
     
                

     /* .wrapper{
    height:100vh !important;
    width:100vw  ! important ; */
 } 
     

    
            }

    .chart{
    width: 80%;
    height: 70vh;
    min-height: 500px;
    margin: 0 auto;
    padding: 50px 0;




} 
 
</style>
