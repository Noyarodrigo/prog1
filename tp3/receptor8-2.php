<pre>
<?php
/**
 * Created by PhpStorm.
 * User: roi
 * Date: 09/10/18
 * Time: 16:30
 */
    if (session_start()){
        if ($_SESSION['usuario']!=""){
            echo "<h3>Bienvenido {$_SESSION['usuario']}</h3>";
            echo "<a href=\"e8pagina1.php\">Pagina 1</a><br>";
            echo "<a href=\"e8pagina2.php\">Pagina 2</a><br>";
            echo "<a href=\"e8pagina3.php\">Pagina 3</a><br>";
        }else{
            echo "Debe registrarse";
        }
    }else{
        echo "Problema al iniciar sesion";
    }
?>
</pre>