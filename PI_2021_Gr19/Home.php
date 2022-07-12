<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrrokMotion</title>
    <link rel="stylesheet" href="Home.Css"/> 
    <link rel="stylesheet" href="Header_Footer.css"/> 


</head>
<body>
    <?php include 'header.php'?>
<?php //$_SESSION['username']; ?>
<div id="fb-root"></div>
    <div class="slideshow-conttainer">
        <div class="slides">
            <div>
                <img src="foto\i4.jpg" alt="img" >
            </div>
        </div>
        <div class="slides">
            <div>
                <img src="foto\i5.jfif" alt="img" >
            </div>
        </div>
        <div class="slides">
            <div>
                <img src="foto\i8.jfif" alt="img" >
            </div>
        </div>
        <a class="prev" onclick="plusIndex(+1)">&#10094;</a>
        <a class="next" onclick="plusIndex(-1)">&#10095;</a>
    </div>
 

    <div class="andi">
        <div class="container">
            

            <div class="box">
            </div>
            <div class="box1">
                <p style="font-family:'Times New Roman';text-shadow:2px 2px 4px gray;font-size:20px;color:black;margin-top: 0;">B&euml;hu pjes&euml; e grupit <b><u>'FRROK'</u></b> dhe p&euml;rfito shum&euml; shp&euml;rblime nga me te ndryshmet. Duke filluar nga 1 janari do te kete zbritje te  pafundme marramendese ne te gjitha artikujt e Frrok Motion dhe gjithashtu do te mbahet loje shperblyese per te fituar nje Opel Corsa</p>
                
            </div>

        </div>
        <div class="container">
            <div class="box2">
                <p style="font-family:'Times New Roman';text-shadow: 2px 2px 4px gray;font-size: 20px;color: black"><br /><br />&#76;idhu me internetin m&euml; t&euml; shpejt&euml; n&euml; rajon</p><br>
            </div>
            <div class="box3">
            </div>

        </div>
        <div class="container">
            <div class="box4">

            </div>
            <div class="box5">
                <p style="font-family:'Times New Roman';text-shadow: 2px 2px 4px gray;font-style: italic;font-size: 20px;color: black"><br /><br />&#73;nterneti m&euml; i shpejt&euml; p&euml;r sht&euml;pi dhe biznes</p><br>
                <p id="paragrafi" onclick="teksti()">See more...</p>
            </div>
            
        </div>
        

     <!-- <nav></nav> -->
    <?php include 'footer.php'?>

</body>
</html>
