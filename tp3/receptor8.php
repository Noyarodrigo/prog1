<pre>
<?php
    if (session_start()) {
        $usuario = $_POST['user'];
        $pass = $_POST['passwords'];
        $_SESSION['log']=1;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['pass'] = $pass;
        header("location: http://localhost/programacion1/tp3/receptor8-2.php");
    }else{echo "error de sesion";}
?>
</pre>
