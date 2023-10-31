<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
          <h1>Exemplo de php</h1>
     <?php 
         date_default_timezone_set("America/Sao_Paulo");
         echo "hoje é dia ". date("d/m/y");
         echo "  a hora atual é" . date("G:i:s")
    ?>
</body>
</html>