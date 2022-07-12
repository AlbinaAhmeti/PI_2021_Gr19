<?php include_once 'header.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrrokMotion/Help&Support</title>
    <link rel="stylesheet" href="Help&Support.css"/>
    <link rel="stylesheet" href="Header_Footer.css" />
    <link rel="stylesheet" href="contact.css" />
    <!-- <script src="validation.js"> </script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/3f982de400.js" crossorigin="anonymous"></script>


    <script>
        //skruaj ne fajll
        $("#writeFile").click(function(){
        <?php
        $myfile = fopen("shkruaj.txt", "w");
        $txt = "Albina Altini Agoni Andi \n";
        fwrite($myfile, $txt);
        fclose($myfile);
        ?>
        });

        $("#submit").click(function(){
            var username = $("#emri").val();
            var email = $("#email").val();
            var message = $("#message").val();
            var phone =$("phone").val();

            if (username == '' || email == '' || message == '') {
                alert("Plotesoni te gjitha fushat");
            }
            
        });
        
        function show_content(){
    document.getElementById('hidden_content').style.display = 'block';
}

    function komfirmimi() {
  var txt;
  if (confirm("Komfirmo!")) {
    txt = "U komfirmua.Faleminderit!";
  } else {
    txt = "U anulua!";
  }
  window.alert(txt);
}

