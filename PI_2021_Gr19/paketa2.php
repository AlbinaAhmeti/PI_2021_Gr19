<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>frrokMotion/Paketa_me_parapagim</title>
    <link rel="stylesheet" href="Interneti.css">
    <link rel="stylesheet" href="Header_Footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/3f982de400.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="3D.CSS">

    <script>
        $(document).ready(function(){
  $("#butonifadeout").click(function(){
    $("#svg1").fadeOut();
  });
});
$(document).ready(function(){
  $("#butonifadein").click(function(){
    $("#svg1").fadeIn("slow");
    
  });
});
$(document).ready(function(){
  $("#button1").click(function(){
    $("#svg3").animate({
      left: '250px',
      height: '300px',
      width: '500px'
    });
    $("#svg2").animate({
      left: '250px',
      height: '200px',
      width: '400px',
    });
  });
});
$(document).ready(function(){
  $("#button3").click(function(){
    $("#svg2").remove();

});
});
$(document).ready(function(){
  $("#btn4").click(function(){
    $("#svg3").before("<b>FrrokMotion</b>");
  });
});



    </script>
</head>
<body>
<?php include'header.php'; ?>
     


    <div class="container">
        <div class="menu" style="margin-top: 0;">
            <table cellspacing="20px" cellpadding="20px">
                <thead>
                    <td id="tdinterneti"> Interneti</td>
                </thead>
                <tr>
                <td>
                   <a id="alinqet" href="Interneti.php"> Paketa Internet me SuperFibra</a>
                </td>
                </tr>
                <tr>
                <td>
                    <a id="alinqet" href="Paketa2.php">Paketa me parapagim </a>
                </td>
                </tr>
                <tr>
                    <td><a id="alinqet" href="Paketa3.php"> Plane dhe Tarifa </a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="permbajtja">
          <div style="height:90px;margin-top: 300px;border:1px dashed grey;" ondrop="drop(event)" ondragover="allowDrop(event)">
           
            <h1 draggable="true" ondragstart="drag(event)" id="drag1" style="margin:0; margin-left:2px">
                Paketa Me Parapagim</br>
            </h1>
          </div>
          <div style=" height: 90px;border: 1px dashed grey; margin-top: 5px;" ondrop="drop(event)" ondragover="allowDrop(event)">
  
          </div>
          <div class="card">
            <div class="card__content">
                <div class="card__front">
                    <h3 class="card__title">Frrok </br> Motion</h3>
                    <p class="card__subtitle">Gjithmone te paret</p>
                </div>
                <div class="card__back">
                    <p class="card__body">Frrok motion, kompania me e madhe shqiptare per internet dhe telefon.</p>
    
                </div>
    
            </div>
        </div>
    </div>
    
          <img id="web" width="0" height="0"
src="web.jpg" alt="web" >
          <canvas id="myCanvas" width="200" height="100"
          style="border:1px solid #d3d3d3;" >
          Your browser does not support the HTML5 canvas tag.</canvas>
          <canvas id="canvaslinear" width="200" height="100"
          style="border:1px solid #d3d3d3;">
          Your browser does not support the HTML5 canvas tag.</canvas>
          <canvas id="123" width="630" height="370  "
