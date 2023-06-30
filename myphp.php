<?php
    /* Nella prima parte dichiaro le variabili e recupero i dati inviati dall'INDEX */
    $text = $_POST['text'];

    /* VISUALIZZA IL CONTENUTO CHE ABBIAMO INSERITO */
    echo $text."<br />";

    /* visualizzo la lunghezza del paragrafo precedente */
    echo strlen($text)."<br />";

    /* Prendo il valore inserito nella Textarea */
    $censored = $_POST['censored'];

    /* visualizzo la parola inserita nel censored la sostituisce */
    echo str_replace($censored, "***", $text);

?>
