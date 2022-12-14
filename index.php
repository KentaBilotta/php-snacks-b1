<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- snack 1 -->
    <?php
        $partite = [
            // partita 1
            [
                $casa = [
                    "name" => "Olimpia Milano",
                    "points" => "55",
                ],
                $ospite = [
                    "name" => "Cantù",
                    "points" => "60",
                ],
            ],
            // partita 2
            [
                $casa = [
                    "name" => "Trieste",
                    "points" => "66",
                ],
                $ospite = [
                    "name" => "Brindisi",
                    "points" => "83",
                ],
            ],
            // partita 3
            [
                $casa = [
                    "name" => "Universo Treviso",
                    "points" => "77",
                ],
                $ospite = [
                    "name" => "Verona",
                    "points" => "79",
                ],
            ],
            // partita 4
            [
                $casa = [
                    "name" => "Virtus Bologna",
                    "points" => "77",
                ],
                $ospite = [
                    "name" => "Scaffati",
                    "points" => "84",
                ],
            ],
            // partita 5
            [
                $casa = [
                    "name" => "VL Pesaro",
                    "points" => "101",
                ],
                $ospite = [
                    "name" => "Varese",
                    "points" => "93",
                ],
            ],
        ];

        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];
        $mailcheck = "@"
    ?>
    <h1>## Snack 1</h1>
    <div class="container1">
        <?php 
            for ($i = 0; $i < sizeof($partite); $i++) {
                echo "Partita $i:  ".$partite[$i][0]["name"]." - ".$partite[$i][1]["name"]." | ".$partite[$i][0]["points"]." - ".$partite[$i][1]["points"]."<br>"; 
            }
        ?>
    </div>
    <h1>## Snack 2</h1>
    <div class="container2">
        <form action="" method="GET">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" placeholder="Nome">
            <label for="mail">Email</label>
            <input type="text" name="mail" id="mail" placeholder="Email">
            <label for="age">Età</label>
            <input type="text" name="age" id="age" placeholder="Età">
            <button>Conferma</button>
        </form>
        <h3>Dati inseriti:</h3>
        <p>Nome: <?= $name ?></p>
        <p>Email: <?= $mail ?></p>
        <p>Età: <?= $age ?></p>

        <?php
            if (strlen($name) > 3 && is_numeric($age) == true && strpos($mail, $mailcheck) == true && strpos($mail, ".")) {
                echo "<h1>ACCESS GARANTED</h1>";
            } else {
                echo "<h1>ACCESS DENIED</h1>";
            }
        ?>
    </div>

    
</body>
</html>