style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.
</canvas>


            <h2  style="margin-left: 900px;">
                Zgjedh internetin sa te pershtatet </br>
            </h2>
            <h3 style="margin-left: 900px;">
                Tani shërbimin Internet mund ta marrësh edhe për periudha 3 apo 6 mujore.
            </h3>
            <table cellpadding="20px" cellspacing="5px" id="borderimg1" style="float: right;">
                <thead>
                    <td id="tdhead"> Paketa me parapagese</td>
                    <td id="tdhead"> Cmimi/Muaj </td>
                    <td id="tdhead">Shpejtesia e internetit</td>
                </thead>
                <tr>
                    <td>Internet me parapagim '8MPS</td>
                    <td>15 euro</td>
                    <td> 8 Mbps</td>
                </tr>
                <tr>
                    <td>
                    Internet me parapagim '16MPS
                    </td>
                    <td>
                        20 euro 
                    </td>
                <td>
                16 Mbps
                </td>
                </tr>
            </table>
            <svg height="215" width="400" id="svg3">
                <defs>
                  <linearGradient id="grad2" x1="0%" y1="50%" x2="20%" y2="10%">
                    <stop offset="0%"
                    style="stop-color:black;stop-opacity:1" />
                    <stop offset="100%"
                    style="stop-color:rgb(238, 181, 219);stop-opacity:1" />
                  </linearGradient>

                </defs>
                <rect id="svg2" x="50" y="20" rx="50" ry="50" width="300" height="150" fill="url(#grad2)" />
                <text id="text2" fill="#ffffff" font-size="43" font-family="Verdana"
                x="65" y="110">Frrok Motion</text>
                </svg> 
                <svg height="190" width="400" id="svg1">
                    <defs>
                      <linearGradient id="grad1" x1="0%" y1="50%" x2="50%" y2="25%">
                        <stop offset="0%"
                        style="stop-color:rgb(199, 166, 188);stop-opacity:1" />
                        <stop offset="100%"
                        style="stop-color:black;stop-opacity:1" />
                      </linearGradient>
                    </defs>
                    <ellipse cx="180" cy="70" rx="180" ry="70" fill="url(#grad1)" />
                    <text fill="#ffffff" font-size="43" font-family="Verdana"
                    x="50" y="86">Frrok Motion</text>
                    </svg>
                    <div>
                    <button id="butonifadeout" style="position: relative; margin-left: 300px;"> zhdukem </button>
                    <button id="butonifadein"style="position:relative"> shfaqem </button>
                    <button id="button1"style="position:relative"> animate </button>
                    <button id="button3">Remove</button>
                    <button id="btn4">add</button>
                    </div>
        </div>
    </div>
    <div class="pershkrimi" style="margin-top: 0;">
        <h2>
            Detaje Mbi Paketat
        </h2>
        <ol type="I">
            <li>
                Klientët e rinj mund të abonohen vetëm në periudhat 3 ose 6 muaj. Abonimi 1 mujor është i vlefshëm vetëm klientët ekzistues në paketën me parapagesë.
            </li>
            <li>
                Instalimi i shërbimit për kontratat 6 mujore është falas, ndërsa për ato 3 mujore është me vlerë 20euro.
            </li>
            <li>
            Per klientet e rinje pajisjet mund te perfitohen ne dy menyra:
            <ol id="ol" style="background: transparent;">
                <li>
                    Në përdorim, por duhet te paguajnë një garanci prej 30 euro e cila u rikthehet në momentin e kthimit te tyre

                </li>
                <li>
                    Me cmimin preferenciale: Modem ADSL (WIFI) 20 euro.
                </li>
            </li>
            </ol>
            <li>
                Ne rastin e pajisjeve ne perdorim; Klienti duhet të dorëzojë pajisjet në dyqan përpara përfundimit të kontratës. Nëse pajisjet nuk do të dorëzohen, aplikohet penalitet për çdo pajisje të marrë në përdorim.
            </li>
            <li>
                Afati për riabonim apo dorëzimin e pajisjeve është 30 ditë nga përfundimi i periudhës së abonimit 1, 3 ose 6 mujor.
            </li>
        </ol>
        
    </div>
    <div class="footer">
        <div class="inner_footer">
            <div class="footer_items">
                <h2>Sherbime dhe Produkte</h2>
                <div class="border"></div>
                <ul>
                    <a href="Telefonia.php"><li>Telefonia</li></a>
                    <a href="Interneti.php"><li>Interneti</li></a>   
                </ul>
            </div>
            <div class="footer_items">
                <h2>Njoftime</h2>
                <div class="border"></div>
                <ul>
                    
                    <li>Njoftime</li>
                    <li>Publikime</li>
                    <dt> Mbulueshmeria
                            <dd>Kosova</li>
                            <dd>Rajoni</li>
                    </dt>
                </ul>
                
            </div>
            <div class="footer_items">
                <h2>FrrokContact</h2>
                <div class="border"></div>
                <ul>
                    <li>Adress: <a href="https://www.google.com/maps/place/Mujo+Ulqinaku,+Prishtin%C3
                        %AB/@42.6573916,21.1535709,17z/data=
                        !3m1!4b1!4m5!3m4!1s0x13549ee562ac94e5:0xc
                        c73734b25c546b7!8m2!3d42.6573916!4d21.1557596",base target="_blank">Rr. Mujo Ulqinaku,Pejton,</br>
                         Prishtine,Kosove</li></a>
                    <li>Phone: 049100062</li>
                    <a href="mailto:FrrokMotion@gmail.com"><li>FrrokMotion@hgmail.com</li></a>
                </ul>
            </div>
            <div class="footer_items">
                <h2>Social</h2>
                <div class="border"></div>
                <ul>
                    <li><a href="https://www.facebook.com/" target="_blank"><abbr title="Facebook">Fb</abbr><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/"target="_blank"><abbr title="Twitter">Tw</abbr><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.google.com/"target="_blank">Google <i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://www.instagram.com/"target="_blank">Instagram <i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <button onclick="displayDate()" style="border: 0;background-color: transparent;">Show Date : </button>
            <p id="showDate" style="font-style: italic;"></p>
        </div>
        
    </div>

<style>
  #div1, #div2 {
    float: left;
    width: 100px;
    height: 35px;
    margin: 10px;
    padding: 10px;
    border: 1px solid black;
  }
  </style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>



  function allowDrop(ev) {
    ev.preventDefault();
  }
  
  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }
  
  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
  }
$(document).ready(function ($) {
            var count = 0;
            $("#butoni").click(function (event) {
                if (count == 0) {
                    $(".divi").hide(1000, function () {

                        count = 1;
                        alert("Menu është fshehur");
                    $("#butoni").text("Shfaq Menunë")
                    });
                }
                else {
                    $(".divi").show(1000, function () {
                        count=0;
                    $("#butoni").text("Fshih Menunë")
                    });
                }
            });
        });



function displayDate() {
    document.getElementById("showDate").innerHTML =Date();
}




var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");


// Create gradient
var grd = ctx.createRadialGradient(75,50,5,90,60,100);
grd.addColorStop(0,"grey");
grd.addColorStop(1,"white");

// Fill with gradient
ctx.fillStyle = grd;
ctx.fillRect(10,10,150,80);
var x = document.getElementById("canvaslinear");
var ctx = x.getContext("2d");

// Create gradient
var grd = ctx.createLinearGradient(0,0,200,0);
grd.addColorStop(0,"grey");
grd.addColorStop(1,"white");

// Fill with gradient
ctx.fillStyle = grd;
ctx.fillRect(10,10,150,80);


window.onload = function() {
    var canvas = document.getElementById("123");
    var ctx = canvas.getContext("2d");
    var img = document.getElementById("web");
    img.src="web.jpg";
   ctx.drawImage(img, 0, 0);
};
  
  </script>
</body>
</html>