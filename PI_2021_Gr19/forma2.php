<!--/*<!DOCTYPE html>
 <style>
    body{
        margin:0;
        padding:0;
        background-image:url(1.jpg);
        background-size:cover;
        font-family:'Times New Roman';
        font-size: 20px;
    }
    .wrapper{
        width:800px;
        height:670px;
        color:#000;
        top:55%;
        left:50%;
        padding:60px 30px;
        position:absolute;
        transform:translate(-50%,-50%);
        box-shadow:8px 8px 50px #000;
        font-style: italic;
    }
    td{
        width: 1000px;
        text-align: center center;

    }
    h1{
        margin:0;
        padding:0;
        font-weight:bold;
        font-size:50px;
        color:orange;
        text-align:center;
        margin-bottom:8%;
        font-family:'Times New Roman';
    }
    
    .wrapper input[type=text]{
        border:none;
        border-bottom:1px solid #ddd;
        background:transparent;
        outline:none;
        height:30px;
        font-size:16px;
        opacity:1;
    }
    .wrapper input[type=submit]{
        border:none;
        outline:none;
        height:100px;
        background:#f6648b;
        color:#fff;
        font-size:30px;
        font-weight:bold;
        border-radius: 50px;
    }
    .wrapper input[type=submit]:hover{
        cursor:pointer;
    }
    input.valid{
    border:3px solid green;

}
input.invalid{
    border:3px solid red;
}
input + p{
    margin-top: 5px;
    opacity: 0;
    color: red;
}
input.invalid + p {
    opacity: 1;
    margin-bottom: 15px;
}
    
</style> 
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Formulari</title>
</head>
<body>
    <script src="validation.js"> </script>
    <div class="wrapper">
        <h1> Inkuadrohu ne Grupin Frrok</h1>
        
<form action="connect.php" method="post">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script>
    

        $
        $("#submit").click(function(){
            var username = $("#username").val();
            var mbiemri = $("#mbiemri").val();
            var pagesa = $("#pagesa").val();

            if (username == '' || mbiemri == '' || pagesa == '') {
                alert("Plotesoni te gjitha fushat");
            }
            
        });

        function komfirmimi() {
      var txt;
      if (confirm("Komfirmo!")) {
       txt="U komfirmua";
      } else {
        txt = "U anulua!";
      }
      window.alert(txt);
    }


    if(localStorage) {
	$(document).ready(function() {
		$(".save").click(function() {
			
			var mbiemri = $("#mbiemri").val();
            var emri=$("#emri").val();
			
    		sessionStorage.setItem("mbiemri", mbiemri);
            alert("Emri dhe mbiemri u rujten");
            localStorage.setItem("emri", emri);
		});
		$(".access").click(function() {
			
    		alert("Pershendetje, " + localStorage.getItem("emri") + " " + sessionStorage.getItem("mbiemri"));
		});
	});
} else {
    alert("Error");
}

function myFunction() {
  var message;
  var x;
  message = document.getElementById("p01");
  x = document.getElementById("username").value;
  var n=x.length;
  try { 
    if(n >20)  throw "i gjate";
  }
  catch(err) {
    alert("Input is " + err);
  }
        }

function dayandnight() {
            var text= " ";
            var current = new Date();
            var day_night = current.getHours();
            if (day_night < 12) {
                //DAY
                var bodyColor = document.getElementsByTagName("BODY")[0];
                bodyColor.style.backgroundColor = "white";
                var x = text.replace(" ", "ditë");
                document.write(x);
                
            }
            else {
                //Night
                var bodyColor = document.getElementsByTagName("BODY")[0];
                bodyColor.style.backgroundColor = "grey";
                var x = text.replace(" ", "natë");
                document.write(x);
            }
        }
        dayandnight();


        function myFunction() {
  var message;
  var x;
  message = document.getElementById("p01");
  x = document.getElementById("emri").value;
  var n=x.length;
  try { 
    if(n >20)   throw "i gjate";
  }
  catch(err) {
    alert("Emri eshte shume " + err);
  }
}
const inputs = document.querySelectorAll('input');
const patterns = {
    mbiemri:  /^[a-z]+$/i,
    emri: /^[a-z]+$/i,
    
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
-->