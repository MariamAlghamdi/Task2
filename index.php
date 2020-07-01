<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    function directToRight(){
      $.ajax({url:"to_right.php",success:function(result){
        //alert(result);
        alert("I am Moving to Right");
      }})
    }
    function directToLeft(){
      $.ajax({url:"to_left.php",success:function(result){
        //alert(result);
        alert("I am Moving to Left");
      }})
    }
    function directForward(){
      $.ajax({url:"to_forward.php",success:function(result){
        //alert(result);
        alert("I am Moving Forward");
      }})
    }
    function directBackward(){
      $.ajax({url:"to_backward.php",success:function(result){
        //alert(result);
        alert("I am Moving Backward");
      }})
    }
    function directToStop(){
      $.ajax({url:"stop.php",success:function(result){
        //alert(result);
        alert("I am not Moving");
      }})
    }
</script>

</head>
<body>

<header><h1>Robot Control Panel</h1><br>

</header>

<nav>
<button class="A" onclick="directForward()">Forwards&nbsp;</button><br>
<button class="B" onclick="directBackward()">Backwards</button><br>
<button class="C" onclick="directToLeft()">  &nbsp; &nbsp; Left &nbsp; &nbsp;</button>
<button class="D" onclick="directToStop()"> &nbsp; &nbsp; Stop &nbsp; &nbsp;</button>
<button class="E" onclick="directToRight()"> &nbsp; &nbsp; Right &nbsp; &nbsp;</button>
</nav>

<img src="blue_geometric.png" class="geometric">

<footer>
  <img src="robot.png" alt="alternatetext">
  <dev><p class="foot"> By Mariam Ahmad Alghamdi </p></div>

</footer>


</body>
</html>
