<body>
	<h1>Unidad 0 Actividad 3 - PPS</h1>
        <h2>¡Hola Mundo!</h2>
	<ul>

	<?php 
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        foreach( $imgs as $img ) {
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg"){
                $name = substr($img,0,-5);
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-4);
            }
            echo "<a href='profile/$name.html'>";
            echo "<img src='img/$img' width='130'>";
            echo $name."</a>";
            echo "<div></div>";
        }
    ?>

</body>
