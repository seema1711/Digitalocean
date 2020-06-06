<style type="text/css">
html{
    scroll-behavior: smooth;
}
*{ margin: 0; padding: 0; box-sizing: border-box;font-family: 'Muli', sans-serif;}
.row{ margin-left: 0!important; margin-right: 0!important;}
.nav_style{
    background-color: #ff6347!important;
}
.nav_style a{color: white; }
/*///////// bar//////////*/
.main-nav{
    float: right;
    margin-top: 60px; 
}
.main-nav li{
    display: inline-block;
    list-style: none;
    margin-left: 40px;
}

.main-nav li a{
    padding: 5px 0;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 90%;
    font-weight: 100;
}
.mobile-icon{display: none;}


@media only screen and (max-width: 768px){
    h1{font-size: 180%;}

    .main-nav{display: none;}

    .mobile-icon{ display: inline-block;
        color: #fff;
        float: right;
        margin-top: 10px;
        margin-right:  20px;
    }
    .main-nav{float: left;}
    .main-nav li{
        display: block;
        margin-top: 10px;
    }


}

/*/////////// main header \\\\\\\\\*/ 
.main_header{
    height: 450px;
    width: 100%;
}
.rightside h4{
    font-size: 2rem;
}
.corona_rot img{
    animation: gocorona 1s linear infinite;
}
@keyframes gocorona{
    0%{ transform: rotate(0);}
    100%{ transform: rotate(360deg);}

}
.leftside img{ 
    animation: heartbeat 5s linear infinite;
}
@keyframes heartbeat{
0%{
    transform: scale(.75);
}
20%{
    transform: scale(1);
}
40%{
    transform: scale(.75);
}
60%{
    transform: scale(1);
}
80%{
    transform: scale(.75);
}
100%{
    transform: scale(1);
}
}
/*!-- ************* corona updates ****************/
.corona_update{

}
.corona_update h3{ color: #ff7675; }
.corona_update h1{ font-size: 2 rem; text-align: center;}
/*///////////////////// about section ////////////////*/
.sub_section{
    background-color: #b4b4b4;
}

/*//////////////// footer //////////////*/
.footer_style{
    background-color: #a29bfe!important;
}
.footer_style p{
    margin-bottom: 0!important;
}

/**************** top scroll ***************/
#myBtn {
    display: none;
    position: fixed;
    bottom: 30px;
    right: 40px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: #00A8FF;
    color: white;
    cursor: pointer;
    padding: 10px;
    border-radius: 10px;
}
#myBtn:hover {
    background: #606060 ;
}
/*/////////////// responsive////////////////*/
@media(max-width: 780px)
{ .main_header{ height: 700px; text-align: center ;}

.main_header h1{
    text-align: center;
    padding: 0;
    width: 100%;
    font-size: 30px;}
}


.footer_data
{
    color:white;
    text-decoration:none;
}

</style>