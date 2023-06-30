<?php
    /* Nella prima parte dichiaro le variabili e recupero i dati inviati dall'INDEX */
    $text = $_POST['text'];

    /* Prendo il valore inserito nella Textarea */
    $censored = $_POST['censored'];

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
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h5>Paragrafo inserito:</h5>
                        <span><?php echo $text ?></span>
                        <br>
                        <h5>Lunghezza caratteri inseriti:</h5>
                        <span><?php echo strlen($text) ?></span>
                        <br>
                        <h5>Paragrafo censurato:</h5>
                        <span><?php echo str_replace($censored, "***", $text) ?></span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>