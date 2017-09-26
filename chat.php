 <?php

 include "db.php";

 $consulta = "SELECT * FROM chat ORDER BY id DESC";
 $ejecutar = $conexion ->query($consulta);
 while($row= $ejecutar->fetch_array()):
             
 ?>
 <article>
 <img src="<?php echo $row['chat-img']; ?>">
 <span><?php echo $row['mensaje']; ?></span>
 </article>
 <p>Not yet...</p>
            
 <?php endwhile; ?>
