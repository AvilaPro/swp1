<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desafio3_SWP</title>
</head>
<body>
<h4 style=color:green>Desafio 3 SWP</h4>
<br>
<br>
<a href="doc_api.html"><h5 style=color:blue>Documentacion</h5></a> 
    <?php
        include_once ('controllers/pasajeroController.php');
        
        switch (strtolower($_SERVER["REQUEST_METHOD"])) {
            case 'post':
                post();   
            break;

            case 'put':
                put();
            break;

            case 'delete':
                delete();
            break;
            
            default:
                get();
            break;
        }

    ?>



</body>
</html>