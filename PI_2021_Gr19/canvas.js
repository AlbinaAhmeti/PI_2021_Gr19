
var canvas = document.querySelector('canvas')
;
canvas.width = 1515;
canvas.height = 500; 
var c = canvas.getContext('2d');
/*
c.fillStyle="pink";
c.fillRect(100,100,100,100);
c.fillStyle="pink";
c.fillRect(300,300,100,100);
c.fillStyle="pink";
c.fillRect(200,500,100,100);

// line
c.beginPath();
c.moveTo(50,300);
c.lineTo(300,100);
c.lineTo(400,300);
c.strokeStyle = "red";
c.stroke();

//rrethi

for(var i=0;i<500;i++){
    var x = Math.random() * window.innerWidth;
    var y = Math.random() * window.innerHeight;
c.beginPath();
c.arc(x,y,30,0,Math.PI * 2,false);
c.strokeStyle="blue";
c.stroke();
} */

var maxradius=40;
var texti ="FrrokMotion";
var lista_ngjyrat = [
    'grey','white'
];
window.addEventListener('mousemove',function(event){
    MouseEvent.x=event.x;
    MouseEvent.y=event.y;
    
})
window.addEventListener('resize',function(){
    canvas.width = window.innerWidth;
    canvas.height =window.innerHeight; 
    init();
})
function rrethi(x,y,dx,dy,radius){
    this.x =x;
    this.y=y; 
    this.dx=dx;
    this.dy=dy;
    this.radius=radius;
    this.minradius=radius;
    this.color=lista_ngjyrat[Math.floor(Math.random()*lista_ngjyrat.length)];

    this.draw =function(){
        c.beginPath();
        c.arc(this.x,this.y,this.radius,0, Math.PI * 2,false);
        c.strokeStyle='blue';
        c.fillStyle=this.color;
        c.fillText(texti,x,y,40);

        c.stroke();
        c.fill();  
    }
    this.update = function() {
        if(this.x + this.radius > innerWidth || this.x - this.radius < 0) {
            this.dx= -this.dx;
        }
        if(this.y + this.radius > innerHeight || this.y - this.radius < 0)
        {
            this.dy=-this.dy;
        }
        this.y+=this.dy;
        this.x+=this.dx;
        //rritja
        if(MouseEvent.x-this.x <50 && MouseEvent.x - this.x >-50 &&
             MouseEvent.y - this.y<50 && MouseEvent.y-this.y>-50) {
                 if(this.radius < maxradius){
                 this.radius+=1;
                 }
        }
        else if( this.radius>this.minradius ){
            this.radius-=1; 
        }


        this.draw();
    }
}
var lista_rrethi= [];
function init(){
    lista_rrethi= [];
for(var i=0;i<1500;i++){
    var x = Math.random()*(innerWidth - radius * 2)+radius;
    var y= Math.random()*(innerHeight - radius *2)+radius;
    var dy=(Math.random() - 0.5 );
    var dx =(Math.random() - 0.5);
    var radius = Math.random()*3+2;
    lista_rrethi.push(new rrethi(x,y,dx,dy,radius))    
}
}


function animate() {
    requestAnimationFrame(animate);
    c.clearRect(0,0,innerWidth,innerHeight);
    
    for(var i=0;i<lista_rrethi.length;i++){
        lista_rrethi[i].update();
    }
    

}
init();
animate();