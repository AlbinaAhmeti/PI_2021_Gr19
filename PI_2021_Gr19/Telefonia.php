<?php
ob_start();
?>

<!DOCTYPE html>

<style>
    .body {
        font-family: poppins;
    }
    .price {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 2px solid #da4357;
        margin: 5% auto 0 auto;
        text-align: center;
    }

    .deals {
        margin-top: 10%;
    }
    .single-price {
        width: 300px;
        background: #262626;
        margin-top: 2%;
        box-shadow: 1px 1px 20px rgba(0,0,0,0.5);
        text-align: center;
        transition: 0.9s;
        margin-right: 60px;
    }


    .single-price {
        font-size: 18px;
        color: #fff;
        line-height: 3;
        text-transform: uppercase;
    }

    .price h2 {
        font-size: 38px;
        color: #fff;
    }

    .deals {
        font-size: 14px;
        font-weight: normal;
        text-align: center;
        color: #fff;
        line-height: 1;
    }

    .single-price:hover {
        background: #da4357;
        color: #fff;
        box-shadow: 0 0 15px rgba(0,0,0,1);
        transform: scale(1.1);
        z-index: 1;
        border-radius: 25px;
    }

        .single-price:hover .price {
            border-color: #fff;
        }

    


/* card */
:root{
        --level-one:translateZ(3rem);
        --level-two:translateZ(6rem);
        --level-three:translateZ(9rem);

        --fw-normal:400;
        --fw-bold:700;
        --clr:#d6e4f9;
    }
    *,*::before,*::after{
        box-sizing:border-box;
        margin:0;
    }
    body{
        height:100vh;
        display:grid;
        place-items: center
    }
    .card{
        width:400px;
     
    }

    .card__content {
        text-align: center;
        position: relative;
        padding: 5em;
        transition: transform 3s;
        background: pink;
        transform-style:preserve-3d;
    }
    .card:hover .card__content {
        transform: rotateY(.5turn);
    }
    .card__front,.card__back{
        position:absolute;
        top:0;
        bottom:0;
        left:0;
        right:0;
        padding:15em 3em;
        backface-visibility:hidden;
        transform-style:preserve-3d;
        display:grid;
        align-content:center;

    }
    .card__front{
        background:var(--clr);
        background-image:url(https://s3-us-west-2.amazonaws.com);
        background-size:cover;
        background-blend-mode:overlay;
        color:#333;
    }
    .card__front::before{
        content:'';
        position:absolute;
        --spacer:1em;
        top:var(--spacer);
        bottom:var(--spacer);
        left:var(--spacer);
        right:var(--spacer);
        /*border:3px solid black;*/
        transform:var(--level-one);
        grid-row:1 /3;
    }
    .card__title{
        font-size:3.5rem;
        transform:var(--level-three);
        order:2;
        text-transform:uppercase;
    }
    .card__subtitle {
        transform:var(--level-two);
        text-transform:uppercase;
        letter-spacing:4px;
        font-size:.75rem;
        font-weight:var(--fw-bold);
        opacity:.7;
    }
    .card__body{
        transform:var(--level-two);
        font-weight:var(--fw-normal);
        font-size:1.5rem;
        line-height:1.6;
    }
    .card__back{
        transform:rotateY(.5turn);
        color:var(--clr);
        background:#333;

    }
    
</style>

<html>
<head>
    <meta charset="utf-8" />
    <title>FrrokMotion/Telefonia</title>
<link rel="stylesheet" href="Header_Footer.css" >
<link rel="stylesheet" href="Telefonia.css" >
<script src="https://kit.fontawesome.com/3f982de400.js" crossorigin="anonymous"></script>

</head>
<body>
    
<?php include 'header.php' ?>   
    <div style=" width:100%;margin-top: 200px;">

        <section id="hero">
            <div class="hero container">
                <div>
                    <h1>Inkuadrohu <span></span></h1>
                    <h1>Në grupin<span></span></h1>
                    <h1>Frrokat<span></span></h1>
                    <a href="forma2.php" target="_blank" type="button" class="cta">Pakoja 99$</a>
                </div>
            </div>
        </section>
    </div>
    
    
        <table style="margin-left: 200px;" cellspacing="20px" >
            <tr>
                <td><div class="single-price">
            <h1>Ditore</h1>
            <div class="price">
                <h2>1.5€</h2>
            </div>
            <div class="deals">
                <h4>100mb</h4>
                <h4>50 msg</h4>
            </div>
            <a href="#">select</a>
        </div>
            </div>
            
        </div>
    </td>
    <TD>
        <div class="single-price">
            <h1>Javore</h1>
            <div class="price">
                <h2>3€</h2>
            </div>
            <div class="deals">
                <h4>1GB</h4>
                <h4>200min</h4>
                <h4>200sms</h4>
            </div>
            <a href="#">select</a>
        </div>
    </TD>
    <td>
        <div class="single-price">
            <h1>Mujore</h1>
            <div class="price">
                <h2>5€</h2>
            </div>
            <div class="deals">
                <h4>Min pa limit</h4>
                <h4>SMS pa limit</h4>
                <h4>5GB</h4>
            </div>
            <a href="#">select</a>
        </div>
        </td>
        </tr>
        <tr>
            <td><div class="single-price">
        <h1>Paketa 10</h1>
        <div class="price">
            <h2>4€</h2>
        </div>
        <div class="deals">
            <h4>Min pa limit</h4>
            <h4>Sms pa limit </h4>
            <h4>3GB </h4>
            </div>
            <a href="#">select</a>
        </div>
</td>
<TD>
    <div class="single-price">
        <h1>Standart</h1>
        <div class="price">
            <h2>5€</h2>
        </div>
        <div class="deals">
            <h4>Min pa limit</h4>
            <h4>Sms pa limit </h4>
            <h4>3GB </h4>
        </div>
        <a href="#">select</a>
    </div>
</TD>
<td>
    <div class="single-price">
        <h1>Premium</h1>
        <div class="price">
            <h2>7€</h2>
        </div>
        <div class="deals">
            <h4>Min pa limit</h4>
            <h4>Sms pa limit </h4>
            <h4>3GB </h4>
        </div>
        <a href="#">select</a>
    </div>
    </td>
    </tr>
    <tr>
        <td><div class="single-price">
    <h1>Basic</h1>
    <div class="price">
        <h2>3€</h2>
    </div>
    <div class="deals">
        <h4>Min pa limit</h4>
            <h4>Sms pa limit </h4>
            <h4>3GB </h4>
    </div>
    <a href="#">select</a>
</div>
</td>
<TD>
<div class="single-price">
    <h1>Standart</h1>
    <div class="price">
        <h2>5€</h2>
    </div>
    <div class="deals">
        <h4>Min pa limit</h4>
        <h4>Sms pa limit </h4>
        <h4>3GB </h4>
    </div>
    <a href="#">select</a>
</div>
</TD>
<td>
<div class="single-price">
    <h1>Premium</h1>
    <div class="price">
        <h2>5€</h2>
    </div>
    <div class="deals">
        <h4>Min pa limit</h4>
            <h4>Sms pa limit </h4>
            <h4>3GB </h4>
    </div>
    <a href="#">select</a>
</div>
</td>
</tr>
        </table>
        <div>
        <video  autoplay loop muted style="width:550px; margin-left: 120px; " height="400px">
            <source src="ipko1.mp4" type="video/mp4">
        </video>
        <video  autoplay  loop muted style="width:550px; "height="400px">
            <source src="ipko2.mp4" type="video/mp4">
        </video>
        
    </div>
    <div>
        <script src="page.js"></script>

    </div>
    </div>
    <?php include 'footer.php'?>


</body>
</html>
<script> 
    const header = document.querySelector('.divi')
    document.addEventListener('scroll',()=> {
        var scroll_position = window.scrollY;
        if (scroll_position > 250) {
            header.style.backgroundColor = "#29323c";
        } else {
            header.style.backgroundColor = "tansparent";
        }
    });
    
function displayDate() {
    document.getElementById("showDate").innerHTML =Date();
}

</script>
