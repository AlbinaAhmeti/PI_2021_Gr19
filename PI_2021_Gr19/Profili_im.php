<?php
ob_start();
?>
<!DOCTYPE html>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    .form-box {
        margin-top: 250px;
        width: 380px;
        height: 600px;
        position: relative;
        margin-left: 550px;
        padding: 5px;
        overflow: hidden;
        background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4));
        margin-bottom: 100px;
    }

    .button-box {
        width: 220px;
        margin: 35px auto;
        position: relative;
        /*box-shadow: 0 0 20px 9px gray;*/
        border-radius: 30px;
    }

    .toggle-btn {
        padding: 10px 30px;
        cursor: pointer;
        background: transparent;
        border: 0;
        outline: none;
        position: relative;
    }

    #btn {
        top: 0;
        left: 0;
        position: absolute;
        width: 110px;
        height: 100%;
        background: radial-gradient(ellipse at top, gray, transparent);
        border-radius: 30px;
        transition: .5s;
    }

    .social-icons {
        margin: 30px auto;
        text-align: center;
    }
    
    .social-icons  a {
      margin: 20px;
    }

        .social-icons img {
            width: 30px;
            margin: 0 12px;
            box-shadow: 0 0 20px 0 #7f7f7f3d;
            cursor: pointer;
            border-radius: 50%;
        }

    .input-group {
        top: 180px;
        position: absolute;
        width: 280px;
        transition: .5s;
    }

    .input-field {
        width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 1px solid #999;
        outline: none;
        background: transparent;
    }

    .submit-btn {
        width: 85%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
        margin: auto;
        background: linear-gradient(to right,gray,white);
        border: 0;
        outline: none;
        border-radius: 30px;
    }

    .check-box {
        margin: 30px 10px 30px 0;
    }

    span {
        color: #777;
        font-size: 12px;
        bottom: 68px;
        position: absolute;
    }

    #login {
        left: 50px;
    }

    #register {
        left: 450px;
    }
    input.valid{
    border:3px solid green;
    width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        outline: none;
        background: transparent;

}
input.invalid{
    border:3px solid red;
    width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        outline: none;
        background: transparent;
}
input + p{
    margin-top: 5px;
    opacity: 0;
    color: red;
    font-style: italic;
}
input.invalid + p {
    opacity: 1;
    margin-bottom: 15px;
}
</style>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Profili Im</title>
    <script src="https://kit.fontawesome.com/3f982de400.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Header_Footer.css"/>

</head>
<body style="background-color:gray;margin: 0;">

<?php include'header.php'; ?>
    <div style="background-color:gray;">
        
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button> 
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
               
                <a href="https://www.facebook.com/" target="_blank"><abbr title="Facebook"></abbr><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/" target="_blank"><abbr title="Twitter"></abbr><i class="fa fa-twitter"></i></a>
                <a href="https://www.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <form id="login" class="input-group" action="login.php" method="post">
                <input type="text" name="username"class="input-field" placeholder="Username" id="username" autofocus >
                <p id="p01"> Duhet te jete mes 5-12 shkronjave </p>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" id="password" /><!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}"--> 
                <p id="p01"> Duhet te jete mes 8-18 karaktereve</p>

<!--              <input type="checkbox" class="check-box"><span>Remember Password</span> -->
                <button type="submit" class="submit-btn" id="submit">Log In</button>
            </form>
            <form id="register" class="input-group" action="script1.php" method="post">
                <input type="text" name="username" class="input-field" id="username" placeholder="Username"  autofocus >
                <p id="p01"> Duhet te jete mes 5-12 shkronjave </p>
                <input type="email" name="email" class="input-field" id="email" placeholder="Email Id" />
               <!-- pattern="([a-z\d\.-_]+)@([a-z\d-]+)\.([a-z]{2,10})(\.[a-z]{2,10})?$">-->
                <p id="p01"> filani@fisteku.com(.eu) </p>
                <input type="password" name="password" class="input-field" id="password" placeholder="Enter Password">
                <p id="p01"> Duhet te jete mes 8-18 karaktereve</p>
              <!-- <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>-->
                <keygen name="secure"> <button type="submit" id="submit" class="submit-btn">Register</button> 
            </form>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }





        function myFunction() {
  var message;
  var x;
  message = document.getElementById("p01");
  x = document.getElementById("username").value;
  var n=x.length;
  try { 
    if(n == 0)  throw "bosh";
    if(n < 5)  throw " i shkurter";
    if(n > 12)   throw "i gjate";
  }
  catch(err) {
    alert("Username eshte shume " + err);
  }
}


const inputs = document.querySelectorAll('input');
const patterns = {
    telephone: /^\d{11}$/,
    username: /^[a-z\d]{5,12}$/i,
    password:/^[\w]{8,18}$/,
    email:/^([a-z\d\.-_]+)@([a-z\d-]+)\.([a-z]{2,10})(\.[a-z]{2,10})?$/g

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