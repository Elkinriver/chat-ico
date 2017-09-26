<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        
        <script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}

			req.open('GET', 'chat.php', true);
			req.send();
		}

		//linea que hace que se refreseque la pagina cada segundo
		setInterval(function(){ajax();}, 1000);
	   </script>
    </head>
    <body onload="ajax();">
        
        
          <!--CHAT ICONO-->
        <input type="checkbox" id="chat-overlay" class="check-chat">
        <section class="chat-icono">
        <label for="chat-overlay">
        <div class="chat-boton"></div>
        </label>
        </section>
        <!--FIN DE CHAT ICONO--->
        
        <section class="chat">
        <div class="datos-chat">
            <!--MENSAJE-->
            <div class="mensaje">
            <div id="chat"></div>
            </div>
            <!--FIN DE MENSAJE-->
            
        </div>
        <form method="post" action="index.php">
        <input type="text" name="mensaje" placeholder="Escribe tu mensaje aquí...">
        </form>
        
        <?php
			if (isset($_POST['enviar'])) {
				
				$mensaje = $_POST['mensaje'];
				$consulta = "INSERT INTO chat (mensaje) VALUES ('$mensaje')";
				$ejecutar = $conexion->query($consulta);

				if ($ejecutar) {
					echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";
				}
			}

		?>
        </section>
    
    </body>
</html>
