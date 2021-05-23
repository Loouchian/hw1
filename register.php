<!DOCTYPE html>
<html>
<?php
require_once('php//database.php');
 ?>

    <head>
        <title>Registrazione</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>

        <form method="post" action="/php/register.php">
            <h1>Registrazione</h1>
            <input type="text" id="username" placeholder="Username" name="username" maxlength="50" required>
            <input type="password" id="password" placeholder="Password" name="password" required>

            <table>

            <?php
             $query = "SELECT * FROM corsi";

                    $check = $pdo->prepare($query);
                    $check->execute();

                    $c=$check->fetchAll(PDO::FETCH_ASSOC);

                    for ($i=0; $i < count($c); $i++)
                    {

                      ?>
                      <tr>
                        <td><input type="radio" id="c<?php echo $i;?>" name="corso" value="<?php echo $c[$i]["corsiId"];?>"></td>
                        <td><label for="c<?php echo $i;?>"><?php echo $c[$i]["nomeCorso"]." codice:".$c[$i]["corsiId"];?></label></td>
                      </tr>
                      <?php

                    }

            ?>
            </table>
            <br>

            <button type="submit" name="register">Registrati</button>
        </form>
    </body>
</html>
