<?php
    /* Nella prima parte dichiaro le variabili e recupero i dati inviati dall'INDEX */
    $text = $_POST['text'];
    $censored = $_POST['censored'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- link -->
        <title>PHP</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- In action richiamo il file PHP e uso il metodo POST per inviare i dati al back-end -->
                    <h5>Testo Inserito:</h5>
                    <span><?php echo $text ?></span>
                <div>
                    <h5>Lunghezza del testo inserito:</h5>
                    <span><?php echo strlen($text) ?></span>
                </div>
                <div>
                    <h5>Il tuo paragrafo censurato:</h5>
                    <span><?php echo str_replace(.$censored, '***', $text); ?></span>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>