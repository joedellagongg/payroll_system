<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./login_phase/cmilogo.ico">
    <link rel="stylesheet" href="home_page.css">
    <title>CMI | Home</title>
</head>
<body>
<div class="nav">
        <div class="logo">
            <a href="home_page.php">
                <img class="logo-cmi" src="CMIlogo.png" alt="">
            </a>
        </div>
    </div>
    <div class="hati">
    <aside>
    <br>
    <br>
    <br>
        <a href="../masterlist/show_masterlist.php">
          <i class="fa fa-user-o" aria-hidden="true"></i>
          <b>MASTERLIST<b>
        </a>
        <a href="../reg_form/employee_form.php">
          <i class="fa fa-laptop" aria-hidden="true"></i>
          EMPLOYEE
        </a>
        <a href="../schedule/show_masterlist.php">
          <i class="fa fa-clone" aria-hidden="true"></i>
           SCHEDULE
        </a>

        <a href="../position/position.php">
          <i class="fa fa-clone" aria-hidden="true"></i>
          POSITION
        </a>
        <a href="../payslip/print_payslip.php">

        PRINT PAYSLIP   
        </a>
      </aside>
      <div class="ey">
      <canvas id="canvas" width="150" height="150">
</canvas>
      <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
      <h1 id="myId"></h1>
      <br>
      <h1 class="g">PAYROLL SYSTEM</h1>

</div>
</div>
<script>
  const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");
let radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  const grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(let num = 1; num < 13; num++){
    let ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    const now = new Date();
    let hour = now.getHours();
    let minute = now.getMinutes();
    let second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();
var date = new Date(); 
  var mm = date.getMonth() + 1;
  var dd = date.getDate(); 
  var yyyy = date.getFullYear(); 
  var newDate = mm + "-" + dd + "-" +yyyy; 
  var p = document.getElementById("myId"); 
  p.innerHTML = newDate;
</script>
</body>
<style>

aside {
  color: #fff;
  width: 14%;
  padding-left: 20px;
  background-image: linear-gradient(30deg , #0048bd, #44a7fd);
  height:600px;
}

aside a {
  font-size: 15px;
  color: #fff;
  display: block;
  padding: 12px;
  font-family: Verdana;
  padding-left: 30px;
  text-decoration: none;
  -webkit-tap-highlight-color:transparent;
}

aside a:hover {
  color: #3f5efb;
  background: #fff;
  outline: none;
  position: relative;
  background-color: #fff;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
}

aside a i {
  margin-right: 5px;
}

aside a:hover::after {
  content: "";
  position: absolute;
  background-color: transparent;
  bottom: 100%;
  right: 0;
  height: 35px;
  width: 35px;
  border-bottom-right-radius: 18px;
  box-shadow: 0 20px 0 0 #fff;
}

aside a:hover::before {
  content: "";
  position: absolute;
  background-color: transparent;
  top: 38px;
  right: 0;
  height: 35px;
  width: 35px;
  border-top-right-radius: 18px;
  box-shadow: 0 -20px 0 0 #fff;
}

aside p {
  margin: 0;
  padding: 40px 0;
}

body {
  font-family: 'Roboto';
  width: 100%;
  height: 100vh;
  margin: 0;
}

.social {
  height: 0;  
}

.social i:before {
  width: 14px;
  height: 14px;
  font-size: 14px;
  position: fixed;
  color: #fff;
  background: #0077B5;
  padding: 10px;
  border-radius: 50%;
  top:5px;
  right:5px;
}

.hati{
  display: flex;
}

.clock {
    position: absolute;
    top: 40%;
    left: 55%;
    transform: translateX(-50%) translateY(-50%);
    color: black;
    font-size: 30px;
    font-family: verdana;
    letter-spacing: 5px;
}

#canvas{
  margin-left:450px;
  margin-top:20px;
}
#myId{
  margin-top:50px;
  margin-left:430px;
  font-family: verdana;
}

.g{
  color:#0d6fb9;
  font-family: verdana;
  font-size:100px;
  margin-left:70px;
}

</style>
</html>