<?php 
    session_start();
    if(!isset($_SESSION["acceduto"])){
        header("Location: login.php");
    }
?>

<?php 
    if(!isset($_GET["prod"])){
        header("Location: ./index.php?prod=");
    }
    
    $ord = $_GET["prod"];
    
    
    require_once("connection.php");

    $sql = "SELECT * FROM ordini WHERE prodotto LIKE '%$ord%'";
    try {
        $ris = mysqli_query($conn, $sql);
    } catch (Exception $e) {
        die("<center><h1>Errore Sql</h1><h3> query eseguita: SELECT * FROM ordini WHERE prodotto LIKE '%<font color='red'>$ord</font>%';</h3></center>");
    }
    
?>


<html>
    <head>
        <style>
            table, th, td, tr{
                border-collapse: collapse;
            }

            table, td, th{
                border: 1px solid black;
            }

            table{
                width: 80%;
            }
        </style>
    </head>

    <body>
        <center>
            <h1>Visualizza Ordini</h1>
            <h3><?php echo "query eseguita: SELECT * FROM ordini WHERE prodotto LIKE '%<font color='red'>$ord</font>%';";?></h3>

            <form action="./" method="get">
                <input type="text" name="prod" size="80">
                <input type="submit" value="cerca prodotto">
            </form>
            
            


            <table>
                <tr>
                    <th>id</th>
                    <th>intestatario</th>
                    <th>prodotto</th>
                    <th>quantita</th>
                </tr>


                <?php 
                    while($riga = mysqli_fetch_assoc($ris)){
                        echo "<tr>";
                        echo "<td>$riga[id]</td>";
                        echo "<td>$riga[intestatario]</td>";
                        echo "<td>$riga[prodotto]</td>";
                        echo "<td>$riga[quantita]</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </center>
    </body>
</html>