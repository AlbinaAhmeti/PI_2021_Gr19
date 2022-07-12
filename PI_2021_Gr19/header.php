<script src="https://kit.fontawesome.com/3f982de400.js" crossorigin="anonymous"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=257205876161869&autoLogAppEvents=1" nonce="GG2DvCHF"></script>
<script> 
        const header = document.querySelector('.divi')
        document.addEventListener('scroll',()=> {
            var scroll_position = window.scrollY;
            if (scroll_position > 550) {
                header.style.backgroundColor = "#29323c";
            } else {
                header.style.backgroundColor = "transparent";
            }
        });

function displayDate() {
    document.getElementById("showDate").innerHTML =Date();
}

</script>
 <script>
        function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
          if (this.responseText == "tip_aktiv") {
              document.getElementById("linku").setAttribute("href", "telefonia.php");
          }
          else if(this.responseText == "tip_premium"){
              document.getElementById("linku").setAttribute("href", "telefonia.php");
          }
          else if(this.responseText == "tip_basic"){
              document.getElementById("linku").setAttribute("href", "telefonia.php");
          }
            else if(this.responseText == "interneti_superfibra"){
              document.getElementById("linku").setAttribute("href", "interneti.php");
          }
          else if(this.responseText == "interneti_parapagim"){
              document.getElementById("linku").setAttribute("href", "interneti.php");
          }
          else {
              document.getElementById("linku").removeAttribute("href");
          }
      }
    };
    xmlhttp.open("GET", "ajax.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>
<script src="Script1.js">

</script>
<script>

                function teksti() {
                    document.getElementById('paragrafi').innerHTML = "Oferta me e mire ne treg me shpejtesi te internetit sa shpejtesia e drites hehehe";
                }

</script>

    <header>
    
        <div class="divi" style="position:absolute;padding:0;">
        <div>
        
        <?php
        //krijimi i cookie
        $cookie_name = "user";
        $cookie_value = "Konsumator";
        setcookie($cookie_name, $cookie_value); 
        if(isset($_COOKIE[$cookie_name])) {
            echo "Cookie " . $cookie_name . " has value " . $_COOKIE[$cookie_name];
        }
        // Fshirja e cookie duke e bere oren 1h me heret
        // setcookie("user", "", time() - 3600);
        // echo "<br> Cookie 'user' is deleted.<br>";
        //  echo "Cookie " . $cookie_name . " has value " . $_COOKIE[$cookie_name];
        ?>
        
            </div>
            <div class="container">
                <img src="Logo.png"  class="logo" />
                <nav>
                    <ul>
                        <li><a href="Home.php">Home</a></li>
                        <li><a href="Telefonia.php">Telefonia</a></li>
                        <li><a href="Interneti.php">Interneti</a></li>
                        <li><a href="Help&Support.php">Help&Support</a></li>
                        <li><a href="Profili_im.php">Profili Im</a></li>
                        <li> <form action="">
                            <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
                            <button type="submit"><i class="fa fa-search"></i></button>
                             
                          </form></li>
                    </ul>

                </nav>
                
           </div>
             <p style="color:white;left:1030px;position:absolute;">Suggestions:<a id="linku"><span id="txtHint" style="color:white"></span></a></p>

           </div>
    </header>