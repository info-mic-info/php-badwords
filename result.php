<?php
$paragraph = $_GET['paragraph'];
$censored = $_GET['censored'];
$censored_string = str_replace($censored,'***', $paragraph);
// echo $paragraph;
// echo strlen($paragraph);
// echo $censored_string;
// echo strlen($censored_string);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel ="stylesheet" href="./css/style.css">
    <title>php-badwords-dopo</title>
</head>
    <body>
    <div class="container-fluid bg-primary text-light d-flex justify-content-center p-2 mb-5">
        <h1>RISULTATO</h1>
        </div>
        <div class="container-fluid d-flex justify-content-center">
            <div>
                <h4>Paragrafo inserito:</h4>
                <p>
                    <?php echo $paragraph."<br> Il paragrafo è lungo: ".strlen($paragraph)." caratteri.";?>
                </p>
            
                <h4>Paragrafo censurato:</h4>
                <p>
                    <?php echo $censored_string."<br> Il paragrafo censurato è lungo: ".strlen($censored_string)." caratteri.";?>
                </p>
            </div>
        </div>
    </body>
</html>