<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="type3.css">
<style>
  a{
    color: greenyellow;

  }
 
</style>
</head>
<body class="body">
  
<!-- <?php

$username=$_GET['username'];
echo $username;

if(isset($_POST['submit'])){
  
  $username=$_GET['username'];
  $url="uiu.php?username=".$username;
  header('location: '.$url);
}
   
   
      if(isset($_POST['submit2'])){
        $username=$_GET['username'];
      
        $url="jungleHome.php?username=".$username;
      header('location: '.$url);
      }
   
   



?> -->

 
   
    
 <div class="header">
  <div class="nav">

 
    <h1 class="ml5">
      <span class="text-wrapper">
        <span class="line line1"></span>
        <span class="letters letters-left">Team</span>
       
        <span class="letters letters-right">Valeriyan Steel</span>
        <span class="line line2"></span>
      </span>
    </h1>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
 
    <ul>
      <li > <a href="">Home</a></li>
      <li>
        <div class="dropdown"  >
          <a href="#">Leaderboard</a>
         
          <div style="margin-top: 5px;" class="dropdown-content">
          <a href="leader.html">UIU Challenge</a>
          <a href="#">JUNGLE Challenge</a>
          <a href="#">Desert to Civil Challenge</a>
          </div>
        </div>
       
       
     

      <li><a href="">Challenges</a></li>
      <li><a href="https://poki.com">Online Games</a></li>
      <li><button style="background-color:orange;padding:10px;border-radius:5px"  >UserMode</button></li>
      
     
      
    </ul>
  </div>
  
 </div>
    
   <div class="container">
    <div class ="item1">

        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="uiu.jpg" alt="Avatar" style="width:300px;height:300px;">
              </div>
              <div id="hh" class="flip-card-back">
                
            <h1  style="margin-top: 5px; color: gray;">UIU Challenge</h1>
            
            <form method="post"  >
                <button id="b1" type="submit" name="submit" class="button">PLAY</button>
                 
            </form>
            
              </div>
            </div>
          </div>
          

    </div>
    <div class ="item2">

        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="jungle.webp" alt="Avatar" style="width:300px;height:300px;">
              </div>
              <div id="hj" class="flip-card-back">
                <h1 style="margin-top: 5px; color: gray;">JUNGLE Challenge</h1> 
                <form method="post" >
                <button id="b1" type="submit" name="submit2" class="button">PLAY</button>
                 
            </form>
                <button id="b2" class="button" type="button" onclick="jungleHome.php">Play</button>
              </div>
            </div>
          </div>
          

    </div>
    <div class ="item3">

        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="dhaka.webp" alt="Avatar" style="width:300px;height:300px;">
              </div>
              <div id="hk" class="flip-card-back">
                <h1  style="margin-top: 5px; color: gray;">Desert to Civil Challenge</h1> 
                <button id="b3" class="button">Go!!</button>
              </div>
            </div>
          </div>
          

    </div>
   
   
   

   </div>
   <div class="footer">
    <h1>
   Developed By @  <span class="auto-type">
   
   </span>
   
    </h1>
    
   
       </div>
    <script>
             document.getElementById("hh").style.backgroundColor="orange";
             document.getElementById("hj").style.backgroundColor="greenyellow";
             document.getElementById("hk").style.backgroundColor="burlywood";
             document.getElementById("b1").style.backgroundColor="gray";
             document.getElementById("b2").style.backgroundColor="gray";
             document.getElementById("b3").style.backgroundColor="gray";
           

    </script>
    
<script>
  anime.timeline({loop: true})
  .add({
    targets: '.ml5 .line',
    opacity: [0.5,1],
    scaleX: [0, 1],
    easing: "easeInOutExpo",
    duration: 700
  }).add({
    targets: '.ml5 .line',
    duration: 600,
    easing: "easeOutExpo",
    translateY: (el, i) => (-0.625 + 0.625*2*i) + "em"
  }).add({
    targets: '.ml5 .ampersand',
    opacity: [0,1],
    scaleY: [0.5, 1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5 .letters-left',
    opacity: [0,1],
    translateX: ["0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=300'
  }).add({
    targets: '.ml5 .letters-right',
    opacity: [0,1],
    translateX: ["-0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  var typed =new Typed(
    ".auto-type",{
      strings:["Valeriyan Steel", "Valeriyan Steel"],
      typeSpeed:150,
      backSpeed:150,
      loop:true
    }
  )
</script>
    
</body>
</html>