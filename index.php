<html>
	<head>
		<meta charset="UTF-8">
		<title>Gauchadas</title>
        <link rel="stylesheet" href="/css/index.css">
	</head>	
	<body>

        <?php 
            include("php/menu.php"); 
            session_start(); 

            if ($_SESSION['estado']== 'logeado'){
                ?><div id='publicar'><a href="php/gauchada/nueva.php?usid=<?php echo $varuser['id_usuario']; ?>" >Publicar</a></div><?php
            }

            $consulta = "SELECT * FROM gauchadas G INNER JOIN categorias C ON G.idcategoria=C.id_categoria INNER JOIN usuarios U ON G.idusuario=U.id_usuario INNER JOIN ciudades Ci ON G.idciudad=Ci.id_ciudad";
            $resultado = mysqli_query($conexion, $consulta);

            ?>
            <div id='listado'>
            <?php

            while ($lista = mysqli_fetch_array($resultado)) {
                ?>
                <div id='elemento'>
                <?php
                    ?><div id='eletitulo'>Titulo: <?php echo $lista['titulo']; ?></div><?php
                    ?><div id='elecategoria'>Categoria: <?php echo $lista['categoria']; ?></div><?php
                    ?><div id='eleemail'>De: <?php echo $lista['email']; ?></div><?php
                    ?><div id='eleciudad'>En: <?php echo $lista['ciudad']; ?></div><?php
                    ?><div id='eledescripcion'><?php echo $lista['descripcion']; ?></div><?php
                    ?><div id="eleimagen"><img height="120px" width="354px" src="data:<?php echo $lista['extension']; ?>;base64,<?php echo base64_encode($lista['foto']); ?>"/></div><?php
                    if ($_SESSION['estado']== 'logeado'){
                        ?><div id='eledetalle'><a href="php/gauchada/detalle.php?ga=<?php echo $lista['id_gauchada']; ?>" >Detalle</a></div><?php
                    }
                ?>
                </div>
                <?php     
            }

            ?>
            </div>
            <?php
                
        ?>
        
	</body>	
</html>	