const inputs = document.querySelectorAll('input');
const patterns = {
    username: /^[a-z\d]{5,12}$/i,
    email:/^([a-z\d\.-_]+)@([a-z\d-]+)\.([a-z]{2,10})(\.[a-z]{2,10})?$/,
    message: /^[a-z\d\w\.\,\-\_\"]{5,200}$/i,

};

function validate(field,regex){
    if(regex.test(field.value)){
        field.className='valid';
    }else{
        field.className='invalid';
    }
}

inputs.forEach((input)=>{
input.addEventListener('keyup',(e) =>{
    //console.log(e.target.attributes.name.value);
    validate(e.target,patterns[e.target.attributes.name.value])
});
});



function displayDate() {
    document.getElementById("showDate").innerHTML =Date();
}

    </script>
</head>
<body>

    
<!-- Permbajtja -->
<div class="contact-title">
    <h1 style="margin-right: 100px;">Pershendetje, konsumator</h1>
    <h2>FrrokMotion gjithmone i hapur per <a href="FORMA4.php" target="_blank">keshilla dhe verejtje!</a></h2>
    </div>
    <div style="padding: 5px;">
    <a  style="margin: 45%;" href="#" id="writeFile">Shkruaj rregullat</a>
    
 
<!-- Leximi ne fajll -->
<a  style="margin: 45%;" href="#" onclick="show_content()">Lexo rregullat</a>
<?php
$myFile1 = "teksti.txt";
$fh = fopen($myFile1, 'r');
$theData = fread($fh, filesize($myFile1));
fclose($fh);
echo '<div id="hidden_content" style="display:none">' . $theData . '</div>';
?>
    </div>



    <div class="renditja">
        
    <div class="oferta">
        <div class="titulli">
            <p>
                Si Aktivizohet 4G?
            </p>
        </div>
        <div class="permbajtja">
            <p>4G aktivizohet përmes kodit *583# ose duke telefonuar në Qendrën e Thirrjeve 038 700 700Gjithashtu duhet të bëhet ndërrimi i SIM kartelës ekzistuese me atë 4G.</p>
        </div>
    </div>
    <div class="oferta">
        <div class="titulli">
            <p>
                Si të bëj mbushje?
            </p>
        </div>
        <div class="permbajtja">
            <p>
                <ul style="list-style: square;">
                    <li>
                        Kartelë gërvishëse
                    </li>
                    <li>
                        Mbushje elektronike, apo Top – Up
                    </li>
                    <li>
                        Transferit të kredisë,
                    </li>
                    <li>
                        Mbushje mobil – klientë te distributorët,
                    </li>
                    <li>
                        SMS Top Up permes Banknës
                    </li>
                    
                </ul>
            </p>
        </div>
    </div>
    <div class="oferta">
        <div class="titulli">
            <p>
                Si transferohet kredia?
            </p>
        </div>
        <div class="permbajtja">
            <p>Transferoni kredi nga telefoni juaj mobil te të afërmit tuaj, sa herë që dëshironi.
                Transferimin e kredisë e kryeni duke thirrur:
                <ul style="list-style:circle;">
                    <li>
                        *124* shuma e kredisë *049xxxxxx#
                    </li>
                    <li>
                        Prano konfirmimin dhe thirr përsëri: *124#
                    </li>
                    <li>
                        Transferimi është kompletuar
                    </li>

                </ul>
            </p>
        </div>
    </div>
</div>
<div class="renditja">
    <div class="oferta">
        <div class="titulli">
            <p>
                Si deaktivizohen pakot e internetit në mobil?
            </p>
        </div>
        <div class="permbajtja">
            <p>Deaktivizimi (apo ndalja e riaktivizimit automatik)
                 të pakove të internetit në mobil bëhet përmes kodit *900*9#.</p>
        </div>
    </div>
    <div class="oferta">
        <div class="titulli">
            <p>
                Keshilla per perdorim te internetit jashte Kosoves
            </p>
        </div>
        <div class="permbajtja">
            <p>Për të kthyer numrin tënd me parapagesë në numër me kontratë, ti duhet të paraqitesh në një nga dyqanet ALBtelecom me një mjet identifikimi dhe të bësh një kërkesë për ndryshim të planit tënd tarifor.

                Ndryshimi i planit nuk do të sjellë asnjë mungesë në shërbim.</p>
        </div>
        
    </div>
    <div class="oferta">
        <div class="titulli">
            <p>
                Si mund ta bëj mbushjen e internetit?
            </p>
        </div>
        <div class="permbajtja">
            <p>Mbushje për shërbimin e internetit mund të bëni në dyqanet e IPKO-së, tek Distributorët,
                 përmes portalit E-Pagesa, gjithashtu përmes telegonit mobil të IPKO-së duke thirrur *101# ,
                kuu shfaqet menyja me shërbimet e IPKO-së ku ju mund të zgjedhni produktin që dëshironi të paguani.</p>
        </div>
    </div>
    </div>
    <div class="renditja">
        <div class="oferta">
            <div class="titulli">
                <p>
                    Si të veproj kur nuk më punon interneti?
                </p>
            </div>
            <div class="permbajtja">
                <p>Nëse nuk ke akses në internet, së pari duhet të verifikosh nëse drita e DSL-së në modemin tënd është e ndezur, e fikur,
                     apo duke pulsuar. Nëse ajo pulson ose është e fikur, atehere duhet ta raportosh menjëherë këtë problem duke kontaktuar 
                     Shërbimin tonë të Klientit.
                     Nëse drita e DSL është e qëndrueshme, duhet të kryesh konfigurimin e modemit duke ndjekur këto
                     <a href="https://www.youtube.com/watch?v=6LofSwZ1aAs"base target="blank"> udhëzime</a>.</p>
            </div>
        </div>
        <div class="oferta">
            <div class="titulli">
                <p>
                    Si mund ta rris limitin e numrit tim?
                </p>
            </div>
            <div class="permbajtja">
                <p>Duke qenë se numri yt i telefonit është konfiguruar me një limit të përcaktuar,
                     kur ky limit arrihet numri yt bllokohet vetëm për thirrjet dalëse. Për të ndryshuar limitin, 
                     duhet të besh një kërkesë për rritjen e limitit pranë dyqaneve të FrrokMotion ose te lidhesh me 
                     agjentin i cili të përfaqëson.

                </p>
            </div>
        </div>
        <div class="oferta">
            <div class="titulli">
                <p>
                    Si ta kthej numrin me parapagesë në numër me kontratë?
                </p>
            </div>
            <div class="permbajtja">
                <p>
                    Për t’ju funksionuar interneti në mobil, lidhuni manualisht me operatorët përkatës, sigurohuni që APN është IPKO,
                     si dhe aktivizoni “Data” dhe “Data Roaming” te Settings.Keni parasysh se në qoftë se nuk zgjedhni manualisht operatorin,
                      telefoni mobil mund të kyçet në mënyrë automatike me operatorë të tjerë, gjë që mund t’ju shkaktoj shpenzime të tjera.
                    është e ndalurNë qoftë se keni ndonjë pyetje mos hezitoni të thirrni në 049 700 700.</p>
            </div>
            
        </div>
        </div>
        <!-- Fundi i permbatjes -->
    <?php include_once 'footer.php'  ?>
    </body>
</html>