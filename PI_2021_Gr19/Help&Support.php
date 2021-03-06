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
            <p>4G aktivizohet p??rmes kodit *583# ose duke telefonuar n?? Qendr??n e Thirrjeve 038 700 700Gjithashtu duhet t?? b??het nd??rrimi i SIM kartel??s ekzistuese me at?? 4G.</p>
        </div>
    </div>
    <div class="oferta">
        <div class="titulli">
            <p>
                Si t?? b??j mbushje?
            </p>
        </div>
        <div class="permbajtja">
            <p>
                <ul style="list-style: square;">
                    <li>
                        Kartel?? g??rvish??se
                    </li>
                    <li>
                        Mbushje elektronike, apo Top ??? Up
                    </li>
                    <li>
                        Transferit t?? kredis??,
                    </li>
                    <li>
                        Mbushje mobil ??? klient?? te distributor??t,
                    </li>
                    <li>
                        SMS Top Up permes Bankn??s
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
            <p>Transferoni kredi nga telefoni juaj mobil te t?? af??rmit tuaj, sa her?? q?? d??shironi.
                Transferimin e kredis?? e kryeni duke thirrur:
                <ul style="list-style:circle;">
                    <li>
                        *124* shuma e kredis?? *049xxxxxx#
                    </li>
                    <li>
                        Prano konfirmimin dhe thirr p??rs??ri: *124#
                    </li>
                    <li>
                        Transferimi ??sht?? kompletuar
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
                Si deaktivizohen pakot e internetit n?? mobil?
            </p>
        </div>
        <div class="permbajtja">
            <p>Deaktivizimi (apo ndalja e riaktivizimit automatik)
                 t?? pakove t?? internetit n?? mobil b??het p??rmes kodit *900*9#.</p>
        </div>
    </div>
    <div class="oferta">
        <div class="titulli">
            <p>
                Keshilla per perdorim te internetit jashte Kosoves
            </p>
        </div>
        <div class="permbajtja">
            <p>P??r t?? kthyer numrin t??nd me parapages?? n?? num??r me kontrat??, ti duhet t?? paraqitesh n?? nj?? nga dyqanet ALBtelecom me nj?? mjet identifikimi dhe t?? b??sh nj?? k??rkes?? p??r ndryshim t?? planit t??nd tarifor.

                Ndryshimi i planit nuk do t?? sjell?? asnj?? munges?? n?? sh??rbim.</p>
        </div>
        
    </div>
    <div class="oferta">
        <div class="titulli">
            <p>
                Si mund ta b??j mbushjen e internetit?
            </p>
        </div>
        <div class="permbajtja">
            <p>Mbushje p??r sh??rbimin e internetit mund t?? b??ni n?? dyqanet e IPKO-s??, tek Distributor??t,
                 p??rmes portalit E-Pagesa, gjithashtu p??rmes telegonit mobil t?? IPKO-s?? duke thirrur *101# ,
                kuu shfaqet menyja me sh??rbimet e IPKO-s?? ku ju mund t?? zgjedhni produktin q?? d??shironi t?? paguani.</p>
        </div>
    </div>
    </div>
    <div class="renditja">
        <div class="oferta">
            <div class="titulli">
                <p>
                    Si t?? veproj kur nuk m?? punon interneti?
                </p>
            </div>
            <div class="permbajtja">
                <p>N??se nuk ke akses n?? internet, s?? pari duhet t?? verifikosh n??se drita e DSL-s?? n?? modemin t??nd ??sht?? e ndezur, e fikur,
                     apo duke pulsuar. N??se ajo pulson ose ??sht?? e fikur, atehere duhet ta raportosh menj??her?? k??t?? problem duke kontaktuar 
                     Sh??rbimin ton?? t?? Klientit.
                     N??se drita e DSL ??sht?? e q??ndrueshme, duhet t?? kryesh konfigurimin e modemit duke ndjekur k??to
                     <a href="https://www.youtube.com/watch?v=6LofSwZ1aAs"base target="blank"> udh??zime</a>.</p>
            </div>
        </div>
        <div class="oferta">
            <div class="titulli">
                <p>
                    Si mund ta rris limitin e numrit tim?
                </p>
            </div>
            <div class="permbajtja">
                <p>Duke qen?? se numri yt i telefonit ??sht?? konfiguruar me nj?? limit t?? p??rcaktuar,
                     kur ky limit arrihet numri yt bllokohet vet??m p??r thirrjet dal??se. P??r t?? ndryshuar limitin, 
                     duhet t?? besh nj?? k??rkes?? p??r rritjen e limitit pran?? dyqaneve t?? FrrokMotion ose te lidhesh me 
                     agjentin i cili t?? p??rfaq??son.

                </p>
            </div>
        </div>
        <div class="oferta">
            <div class="titulli">
                <p>
                    Si ta kthej numrin me parapages?? n?? num??r me kontrat???
                </p>
            </div>
            <div class="permbajtja">
                <p>
                    P??r t???ju funksionuar interneti n?? mobil, lidhuni manualisht me operator??t p??rkat??s, sigurohuni q?? APN ??sht?? IPKO,
                     si dhe aktivizoni ???Data??? dhe ???Data Roaming??? te Settings.Keni parasysh se n?? qoft?? se nuk zgjedhni manualisht operatorin,
                      telefoni mobil mund t?? ky??et n?? m??nyr?? automatike me operator?? t?? tjer??, gj?? q?? mund t???ju shkaktoj shpenzime t?? tjera.
                    ??sht?? e ndalurN?? qoft?? se keni ndonj?? pyetje mos hezitoni t?? thirrni n?? 049 700 700.</p>
            </div>
            
        </div>
        </div>
        <!-- Fundi i permbatjes -->
    <?php include_once 'footer.php'  ?>
    </body>
</html>