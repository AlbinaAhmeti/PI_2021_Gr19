<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        canvas {
            border: 1px solid #d3d3d3;
            background-color:black;
        }
    </style>
</head>
<body onload="startGame()">
    <!--FilloLojen-->
    <script>

        var myGamePiece; //PjesaLojes
        var myObstacles = []; //Pengesat
        var myScore; //Piket

        function startGame() {//FillimiLojes
            myGamePiece = new component(30, 30, "blue", 10, 120);//PjesaLojes
            myScore = new component("30px", "Consolas", "white", 280, 40, "text");//Piket
            myGameArea.start();//ZonaLojes
        }

        var myGameArea = {//ZonaLojes
            canvas: document.createElement("canvas"),
            start: function () {
                this.canvas.width = window.innerWidth - 10;
                this.canvas.height = 500;
                this.context = this.canvas.getContext("2d");
                document.body.insertBefore(this.canvas, document.body.childNodes[0]);
                this.frameNo = 0;
                this.interval = setInterval(updateGameArea, 1);//NdryshoZonenLojes
            },
            clear: function () {
                this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
            },
            stop: function () {
                clearInterval(this.interval);
                alert('Humbe Lojen');
            }
        }

        function component(width, height, color, x, y, type) {
            this.type = type;
            this.width = width;
            this.height = height;
            this.speedX = 0;
            this.speedY = 0;
            this.x = x;
            this.y = y;
            this.update = function () {
                ctx = myGameArea.context;//ZonaLojes.context
                if (this.type == "text") {
                    ctx.font = this.width + " " + this.height;
                    ctx.fillStyle = color;
                    ctx.fillText(this.text, this.x, this.y);
                } else {
                    ctx.fillStyle = color;
                    ctx.fillRect(this.x, this.y, this.width, this.height);
                }
            }
            this.newPos = function () {
                this.x += this.speedX;
                this.y += this.speedY;
            }
            this.crashWith = function (otherobj) {
                var myleft = this.x;
                var myright = this.x + (this.width);
                var mytop = this.y;
                var mybottom = this.y + (this.height);
                var otherleft = otherobj.x;
                var otherright = otherobj.x + (otherobj.width);
                var othertop = otherobj.y;
                var otherbottom = otherobj.y + (otherobj.height);
                var crash = true;
                if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {
                    crash = false;
                }
                return crash;
            }
        }

        function updateGameArea() {//NdryshoZonenLojes
            var x, height, gap, minHeight, maxHeight, minGap, maxGap;
            for (i = 0; i < myObstacles.length; i += 1) {//Pengesat.length
                if (myGamePiece.crashWith(myObstacles[i])) {//PjesaLojes.Goditja(//Pengesat.length)
                    myGameArea.stop();//ZonaLojes.stop()
                    return;
                }
            }
            myGameArea.clear();//ZonaLojes.clear()
            myGameArea.frameNo += 1;//ZonaLojes.frames(Korniza spo di qysh me ja bo)
            if (myGameArea.frameNo == 1 || everyinterval(150)) {
                x = myGameArea.canvas.width;//ZonaLojes.canvas.width;
                minHeight = 20;
                maxHeight = 200;
                height = Math.floor(Math.random() * (maxHeight - minHeight + 1) + minHeight);
                minGap = 50;
                maxGap = 200;
                gap = Math.floor(Math.random() * (maxGap - minGap + 1) + minGap);
                myObstacles.push(new component(10, height, "red", x, 0));//Pengesat.push
                myObstacles.push(new component(10, x - height - gap, "red", x, height + gap));//Pengesat.push
            }
            for (i = 0; i < myObstacles.length; i += 1) {//Pengesat.length
                myObstacles[i].speedX = -1;//Pengesat
                myObstacles[i].newPos();//Pengesat
                myObstacles[i].update();//Pengesat
            }
            myScore.text = "Rezultati: " + myGameArea.frameNo;//Piket.text

            myScore.update();//Piket.update
            myGamePiece.newPos();//PjesaLojes
            myGamePiece.update();//PjesaLojes

        }

        function everyinterval(n) {//Intervali
            if ((myGameArea.frameNo / n) % 1 == 0) { return true; }//ZonaLojes.frames(Korniza spo di qysh me ja bo)
            return false;
        }

        function moveup() {//LevizLarte
            myGamePiece.speedY = -1;//PjesaLojes.speedY
        }

        function movedown() {//LevizPoshte
            myGamePiece.speedY = 1;//PjesaLojes.speedY
        }

        function moveleft() {//LevizMajtas
            myGamePiece.speedX = -1;//PjesaLojes.speedX
        }

        function moveright() {//LevizDjathtas
            myGamePiece.speedX = 1;//PjesaLojes.speedX
        }

        function clearmove() {//Levizja
            myGamePiece.speedX = 0;
            myGamePiece.speedY = 0;
        }


        function string() {
  var num = myGameArea.frameNo;
  var n = num.toString() + 5;
  var str = "Te Lumte!";
  var res = str.valueOf();
  document.getElementById("demo").innerHTML = n +" " +res;





}
    </script>
    <div style="text-align:center;width:480px; margin-left: 500px;">
        <button onmousedown="moveup()" onmouseup="clearmove()" ontouchstart="moveup()">LARTE</button><br><br>
        <button onmousedown="moveleft()" onmouseup="clearmove()" ontouchstart="moveleft()"> MAJTAS</button>
        <button onmousedown="moveright()" onmouseup="clearmove()" ontouchstart="moveright()">DJATHTAS</button><br><br>
        <button onmousedown="movedown()" onmouseup="clearmove()" ontouchstart="movedown()">POSHTW</button>
    </div>
    <button onclick="string()">Trego piket me disa bonuse nga ne :) </button>
    
<p id="demo"></p>

    <p>Shamngu nga Pengesat</p>
    <style>
        button{
            width: 200px;
            height: 50px;
            
        }
    </style>
</body>
</html>
