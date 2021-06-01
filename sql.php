  <?php
     $user="root";
    $pass= "";
    $server= "localhost";
    $con=new mysqli($server,$user,$pass);

    if($con -> connect_error){
    die ("Error al conectar al BD".$con ->connect_error );
    }   
    
    $sql = "CREATE DATABASE cuadragunlar";
    if($con1->query($sql) == TRUE){
      echo "base de datos creada";

    }else{
      echo "base de datos no creada". $con->connect_error;
    }
    $db="cuadragunlar";
    $con1=new mysqli($server,$user,$pass,$db);
    $sql = "CREATE TABLE equipos ( 
      id INT(11) AUTO_INCREMENT PRIMARY KEY,
      Nombre VARCHAR(100) NOT NULL,
      Puntos INT(11)
    )";
    if($con1->query($sql) == TRUE){
      echo "la tabla ha sido creada";

    }else{
      echo "la tabla no ha sido creada". $con1->connect_error;
    }

    header("location:Entrada.html");

    ?>   