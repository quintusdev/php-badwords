<?php
    /* Nella prima parte dichiaro le variabili e recupero i dati inviati dall'INDEX */
    $badword = $_POST['badword'];
    $censored = $_POST['censored'];
    /* inserisco in una variabile la lunghezza del testo */
    $p_lenght = strlen($censored);
    /* censuro il paragrafo */
    $censored_p = str_replace($badword, '***', $censored);
    /* lunghezza del paragrafo censurato */
    $length_p_cens = strlen($censored_p);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- link BBOTSTRAP-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></link>

        <title>PHP</title>
    </head>

    <body>
        <div class="container w-100">
            <div class="row w-75 mx-auto">
                <div class="col-12">
                    <div>
                        <!-- In action richiamo il file PHP e uso il metodo POST per inviare i dati al back-end -->
                        <h5>Paragrafo:</h5>
                        <!-- Visualizzo il paragrafo -->
                        <p><?php echo $censored; ?></p>
                        <!-- Visualizzo la parola da censurare -->
                        <p><strong>Parola da censurare: </strong> <?php echo $badword; ?></p>
                        <!-- Visualizzo la lunghezza del paragrafo -->
                        <p><strong>Lunghezza del paragrafo: </strong> <?php echo $p_lenght; ?></p>
                    </div>
                    <hr>
                    <div>
                        <!-- In action richiamo il file PHP e uso il metodo POST per inviare i dati al back-end -->
                        <h5>Paragrafo censurato:</h5>
                        <!-- Visualizzo il paragrafo -->
                        <p><?php echo $censored_p; ?></p>
                        <!-- Visualizzo la lunghezza del paragrafo -->
                        <p><strong>Lunghezza del paragrafo: </strong> <?php echo $length_p_cens; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>