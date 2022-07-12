<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrrokMotion/Plane_dhe_tarifa</title>
    <link rel="stylesheet" href="Interneti.css">
    <link rel="stylesheet" href="Header_Footer.css">
    <script src="https://kit.fontawesome.com/3f982de400.js" crossorigin="anonymous"></script>

<style>
.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; }
.item4 { grid-area: footer; }

.grid-container {
  display: grid;
  grid-template-areas:
    'header header '
    'menu  main'
    'menu  main';
  grid-gap: 10px;
  padding: 10px;
}

</style>
</head>

<body>

<div class="grid-container">
  <div class="item1" >
<?php include'header.php'; ?>

<button id=butoni style="position:absolute; margin-left: 30px; top:0; background-color:transparent; border:0;"> Fshih Menunë </button>
</div>
  <div class="item2"><div class="menu">
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
</div></div>
  <div class="item3" style="margin-top: 200px;"> <div class="permbajtja" style="margin:0;">
    <h1 style="margin:0;">
        Plane dhe tarifa
    </h1>
    <h2>
        Superfibra vjen me suport internet 
    </h2>
    <table cellpadding="20px" cellspacing="0px">
        <thead>
            <td id="tdhead"> Paketa</td>
            <td id="tdhead"> Shpejtesia e transmetimit </br>
                                Download/Upload </td>
            <td id="tdhead"> Limiti </td>
            <td id="tdhead"> IP </td>
            <td id="tdhead"> Tarifa e instalimit </td>
            <td id="tdhead"> Tarifa mujore </td>
            
        </thead>
        <tr>
            <td>ADSL me limit </td>
            <td>2 Mbps/256 kbps</td>
            <td>10GB</td>
            <td> Dinamike</td>
            <td>35 Euro</td>
            <td> 10 Euro</td>
        </tr>
        <tr>
            <td> ADSL pa limit </td>
            <td> 2MBps/256 kbps </td>
            <td> Pa limit </td>
            <td> Dinamike </td>
            <td> 35 Euro </td>
            <td> 15 Euro </td>
        </tr>
        <tr>
            <td> ADSL pa limit </td>
            <td> 8MBps/512 kbps </td>
            <td> Pa limit </td>
            <td> Dinamike </td>
            <td> 35 Euro </td>
            <td> 25 Euro </td>
        </tr>
        <tr>
            <td> ADSL Pro </td>
            <td> 8MBps/768 kbps </td>
            <td> Pa limit </td>
            <td> Statike </td>
            <td> 35 Euro </td>
            <td> 40 Euro </td>
        </tr>
        <tr>
            <td> ADSL Pro </td>
            <td> 8MBps/768 kbps </td>
            <td> Pa limit </td>
            <td> Statike </td>
            <td> 40 Euro </td>
            <td> 40 Euro </td>
        </tr>
        <tr>
            <td> ADSL Pro </td>
            <td> 16 MBps/1 Mbps </td>
            <td> Pa limit </td>
            <td> Statike </td>
            <td> 40 Euro </td>
            <td> 50 Euro </td>
        </tr>


    </table>
</div></div>  
</div>
    
<?php include 'footer.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 


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
                    $("#butoni").text("Fshih Menunë")
                        count=0;
                    });
                }
            });
        });
        function displayDate() {
    document.getElementById("showDate").innerHTML =Date();
}


</script>
</body>
</html>