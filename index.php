<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- link BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>PHP</title>
    </head>

    <body>
        <div class="container w-100">
            <div class="row w-75 mx-auto">
                <div class="col-12 p-3 m-2">
                    <h4>Inserisci qui sotto il tuo paragrafo:</h4>
                    <!-- In action richiamo il file PHP e uso il metodo POST per inviare i dati al back-end -->
                    <form class="mt-5 mx-auto" action="myphp.php" method="POST">
                        <h5 class="m-1">Inserisci qui la tua frase:</h5><br>
                        <input type="text" name="text" id="text"><br>
                        <h5 class="m-1">Inserisci di seguito la parola da censurare:</h5><br>
                        <textarea class="m-1" name="censored" id="censored" cols="30" rows="10"></textarea><br>
                        <input class="btn btn-primary ms-2" type="submit" value="Invia">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>