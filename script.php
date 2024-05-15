<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <form  method="post" action="script.php">
    <title>Processando Cor</title>
    <style>
        body {
            background-color: #1e1e1e;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }
        
        h1 {
            font-size: 36px;
        }
        
        p {
            font-size: 18px;
            line-height: 1.6;
        }
        
        .selected-color {
            margin-top: 50px;
        }
        
        .selected-color h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .selected-color p {
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cor Favorita Selecionada</h1>
        <div class="selected-color">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $favcolor = $_POST["favcolor"];
                switch ($favcolor) {
                    case "vermelho":
                        echo "<p>Sua cor favorita é vermelho!</p>";
                        break;
                    case "azul":
                        echo "<p>Sua cor favorita é azul!</p>";
                        break;
                    case "verde":
                        echo "<p>Sua cor favorita é verde!</p>";
                        break;
                    default:
                        echo "<p>Sua cor favorita não é vermelho, azul ou verde!</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
