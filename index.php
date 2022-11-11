<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Anmeldung</title>
    </head>
    <body>
        
        <?php
        if(isset($_POST["submit"])){
            require("functions.php");
            $stmt->bindParam(":user", $_POST["username"]);
            $stmt->bindParam(":pw", $_POST["password"]);
            $stmt->execute();
            session_start();
            header("Location: site.php");
        }
        ?>
        <div>
            <h1>Anmeldung</h1>
            <p>Vorname: <input type="text" name="username" placeholder="nachname.vorname" required></p>
            <p>Klasse: <input type="text" name="pw" placeholder="z.B.: 10/4" required></p><br>
            <button type="submit" name="submit">Einloggen</button>
        </div>
    </body>
</html>