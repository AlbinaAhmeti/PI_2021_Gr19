

<!DOCTYPE html>


<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Formulari</title>

    <link rel="stylesheet" href="contact.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
                 var msgcount = 0;
            $("#loadmessages").click(function () {
                msgcount = msgcount + 2;
                $("#comments").load("load-messages.php", {
                    msgnewcount: msgcount
                });
            });
        });
    </script>
</head>
<body>

    <article style="display: inline-flex;" >
        <form action="contact.php" method="post" name="myform" >
            <div class="contact-form">
                <h1>Contact</h1>
                <div class="txtb">
                    <label>Full Name :</label>
                    <input type="text" name="username" id="emri" placeholder="Enter Your Name" class="form-control"  autocomplete="on" required/>
                </div>
               
                <div class="txtb">
                    <label>Email :</label>
                    <input type="text"  name="email" id="email" placeholder="Enter Your Email" class="form-control" autocomplete="off" required/>
                </div>


                <div class="txtb">
                    <label>Phone :</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter Your Phone Number" class="form-control" required />                    
                </div>

                <div class="txtb">
                    <label >Message :</label>
                    <textarea  name="message" id="message" ></textarea>

                </div>
                <button type="submit" id="submit" class="btn btn-primary"  value="submit" name="submit" >Submit</button>
                <button id="loadmessages" type="button">Show other people's messages</button>
                <div id="comments">
                 <?php
                        $conn = mysqli_connect('localhost', 'root','', 'test');
                        $sql="SELECT * FROM contact limit 0";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                        echo "<p>";
                        echo $row['message'];
                        echo "</p>";
                    }
                    }
                    else {
                    echo"there are no messages";
                    }
                           
                 ?>
                </div>
                </div>
                
            </form>
            
    </article>
    <?php include 'footer.php'  ?>

    <script>

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
    phone:/^[\d\+]{12}$/

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

    </script>

</body>
</html>