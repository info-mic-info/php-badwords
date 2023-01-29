<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel ="stylesheet" href="./css/style.css">
        <title>php-badwords-prima</title>
</head>
    <body>
        <div class="container-fluid bg-primary text-light d-flex justify-content-center p-2 mb-5">
            <h1>INSERISCI UN PARAGRAFO ED UNA PAROLA DA CENSURARE</h1>
        </div>

        <div class="container-fluid d-flex justify-content-center p-2 mb-5">
            <form action="./result.php" method="GET">
                <input class="p-1" type="text" name="paragraph" id="paragraph"
                placeholder="Paragrafo">
                <input class="p-1" type="text" name="censored" id="censored"
                placeholder="Parola da censurare">
                <button class="bg-primary text-light p-1" type="submit">Censura</button>
            </form>
            </div>
    </body>
</html>