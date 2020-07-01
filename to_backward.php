<?php

  $conn = mysqli_connect('localhost', 'mariam', '1234', 'robot_control_panel');

  if(!$conn){

    echo 'Connection error: ' . mysqli_connect_error();
  }

  $sql ="INSERT INTO robot_steps(toright,toleft,forward,backward,stop) VALUES('','','','B','')
  ";
  if(mysqli_query($conn, $sql)){


  }else{

    echo 'query error: '. mysqli_error($conn);
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style2.css">
</head>
<body>

<h1><?php echo 'B'; ?></h1><br>



</body>
</html>
