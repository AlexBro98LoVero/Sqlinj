<?php 
    require_once("connection.php");
    
    if(isset($_GET["accedi"])){
        $user = $_GET["username"];
        $passwd = $_GET["passwd"];
        
        $sql = "SELECT * FROM users WHERE username='$user' AND passwd='$passwd'";

        try{
            $ris = mysqli_query($conn, $sql);
        } catch (Exception $e) {
            die("<center><h1>Errore Sql</h1><h3> query eseguita: SELECT * FROM ordini WHERE prodotto LIKE '%<font color='red'>$ord</font>%';</h3></center>");
        }
        echo "<center>";
        echo "SELECT * FROM users WHERE username='";
        echo "<font color='red'>$user</font>";
        echo "' AND passwd='";
        echo "<font color='red'>$passwd</font>";
        echo "';";
        echo "<br><br>";
        if (mysqli_num_rows($ris) != 0){
            session_start();
            $_SESSION["acceduto"] = "acceduto";
            echo "accesso riuscito";
            echo "<br><a href='index.php'>pagina di prova</a>";
            echo "</center>";
            die();
        }

        echo "credenziali non validi";
        echo "</center>";
    }
?>



<html>
    <head>

    </head>

    <body>
        <center>
            <form action="login.php" method="GET">
                <h1>Accedi</h1>

                username <input type="text" name="username" required>
                <br><br>
                password <input type="text" name="passwd" required>
                <br><br>
                <input type="submit" value="accedi" name="accedi">
            </form>
        </center>
    </body>
</html>