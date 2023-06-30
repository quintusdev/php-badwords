<?php
    /* Nella prima parte dichiaro le variabili e recupero i dati inviati dall'INDEX */
    $text = $_POST['text'];
    $censored = $_POST['censored'];

    /* Visualizzo il paragrafo inserito dall'utente */
    echo "Il paragrafo inserito è il seguente: ".$text"<br/>";

    /* Inserisco il valore della lunghezza del paragarfo */
    echo "Lunghezza Paragrafo scritto: ".strlen($text)."<br/>";

    /* Visualizzo il paragrafo ma censurato */
    echo str_replace(.$censored, '***', $text);

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
                    <h5>Testo Inserito:$.text </h5>
                </div>
            </div>
        </div>
    </body>
</html>