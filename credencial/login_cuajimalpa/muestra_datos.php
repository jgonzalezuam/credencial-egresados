<?php

$database = "egresados";


try {
  $db = new PDO("mysql:host=localhost;dbname=$database",'root', 'K22t7Tod2023@');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print_r("Conexion exitosa");
 
  
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


$sql = "SELECT * FROM egresados_multimedia"; 
$query = $db -> prepare($sql); 
$query -> execute(); 
$results = $query -> fetchAll(PDO::FETCH_OBJ); 

if($query -> rowCount() > 0)   { 
foreach($results as $result) { 
echo "<tr>
<td>".$result -> nombre."</td>
<td>".$result -> edad."</td>
<td>".$result -> estado."</td>
<td>".$result -> fregis."</td>
</tr>";

   }
 }
?>


?>